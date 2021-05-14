<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doencas extends Model
{
    protected $fillable=['nome'];

    public function doencasAgravos()
    {
        return $this->hasMany('App\doencasAgravos','doenca_id');
    }
    public function ano()
    {
        return $this->belongsTo('App\Ano','ano_id','id');
    }
}
