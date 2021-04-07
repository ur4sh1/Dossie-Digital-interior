<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    protected $fillable=['hospital_id','administrativo_existente','administrativo_funcional','ambulancia_terrestre_existente','ambulancia_terrestre_funcional','ambulancia_fluvial_existente','ambulancia_fluvial_funcional'];

    public function hospital()
    {
        return $this->belongsTo('App\hospital','hospital_id','id');
    }

    public function municipio()
    {
        return $this->hasMany('App\Municipio');
    }

    public function mvei()
    {
        $a =$this->administrativo_funcional;
        $b =$this->ambulancia_terrestre_funcional;
        $c =$this->ambulancia_fluvial_funcional;
        $res= $a+$b+$c;
        return $res;
    }

    public function getTotalAttribute()
    {
        return $this->attributes['administrativo_existente']+$this->attributes['ambulancia_terrestre_existente']+$this->attributes['ambulancia_fluvial_existente'];
    }

}
