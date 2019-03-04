<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class commentaire extends Model
{
    protected $table = "commentaires";

    public function scopeValidate($query)
    {
        return $query->where('action', '!=', null);
    }

}
