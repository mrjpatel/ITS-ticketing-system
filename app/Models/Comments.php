<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    public $fillable = ['commentID', 'ticketID','sentBy','description', 'createdOn'];
}
