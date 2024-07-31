@extends('layout.master')
@section('content')

<div class="row p-md-5 gx-0 sub-products">
    <div class="col-lg-12 px-5">
        <h1 class="consumer-heading py-4">Consumer</h1>
        <div class="row flex-wrap justify-content-start p-0">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6 product-cards">
                <div class="consumer-sub-content">
                    <a href="{{ route('products-list') }}" class="">
                        <h3 class="consumer-sub-link">LED Bulbs</h3>
                        <div class="consumer-sub-img">
                            <img src="https://orionlightingpvtltd.com/assets/images/consumer/led_bulb.jpeg" alt="">
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6 product-cards">
                <div class="consumer-sub-content">
                    <a href="{{ route('products-list') }}">
                        <h3 class="consumer-sub-link">LED Downlights</h3>
                        <div class="consumer-sub-img">
                            <img src="https://orionlightingpvtltd.com/assets/images/consumer/Down_light.jpeg" alt="">
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6 product-cards">
                <div class="consumer-sub-content">
                    <a href="{{ route('products-list') }}">
                        <h3 class="consumer-sub-link">LED Slim Panel Lights</h3>
                        <div class="consumer-sub-img">
                            <img src="https://orionlightingpvtltd.com/assets/images/consumer/panel_light.jpeg" alt="">
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6 product-cards">
                <div class="consumer-sub-content">
                    <a href="{{ route('products-list') }}">
                        <h3 class="consumer-sub-link">LED Adjustable Panel Lights</h3>
                        <div class="consumer-sub-img">
                            <img src="https://orionlightingpvtltd.com/assets/images/consumer/adjustable_panel.jpeg"
                                alt="">
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6 product-cards">
                <div class="consumer-sub-content">
                    <a href="{{ route('products-list') }}">
                        <h3 class="consumer-sub-link">LED Surface Panel</h3>
                        <div class="consumer-sub-img">
                            <img src="https://orionlightingpvtltd.com/assets/images/consumer/surface.jpeg" alt="">
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6 product-cards">
                <div class="consumer-sub-content">
                    <a href="{{ route('products-list') }}">
                        <h3 class="consumer-sub-link">LED COB</h3>
                        <div class="consumer-sub-img">
                            <img src="https://orionlightingpvtltd.com/assets/images/consumer/COB.jpeg" alt="">
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6 product-cards">
                <div class="consumer-sub-content">
                    <a href="{{ route('products-list') }}">
                        <h3 class="consumer-sub-link">LED Batten Light</h3>
                        <div class="consumer-sub-img">
                            <img src="https://orionlightingpvtltd.com/assets/images/consumer/baten.jpeg" alt="">
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6 product-cards">
                <div class="consumer-sub-content">
                    <a href="{{ route('products-list') }}">
                        <h3 class="consumer-sub-link">LED Tube Light</h3>
                        <div class="consumer-sub-img">
                            <img src="https://orionlightingpvtltd.com/assets/images/consumer/tube.jpeg" alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
