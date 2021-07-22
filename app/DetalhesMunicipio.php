<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalhesMunicipio extends Model
{
    protected $fillable=['populacao_estimada','pib_percapita','idh','pop_plan_saude','pop_plan_saude_ano','pop_extr_pobreza','pop_extr_pobreza_ano'];

    public function municipio()
    {
        return $this->hasMany('App\Municipio');
    }

    public function ano()
    {
        return $this->belongsTo('App\Ano','ano_id','id');
    }
}
