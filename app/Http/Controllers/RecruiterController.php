<?php

namespace App\Http\Controllers;

use App\Models\recruiters;
use Illuminate\Http\Request;

class RecruiterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recruiterdata = recruiters::all();
        return view('admin.recruiter.index', compact('recruiterdata'));
    }

    public function showPending()
    {
        $recruiterdata = recruiters::where('status', 0)->where('is_verified', 0);
        return view('admin.recruiter.index', compact('recruiterdata'));
    }

    public function showCanceled()
    {
        $recruiterdata = recruiters::where('status', 2)->where('is_verified', 0);
        return view('admin.recruiter.index', data: compact('recruiterdata'));
    }

    public function showBan()
    {
        $recruiterdata = recruiters::where('status', 0)->where('is_verified', 1);
        return view('admin.recruiter.index', compact('recruiterdata'));
    }

    public function verify($id)
    {
        // Tìm tài khoản theo ID
        $account = recruiters::find($id); // Hoặc model bạn đang sử dụng
        if ($account) {
            // Cập nhật trạng thái xác minh
            $account->status = 1;
            $account->expired_date = now()->addDays(2);
            $account->save();

            return response()->json(['success' => true, 'message' => 'Phê duyệt xác minh thành công']);
        }

        return response()->json(['error' => true, 'message' => 'Tài khoản không tồn tại.'], 404);
    }

    public function upgrade($id)
    {
        // Tìm tài khoản theo ID
        $account = recruiters::find($id); // Hoặc model bạn đang sử dụng
        if ($account) {
            // Cập nhật trạng thái xác minh
            $account->status = 3;
            $account->expired_date = now()->addDays(30);
            $account->save();

            return response()->json(['success' => true, 'message' => 'Nâng cấp lên Premium thành công']);
        }

        return response()->json(['error' => true, 'message' => 'Tài khoản không tồn tại.'], 404);
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
