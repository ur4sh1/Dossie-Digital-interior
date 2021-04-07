<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
protected $fillable=['sigla','descricao'];

    public function autoridade()
    {
        return $this->hasMany(Autoridade::class);
    }
}
