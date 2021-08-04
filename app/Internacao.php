<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Internacao extends Model
{
    protected $fillable=['ano_id','hospital_id','media_dia','media_mes','fonte'];

    public function hospital()
    {
        return $this->hasMany('App\Hospital','hospital_id','id');
    }
    public function ano()
    {
        return $this->belongsTo('App\Ano','ano_id','id');
    }
    public function municipio()
    {
        return $this->hasMany('App\Municipio','municipio_id','id');
    }
}
