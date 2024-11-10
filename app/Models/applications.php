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
        "description",
        "status",
        "created_at",
    ];
    protected $primaryKey = "application_id";
    protected $table = "applications";
    public $timestamps = false;
}
