<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filial extends Model
{
    protected $table = 'subsidiaries';

    public function institution(){
        return $this->belongsTo('App\Institucion','institution');
    }
}
