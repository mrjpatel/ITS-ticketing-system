@extends('layouts.app')

{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Dashboard</div>--}}

                {{--<div class="panel-body">--}}
                    {{--You are logged in!--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
@section('title','Home')
@section('content')
    <div class = "content">
        <div class = "container">
            <div class="jumbotron">
                <h1>ITS Ticket Submission System</h1>
                <p>A simple place where all your answers to IT related problems can be found. To get started click on the button.</p>
                <p><a class="btn btn-success btn-lg" href="createTicket">Create a Ticket</a></p>
            </div>
        </div>
    </div>
@endsection
