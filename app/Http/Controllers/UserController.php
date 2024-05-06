<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(5);
        return view('roleadmin.user', compact('users'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request)
    {
        $request->validate([
            'ten' => 'required|max:50',
            'email' => 'required|email|unique:user,email', // Đảm bảo rằng email là duy nhất trong bảng users
            'password' => 'required|min:8', // Đặt yêu cầu độ dài tối thiểu là 6 ký tự
        ]);

        // Tạo người dùng mới
        $user = new User;
        $user->name = $request->ten;
        $user->email = $request->email;
        $user->password = Hash::make($request->password); // Mã hóa mật khẩu trước khi lưu
        $user->plain_password = $request->password; // Lưu mật khẩu dạng plain text
        $user->role = 'user'; // Có thể cho phép đặt giá trị này thông qua form nếu muốn
        $user->save();

        return redirect()->route('roleadmin.user.index')->with('success', 'Người dùng mới đã được thêm thành công.');
    }

    public function update(Request $request, $user_id)
    {
        $user = User::find($user_id);

        // Validate the input data
        $validatedData = $request->validate([
            'ten' => 'required|max:50',
            'email' => 'required|email|unique:user,email,' . $user_id . ',user_id',
            'password' => 'required|min:8',
            'role' => 'required|in:admin,user', // Chỉ chấp nhận giá trị admin hoặc user
        ]);

        // Update the user data
        $user->name = $validatedData['ten'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->plain_password = $validatedData['password']; // Lưu mật khẩu dạng plain text
        $user->role = $validatedData['role']; // Cập nhật quyền
        $user->save();

        return redirect()->route('roleadmin.user.index')->with('success', 'Tài khoản đã được cập nhật thành công!');
    }

    public function delete($id)
    {
        User::destroy($id);

        return redirect()->route('roleadmin.user.index')->with('success', 'Tài khoản đã được xóa thành công.');
    }
}
