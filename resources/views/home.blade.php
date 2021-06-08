@extends('layouts.app')

@section('main_content')
    <div class="container-standard">

        <div class="main-title">
            <h2>CURRENT SERIES</h2>
        </div>
        <div class="comics-container">

            @foreach ($comics as $comic)
            <div class="comic">
                <a href="#">
                    <div class="cover">
                        <img src="{{ $comic['thumb'] }}" alt="">
                    </div>
    
                    <h4>{{ $comic['title'] }} </h4>
                </a>
            </div>
            @endforeach
        </div>

        <div class="text-centered">
            <button class="load-more-btn">LOAD MORE</button>
        </div>
    </div>
@endsection
