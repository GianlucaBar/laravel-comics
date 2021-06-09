@extends('layouts.app')

@section('title')
    Product page
@endsection
@section('main_content')
<main>
    <section class="product-cover-section">
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
    </section>

    <section class="container-standard flex-container">

        <div class="product-description">
            <h2>{{ $product['title'] }}</h2>

            <div class="green-block">
                <div class="price-tag">
                    <span>
                        U.S. Price:
                        <span class="light-green-text">{{ $product['price'] }}</span>
                    </span>
                </div>

                <div class="availability">
                    <div>
                        <span class="light-green-text text-right">available</span>
                    </div>
    
                    <div class="buy">
                        Check Availability <i class="fas fa-caret-down"></i>
                    </div>
                </div>
            </div>

            <p class="description">{{ $product['description'] }}</p>
        </div>

        <div class="adv text-right">
            <div>ADVERTISEMENT</div>
            <img src="{{ asset('img/pub.jpg') }}" alt="">
        </div>
    </section>

    <section class="product-info">
        <div class="container-standard flex-container">
            <div class="info-tab">
                <h4>Talent</h4>

                <div class="info-row flex-container">
                    <div class="key">Art by:</div>

                    <div class="value blue-text">

                        @foreach ($product['artists'] as $name)
                        <span>{{ $name }},</span>
                        @endforeach

                    </div>
                </div>

                <div class="info-row flex-container">
                    <div class="key">Written by:</div>

                    <div class="value blue-text">

                        @foreach ($product['writers'] as $name)
                        <span>{{ $name }},</span>
                        @endforeach

                    </div>
                </div>
            </div>

            <div class="info-tab">
                <h4>Specs</h4>

                <div class="info-row flex-container">
                    <div class="key">Series</div>

                    <div class="value blue-text">{{ $product['series'] }}</div>
                </div>

                <div class="info-row flex-container">
                    <div class="key">U.S. Price</div>

                    <div class="value">{{ $product['price'] }}</div>
                </div>

                <div class="info-row flex-container">
                    <div class="key">On Sale Date</div>

                    <div class="value">{{ $product['sale_date'] }}</div>
                </div>
            </div>
        </div>
    </section>

    <section class="buy-section">
        <div class="container-standard flex-container">
            <div class="buy-block">
                <span>DIGITAL COMICS</span>
                <div class="digital-comics"></div>
            </div>

            <div class="buy-block">
                <span>SHOP DC</span>
                <div class="shop"></div>
            </div>

            <div class="buy-block">
                <span>COMIC SHOP LOCATOR</span>
                <div class="shop-locator"></div>
            </div>

            <div class="buy-block">
                <span>SUBSCRIPTIONS</span>
                <div class="subscriptions"></div>
            </div>
        </div>
    </section>
</main>
@endsection