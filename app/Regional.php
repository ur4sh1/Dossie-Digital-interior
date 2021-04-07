<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regional extends Model
{
    protected $fillable=['nome','sigla','estado_id'];

    public function municipio()
    {
        return $this->hasMany('App\Municipio');
    }
    public function autoridade()
    {
        return $this->hasMany('App\Autoridade');
    }
    public function estado()
    {
        return $this->belongsTo('App\Estado','estado_id');
    }
}
