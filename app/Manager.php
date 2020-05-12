<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    public function company(){
        return $this->belongsTo('App\Company');
    }
}
