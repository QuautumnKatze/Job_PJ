<?php

namespace App\Models;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;


class accounts extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        "user_name",
        "password",
        "email",
        "full_name",
        "avatar",
        "role" //"admin", "recruiter", "user"
    ];
    protected $primaryKey = "account_id";
    protected $table = "accounts";
    public $timestamps = false;

    public function admin()
    {
        return $this->hasOne(admins::class, 'account_id');
    }
    public function recruiter()
    {
        return $this->hasOne(recruiters::class, 'account_id');
    }
    public function user()
    {
        return $this->hasOne(users::class, 'account_id');
    }
}
