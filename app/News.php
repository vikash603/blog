<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table="news";

    public function category(){
    return $this->hasMany(Category::class,'id');
}

public function subcategory(){
    return $this->hasMany(Subcategory::class, 'category_id');
}


}
