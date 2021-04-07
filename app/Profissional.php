<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profissional extends Model
{
    protected $fillable=['nome'];

    public function profissional()
    {
        return $this->belongsToMany('App\Profissional','profissional_id');
    }
}
