<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order_offer extends Model
{
    //
    protected $fillable = [
        'order_id', 'user_id', 'ststus','fees'
    ];
}
