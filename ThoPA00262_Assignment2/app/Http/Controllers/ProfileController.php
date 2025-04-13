<?php 
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Hash;
    
    class ProfileController extends Controller
    {
        public function show()
        {
            $user = Auth::user(); 
            return view('profile_show', compact('user')); 
        }
        
        public function edit()
        {
            $user = Auth::user();
            return view('profile_edit', compact('user'));
        }              
    
        public function update(Request $request)
        {
            $user = Auth::user();
        
            $request->validate([
                'name' => 'required|string|max:255',
            ]);
        
            $user->name = $request->name;
        
            // Nếu có đổi mật khẩu
            if ($request->filled('current_password')) {
                $request->validate([
                    'current_password' => 'required',
                    'new_password' => 'required|confirmed|min:6',
                ]);
        
                if (!Hash::check($request->current_password, $user->password)) {
                    return back()->with('error', 'Mật khẩu hiện tại không đúng.');
                }
        
                $user->password = Hash::make($request->new_password);
            }
        
            // Gỡ token "remember me"
            $user->setRememberToken(null);
            $user->save();
        
            // Đăng xuất người dùng
            Auth::logout();
        
            // Invalidate session
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        
            return redirect()->route('dangnhap')->with('success', 'Cập nhật thành công! Vui lòng đăng nhập lại.');
        }
        
    }
    
?>