<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folha extends Model
{
    protected $fillable=['hospital_id','profissional_id','salario_inicial','SUSAM','prefeitura','aponsetadoria','cedidos','servidores_ativos'];

    public function hospital()
    {
        return $this->belongsTo('App\Hospital','hospital_id');
    }
    public function profissional()
    {
        return $this->belongsTo('App\Profissional','profissional_id');
    }
    /*Funções*/
    public function salario()
    {
        return number_format($this->salario_inicial,2, ',', '.');
    }

    public function msalario()
    {
        $a = $this->salario_inicial;
        $b = $this->SUSAM;
        $res = $a*$b;
        return number_format($res,2, ',', '.');
    }

    public function getTotalAttribute()
    {
        return $this->attributes['SUSAM']*$this['salario_inicial'];
    }
}
