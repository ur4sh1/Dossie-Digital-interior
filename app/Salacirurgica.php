<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salacirurgica extends Model
{
    protected $fillable=['hospital_id','sala_cirurgicas_existentes','sala_cirurgicas_funcionais'];

    public function hospital()
    {
        return $this->hasOne('App\Hospital','hospital_id','id');
    }

}
