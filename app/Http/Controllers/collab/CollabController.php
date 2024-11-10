<?php

namespace App\Http\Controllers\collab;

use App\Http\Controllers\Controller;
use App\Models\accounts;
use App\Models\applications;
use App\Models\cities;
use App\Models\job_categories;
use App\Models\jobs;
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
        $applicationdata = applications::where('job_id', $id)->get();
        $jobdata = jobs::where('job_id', $id)->first();
        $accountdata = accounts::where('role', 'user')->get();
        return view('collab.job-application', compact('applicationdata', 'jobdata', 'accountdata'));
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
