<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecursoFundoNacional extends Model
{
    protected $fillable=['municipio_id','item_recurso_fundo_nacional_id','tipo_recurso_nacional_id','valor','ano_id','ativo'];

    public function municipio()
    {
        return $this->hasMany('App\Municipio','municipio_id','id');
    }
    public function ano()
    {
        return $this->belongsTo('App\Ano','ano_id','id');
    }
    public function itemRecursoFundoNacional()
    {
        return $this->belongsTo('App\ItemRecursoFundoNacional','item_recurso_fundo_nacional_id','id');
    }
    public function tipoRecursoNacional()
    {
        return $this->belongsTo('App\TipoRecursoNacional','tipo_recurso_nacional_id','id');
    }
    public function valor()
    {
        return number_format($this->valor,2,',','.');
    }

}
