<?php

namespace App\Http\Controllers;

use App\Models\admins;
use Auth;
use Hash;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.login");
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
            Auth::login($user);

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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
