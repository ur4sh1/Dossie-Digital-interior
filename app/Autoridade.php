<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autoridade extends Model
{
    protected $fillable=['nome','cargo_id','partido_id','municipio_id','liderCamara','email','tel','cel','hospital_id'];

    public function cargo()
    {
        return $this->belongsTo('App\Cargo','cargo_id','id');
    }

    public function partido()
    {
        return $this->belongsTo('App\Partido','partido_id','id');
    }

    public function municipio()
    {
        return $this->belongsTo('App\Municipio','municipio_id','id');
    }

    public function regional()
    {
        return $this->belongsTo('App\Regional');
    }

    public function hospital()
    {
        return $this->belongsTo('App\Hospital','hospital_id','id');
    }
}
