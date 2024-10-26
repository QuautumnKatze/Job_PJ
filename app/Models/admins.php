<?php

namespace App\Models;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;


class admins extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        "user_name",
        "password",
        "full_name",
        "email",
        "avatar"
    ];
    protected $primaryKey = "admin_id";
    protected $table = "admins";
    public $timestamps = false;
}
