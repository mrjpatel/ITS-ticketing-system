<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $fillable = ['userID', 'fname','lname','email', 'createdOn'];
}
