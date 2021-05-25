<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecursoFundoNacional extends Model
{
    protected $fillable=['municipio_id','item_id','tipo_recurso_nacional_id','valor','ano_id','ativo'];

    public function municipio()
    {
        return $this->hasMany('App\Municipio');
    }
    public function ano()
    {
        return $this->belongsTo('App\Ano','ano_id','id');
    }
    public function recursoFundoNacional()
    {
        return $this->hasMany('App\RecursoFundoNacional','tipo_recurso_nacional_id','id');
    }
    public function itemRecursoFundoNacional()
    {
        return $this->hasMany('App\ItemRecursoFundoNacional','item_id','id');
    }
    public function tipoRecursoNacional()
    {
        return $this->hasMany('App\TipoRecursoNacional','tipo_recurso_nacional_id','id');
    }
    public function valor()
    {
        return number_format($this->valor,2,',','.');
    }
}
