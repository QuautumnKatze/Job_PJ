<?php

namespace App\Http\Controllers;

use App\Models\admins;
use Auth;
use Illuminate\Http\Request;
use Validator;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login'); // Tạo một trang đăng nhập cho admin
    }

    public function login(Request $request)
    {
        // Xác thực dữ liệu đầu vào
        $request->validate([
            'login' => 'required',
            'password' => 'required',
        ]);

        // Kiểm tra xem input có phải là email hay username
        $loginField = filter_var($request->login, FILTER_VALIDATE_EMAIL) ? 'email' : 'user_name';

        // Tìm người dùng theo email hoặc username
        $user = admins::where($loginField, $request->login)->first();

        // Kiểm tra xem người dùng có tồn tại và mật khẩu có đúng không
        if ($user && $user->password == md5($request->password)) {
            // Đăng nhập thành công
            Auth::guard('admin')->login($user);

            return response()->json([
                'success' => true,
                'msg' => 'Đăng nhập thành công'
            ]);

        }

        //Trả về lỗi nếu đăng nhập thất bại
        return response()->json([
            'errors' => [
                'login' => ['Email hoặc tên đăng nhập hoặc mật khẩu không đúng.'],
            ]
        ], 422);
    }


    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login')->with('success', 'Đã đăng xuất.');
    }

    public function showRegisterForm()
    {
        return view("admin.register");
    }

    public function checkEmail(Request $request)
    {
        $email = $request->input('email');
        $emailExists = admins::where('email', $email)->exists();

        return response()->json(['emailExists' => $emailExists]);
    }

    public function checkUsername(Request $request)
    {
        $user_name = $request->input('user_name');
        $userNameExists = admins::where('user_name', $user_name)->exists();

        return response()->json(['userNameExists' => $userNameExists]);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_name' => 'required|unique:admins|min:4',
            'password' => 'required|min:3',
            'full_name' => 'required|min:6',
            'email' => 'required|unique:admins|min:7',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $registerData = new admins();
        $registerData->user_name = $request->user_name;
        $registerData->password = md5($request->password);
        $registerData->full_name = $request->full_name;
        $registerData->email = $request->email;
        $registerData->save();
        return response()->json(['success' => 'Đăng ký thành công']);
    }



}
