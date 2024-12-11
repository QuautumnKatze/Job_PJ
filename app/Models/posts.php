<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "post_category_id",
        "image",
        "shorten",
        "admin_id",
        "created_at",
        "updated_at",
        "content",
        "status",
    ];
    protected $primaryKey = "post_id";
    protected $table = "posts";
    public $timestamps = false;
    public function admin()
    {
        return $this->belongsTo(admins::class, 'admin_id', 'admin_id');
    }
}
