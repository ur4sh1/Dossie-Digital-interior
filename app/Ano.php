<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ano extends Model
{
    protected $fillable=['anos'];

    public function exame()
    {
        return $this->hasMany('App\Exame');
    }

    public function hospital()
    {
        return $this->hasMany('App\Hospital');
    }
}
