<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view ('home');
    }

    public function faq(){
        return view ('faq');
    }

    public function createTicket(){
        return view ('tickets.create');
    }

    public function viewTicket(){
        return view ('tickets.index');
    }


}
