<?php

namespace App\Console\Commands;

use App\Models\recruiters;
use Carbon\Carbon;
use Illuminate\Console\Command;

class UpdateRecruiterStatus extends Command
{

    protected $signature = 'recruiter:update-status';
    protected $description = 'Update recruiter status based on expired_date';

    public function handle()
    {
        $today = Carbon::today();

        // Cập nhật trạng thái cho người dùng hết hạn miễn phí
        recruiters::where('status', 1)
            ->where('expired_date', '<', $today)
            ->update(['status' => 2]);

        // Cập nhật trạng thái cho người dùng premium hết hạn
        recruiters::where('status', 3)
            ->where('expired_date', '<', $today)
            ->update(['status' => 2]);

        $this->info('Recruiter statuses updated successfully.');
    }
}
