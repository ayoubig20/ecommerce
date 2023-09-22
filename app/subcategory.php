<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subcategory extends Model
{
    protected $fillable = [ 

        'name', 'parent_id', 'slug', 'description',
        'image', 'status',
    ];
}
