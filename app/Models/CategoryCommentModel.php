<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryCommentModel extends Model
{
    use HasFactory;

    protected  $fillable=['Comments', 'Cat_id', 'Image'];

    
    public function CategoriesModel()
    {
        return $this->belongsTo(CategoriesModel::class);
    }
}
