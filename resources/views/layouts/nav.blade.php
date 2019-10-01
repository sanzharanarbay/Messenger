<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="{{url('/')}}">Sanzhar's Messenger</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            @if (Route::has('login'))
                @auth
                    <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/home') }}"> <span class="text-light">Home</span></a>
                    </li>
                @else
                    <li class="nav-item">
                    <a  class="nav-link" href="{{ route('login') }}"> <span class="text-light">Login </span></a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}"><span class="text-light">Register</span></a>
                        </li>
                    @endif
                @endauth

            @endif


        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
