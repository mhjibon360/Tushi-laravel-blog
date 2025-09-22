<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
       protected $guarded = ['id'];

       public function author()
       {
              return $this->belongsTo(User::class, 'author_id', 'id');
       }
       public function category()
       {
              return $this->belongsTo(Category::class, 'category_id', 'id');
       }
}
