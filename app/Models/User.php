<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $fillable = ['id','name','email', 'password' , 'createdOn'];

    //relationships setup
    public function tickets()
    {
        return $this->hasMany('App\Models\Ticket');
    }
}
