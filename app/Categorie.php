<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table = 'categories';
    public function articles(){
        return $this->hasMany('App\Article');
    }
}
