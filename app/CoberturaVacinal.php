<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoberturaVacinal extends Model
{
    protected $fillable=['municipio_id','ano_id','imunobiologica_id','porcentagem','fonte'];

    public function municipio()
    {
        return $this->belongsTo('App\Municipio','municipio_id','id');
    }

    public function imunobiologica()
    {
        return $this->belongsTo('App\Imunobiologica','imunobiologica_id','id');
    }
    public function ano()
    {
        return $this->belongsTo('App\Ano','ano_id','id');
    }


}
