<?php

namespace App\Http\Controllers\collab;

use App\Http\Controllers\Controller;
use App\Models\accounts;
use App\Models\applications;
use App\Models\cities;
use App\Models\cv;
use App\Models\job_categories;
use App\Models\jobs;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CollabController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('collab.home');
    }

    public function showExpired()
    {
        return view('collab.expired');
    }

    public function showUnverified()
    {
        return view('collab.unverified');
    }

    public function showJobApplications($id)
    {
        $applicationdata = applications::with(['cv.user.account'])->where('job_id', $id)->get();
        // dd($applicationdata);
        $jobdata = jobs::where('job_id', $id)->first();
        // dd($accountdata);
        $recruiterdata = accounts::where('role', 'recruiter')->get();
        return view('collab.job-application', compact('applicationdata', 'jobdata', 'recruiterdata'));
    }

    public function viewApplication($id)
    {
        $applicationdata = applications::with(['cv.user.account'])->where('application_id', $id)->first();
        // Thời gian hiện tại
        $now = Carbon::now();
        $created_at = Carbon::parse($applicationdata->created_at);

        // Tính toán thời gian trôi qua
        if ($created_at->diffInDays($now) > 0) {
            $timeAgo = $created_at->diffInDays($now) . ' ngày trước';
        } elseif ($created_at->diffInHours($now) > 0) {
            $timeAgo = $created_at->diffInHours($now) . ' giờ trước';
        } elseif ($created_at->diffInMinutes($now) > 0) {
            $timeAgo = $created_at->diffInMinutes($now) . ' phút trước';
        } else {
            $timeAgo = '0 phút';
        }
        return view('collab.view-application', compact('applicationdata', 'timeAgo'));
    }

    public function approveApplication(Request $request)
    {
        $application = applications::find($request->application_id);
        if ($application) {
            $application->status = 1; // Cập nhật status thành 1 (Chấp nhận)
            $application->save();
            return response()->json(['success' => 'Đã phê duyệt đơn ứng tuyển.']);
        }

        return response()->json(['error' => 'Không tìm thấy đơn ứng tuyển.'], 404);
    }

    public function rejectApplication(Request $request)
    {
        $application = applications::find($request->application_id);

        if ($application) {
            $application->status = 2; // Cập nhật status thành 2 (Từ chối)
            $application->save();
            return response()->json(['success' => 'Đã từ chối đơn ứng tuyển.']);
        }

        return response()->json(['error' => 'Không tìm thấy đơn ứng tuyển.'], 404);
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
