@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <img src="{{ Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
</div>
<div class="main_container">
    <div class="current_series_label">
        <h2 class="m-0">CURRENT SERIES</h2>
    </div>
    <div class="card_container mt-3">
        @foreach($comics as $comic)
        <a href="#">
            <div class="my_card">
                <div class="thumb">
                    <img src="{{ $comic['thumb']}}" alt="">
                </div>
                <h4>{{ $comic['title']}}</h4>
            </div>
        </a>
        @endforeach
    </div>
    <div class="button_container">
        <button><a href="#">LOAD MORE</a></button>
    </div>
</div>
@endsection