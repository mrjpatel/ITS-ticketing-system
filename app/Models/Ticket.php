<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public $fillable = ['id', 'userID','os','issue','description','status', 'priority', 'escalationLevel','createdOn'];

    public function users() {
        return $this->belongsTo('App\Models\User');
    }

    public function comments() {
        return $this->hasMany('App\Models\Comments');
    }
}
