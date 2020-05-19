<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function anounce(){
        return $this->hasMany('App\Anounce');
    }

    public function manager(){
        return $this->hasMany('App\Manager');
    }
}
