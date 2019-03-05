<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class icon extends Model
{
    protected $table = "icons";
    public function services()
    {
        return $this->hasMany('App\Service','icon_id','id');
    }
    public function worlds()
    {
        return $this->hasMany('App\world','icon_id','id');
    }
}
