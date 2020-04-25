<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    //
    protected $fillable = [
        'placeID', 'placeName', 'description','Img','user_id','rep_id','ststus','fees','payType','Lat','lang'
    ];
}
