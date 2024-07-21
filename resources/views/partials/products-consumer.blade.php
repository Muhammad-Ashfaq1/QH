@extends('layout.master')
@section('content')

<div class="row p-md-5 gx-0 sub-products">
    <div class="col-lg-12 p-5">
        <h1 class="consumer-heading">Consumer</h1>
        <div class="row flex-wrap justify-content-start">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6">
                <div class="consumer-sub-content">
                    <a href="{{ route('products-list') }}">
                        <div class="consumer-sub-img">
                            <img src="https://orionlightingpvtltd.com/assets/images/consumer/led_bulb.jpeg" alt="">
                        </div>
                        <h3 class="consumer-sub-link">LED Bulbs</h3>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6">
                <div class="consumer-sub-content">
                    <a href="{{ route('products-list') }}">
                        <div class="consumer-sub-img">
                            <img src="https://orionlightingpvtltd.com/assets/images/consumer/Down_light.jpeg" alt="">
                        </div>
                        <h3 class="consumer-sub-link">LED Downlights</h3>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6">
                <div class="consumer-sub-content">
                    <a href="{{ route('products-list') }}">
                        <div class="consumer-sub-img">
                            <img src="https://orionlightingpvtltd.com/assets/images/consumer/panel_light.jpeg" alt="">
                        </div>
                        <h3 class="consumer-sub-link">LED Slim Panel Lights</h3>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6">
                <div class="consumer-sub-content">
                    <a href="{{ route('products-list') }}">
                        <div class="consumer-sub-img">
                            <img src="https://orionlightingpvtltd.com/assets/images/consumer/adjustable_panel.jpeg"
                                alt="">
                        </div>
                        <h3 class="consumer-sub-link">LED Adjustable Panel Lights</h3>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6">
                <div class="consumer-sub-content">
                    <a href="{{ route('products-list') }}">
                        <div class="consumer-sub-img">
                            <img src="https://orionlightingpvtltd.com/assets/images/consumer/surface.jpeg" alt="">
                        </div>
                        <h3 class="consumer-sub-link">LED Surface Panel</h3>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6">
                <div class="consumer-sub-content">
                    <a href="{{ route('products-list') }}">
                        <div class="consumer-sub-img">
                            <img src="https://orionlightingpvtltd.com/assets/images/consumer/COB.jpeg" alt="">
                        </div>
                        <h3 class="consumer-sub-link">LED COB</h3>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6">
                <div class="consumer-sub-content">
                    <a href="{{ route('products-list') }}">
                        <div class="consumer-sub-img">
                            <img src="https://orionlightingpvtltd.com/assets/images/consumer/baten.jpeg" alt="">
                        </div>
                        <h3 class="consumer-sub-link">LED Batten Light</h3>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6">
                <div class="consumer-sub-content">
                    <a href="{{ route('products-list') }}">
                        <div class="consumer-sub-img">
                            <img src="https://orionlightingpvtltd.com/assets/images/consumer/tube.jpeg" alt="">
                        </div>
                        <h3 class="consumer-sub-link">LED Tube Light</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection