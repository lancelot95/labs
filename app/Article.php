<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    
    public function tags()
    {
        return $this->belongsToMany('App\Tag','alessios');
    }
    public function categories()
    {
        return $this->belongsTo('App\Categorie','categorie_id','id');
    }
    public function users()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function commentaires()
    {
        return $this->hasMany('App\Commentaire','article_id');
    }
}
