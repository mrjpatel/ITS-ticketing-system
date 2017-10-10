@extends('layouts.app')
@section('title','Home')
@section('content')
    <!-- A static home page view -->
    <div class = "content">
        <div class = "container">
            <div class="jumbotron">
                <h1>ITS Ticket Submission System</h1>
                <p>A simple place where all your answers to IT related problems can be found. To get started click on the button.</p>
                <p><a class="btn btn-success btn-lg" href="{{ route('createTicket') }}">Create a Ticket</a></p>
            </div>
        </div>
    </div>
@endsection
