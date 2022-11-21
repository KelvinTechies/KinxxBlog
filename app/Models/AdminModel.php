<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PostModel;
class AdminModel extends Model
{
    use HasFactory;


    protected $fillable=[
    'Full_name', 
    'UserName',
     'Email',
    'Password',
    'Phone',
    'Gender',
    'Image'
];

// public function AdminModel()
// {
//   return $this->belongsTo(AdminModel::class);
// }

    public function PostModels()
    {
        return $this->hasMany(PostModel::class);
    }

    public function CategoriesModels()
    {
       return $this->hasMany(categoriesModel::class);
    }

// protected $table = 'admin_models';
// protected $primaryKey = 'id';
}
