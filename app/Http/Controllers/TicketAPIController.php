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
     * Display a listing of the tickets.
    */
    public function fetch(){
        //pulling only required value from database
        $tickets = DB::table('tickets')
                        ->join('users', 'userID', '=', 'users.id')
                        ->select('tickets.id', 'users.name', 'tickets.os',
                            'tickets.issue', 'tickets.description', 'tickets.status', 'tickets.priority',
                            'tickets.escalationLevel', 'tickets.createdOn')
                         ->orderBy('tickets.createdOn', 'desc')
                        ->get();
        //sending values to API in JSON
        return response()->json($tickets);
    }

    public function index() {
        //pulling only required value from database
        $tickets = DB::table('tickets')
            ->join('users', 'userID', '=', 'users.id')
            ->select('tickets.id', 'users.name', 'tickets.os',
                'tickets.issue', 'tickets.comment', 'tickets.status', 'tickets.createdOn')
            ->orderBy('tickets.createdOn', 'desc')
            ->get();
        //sending values to API in JSON
        return response()->json($tickets);
    }


//    Storing tickets to the table
    public function store(Request $request)
    {
        try {
            $tickets = new Ticket;

            $tickets->id = $request->id;
            $tickets->issue = $request->issue;
            $tickets->description = $request->description;
            $tickets->status = $request->status;
            $tickets->priority = $request->priority;
            $tickets->escalationLevel = $request->escalationLevel;

            $saved = $tickets->save();

            if(!$saved){
                return array("status" => "ERROR");
            }
        }
        catch(Exception $e) {
            return array("status" => "ERROR");
        }
        return array("status" => "SUCCESS");
    }


//    show tickets
    public function show($id)
    {
        $tickets = Ticket::find($id);
        return $tickets;
    }

//    Updating the tickets in the table from API
    public function update(Request $request, $id)
    {
        try {
            $tickets = Ticket::find($id);
            $tickets->status = $request->status;
            $tickets->priority = $request->priority;
            $tickets->escalationLevel = $request->escalationLevel;

            $saved = $tickets->save();

            if(!$saved){
                return array("status" => "ERROR");
            }
        }
        catch(Exception $e) {
            return array("status" => "ERROR");
        }

        return array("status" => "SUCCESS");;
    }

//    destroying tickets
    public function destroy($id)
    {
        try {
            $tickets = Ticket::find($id);
            if ($tickets != null) {
                $tickets->delete();
            } else {
                return array("status" => "ERROR");
            }
        }
        catch(Exception $e) {
            return array("status" => "ERROR");
        }
        return array("status" => "SUCCESS");;
    }
}

