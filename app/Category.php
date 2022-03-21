<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table="category";

     public function getnews()
    {
        return $this->hasMany(Subcategory::class,'category_id');
    }

}
