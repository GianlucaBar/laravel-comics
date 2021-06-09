@extends('layouts.app')

@section('main_content')
<main>
    <div class="product-cover-section">
        <div class="container-standard">
            <div class="product-cover">
                <img src="{{ $product['thumb'] }}" alt="">

                <div class="view-gallery-btn">
                    <a href="#">
                        view gallery
                    </a>
                </div>

                <div class="label"><span>{{ $product['type'] }}</span></div>
            </div>
        </div>
    </div>

    <div class="container-standard flex-container">

        <div class="product-description">
            <h2>{{ $product['title'] }}</h2>
        </div>

        <div class="adv">

        </div>
    </div>
</main>
@endsection