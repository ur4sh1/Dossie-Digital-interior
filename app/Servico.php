<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    protected $fillable=['hospital_id','tipo_servicos_id','ativo'];

    public function hospital()
    {
        return $this->belongsTo('App\Hospital','hospital_id','id');
    }

    public function tiposervico()
    {
        return $this->belongsTo('App\TipoServico','tipo_servicos_id','id');
    }

}
