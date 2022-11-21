<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoriesModel extends Model
{
    use HasFactory;
    protected $fillable=[
        'Author',
        'Title',
        'Description',
        'Content',
        'Categories',
        'Images',
        'cat_id'
    ];

    // protected $table='categories_models';
    // protected $primaryKey='id';
    public function AdminModel()
    {
     
       return $this->belongsTo(AdminModel::class);
    }


    public function BlogModels()
    {
        return $this->hasMany(BlogModel::class);
    }

    public function categoryCommentModel()
    {
        return $this->hasMany(categoryCommentModel::class);
    }

     public function scopeFilter($query, array $filters)
    {
      if ($filters['q'] ?? false) {
          $query->where('Categories', 'like', '%'. request('Categories'). '%');
      }

      if ($filters['q'] ?? false) {
         $query->where('Title', 'like', '%'. request('q'). '%')->orWhere('Categories', 'like', '%'. request('q'). '%')->orWhere('Description', 'like', '%'. request('q'). '%')->orWhere('Author', 'like', '%'. request('q'). '%');
      }
    }
}
