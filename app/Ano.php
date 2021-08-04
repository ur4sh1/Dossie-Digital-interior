<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ano extends Model
{
    protected $fillable=['anos'];

    public function exame()
    {
        return $this->hasMany('App\Exame','ano_id','id');
    }
    public function hospital()
    {
        return $this->hasMany('App\Hospital','ano_id','id');
    }
    public function coberturaVacinal()
    {
        return $this->hasMany('App\CoberturaVacinal','ano_id','id');
    }
    public function doencasAgravos()
    {
        return $this->hasMany('App\DoencasAgravos','ano_id','id');
    }
    public function programa()
    {
        return $this->hasMany('App\Programa','ano_id','id');
    }
    public function detalhes_municipio()
    {
        return $this->hasMany('App\DetalhesMunicipio','ano_id','id');
    }
    public function internacao()
    {
        return $this->hasMany('App\Internacao','ano_id','id');
    }
}
