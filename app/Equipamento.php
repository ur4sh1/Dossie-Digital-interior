<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
    protected $fillable=['hospital_id','tipo_equipamentos_id','existente','funcional'];

    public function hospital()
    {
        return $this->belongsTo('App\Hospital','hospital_id','id');
    }

  public function tipoequipamento()
    {
        return $this->belongsTo('App\TipoEquipamento','tipo_equipamentos_id','id');
    }

}
