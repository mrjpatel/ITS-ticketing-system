@extends('layouts.app')
@section('title', 'FAQ')
@section('content')
    <div class="container">
        <h2>F.A.Q</h2>
        <h4>Frequently Asked Questions</h4>
        <div class="panel-group" id="faq">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#faq" href="#collapse1">What is this Website?</a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse in">
                    <div class="panel-body">This website is a redesigned version of RMIT ITS help-desk. If you have any IT related
                        problems then we can help you. Just submit a ticket telling us what the problem is and we will get on it
                        to solve the problem that you have.
                    your </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#faq" href="#collapse2">How to submit a ticket</a>
                    </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body">Simply click on <strong>Create a Ticket</strong>. And fill the the details such as you name,
                    email, your operating system, you issue and description of the issue and click submit. That's it you have
                        submitted a ticket to us.</div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#faq" href="#collapse3">What to do after submitting a ticket</a>
                    </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body">After you have submitted a ticket, our team will find the best solution for the
                        problem and contact you.</div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#faq" href="#collapse4">Can I edit the ticket?</a>
                    </h4>
                </div>
                <div id="collapse4" class="panel-collapse collapse">
                    <div class="panel-body">Unfortunately you cannot edit the ticket. If you want to submit another ticket you can do that.</div>
                </div>
            </div>
        </div>
    </div>
@endsection