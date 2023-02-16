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
    <main>
        <div class="main_container">
            <div class="current_series_label">
                <h2 class="m-0">CURRENT SERIES</h2>
            </div>
            <div class="card_container mt-3">
                @foreach($comics as $comic)
                <div class="my_card">
                    <div class="thumb">
                        <img src="{{ $comic['thumb']}}" alt="">
                    </div>
                    <h4>{{ $comic['title']}}</h4>
                </div>
                @endforeach
            </div>
            <div class="button_container">
                <button><a href="#">LOAD MORE</a></button>
            </div>
        </div>
    </main>
</body>
<footer>
    @include('partials.footer')
</footer>