<?php

namespace App\Http\Controllers\homepage;

use App\Http\Controllers\Controller;
use App\Models\accounts;
use App\Models\applications;
use App\Models\cv;
use App\Models\job_categories;
use App\Models\jobs;
use App\Models\posts;
use Auth;
use Hash;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $newjob = jobs::with(['recruiter.account'])->where('status', 1)->orderBy('job_id', 'desc')->take(8)->get();
        $viewjob = jobs::with(['recruiter.account'])->where('status', 1)->orderBy('views', 'desc')->take(8)->get();
        $jobcate = job_categories::all();
        return view('homepage.home', compact('newjob', 'viewjob', 'jobcate'));
    }

    function displayUserProfile($id)
    {
        $accountdata = accounts::with(['user.cv'])->where('account_id', $id)->first();
        $jobcate = job_categories::all();
        return view('homepage.user-profile', compact('accountdata', 'jobcate'));
    }

    function displayJobs()
    {
        $jobdata = jobs::where('status', 1)->get();
        $jobcate = job_categories::all();
        return view('homepage.job-list', compact('jobdata', 'jobcate'));
    }

    function displayJobDetail($id)
    {
        $jobdata = jobs::where('job_id', $id)->first();
        $views = $jobdata->views;
        $jobdata->views = $views + 1;
        $jobdata->save();
        $cvdata = null;
        if (Auth::check()) {
            if (Auth::user()->role == "user") {
                $cvdata = cv::where('user_id', Auth::user()->user->user_id)->get();
            }

        }
        $jobcate = job_categories::all();
        return view('homepage.job-detail', compact('jobdata', 'cvdata', 'jobcate'));
    }
    function applyJob(Request $request)
    {
        $createData = new applications();
        $createData->cv_id = $request->cv_id;
        $createData->job_id = $request->job_id;
        $createData->description = $request->description;
        $createData->status = 0;
        $createData->save();
        return response()->json([
            'success' => true,
            'msg' => 'Gửi ứng tuyển thành công'
        ]);
    }

    function showApplications()
    {
        $cvdata = cv::where('user_id', Auth::user()->user->user_id)->pluck('cv_id');
        $applications = applications::whereIn('cv_id', $cvdata)->get();
        $jobcate = job_categories::all();
        #dd($applications);
        return view('homepage.applications', compact('applications', 'jobcate'));
    }

    function showApplyForm($id)
    {
        $jobdata = jobs::where('job_id', $id)->first();
        $cvdata = cv::where('user_id', Auth::user()->user->user_id)->get();
        $jobcate = job_categories::all();
        return view('homepage.job-apply', compact('jobdata', 'cvdata', 'jobcate'));
    }

    function applySubmit(Request $request)
    {
        if ($request->submitType == 1) {
            $createData = new applications();
            $createData->cv_id = $request->cv_id;
            $createData->job_id = $request->job_id;
            $createData->name = $request->name;
            $createData->type = $request->type;
            $createData->academy = $request->academy;
            $createData->email = $request->email;
            $createData->phone = $request->phone;
            $createData->description = $request->description;
            $createData->status = 0;
            $createData->save();
            return response()->json([
                'success' => true,
                'msg' => 'Gửi ứng tuyển thành công'
            ]);
        } elseif ($request->submitType == 2) {
            $createCV = new cv();
            $createCV->cv_path = $request->cv_path;
            $createCV->cv_name = $request->cv_name;
            $createCV->user_id = Auth::user()->user->user_id;
            $createCV->save();
            $createApply = new applications();
            $createApply->cv_id = $createCV->cv_id;
            $createApply->job_id = $request->job_id;
            $createApply->name = $request->name;
            $createApply->type = $request->type;
            $createApply->academy = $request->academy;
            $createApply->email = $request->email;
            $createApply->phone = $request->phone;
            $createApply->description = $request->description;
            $createApply->status = 0;
            $createApply->save();
            return response()->json([
                'success' => true,
                'msg' => 'Gửi ứng tuyển thành công'
            ]);
        }
    }

    function editApplication($id)
    {

        $apply = applications::where('application_id', $id)->first();
        $jobdata = jobs::where('job_id', $apply->job_id)->first();
        $cvdata = cv::where('user_id', Auth::user()->user->user_id)->get();
        $jobcate = job_categories::all();
        return view('homepage.edit-apply', compact('apply', 'jobdata', 'cvdata', 'jobcate'));
    }

    function applyUpdate(Request $request, string $id)
    {
        if ($request->submitType == 1) {
            $updateData = applications::find($id);
            $updateData->cv_id = $request->cv_id;
            $updateData->job_id = $request->job_id;
            $updateData->name = $request->name;
            $updateData->type = $request->type;
            $updateData->academy = $request->academy;
            $updateData->email = $request->email;
            $updateData->phone = $request->phone;
            $updateData->description = $request->description;
            $updateData->status = 0;
            $updateData->save();
            return response()->json([
                'success' => true,
                'msg' => 'Sửa đơn ứng tuyển thành công'
            ]);
        } elseif ($request->submitType == 2) {
            $createCV = new cv();
            $createCV->cv_path = $request->cv_path;
            $createCV->cv_name = $request->cv_name;
            $createCV->user_id = Auth::user()->user->user_id;
            $createCV->save();
            $updateApply = applications::find($id);
            $updateApply->cv_id = $createCV->cv_id;
            $updateApply->job_id = $request->job_id;
            $updateApply->name = $request->name;
            $updateApply->type = $request->type;
            $updateApply->academy = $request->academy;
            $updateApply->email = $request->email;
            $updateApply->phone = $request->phone;
            $updateApply->description = $request->description;
            $updateApply->status = 0;
            $updateApply->save();
            return response()->json([
                'success' => true,
                'msg' => 'Sửa đơn ứng tuyển thành công'
            ]);
        }
    }

    function showCVList()
    {
        $cvdata = cv::where('user_id', Auth::user()->user->user_id)->get();
        $jobcate = job_categories::all();
        return view('homepage.cv-list', compact('cvdata', 'jobcate'));
    }

    function showCVDetail($id)
    {
        $cvdata = cv::find($id)->first();
        $jobcate = job_categories::all();
        return view('homepage.cv-detail', compact('cvdata', 'jobcate'));
    }
    function showBlogs()
    {
        $blogdata = posts::where('status', 1)->get();
        $jobcate = job_categories::all();
        return view('homepage.blog', compact('blogdata', 'jobcate'));
    }

    function blogDetail($id)
    {
        $blogdata = posts::where('post_id', $id)->first();
        $jobcate = job_categories::all();
        return view('homepage.blog-detail', compact('blogdata', 'jobcate'));
    }

    function account()
    {
        $id = Auth::user()->account_id;
        $accdata = accounts::find($id);
        $countApplications = applications::whereIn('cv_id', function ($query) {
            $id = Auth::user()->user->user_id;
            $query->select('cv_id')
                ->from('cv')
                ->where('user_id', $id);
        })->count();
        $approvedApplications = applications::where('status', 1)->whereIn('cv_id', function ($query) {
            $id = Auth::user()->user->user_id;
            $query->select('cv_id')
                ->from('cv')
                ->where('user_id', $id);
        })->count();
        $deniedApplications = applications::where('status', 2)->whereIn('cv_id', function ($query) {
            $id = Auth::user()->user->user_id;
            $query->select('cv_id')
                ->from('cv')
                ->where('user_id', $id);
        })->count();
        $cvdata = cv::where('user_id', Auth::user()->user->user_id)->pluck('cv_id');
        $applications = applications::whereIn('cv_id', $cvdata)->get();
        $jobcate = job_categories::all();
        return view('homepage.account', compact('accdata', 'countApplications', 'approvedApplications', 'deniedApplications', 'applications', 'jobcate'));
    }

    public function avatarChange(Request $request)
    {
        $validated = $request->validate([
            'image' => 'required|string',
        ]);

        $accountId = Auth::user()->account_id; // Get the account ID of the logged-in user
        $account = accounts::find($accountId);

        if ($account) {
            $account->avatar = $validated['image'];
            $account->save();
            return response()->json(['success' => true, 'message' => 'Cập nhật ảnh đại diện thành công']);
        }
        return response()->json(['success' => false, 'message' => 'Có lỗi xảy ra.']);
    }

    public function editProfile(Request $request)
    {
        $validated = $request->validate([
            'userName' => 'required|string|max:255',
            'fullName' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
        ]);

        $accountId = Auth::user()->account_id;
        $account = accounts::find($accountId);

        if ($account) {
            // Cập nhật thông tin
            $account->user_name = $validated['userName'];
            $account->full_name = $validated['fullName'];
            $account->email = $validated['email'];
            $account->user->phone = $validated['phone']; // Cập nhật quan hệ tới user
            $account->push(); // Lưu cả model `accounts` và quan hệ `user`

            return response()->json(['success' => true, 'message' => 'Thông tin đã được cập nhật thành công.']);
        }

        return response()->json(['success' => false, 'message' => 'Không tìm thấy tài khoản.']);
    }

    public function changePassword(Request $request)
    {
        $validated = $request->validate([
            'passOld' => 'required|string',
            'passNew' => 'required|string|min:8|confirmed',
            'reConfirm' => 'required|same:passNew',
        ]);

        $user = Auth::user();

        // Kiểm tra mật khẩu cũ
        if (!Hash::check($validated['passOld'], $user->password)) {
            return response()->json(['success' => false, 'message' => 'Mật khẩu cũ không chính xác.']);
        }

        // Cập nhật mật khẩu mới
        $user->password = Hash::make($validated['passNew']);
        $user->save();

        return response()->json(['success' => true, 'message' => 'Đổi mật khẩu thành công.']);
    }
    public function searchJobs(Request $request)
    {
        $searchName = $request->input('searchName');
        $searchLocation = $request->input('searchLocation');

        // Query để tìm kiếm công việc
        $jobs = jobs::with('recruiter.account') // Eager loading để tránh N+1 queries
            ->when($searchName, function ($query, $searchName) {
                return $query->where('job_name', 'LIKE', "%$searchName%");
            })
            ->when($searchLocation, function ($query, $searchLocation) {
                return $query->where('location', 'LIKE', "%$searchLocation%");
            })
            ->get();

        // Trả về JSON
        return response()->json($jobs);
    }

    public function jobByCategory($id)
    {
        // Lấy danh sách công việc theo danh mục
        $jobdata = jobs::with('recruiter.account') // Eager loading để tối ưu
            ->where('job_category_id', $id)
            ->where('status', 1)
            ->get();

        // Lấy thông tin danh mục hiện tại
        $jobcate = job_categories::all();

        // Trả về view với dữ liệu
        return view('homepage.category', compact('jobdata', 'jobcate'));
    }

}
