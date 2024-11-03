<?php

namespace App\Http\Controllers\collab;

use App\Http\Controllers\Controller;
use App\Mail\RecruiterVerificationMail;
use App\Models\cities;
use App\Models\recruiters;
use Auth;
use Illuminate\Http\Request;
use Mail;
use Validator;

class CollabAuthController extends Controller
{

    public function showLoginForm()
    {
        return view('collab.login'); // Tạo một trang đăng nhập cho admin
    }

    public function login(Request $request)
    {
        // Xác thực dữ liệu đầu vào
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        // Tìm người dùng theo email 
        $user = recruiters::where('email', $request->email)->first();

        // Kiểm tra xem người dùng có tồn tại và mật khẩu có đúng không
        if ($user && $user->password == md5($request->password)) {
            // Đăng nhập thành công
            Auth::guard('collab')->login($user);

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
        Auth::guard('collab')->logout();
        return redirect('/collab/login')->with('success', 'Đã đăng xuất.');
    }

    public function showRegisterForm()
    {
        $citydata = cities::all();
        return view("collab.register", compact("citydata"));
    }

    public function checkEmail(Request $request)
    {
        $email = $request->input('email');
        $emailExists = recruiters::where('email', $email)->exists();

        return response()->json(['emailExists' => $emailExists]);
    }
    public function checkPhone(Request $request)
    {
        $phone = $request->input('phone');
        $phoneExists = recruiters::where('phone', $phone)->exists();

        return response()->json(['phoneExists' => $phoneExists]);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|unique:recruiters|min:7',
            'password' => 'required|min:3',
            'phone' => 'required|min:10',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $registerData = new recruiters();
        $registerData->email = $request->email;
        $registerData->password = md5($request->password);
        $registerData->full_name = $request->full_name;
        $registerData->phone = $request->phone;
        $registerData->company_name = $request->company_name;
        $registerData->city_id = $request->city_id;
        $registerData->location = $request->location;
        $registerData->avatar = "/storage/photos/shares/avatar/default-avatar.jpg";
        $registerData->status = 0;
        $registerData->expired_date = null;
        $registerData->save();
        //Gửi email xác minh
        Mail::to('manhphuc2003@gmail.com')->send(new RecruiterVerificationMail($registerData));

        return response()->json(['success' => 'Đăng ký thành công']);
    }
}
