<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class applications extends Model
{
    use HasFactory;
    protected $fillable = [
        "cv_id",
        "job_id",
        "name",
        "type",
        "academy",
        "email",
        "phone",
        "description",
        "status",
        "created_at",
        "response",
    ];
    protected $primaryKey = "application_id";
    protected $table = "applications";
    public $timestamps = false;

    public function job()
    {
        return $this->belongsTo(jobs::class, 'job_id', 'job_id');
    }

    public function cv()
    {
        return $this->belongsTo(cv::class, 'cv_id', 'cv_id');
    }
}
