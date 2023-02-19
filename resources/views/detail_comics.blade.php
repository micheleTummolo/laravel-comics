@extends('layouts.app')

@section('content')
<div class="detail_comic">
    <div class="row thumb_row">
        <div class="col thumb_container">
            <div class="thumb">
                <img src="{{ $single['thumb']}}" alt="{{ $single['thumb']}}">
            </div>
        </div>
    </div>
    <div class="main_container">
        <div class="row primary_section">
            <div class="col py-5">
                <div class="row center">
                    <div class="col-8">
                        <div class="row">
                            <div class="col p-0">
                                <h1 class="comic_title">{{ $single['title']}}</h1>
                            </div>
                        </div>
                        <div class="row price_row mt-2">
                            <div class="col-8 py-3 px-4 price_border_bottom price_border_right d-flex justify-content-between align-items-center">
                                <h5 class="m-0">US. Price: <span class="price">{{ $single['price']}}</span></h5>
                                <h5 class="m-0">AVAILABLE</h5>
                            </div>
                            <div class="col-4 py-3 price_border_bottom text-center">
                                <h5 class="m-0 price">Check Availability <i class="fa-solid fa-sort-down"></i></h5>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col p-0">
                                <p class="comic_description">{{ $single['description']}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <h5 class="comic_description">ADVERTISMENT</h5>
                        <img src="{{ Vite::asset('resources/img/adv.jpg')}}" alt="{{ Vite::asset('resources/img/adv.jpg')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection