<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class coupon extends Model
{
    protected $fillable = [     
        'code', 'type', 'amount', 'minimum_order_value',
        'expiration_date', 'description', 'image', 'usage_limit', 'status',
    ];
}
