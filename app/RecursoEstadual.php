<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecursoEstadual extends Model
{
    protected $fillable=['municipio_id','item_id','valor','ano_id','ativo'];

    public function municipio()
    {
        return $this->belongsTo('App\Municipio','municipio_id','id');
    }
    public function ano()
    {
        return $this->belongsTo('App\Ano','ano_id','id');
    }

    public function itemRecursoEstadual()
    {
        return $this->belongsTo('App\ItemRecursoEstadual','item_id','id');
    }

    public function valor()
    {
        return number_format($this->valor,2,',','.');
    }

    public function getTotalAttribute()
    {
        return number_format($this->attributes['valor'],2,',','.');
    }
}
