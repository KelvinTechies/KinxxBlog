<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AdminModel;
use Illuminate\Database\Eloquent\Relations\HasMany;


class PostModel extends Model
{
    use HasFactory;

//     protected $table = 'post_models';
// protected $primaryKey = 'Admin_id';

    public function AdminModel()
    {
      return $this->belongsTo(AdminModel::class);
    }


    public function BlogModel()
    {
       return $this->HasMany(PostModel::class);
    }


    public function CommentModel(Type $var = null)
    {
        return $this->hasMany(CommentModel::class, 'Comment_id');
    }
    protected $fillable=['Admin_id', 'Author', 'Title', 'Content', 'Images', 'Description'];

    public function scopeFilter($query, array $filters)
    {
      if ($filters['q'] ?? false) {
          $query->where('Title', 'like', '%'. request('q'). '%');
      }

      if ($filters['q'] ?? false) {
         $query->where('Title', 'like', '%'. request('q'). '%')->orWhere('Description', 'like', '%'. request('q'). '%')->orWhere('Author', 'like', '%'. request('q'). '%')->orWhere('Content', 'like', '%'. request('q'). '%');
      }
    }
}
