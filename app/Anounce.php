<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anounce extends Model
{
    public function company(){
        return $this->belongsToMany('App\Company');
    }
}
