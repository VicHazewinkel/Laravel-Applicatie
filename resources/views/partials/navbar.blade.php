

{{-- Nav Bar --}}
<nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Fourth navbar example">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Fablab Shop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample04">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                </li>

                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('shop')}}">Shop</a>
                    </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('saldo')}}">Saldo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('overview') }}">Purchases</a>
                </li>

                @if (Auth::user()->is_admin)                
                <li>
                    <a class="nav-link admin" href="{{ route('addUser') }}">ADMIN: Add User</a>
                </li>
                <li>
                    <a class="nav-link admin" href="{{ route('addItem') }}">ADMIN: Add Item</a>
                </li>
                <li>
                    <a class="nav-link admin" href="{{ route('overview') }}">ADMIN: Sales Overview </a>
                </li>
                <li>
                    <a class="nav-link admin" href="{{ route('userOverview') }}">ADMIN: User Overview </a>
                </li>
                <li>
                    <a class="nav-link admin" href="{{ route('itemOverview') }}">ADMIN: Item Overview </a>
                </li>
                
                

                
                
        
                @else
                @endif

                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <li class="nav-item">
                            <a class="nav-link" :href="route('logout')"
                                            onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </li>
                    </form>
                </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">register</a>
                    </li>
@if(Auth::user())

@endif
                @endauth
            </ul>
        </div>
    </div>
    <h6>
        @auth
        <p>Hallo {{ Auth::user()->name }}, jij bent
            @if(Auth::user()->is_admin)
                een admin
            @else
                een gebruiker
            @endif
        @endauth
    </h6>
</nav>
