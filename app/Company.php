<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function anounce(){
        return $this->belongsToMany('App\Anounce', 'company_anounce', 'company_id', 'compete', 'anounce_id');
    }

    public function manager(){
        return $this->hasmany('App\Manager');
    }
}
