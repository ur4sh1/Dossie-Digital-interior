<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemRecursoEstadual extends Model
{
    protected $fillable=['descricao'];

    public function recursoEstadual()
    {
        return $this->hasMany('App\RecursoEstadual','item_id','id');
    }
}
