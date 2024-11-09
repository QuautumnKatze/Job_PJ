<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class users extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        "account_id",
        "gender",
        "phone",
        "status"
    ];
    protected $primaryKey = "user_id";
    protected $table = "users";
    public $timestamps = false;

    public function account()
    {
        return $this->belongsTo(accounts::class);
    }

}
