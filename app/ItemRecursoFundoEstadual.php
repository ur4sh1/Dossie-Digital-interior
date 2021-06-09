<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemRecursoFundoEstadual extends Model
{
    protected $fillable=['descricao'];

    public function recursoFundoEstadual()
    {
        return $this->hasMany('App\RecursoFundoEstadual','item_recurso_fundo_estadual_id','id');
    }
}
