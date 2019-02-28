<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    // protected $table = 'categories';
    public function Articles(){
        return $this->hasMany('App\Article','categorie_id');
    }
}
