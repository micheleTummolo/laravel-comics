<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DC Comics - comics</title>

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<header>
    @include('partials.header')
</header>
<body>
    <div class="jumbotron">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
    </div>
    <div class="container">
        <h1>Comics</h1>
    </div>
</body>
<footer>
    @include('partials.footer')
</footer>