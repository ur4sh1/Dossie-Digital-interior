<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $fillable=['nome','gentilico','sigla'];

    public function regional()
    {
        return $this->hasMany('App\Regional');
    }
}
