@extends('layouts.app')

@section('main_content')
<main class="bg-dark">
    <div class="container-standard">

        <div class="main-title">
            <h2>CURRENT SERIES</h2>
        </div>
        <div class="comics-container">

            @foreach ($comics as $comic)
            <div class="comic">
                <a href="{{ route('product', [
                    'id' => $comic['id']
                ]) }}">
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

    <div class="blue-section">
        <div class="container-standard">
            <ul class="blue-menu">
                <li>
                    <img class="list-icon" src="{{ asset('img/buy-comics-digital-comics.png') }}" alt=""> <span>DIGITAL COMICS</span>
                </li>

                <li>
                    <img class="list-icon" src="{{ asset('img/buy-comics-merchandise.png') }}" alt=""> <span>DC MERCHANDISE</span>
                </li>

                <li>
                    <img class="list-icon" src="{{ asset('img/buy-comics-subscriptions.png') }}" alt=""> <span>SUBSCRIPTION</span>
                </li>

                <li>
                    <img class="list-icon" src="{{ asset('img/buy-comics-shop-locator.png') }}" alt=""> <span>COMIC SHOP LOCATOR</span>
                </li>

                <li>
                    <img class="list-icon power-visa" src="{{ asset('img/buy-dc-power-visa.svg') }}" alt=""> <span>DC POWER VISA</span>
                </li>
            </ul>
        </div>
    </div>
</main>    
@endsection
