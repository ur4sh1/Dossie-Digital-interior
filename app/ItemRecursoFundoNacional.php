<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemRecursoFundoNacional extends Model
{
    protected $fillable=['descricao'];

    public function recursoFundoNacional()
    {
        return $this->hasMany('App\RecursoFundoNacional','tipo_recurso_nacional_id','id');
    }
}
