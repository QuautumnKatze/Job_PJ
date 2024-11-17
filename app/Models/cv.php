<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cv extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "cv_name",
        "cv_path",
        "cv_content"
    ];
    protected $primaryKey = "cv_id";
    protected $table = "cv";
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(users::class, 'user_id', 'user_id');
    }

    public function applications()
    {
        return $this->hasMany(applications::class, 'cv_id', 'cv_id');
    }
}
