<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoServico extends Model
{
    protected $fillable=['nome'];

    public function servico()
    {
        return $this->hasMany('App\Servico','tipo_servicos_id','id');
    }
}
