<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    //
    protected $guarded = [];


    public function teams()
    {

       return $this->belongsToMany('App\Models\Team');


    }


}
