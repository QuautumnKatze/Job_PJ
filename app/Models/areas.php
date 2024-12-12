<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class areas extends Model
{
    use HasFactory;

    protected $fillable = [
        "area_name",
        "description"
    ];
    protected $primaryKey = "area_id";
    protected $table = "areas";
    public $timestamps = false;

    public function recruiter()
    {
        return $this->hasMany(recruiters::class, 'area_id', 'area_id');
    }

}
