<?php

namespace App\Http\Controllers\homepage;

use App\Http\Controllers\Controller;
use App\Models\accounts;
use App\Models\applications;
use App\Models\cv;
use App\Models\jobs;
use App\Models\posts;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $newjob = jobs::with(['recruiter.account'])->where('status', 1)->orderBy('job_id', 'desc')->take(8)->get();
        return view('homepage.home', compact('newjob'));
    }

    function displayUserProfile($id)
    {
        $accountdata = accounts::with(['user.cv'])->where('account_id', $id)->first();
        return view('homepage.user-profile', compact('accountdata'));
    }

    function displayJobs()
    {
        $jobdata = jobs::where('status', 1)->get();
        return view('homepage.job-list', compact('jobdata'));
    }

    function displayJobDetail($id)
    {
        $jobdata = jobs::where('job_id', $id)->first();
        $cvdata = null;
        if (Auth::check()) {
            if (Auth::user()->role == "user") {
                $cvdata = cv::where('user_id', Auth::user()->user->user_id)->get();
            }

        }
        return view('homepage.job-detail', compact('jobdata', 'cvdata'));
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
        #dd($applications);
        return view('homepage.applications', compact('applications'));
    }

    function showApplyForm($id)
    {
        $jobdata = jobs::where('job_id', $id)->first();
        $cvdata = cv::where('user_id', Auth::user()->user->user_id)->get();
        return view('homepage.job-apply', compact('jobdata', 'cvdata'));
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
        return view('homepage.edit-apply', compact('apply', 'jobdata', 'cvdata'));
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
        return view('homepage.cv-list', compact('cvdata'));
    }

    function showCVDetail($id)
    {
        $cvdata = cv::find($id)->first();
        return view('homepage.cv-detail', compact('cvdata'));
    }
    function showBlogs()
    {
        $blogdata = posts::where('status', 1)->get();
        return view('homepage.blog', compact('blogdata'));
    }

    function blogDetail($id)
    {
        $blogdata = posts::where('post_id', $id)->first();
        return view('homepage.blog-detail', compact('blogdata'));
    }
}
