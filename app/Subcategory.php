<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $table="subcategory";

    public function sub(){
        return $this->belongsTo(Category::class,'category_id');
    }
}
