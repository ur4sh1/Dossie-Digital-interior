<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoRecursoNacional extends Model
{
    protected $fillable=['nome'];

    public function recursoFundoNacional()
    {
        return $this->hasMany('App\RecursoFundoNacional','tipo_recurso_nacional_id','id');
    }
}
