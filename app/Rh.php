<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rh extends Model
{
    protected $fillable=['hospital_id','rh_categoria_id','susam_estatutario','susam_contrato','prefeitura'];

    public function hospital()
    {
        return $this->belongsTo('App\Hospital','hospital_id');
    }

    public function rhcategoria()
    {
        return $this->belongsTo('App\RhCategoria','rh_categoria_id','id');
    }

    public function getTotalAttribute()
    {
        return $this->attributes['susam_estatutario']+$this->attributes['susam_contrato']+$this->attributes['prefeitura'];
    }

}
