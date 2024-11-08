<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class recruiters extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        "email",
        "password",
        "full_name",
        "phone",
        "comparny_name",
        "city_id",
        "location",
        "introduction",
        "avatar",
        "employee_count",
        "website",
        "status",
        "expired_date"
    ];
    protected $primaryKey = "recruiter_id";
    protected $table = "recruiters";
    public $timestamps = false;
}
