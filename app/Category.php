<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'ps_category';

    // public function categoryProduct(){
    //     return $this->hasMany('App\CategoryProduct', 'id_product','id_category');
    // }

    public function products(){
        return $this->belongsToMany('App\Product','ps_category_product', 'id_category', 'id_product');
    }
}
