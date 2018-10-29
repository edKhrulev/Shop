<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Welcome</title>

        <link href="/css/libs/bootstrap.min.css" rel="stylesheet"/>
    </head>
    <body>

    <nav class="navbar navbar-dark bg-dark navbar-expand">
        <ul class="float-md-left navbar-nav">
        <li class="nav-item"><a class="nav-link position-left" href="/products/create">Product</a></li>
        </ul>

        <ul class="ml-md-left navbar-nav">
        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
        </ul>

        <ul class="ml-auto navbar-nav">
            <li class="nav-item"><a class="nav-link" href="/registration">Registration</a></li>
            <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
            <li class="nav-item"><a class="nav-link" href="/logout">Logout</a></li>
        </ul>
    </nav>

    <div class="container">
            @yield('content')
    </div>
    </body>
</html>
