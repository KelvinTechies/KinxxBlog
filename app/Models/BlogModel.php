<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class BlogModel extends Model
{
    use HasFactory;

    public function PostModels()
    {
        return $this ->hasMany(PostModel::class, 'id');
    }

    public function CategoriesModels()
    {
        return $this->hasMany(categoriesModel::class);
    }

    public function scopeFilter($query, array $filters)
    {
      if ($filters['tag'] ?? false) {
          $query->where('tags', 'like', '%'. request('tag'). '%');
      }

      if ($filters['search'] ?? false) {
         $query->where('title', 'like', '%'. request('q'). '%')->orWhere('description', 'like', '%'. request('search'). '%')->orWhere('tags', 'like', '%'. request('search'). '%');
      }
    }
}
