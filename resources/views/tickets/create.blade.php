@extends('layouts.app')
@section('title', 'Create a Ticket')
@section('content')
    <div class = "container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Create a new Ticket</h2>
                </div>
            </div>
        </div>

        {{--session for displaying message when the ticket is submitted--}}
        @if (count($errors) > 0)
            <div class="alert alert-danger alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <p>{{ $message }}</p>
            </div>
        @endif

        {{--Create Ticket Form--}}
        {!! Form::open(['action' => 'TicketController@store','method'=>'POST']) !!}

        {{--Name--}}
        <div class="form-group">
            {!! Form::label('name', 'Name') !!}
            {{--{!! Form::text('name', '', ['class' => 'form-control']) !!}--}}
            <input value="{{ Auth::user()->name }}" type="text" class="form-control" id="name" name="name">
        </div>

        {{--Email--}}
        <div class="form-group">
            {!! Form::label('email', 'Email') !!}
            <input value="{{ Auth::user()->email }}" type="text" class="form-control" id="email" name="email">
        </div>

        {{--Operating System--}}
        <div class="form-group">
            {!! Form::label('os', 'Operating System') !!}
            {!! Form::text('os', '', ['class' => 'form-control']) !!}
        </div>

        {{--Issue--}}
        <div class="form-group">
            {!! Form::label('issue', 'Issue') !!}
            {!! Form::text('issue', '', ['class' => 'form-control']) !!}
        </div>

        {{--Description--}}
        <div class="form-group">
            {!! Form::label('description', 'Description') !!}
            {!! Form::textarea('description', '', ['class' => 'form-control']) !!}
        </div>
        {{--Submit--}}
        <button class="btn btn-success" type = "submit">Add Ticket!</button>
        <br><br><br>
        {!! Form::close() !!}
    </div>
@endsection