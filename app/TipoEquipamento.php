<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoEquipamento extends Model
{
    protected $fillable=['nome'];

    public function equipamento()
    {
        return $this->hasMany('App\Equipamento','tipo_equipamentos_id','id');
    }
}
