<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function dangNhap()
    {
        return view('auth.dangnhap');
    }

    public function xuLyDangNhap(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email không được để trống.',
            'email.email' => 'Email không hợp lệ.',
            'password.required' => 'Mật khẩu không được để trống.',
        ]);
    
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
    
            if (!$user->is_active) {
                Auth::logout(); 
                return back()->withErrors(['email' => 'Tài khoản của bạn đã bị hủy kích hoạt.']);
            }
    
            return redirect()->intended(route('trangchu'))->with('success', 'Đăng nhập thành công!');
        }
    
        return back()->withErrors([
            'email' => 'Email hoặc mật khẩu không đúng!',
        ]);
    }
    
    public function dangKy()
    {
        return view('auth.dangky');
    }

    public function xuLyDangKy(Request $request)
    {
        $messages = [
            'name.required' => 'Họ và tên không được để trống.',
            'email.required' => 'Email không được để trống.',
            'email.email' => 'Vui lòng nhập đúng định dạng email.',
            'email.unique' => 'Email này đã được sử dụng. Vui lòng chọn email khác.',
            'password.required' => 'Mật khẩu không được để trống.',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự.',
            'password.confirmed' => 'Mật khẩu nhập lại không khớp.',
        ];
    
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ], $messages);
    
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    
        return redirect()->route('dangnhap')->with('success', 'Đăng ký thành công! Hãy đăng nhập.');
    }
    

    public function forgotPassword()
    {
        return view('auth.forgot_password');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $email = $request->email;
        $user = User::where('email', $email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'Email không tồn tại trong hệ thống!']);
        }

        $token = Str::random(60);
        $hashedToken = Hash::make($token);

        DB::table('password_resets')->updateOrInsert(
            ['email' => $email],
            ['token' => $hashedToken, 'created_at' => now()]
        );

        try {
            Mail::send('auth.reset_password', ['token' => $token], function ($message) use ($email) {
                $message->to($email)
                        ->from(config('mail.from.address'), config('mail.from.name'))
                        ->subject('Đặt lại mật khẩu');
            });

            return back()->with('status', 'Link đặt lại mật khẩu đã được gửi đến email của bạn!');
        } catch (\Exception $e) {
            return back()->withErrors(['email' => 'Lỗi: ' . $e->getMessage()]);
        }
    }

    public function showResetForm($token)
    {
        return view('auth.passwords.reset', ['token' => $token]);
    }

    public function resetPassword(Request $request)
    {
        $messages = [
            'email.required' => 'Email không được để trống.',
            'email.email' => 'Vui lòng nhập đúng định dạng email.',
            'password.required' => 'Mật khẩu không được để trống.',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự.',
            'password.confirmed' => 'Mật khẩu nhập lại không khớp.',
        ];

        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
        ],$messages);

        $record = DB::table('password_resets')->where('email', $request->email)->first();

        if (!$record || !Hash::check($request->token, $record->token)) {
            return back()->withErrors(['email' => 'Mã thông báo đặt lại mật khẩu này không hợp lệ!']);
        }

        $user = User::where('email', $request->email)->first();
        if ($user) {
            $user->password = Hash::make($request->password);
            $user->save();
        }

        DB::table('password_resets')->where('email', $request->email)->delete();

        return redirect()->route('dangnhap')->with('success', 'Mật khẩu đã được đặt lại thành công!');
    }
}
