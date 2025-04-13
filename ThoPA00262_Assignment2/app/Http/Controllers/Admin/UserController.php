<?php 
    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use App\Models\User;
    use Illuminate\Http\Request;
    
    class UserController extends Controller
    {
        public function index()
        {
            $users = User::all();
            return view('admin.users.index', compact('users'));
        }

        public function updateRole(Request $request, $id)
        {
            $request->validate([
                'role' => 'required|in:user,admin',
            ]);

            $user = User::findOrFail($id);
            $user->role = $request->role;
            $user->save();

            return redirect()->route('admin.users')->with('success', 'Cập nhật quyền thành công.');
        }

    
        public function toggleActive($id)
        {
            $user = User::findOrFail($id);
            $user->is_active = !$user->is_active;
            $user->save();

            return redirect()->route('admin.users')->with('success', 'Cập nhật trạng thái thành công.');
        }
    }
    
?>