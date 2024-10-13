<nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark" aria-label="Furni navigation bar">
    <div class="container">
        <a class="navbar-brand" href="index.html">DevBatu Shop<span>.</span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item {{ Request::is('userpage') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('userpage') }}">Home</a>
                </li>
                <li class="nav-item {{ Request::is('shop') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('shop') }}">Shop</a>
                </li>
                <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('about') }}">About us</a>
                </li>
                <li class="nav-item {{ Request::is('servicesupport') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('servicesupport') }}">Services</a>
                </li>
                <li class="nav-item {{ Request::is('blogpage') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('blogpage') }}">Blog</a>
                </li>
                <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('contact') }}">Contact us</a>
                </li>
            </ul>

            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                @if(Route::has('login'))
                @auth
                <!-- Cart Icon -->
                <li><a class="nav-link" href="{{url('cart')}}"><img src="images/cart.svg" alt="Cart"></a></li>

                <!-- User Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="images/user.svg" alt="User" class="rounded-circle" style="width: 30px;">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">

                        <li><a class="dropdown-item" href="{{url('/redirect')}}">Profile</a></li>
                        <li><a class="dropdown-item" href="{{ route('dashboard') }}">Settings</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}" 
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
                @else
                <!-- Login/Register Buttons -->
                <li class="nav-item mx-2">
                    <a class="btn btn-primary" href="{{ route('login') }}">Log in</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-success" href="{{ route('register') }}">Register</a>
                </li>
                @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>


