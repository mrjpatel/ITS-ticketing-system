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
                            'tickets.issue', 'tickets.description', 'tickets.status', 'tickets.priority',
                            'tickets.escalationLevel', 'tickets.createdOn')
                         ->orderBy('tickets.createdOn', 'desc')
                        ->get();

        return response()->json($tickets);
//        $tickets = Ticket::orderBy('created_at', 'DESC')->get();
//        return response()->json($tickets);
    }

    public function index() {
//        $tickets= Ticket::all();
//        return $tickets;
        $tickets = DB::table('tickets')
            ->join('users', 'userID', '=', 'users.id')
            ->select('tickets.id', 'users.name', 'tickets.os',
                'tickets.issue', 'tickets.comment', 'tickets.status', 'tickets.createdOn')
            ->orderBy('tickets.createdOn', 'desc')
            ->get();

        return response()->json($tickets);
    }

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


    public function show($id)
    {
        $tickets = Ticket::find($id);
        return $tickets;
    }

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

