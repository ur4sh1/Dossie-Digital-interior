<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $fillable=['nome','rua','numero','bairro','cep','tel','email','municipio_id'];


    public function municipio()
    {
        return $this->belongsTo('App\Municipio','municipio_id','id');
    }

    public function leito()
    {
        return $this->hasOne('App\Leito','hospital_id','id');
    }

    public function veiculo()
    {
        return $this->hasOne('App\Veiculo','hospital_id','id');
    }

    public function exame()
    {
        return $this->hasOne('App\Exame','hospital_id','id');
    }

    public function salacirurgica()
    {
        return $this->hasOne('App\Salacirurgica','hospital_id','id');
    }

    public function equipamento()
    {
        return $this->hasMany('App\Equipamento','hospital_id');
    }

    public function servico()
    {
        return $this->hasMany('App\Servico','hospital_id');
    }

    public function rh()
    {
        return $this->hasMany('App\Rh','hospital_id');
    }

    public function folha()
    {
        return $this->hasMany('App\Folha','hospital_id');
    }

    public function tiposervico()
    {
        return $this->hasMany('App\TipoServico');
    }

    public function internacao()
    {
        return $this->hasOne('App\Internacao');
    }

}
