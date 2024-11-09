<?php

namespace App\Http\Controllers;

use App\Models\accounts;
use App\Models\recruiters;
use Illuminate\Http\Request;

class RecruiterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recruiterdata = accounts::where('role', 'recruiter')->get();
        return view('admin.recruiter.index', compact('recruiterdata'));
    }

    public function showPending()
    {
        //
    }

    public function showCanceled()
    {
        //
    }

    public function showBan()
    {
        //
    }

    public function verify($id)
    {
        // Tìm tài khoản theo ID
        $account = accounts::find($id); // Hoặc model bạn đang sử dụng
        if ($account) {
            if ($account->role !== 'recruiter') {
                return response()->json(['message' => 'Invalid account type for upgrade.'], 400);
            }
            // Cập nhật trạng thái xác minh
            $account->recruiter->status = 1;
            $account->recruiter->expire_date = now()->addDays(2);
            $account->recruiter->save();

            return response()->json(['success' => true, 'message' => 'Phê duyệt xác minh thành công']);
        }

        return response()->json(['error' => true, 'message' => 'Tài khoản không tồn tại.'], 404);
    }

    public function upgrade($id)
    {
        // Tìm tài khoản theo ID
        $account = accounts::find($id); // Hoặc model bạn đang sử dụng
        if ($account) {
            if ($account->role !== 'recruiter') {
                return response()->json(['message' => 'Invalid account type for upgrade.'], 400);
            }
            // Cập nhật trạng thái xác minh
            $account->recruiter->status = 3;
            $account->recruiter->expire_date = now()->addDays(30);
            $account->recruiter->save();

            return response()->json(['success' => true, 'message' => 'Nâng cấp Premium thành công']);
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
