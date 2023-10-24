<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_images extends Model
{
    protected $fillable = [
        'product_id', 'image',
    ];
    public function annonce()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
