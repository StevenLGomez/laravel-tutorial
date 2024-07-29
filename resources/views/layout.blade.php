
<!doctype html>
<html>
<head>
    <title>
        @yield('title', 'Blog')
    </title>
    <link rel="stylesheet" href={{ asset('css/main.css') }}></link>
</head>

<body>

<ul class="nav">
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="{{ route('about') }}">About</a></li>
</ul>

<div class="main">
    @yield('content')
</div>

</body>
</html>


