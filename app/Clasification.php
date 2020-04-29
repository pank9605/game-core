<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clasification extends Model
{
    //
    public function news(){
        return $this->hasMany('App\News');
    }
}
