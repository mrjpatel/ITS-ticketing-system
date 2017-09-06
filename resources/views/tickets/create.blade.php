@extends('master')
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

        {!! Form::open(['action' => 'TicketController@store','method'=>'POST']) !!}

        <div class="form-group">
            {!! Form::label('fname', 'First Name') !!}
            {!! Form::text('fname', '', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('lname', 'Last Name') !!}
            {!! Form::text('lname', '', ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Email') !!}
            {!! Form::text('email', '', ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('os', 'Operating System') !!}
            {!! Form::text('os', '', ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('issue', 'Issue') !!}
            {!! Form::text('issue', '', ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description', 'Description') !!}
            {!! Form::textarea('description', '', ['class' => 'form-control']) !!}
        </div>

        <button class="btn btn-success" type = "submit">Add Ticket!</button>
        <br><br><br>
        {!! Form::close() !!}
    </div>
@endsection