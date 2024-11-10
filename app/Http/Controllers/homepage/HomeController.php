<?php

namespace App\Http\Controllers\homepage;

use App\Http\Controllers\Controller;
use App\Models\jobs;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        return view('homepage.home');
    }

    function displayJobs()
    {
        $jobdata = jobs::where('status', 1);
        return view('homepage.job-list', compact('jobdata'));
    }

    function displayJobDetail($id)
    {
        $jobdata = jobs::where('job_id', $id)->first();
        return view('homepage.job-detail', compact('jobdata'));
    }
}
