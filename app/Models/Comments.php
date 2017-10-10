<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    public $fillable = ['id', 'ticketID','description', 'createdOn'];

    //relationships setup
    public function tickets() {
        return $this->belongsTo('App\Models\Ticket');
    }
}