<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    // protected $table = 'tags';
    public function alessio(){
        return $this->belongsToMany('App\Alessio','alessio_id','id');
    }
}
