<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"/>
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="{{ url('/') }}">Check</a>
    <ul class="navbar-nav ml-auto my-lg-0">
        @if (Route::has('login'))
                @auth
                    <li class="nav-item"><a class="nav-link">Hello {{ auth()->user()->name }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/todos') }}">To Do's {{ $todoCount }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('logout') }}">Log Out</a></li>
                @else
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>

                    @if (Route::has('register'))
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                    @endif
                @endauth
        @endif
    </ul>
</nav>

@yield('content')

<footer>
    <p>&copy; 2019 - Will Storey &amp; Nathan Jubenville</p>
</footer>
</body>
</html>
