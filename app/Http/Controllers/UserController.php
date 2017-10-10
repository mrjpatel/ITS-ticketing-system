<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Ticket;

class UserController extends Controller
{

    /**
     * Store a newly created user in database.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
        ]);
        Car::create($request->all());
        return redirect()->route('tickets.index') ->with('success','User created successfully');
    }

}
