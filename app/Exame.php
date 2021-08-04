<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exame extends Model
{
    protected $fillable=['ano_id','hospital_id','mamografia','ultrassonografia','raio_x','eletrocardiograma'];

    public function ano()
    {
        return $this->belongsTo('App\Ano','ano_id');
    }

    public function hospital()
    {
        return $this->hasMany('App\Hospital','hospital_id','id');
    }

    public function municipio()
    {
        return $this->hasMany('App\Municipio');
    }
}
