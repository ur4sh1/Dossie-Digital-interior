<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leito extends Model
{
    protected $fillable=['hospital_id','leito_clinico','leito_cirurgico','leito_obstetrico','leito_pediatrico','leito_outro','suporte_ventilatorio','uci_adulto','uci_pediatrico'];

    public function hospital()
    {
        return $this->hasMany('App\Hospital','hospital_id');
    }

    public function getTotalAttribute()
    {
        return $this->attributes['leito_clinico']+$this->attributes['leito_cirurgico']+$this->attributes['leito_obstetrico']+$this->attributes['leito_pediatrico']+$this->attributes['leito_outro']+$this->attributes['suporte_ventilatorio']+$this->attributes['uci_adulto']+$this->attributes['uci_pediatrico'];
    }

}
