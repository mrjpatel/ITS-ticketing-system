<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    /**
     * Show the form view for creating a new ticket.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        if(Auth::check()){
            return view('tickets.create');
//        }
//
//        return redirect('auth.login');
    }

    /**
     * Store a newly created resource in database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|string|email|max:255',
            'os' => 'required',
            'issue' => 'required',
            'description' => 'required',
        ]);
        $allRequest = $request->all();

        $tickets = new Ticket;
        $tickets->userID = Auth::user()->id;
        $tickets->os = $allRequest['os'];
        $tickets->issue = $allRequest['issue'];
        $tickets->description = $allRequest['description'];
        $tickets->status = 'Pending';
        $tickets->priority = '';
        $tickets->escalationLevel = '';
        $tickets->save();

        return redirect()->route('tickets.create') ->with('success','Ticket created successfully');
    }
}
