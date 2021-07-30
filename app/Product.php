<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'ps_product';

    // public function categoryProduct(){
    //     return $this->hasMany('App\CategoryProduct','id_category', 'id_product');
    // }

    public function categories(){
        return $this->belongsToMany('App\Category','ps_category_product', 'id_product', 'id_category');
    }
}
