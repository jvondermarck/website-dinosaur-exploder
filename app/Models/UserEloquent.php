<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEloquent extends Model
{
    use HasFactory;

    protected $table = 'UserEloquent';
    protected $primaryKey = 'user_id';
    public $timestamps = false;

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
