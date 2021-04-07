<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Internacao extends Model
{
    protected $fillable=['hospital_id','media_dia','media_mes'];

    public function hospital()
    {
        return $this->hasMany('App\Hospital','hospital_id');
    }
}
