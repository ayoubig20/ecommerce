<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [

        'name_eng', 'Category_eng', 'Type_eng', 'Brand',
        'Size', 'Color_eng', 'Material_eng', 'Gender_eng', 'Price',
        'Quantity', 'Description_eng', 'sku_eng', 'name_ar', 'Category_ar', 'Type_ar',
        'Color_ar','Material_ar','Gender_ar','Description_ar','sku_ar','name_fr','Category_fr',
        'Type_fr','Color_fr','Material_fr','Gender_fr','Description_fr','sku_fr','Images','thumblnail_prod',

    ];
    public function images()
    {
        return $this->hasMany('App\Models\Product_images', 'product_id');
    }
}
