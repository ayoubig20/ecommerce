<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_images extends Model
{
    protected $fillable = [
        'product_id', 'image',
    ];
}
