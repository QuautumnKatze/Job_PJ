<?php

namespace App\Http\Controllers;

use App\Models\cities;
use App\Models\job_categories;
use App\Models\jobs;
use App\Models\recruiters;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $job = jobs::all();
        return view("admin.job.index", compact("job"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cate = job_categories::all();
        $city = cities::all();
        $recruiter = recruiters::all();
        return view("admin.job.create", compact('cate', 'city', 'recruiter'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $create = new jobs();
        $create->job_name = $request->job_name;
        $create->job_category_id = $request->job_category_id;
        $create->salary = $request->salary;
        $create->location = $request->location;
        $create->city_id = $request->city_id;
        $create->requirement = $request->requirement;
        $create->quantity = $request->quantity;
        $create->content = $request->content;
        $create->recruiter_id = $request->recruiter_id;
        $create->status = $request->status;
        $create->save();
        return redirect()->route('job.index');
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