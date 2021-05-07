<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $fillable=['municipio_id','descricao',
        'sigla','teto','cred','implant','repasse','ano_id'];

    public function municipio()
    {
        return $this->belongsTo('App\Municipio','municipio_id','id');
    }

    public function repasseformat(){
        $c = $this->repasse;
        return number_format($c,2,',','.');
    }
}
