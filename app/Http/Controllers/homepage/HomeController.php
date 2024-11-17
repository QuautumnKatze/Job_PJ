<?php

namespace App\Http\Controllers\homepage;

use App\Http\Controllers\Controller;
use App\Models\accounts;
use App\Models\applications;
use App\Models\cv;
use App\Models\jobs;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $newjob = jobs::with(['recruiter.account'])->where('status', 1)->orderBy('job_id', 'desc')->take(8)->get();
        return view('homepage.home', compact('newjob'));
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

    function displayUserProfile($id)
    {
        $accountdata = accounts::with(['user.cv'])->where('account_id', $id)->first();
        return view('homepage.user-profile', compact('accountdata'));
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
        return view('homepage.applications');
    }
}
