<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemRecursoFundoNacional extends Model
{
    protected $fillable=['descricao'];

    public function recursoFundoNacional()
    {
        return $this->hasMany('App\RecursoFundoNacional','item_recurso_fundo_nacional_id','id');
    }
}
