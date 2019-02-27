<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // protected $table = 'articles';
    public function tag()
    {
        return $this->belongsToMany('App\Tag','tag_id','id');
    }
}
