<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception;

class TicketAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets= Ticket::all();
        return $tickets;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $tickets = new Ticket;

            $tickets->os = $request->os;
            $tickets->issue = $request->issue;
            $tickets->description = $request->description;
            $tickets->status = $request->status;

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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tickets = Ticket::find($id);
        return $tickets;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $tickets = Ticket::find($id);
            $tickets->os = $request->os;
            $tickets->issue = $request->issue;
            $tickets->description = $request->description;
            $tickets->status = $request->status;

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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

        return array("status" => "SUCCESS");
    }
}

