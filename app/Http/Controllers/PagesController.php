<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function test(){
        return view ('home');
    }

    public function faq(){
        return view ('faq');
    }

    public function createTicket(){
        return view ('tickets.create');
    }

//    public function login(){
//        return view ('auth.login');
//    }
//
//    public function register(){
//        return view ('auth.register');
//    }

//    public function viewTicket(){
//        return view ('tickets.index');
//    }


}
