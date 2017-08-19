<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public $fillable = ['ticketID', 'userID','os','issue','description','status','createdOn'];
}
