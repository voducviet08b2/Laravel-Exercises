<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    public $timestamps = false;
    public function role()
    {
        return $this->belongsTo('App\Role');
    }
}
