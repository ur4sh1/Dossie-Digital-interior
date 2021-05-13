<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $fillable=['nome','regional_id','dados_id','detalhes_id'];

    public function autoridade()
    {
        return $this->hasMany('App\Autoridade');
    }

    public function regional()
    {
        return $this->belongsTo('App\Regional','regional_id','id');
    }

    public function dados()
    {
        return $this->belongsTo('App\Dados_municipios','dados_id','id');
    }

    public function hospital()
    {
        return $this->hasMany('App\Hospital');
    }

    public function detalhe()
    {
        return $this->belongsTo('App\Detalhes_municipio','detalhes_id');
    }

    public function programas()
    {
        return $this->hasMany('App\Programa','municipio_id');
    }

    public function coberturaVacinal()
    {
        return $this->hasMany('App\CoberturaVacinal','municipio_id');
    }
}
