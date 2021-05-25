<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecursoFundoEstadual extends Model
{
    protected $fillable=['municipio_id','item_id','referencia','qtd','valor','parcela','ano_id','ativo'];

    public function municipio()
    {
        return $this->hasMany('App\Municipio');
    }
    public function ano()
    {
        return $this->belongsTo('App\Ano','ano_id','id');
    }

    public function itemRecursoFundoEstadual()
    {
        return $this->belongsTo('App\ItemRecursoFundoEstadual','item_id','id');
    }
    public function valor()
    {
        return number_format($this->valor,2,',','.');
    }
}
