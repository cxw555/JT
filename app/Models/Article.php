<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable=['title','description','keywords','image','category_id','view_count'];

//    public function category()
//    {
//        return $this->belongsTo(Category::class);
//    }
}
