<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class World extends Model
{
    protected $table = 'worlds';
    public function icons()
    {
        return $this->belongsTo('App\Icon','icon_id','id');
    }
}
