<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Support\Facades\DB;

class TicketAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fetch(){

        $tickets = DB::table('tickets')
                        ->join('users', 'userID', '=', 'users.id')
                        ->select('tickets.id', 'users.name', 'tickets.os',
                            'tickets.issue', 'tickets.comment', 'tickets.status', 'tickets.createdOn')
                         ->orderBy('tickets.createdOn', 'desc')
                        ->get();

        return response()->json($tickets);
//        $tickets = Ticket::orderBy('created_at', 'DESC')->get();
//        return response()->json($tickets);
    }

}

