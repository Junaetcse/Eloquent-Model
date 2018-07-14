<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dogs extends Model
{
    //
    protected $fillable = ['name','age'];



    function getIdNameAttribute(){
        return $this->attributes['id'];
    }
}
