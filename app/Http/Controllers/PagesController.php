<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
//    return the home page view
    public function home(){
        return view ('home');
    }

//    return the faq page view
    public function faq(){
        return view ('faq');
    }

//    return the create ticket form view
    public function createTicket(){
        return view ('tickets.create');
    }
}
