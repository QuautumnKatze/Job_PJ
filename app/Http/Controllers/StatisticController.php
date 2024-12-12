<?php

namespace App\Http\Controllers;

use App\Models\areas;
use App\Models\recruiters;
use Illuminate\Http\Request;

class StatisticController extends Controller
{
    public function index()
    {
        // 1. Thống kê nhà tuyển dụng tiềm năng
        $topRecruiters = recruiters::withCount('job')
            ->orderBy('job_count', 'desc')
            ->take(10) // Lấy top 10 nhà tuyển dụng
            ->get();

        // 2. Tiêu chí 1: Số lượng nhà tuyển dụng theo lĩnh vực
        $areasByRecruiters = areas::withCount('recruiter')
            ->orderBy('recruiter_count', 'desc')
            ->get();

        // 3. Tiêu chí 2: Số lượng bài đăng tuyển dụng theo lĩnh vực
        $areasByJobs = areas::with(['recruiter.job'])
            ->get()
            ->map(function ($area) {
                $area->job_count = $area->recruiter->sum(fn($recruiter) => $recruiter->job->count());
                return $area;
            })->sortByDesc('job_count');

        return view('statistic.index', compact('topRecruiters', 'areasByRecruiters', 'areasByJobs'));
    }
}
