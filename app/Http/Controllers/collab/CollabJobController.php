<?php

namespace App\Http\Controllers\collab;

use App\Http\Controllers\Controller;
use App\Models\accounts;
use App\Models\cities;
use App\Models\job_categories;
use App\Models\jobs;
use App\Models\recruiters;
use Auth;
use Illuminate\Http\Request;

class CollabJobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobdata = jobs::where('recruiter_id', Auth::user()->recruiter->recruiter_id)->get();
        $accountdata = accounts::where('role', 'recruiter')->get();
        return view("collab.manage-job", compact("jobdata", "accountdata"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jobcategorydata = job_categories::all();
        $citydata = cities::all();
        return view("collab.create-job", compact("jobcategorydata", "citydata"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $createData = new jobs();
        $createData->job_name = $request->job_name;
        $createData->job_category_id = $request->job_category_id;
        $createData->salary = $request->salary;
        $createData->city_id = $request->city_id;
        $createData->requirement = $request->requirement;
        $createData->location = $request->location;
        $createData->status = 1;
        $createData->content = $request->content;
        $createData->recruiter_id = Auth::user()->recruiter->recruiter_id;
        $createData->save();
        return redirect()->route("collab");
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
        $jobdata = jobs::where('job_id', $id)->first();
        $jobcategorydata = job_categories::all();
        $citydata = cities::all();
        return view('collab.edit-job', compact('jobdata', 'jobcategorydata', 'citydata'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updateData = jobs::find($id);
        $updateData->job_name = $request->job_name;
        $updateData->job_category_id = $request->job_category_id;
        $updateData->salary = $request->salary;
        $updateData->city_id = $request->city_id;
        $updateData->requirement = $request->requirement;
        $updateData->location = $request->location;
        $updateData->status = 1;
        $updateData->content = $request->content;
        $updateData->recruiter_id = Auth::user()->recruiter->recruiter_id;
        $updateData->save();
        return redirect()->route('collab.manage-job');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $destroy = jobs::find($id);
        $destroy->delete();
        return response()->json(['success' => true, 'message' => 'Xóa công việc thành công']);
    }
}
