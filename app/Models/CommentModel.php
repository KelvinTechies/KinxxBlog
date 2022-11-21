<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentModel extends Model
{
    use HasFactory;

    protected  $fillable=['Comment', 'Image', 'Comment_id'];

    public function PostModels()
    {
        return $this->belongsTo(PostModel::class, 'Admin_id');
    }
}
