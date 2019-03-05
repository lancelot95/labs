<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
     public function icons()
    {
        return $this->belongsTo('App\Icon','icon_id','id');
    }
}
