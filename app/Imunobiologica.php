<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imunobiologica extends Model
{
    protected $fillable=['nome'];

    public function coberturaVacinal()
    {
        return $this->belongsTo('App\CoberturaVacinal','imunobiologica_id','id');
    }

    public function ano()
    {
        return $this->belongsTo('App\Ano','ano_id','id');
    }
}
