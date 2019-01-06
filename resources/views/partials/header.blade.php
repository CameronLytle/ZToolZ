<nav class="navbar navbar-expand navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('ztoolz.index') }}">ZToolZ</a>
    <ul class="navbar-nav">
        @if(Auth::check())
            <li><a class="nav-link" href="{{ route('ztoolz.index') }}">Shop</a></li>
            <li><a class="nav-link" href="{{ route('other.about') }}">About</a></li>
            <li><a class="nav-link" href="{{ route('admin.index') }}">Admin Area</a></li>
            <li>
                <a class="nav-link"
                   href="{{ url('/logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST">
                    {{ csrf_field() }}
                </form>
            </li>
        @endif
        <li><a class="nav-link" href="{{ url('/login') }}">Login</a></li>
        <li><a class="nav-link" href="{{ url('/register') }}">Register</a></li>
    </ul>
</nav>