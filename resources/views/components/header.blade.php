<link rel="stylesheet" href="{{ asset('assets/css/editNav.css') }}">

<div class="min-h-screen bg-gray-100 dark:bg-gray-900">
    <div class="container w-full">
        <div class="row">
            <div class="col-12">
                <nav class="editNav">
                    <!-- Logo -->
                    <a href="{{ route('index') }}" class="logo">
                        <img src="{{ asset('assets/images/Opulent Odyssey logo.png') }}" alt="Logo"
                            style="width: 300px; height: auto;">
                    </a>

                    <!-- Navigation Menu -->
                    <ul class="nav ulThing">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <!-- <li><a href="{{ route('about') }}">About</a></li> -->
                        <li><a href="{{ route('deals') }}">Deals</a></li>

                        @if (Auth::check())
                            <li><a href="{{ route('my_reservations') }}">My Reservations</a></li>
                            <li><a href="{{ route('reservation') }}">Make a Reservation</a></li>
                            <li><a href="{{ route('profile.edit') }}">Profile</a></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                                    @csrf
                                    <button type="submit" style="all: unset; cursor: pointer;" class="nav-link">
                                        Log Out
                                    </button>
                                </form>
                            </li>
                        @else
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @endif
                    </ul>

                    <!-- Mobile Menu Trigger -->
                    <a class="menu-trigger">
                        <span>Menu</span>
                    </a>
                </nav>
            </div>
        </div>
    </div>
</div>