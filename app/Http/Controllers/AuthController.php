<?php

namespace App\Http\Controllers;

use App\Jobs\SendRecruiterVerificationMail;
use App\Mail\RecruiterVerificationMail;
use App\Models\accounts;
use App\Models\admins;
use App\Models\cities;
use App\Models\recruiters;
use App\Models\users;
use Auth;
use Illuminate\Http\Request;
use Mail;
use Validator;

class AuthController extends Controller
{
    public function showAdminLoginForm()
    {
        return view('admin.login'); // Tạo một trang đăng nhập cho admin
    }
    public function showCollabLoginForm()
    {
        return view('collab.login'); // Tạo một trang đăng nhập cho admin
    }
    public function showHomeLoginForm()
    {
        return view('home.login'); // Tạo một trang đăng nhập cho admin
    }


    public function adminLogin(Request $request)
    {
        // Xác thực dữ liệu đầu vào
        $request->validate([
            'login' => 'required',
            'password' => 'required',
        ]);

        // Kiểm tra xem input có phải là email hay username
        $loginField = filter_var($request->login, FILTER_VALIDATE_EMAIL) ? 'email' : 'user_name';

        // Tìm người dùng theo email hoặc username
        $user = accounts::where($loginField, $request->login)->where('role', 'admin')->first();

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

    public function collabLogin(Request $request)
    {
        // Xác thực dữ liệu đầu vào
        $request->validate([
            'login' => 'required',
            'password' => 'required',
        ]);

        // Kiểm tra xem input có phải là email hay username
        $loginField = filter_var($request->login, FILTER_VALIDATE_EMAIL) ? 'email' : 'user_name';

        // Tìm người dùng theo email hoặc username
        $user = accounts::where($loginField, $request->login)->where('role', 'recruiter')->first();

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

    public function homeLogin(Request $request)
    {
        // Xác thực dữ liệu đầu vào
        $request->validate([
            'login' => 'required',
            'password' => 'required',
        ]);

        // Kiểm tra xem input có phải là email hay username
        $loginField = filter_var($request->login, FILTER_VALIDATE_EMAIL) ? 'email' : 'user_name';

        // Tìm người dùng theo email hoặc username
        $user = accounts::where($loginField, $request->login)->where('role', 'user')->first();

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

    public function adminLogout()
    {
        Auth::logout();
        return redirect('/admin/login')->with('success', 'Đã đăng xuất.');
    }

    public function collabLogout()
    {
        Auth::logout();
        return redirect('/collab/login')->with('success', 'Đã đăng xuất.');
    }

    public function homeLogout()
    {
        Auth::logout();
        return redirect('/home/login')->with('success', 'Đã đăng xuất.');
    }

    public function showAdminRegisterForm()
    {
        return view("admin.register");
    }

    public function showCollabRegisterForm()
    {
        $citydata = cities::all();
        return view("collab.register", compact("citydata"));
    }

    public function showHomeRegisterForm()
    {
        return view("home.register");
    }

    public function checkEmail(Request $request)
    {
        $email = $request->input('email');
        $emailExists = accounts::where('email', $email)->exists();

        return response()->json(['emailExists' => $emailExists]);
    }

    public function checkUsername(Request $request)
    {
        $user_name = $request->input('user_name');
        $userNameExists = accounts::where('user_name', $user_name)->exists();

        return response()->json(['userNameExists' => $userNameExists]);
    }

    public function checkCollabPhone(Request $request)
    {
        $phone = $request->input('phone');
        $phoneExists = recruiters::where('phone', $phone)->exists();

        return response()->json(['phoneExists' => $phoneExists]);
    }

    public function checkHomePhone(Request $request)
    {
        $phone = $request->input('phone');
        $phoneExists = users::where('phone', $phone)->exists();

        return response()->json(['phoneExists' => $phoneExists]);
    }

    public function adminRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_name' => 'required|unique:accounts|min:4',
            'password' => 'required|min:3',
            'full_name' => 'required|min:6',
            'email' => 'required|unique:accounts|min:7'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        // Lưu vào bảng accounts
        $accountData = new accounts();
        $accountData->user_name = $request->user_name;
        $accountData->password = md5($request->password);
        $accountData->full_name = $request->full_name;
        $accountData->email = $request->email;
        $accountData->avatar = "/storage/photos/shares/avatar/default-avatar.jpg";
        $accountData->role = "admin";
        $accountData->save();
        // Lấy account_id của account vừa được tạo
        $accountId = $accountData->account_id;
        // Lưu vào bảng admins
        $adminData = new admins();
        $adminData->account_id = $accountId;
        $adminData->save();
        return response()->json(['success' => 'Đăng ký thành công']);
    }

    public function collabRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_name' => 'required|unique:accounts|min:4',
            'password' => 'required|min:3',
            'full_name' => 'required|min:6',
            'email' => 'required|unique:accounts|min:7',
            'phone' => 'required|unique:recruiters|min:10',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        // Lưu vào bảng accounts
        $accountData = new accounts();
        $accountData->user_name = $request->user_name;
        $accountData->password = md5($request->password);
        $accountData->full_name = $request->full_name;
        $accountData->email = $request->email;
        $accountData->avatar = "/storage/photos/shares/avatar/default-avatar.jpg";
        $accountData->role = "recruiter";
        $accountData->save();
        // Lấy account_id của account vừa được tạo
        $accountId = $accountData->account_id;
        //Lưu vào bảng recruiters
        $recruiterData = new recruiters();
        $recruiterData->account_id = $accountId;
        $recruiterData->phone = $request->phone;
        $recruiterData->company_name = $request->company_name;
        $recruiterData->city_id = $request->city_id;
        $recruiterData->location = $request->location;
        $recruiterData->status = 0;
        $recruiterData->expire_date = now();
        $recruiterData->save();

        $account = accounts::where('account_id', $accountId)->first();
        SendRecruiterVerificationMail::dispatch($account);
        return response()->json(['success' => 'Đăng ký thành công']);
    }



}
