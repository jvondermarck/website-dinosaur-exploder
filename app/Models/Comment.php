<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'Comment';
    protected $primaryKey = 'id';
    public $timestamps = false;

    /**
     * Get the post that owns the comment.
     */
    public function commentArticle()
    {
        return $this->belongsTo(Article::class);
    }

     /**
     * Get the post that owns the comment.
     */
    public function commentUser()
    {
        return $this->belongsTo(UserEloquent::class);
    }
}
