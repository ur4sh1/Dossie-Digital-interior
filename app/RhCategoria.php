<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RhCategoria extends Model
{
    protected $fillable=['nome'];

    public function rh()
    {
        return $this->hasMany('App\Rh','rh_categoria_id','id');
    }

    public function hospital()
    {
        return $this->hasMany('App\Hospital');
    }
}
