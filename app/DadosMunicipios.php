<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DadosMunicipios extends Model
{
    protected $fillable=['area_territorial','densidade_demografica','linha_reta','linha_fluvial','latitude_decimal',
        'longitude_decimal','latitude_sexagesimais','longitude_sexagesimais'];

    public function municipio()
    {
        return $this->hasMany('App\Municipio','dados_id','id');
   }
}
