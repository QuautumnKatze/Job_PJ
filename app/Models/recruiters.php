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
        return $this->belongsTo(accounts::class);
    }
}
