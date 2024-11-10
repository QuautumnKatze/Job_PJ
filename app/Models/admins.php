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
        "account_id"
    ];
    protected $primaryKey = "admin_id";
    protected $table = "admins";
    public $timestamps = false;

    public function account()
    {
        return $this->belongsTo(accounts::class, 'account_id', 'account_id');
    }
}
