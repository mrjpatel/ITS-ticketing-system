@extends('master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <h2>Tickets</h2>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>TicketID</th>
            <th>Issue</th>
            <th>Details</th>
            <th>Submitted By</th>
            <th width="280px">Actions</th>
        </tr>

            @foreach ($tickets as $ticket)
                @if($tickets->count() > 0)
                    <tr>
                        <td>{{ $ticket->id}}</td>
                        <td>{{ $ticket->issue}}</td>
                        <td>{{ $ticket->description}}</td>
                        <td>{{ $ticket->userID}}</td>
                        <td>{{ $ticket->status}}</td>
                        <td>
                            {{--<a class="btn btn-info" href="{{ route('tickets.show', $ticket->id }}">Show</a>--}}
                        </td>
                    </tr>
                @else
                 don't have any tickets
            @endif
        @endforeach


    </table>
@endsection