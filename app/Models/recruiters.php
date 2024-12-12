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
        "account_id",
        "phone",
        "comparny_name",
        "area_id",
        "city_id",
        "location",
        "introduction",
        "employee_count",
        "website",
        "status",
        "expire_date"
    ];
    protected $primaryKey = "recruiter_id";
    protected $table = "recruiters";
    public $timestamps = false;

    public function account()
    {
        return $this->belongsTo(accounts::class, 'account_id', 'account_id');
    }

    public function area()
    {
        return $this->belongsTo(accounts::class, 'area_id', 'area_id');
    }

    public function job()
    {
        return $this->hasMany(jobs::class, 'recruiter_id', 'recruiter_id');
    }
}
