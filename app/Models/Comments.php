<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    public $fillable = ['commentID', 'ticketID','sentBy','description', 'createdOn'];

//    public function tickets() {
//        return $this->belongsTo('App\Models\Ticket');
//    }
}
