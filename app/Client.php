<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = "clients";

    public function testimonials(){
        return $this->hasMany('App\Testimonial');
    }

}
