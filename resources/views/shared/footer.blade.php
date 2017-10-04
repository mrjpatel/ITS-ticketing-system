<footer class="container-fluid text-center bg-lightgray">
    <div class="container">
        <p class="pull-left"> Copyright © Japan Patel 2017. All right reserved. </p>
        <div class="pull-right">
            <ul class="nav nav-pills">
                <li><a href="{ route('home') }}">Home</a></li>
                <li><a href="{{ route('faq') }}">FAQ</a></li>
                <li><a href="{{ route('createTicket') }}">Create a Ticket</a></li>

                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</footer>
