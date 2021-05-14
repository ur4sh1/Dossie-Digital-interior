<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoencasAgravos extends Model
{
    protected $fillable=['municipio_id','doenca_id','ano_id','casos','fonte'];

    public function doencas()
    {
        return $this->belongsTo('App\Doencas','doenca_id','id');
    }

    public function municipio()
    {
        return $this->belongsTo('App\Municipio','municipio_id','id');
    }
    public function ano()
    {
        return $this->belongsTo('App\Ano','ano_id','id');
    }
}
