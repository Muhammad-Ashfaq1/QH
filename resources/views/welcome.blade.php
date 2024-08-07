@extends('layout.master')
@section('content')
    <!-- =============================================
=           Banner         =
=============================================  -->
    <section class="website-slider">
            <div class="container-fluid">
                <div class="row align-items-start">
                    <div class="col-md-12">
                    <div class="container-fluid p-0">
                        <div class="content-wrapper">
                            <!-- data-bs-ride="carousel" -->
                            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item stretch active" data-bs-interval="2000">
                                        {{-- <div class="carousel-item active"> --}}
                                        <div class="carousel-overlay"></div>
                                        {{-- <img src="{{ asset('assets/images/slider-bg1.webp') }}" class="d-block w-100" alt="..."> --}}
                                        <img src="{{ asset('assets/images/ttubelight.png') }}" class="d-block w-100" alt="...">

                                        <div class="carousel-content">
                                            <h1 class="carousel-heading">LED TUBE LIGHT</h1>
                                            <a href="javascript:void(0)" class="carousel-btn">More detail</a>
                                        </div>
                                        <div class="carousel-bottom-arrow">
                                            <a href="#shine">
                                                <img src="{{ asset('assets/images/icon_scroll_down.svg') }}" alt="Scroll for more">
                                                <div>Scroll for more</div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="carousel-item stretch" data-bs-interval="2000">
                                        <div class="carousel-overlay"></div>
                                        <img src="{{ asset('assets/images/led-bulb-slider.png')  }}" class="d-block w-100" alt="...">
                                        {{-- <img src="{{ asset('assets/images/bulb-light-bg2.png') }}" class="d-block w-100" alt="..."> --}}
                                        <div class="carousel-content">
                                            <h1 class="carousel-heading text-primary">LED BULB</h1>
                                            <a href="javascript:void(0)" class="carousel-btn">More Detail</a>
                                        </div>
                                        <div class="carousel-bottom-arrow">
                                            <a href="#shine">
                                                <img src="{{ asset('assets/images/icon_scroll_down.svg') }}" alt="Scroll for more">
                                                <div>Scroll for more</div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="carousel-item stretch" data-bs-interval="2000">
                                        <div class="carousel-overlay"></div>
                                        <img src="{{ asset('assets/images/slider-bg2.webp') }}" class="d-block w-100" alt="...">
                                        {{-- <img src="{{ asset('assets/images/led-bulb.png') }}" class="d-block w-100" alt="..."> --}}
                                        <div class="carousel-content">
                                            <h1 class="carousel-heading">LED PANEL LIGHT</h1>
                                            {{-- <h1 class="carousel-heading2">FIALUX-BACKLIT PANEL</h1> --}}
                                            <a href="javascript:void(0)" class="carousel-btn">More detail</a>
                                        </div>
                                        <div class="carousel-bottom-arrow">
                                            <a href="#shine">
                                                <img src="{{ asset('assets/images/icon_scroll_down.svg') }}" alt="Scroll for more">
                                                <div>Scroll for more</div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="carousel-item stretch" data-bs-interval="2000">
                                        <div class="carousel-overlay"></div>
                                        <img src="{{ asset('assets/images/bulb-light-bg.png') }}" class="d-block w-100" alt="...">
                                        {{-- <img src="{{ asset('assets/images/bulb-slider.jifi') }}" class="d-block w-100" alt="..."> --}}
                                        <div class="carousel-content">
                                            <h1 class="carousel-heading">Led Flood Light</h1>
                                            <a href="javascript:void(0)" class="carousel-btn">More detail</a>
                                        </div>
                                        <div class="carousel-bottom-arrow">
                                            <a href="#shine">
                                                <img src="{{ asset('assets/images/icon_scroll_down.svg') }}" alt="Scroll for more">
                                                <div>Scroll for more</div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="carousel-item stretch" data-bs-interval="2000">
                                        <div class="carousel-overlay"></div>
                                        <img src="{{ asset('assets/images/downlight.png')  }}" class="d-block w-100" alt="...">
                                        {{-- <img src="{{ asset('assets/images/bulb-light-bg2.png') }}" class="d-block w-100" alt="..."> --}}
                                        <div class="carousel-content">
                                            <h1 class="carousel-heading">LED Downlight</h1>
                                            <a href="javascript:void(0)" class="carousel-btn">More Detail</a>
                                        </div>
                                        <div class="carousel-bottom-arrow">
                                            <a href="#shine">
                                                <img src="{{ asset('assets/images/icon_scroll_down.svg') }}" alt="Scroll for more">
                                                <div>Scroll for more</div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="carousel-item stretch" data-bs-interval="2000">
                                        <div class="carousel-overlay"></div>
                                        <img src="{{ asset('assets/images/new_generation-slimlight.png')  }}" class="d-block w-100" alt="...">
                                        {{-- <img src="{{ asset('assets/images/bulb-light-bg2.png') }}" class="d-block w-100" alt="..."> --}}
                                        <div class="carousel-content">
                                            <h1 class="carousel-heading">NEW Generation Slim/Down-Lights</h1>
                                            <a href="javascript:void(0)" class="carousel-btn">More Detail</a>
                                        </div>
                                        <div class="carousel-bottom-arrow">
                                            <a href="#shine">
                                                <img src="{{ asset('assets/images/icon_scroll_down.svg') }}" alt="Scroll for more">
                                                <div>Scroll for more</div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="carousel-item stretch" data-bs-interval="2000">
                                        <div class="carousel-overlay"></div>
                                        <img src="{{ asset('assets/images/ice_light.png')  }}" class="d-block w-100" alt="...">
                                        {{-- <img src="{{ asset('assets/images/bulb-light-bg2.png') }}" class="d-block w-100" alt="..."> --}}
                                        <div class="carousel-content">
                                            <h1 class="carousel-heading">ICE LIGHT</h1>
                                            <a href="javascript:void(0)" class="carousel-btn">More Detail</a>
                                        </div>
                                        <div class="carousel-bottom-arrow">
                                            <a href="#shine">
                                                <img src="{{ asset('assets/images/icon_scroll_down.svg') }}" alt="Scroll for more">
                                                <div>Scroll for more</div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="carousel-item stretch" data-bs-interval="2000">
                                        <div class="carousel-overlay"></div>
                                        <img src="{{ asset('assets/images/high_bay.png')  }}" class="d-block w-100" alt="...">
                                        {{-- <img src="{{ asset('assets/images/bulb-light-bg2.png') }}" class="d-block w-100" alt="..."> --}}
                                        <div class="carousel-content">
                                            <h1 class="carousel-heading text-primary">LED HIGH BAY LIGHT</h1>
                                            <a href="javascript:void(0)" class="carousel-btn">More Detail</a>
                                        </div>
                                        <div class="carousel-bottom-arrow">
                                            <a href="#shine">
                                                <img src="{{ asset('assets/images/icon_scroll_down.svg') }}" alt="Scroll for more">
                                                <div>Scroll for more</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                    <i class=" fa fa-3x fa-chevron-left" aria-hidden="true"></i>
                                    <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                    <i class=" fa fa-3x fa-chevron-right" aria-hidden="true"></i>
                                    <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =============================================
    =           Banner  End       =
    =============================================  -->


    <!-- =============================================
    =            shine         =
    =============================================  -->
    <!-- <section class="shine-wrapper" id="shine">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center max-width mx-auto gap-5">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="container-fluid">
                        <div class="content-wrapper">
                            <div class="container">
                                <div class="index-content-block content-block">
                                    <h2 class="text-blue text-uppercase">
                                        <strong>We are here to shine </strong>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- =============================================
    =            shine  End       =
    =============================================  -->


    <!-- =============================================
    =           category         =
    =============================================  -->
    <!-- <section class="category">
        <div class="container-fluid p-0">
            <div class="row align-items-center max-width mx-auto">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="container-fluid p-0">
                        <div class="content-wrapper">
                            <div class="category-showcase">
                                <div class="clearfix row">
                                    <div class="category-holder col-sm-6">
                                        <div class="category-background stretch transition-sm bg-index-static-top"
                                             style="background-image: url(/assets/images/category1.webp);">
                                        </div>
                                        <div class="category-fader stretch"></div>

                                        <div class="category-info">
                                            <h2 class="text-uppercase"><strong>Indoor</strong></h2>

                                            <p>From future-proof modular solutions to innovative new formats, we deliver
                                                high quality LED Indoor
                                                solutions at an affordable price.</p>
                                            <a href="" class="btn btn-red">View all</a>
                                        </div>
                                    </div>

                                    <div class="category-holder col-sm-6">
                                        <div class="category-background stretch transition-sm bg-index-static-industrial"
                                             style="background-image: url(/assets/images/category2.webp);">
                                        </div>
                                        <div class="category-fader stretch"></div>

                                        <div class="category-info">
                                            <h2 class="text-uppercase"><strong>INDUSTRIAL</strong></h2>

                                            <p>Even in an industrial environment. Because it has always been crucial to
                                                untie production from
                                                natural light. As a substantial slice of the operation costs paid for
                                                electricity.</p>
                                            <a href="" class="btn btn-red">View all</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix row">
                                    <div class="category-holder col-sm-6">
                                        <div class="category-background stretch transition-sm bg-index-static-top-2"
                                             style="background-image: url(/assets/images/category3.webp);">
                                        </div>
                                        <div class="category-fader stretch"></div>

                                        <div class="category-info">
                                            <h2 class="text-uppercase"><strong>Outdoor</strong></h2>

                                            <p>LED Outdoor solutions deliver a light closer to natural daylight than the
                                                traditional lamps of the
                                                past. The latest LED lighting solutions provide an ideal upgrade path
                                                for public bodies looking to
                                                reduce energy costs and environmental impact. LED can make striking
                                                aesthetic improvements to
                                                landscapes and cityscapes.</p>
                                            <a href="" class="btn btn-red">View all</a>
                                        </div>
                                    </div>

                                    <div class="category-holder col-sm-6">
                                        <div class="category-background stretch transition-sm bg-index-static-bottom-left"
                                             style="background-image: url(/assets/images/category4.webp);">
                                        </div>
                                        <div class="category-fader stretch"></div>

                                        <div class="category-info">
                                            <h2 class="text-uppercase"><strong>Traditional lamps</strong>
                                            </h2>

                                            <p>We offer a comprehensive range of light sources from traditional
                                                technologies such as HID, LFL, CFL,
                                                Halogen and Specialty lamps, for indoor and outdoor solutions.</p>
                                            <a href="" class="btn btn-red">View all</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix row">
                                    <div class="category-holder col-sm-12">
                                        <div class="category-background stretch transition-sm bg-index-static-bottom-right"
                                             style="background-image: url(/assets/images/category5.webp);">
                                        </div>
                                        <div class="category-fader stretch"></div>

                                        <div class="category-info">
                                            <h2 class="text-uppercase"><strong>Automotive</strong>
                                            </h2>

                                            <p>Wide selection of automotive lamps&nbsp; available - offering full ranges
                                                operating on either 12V or
                                                24V systems. Our lamps -&nbsp; with GE and Tungsram brand - are on the
                                                Approval Lists of many of the
                                                car manufacturers world-wide where quality and performance are key
                                                measurements.&nbsp;</p>
                                            <a href="" target="_blank" class="btn btn-red">
                                                <i class="fa fa-chain"></i>&nbsp;&nbsp;View </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- =============================================
    =           category End        =
    =============================================  -->

    <!-- =============================================
    =           news         =
    =============================================  -->
    <!-- <section class="news">
        <div class="container-fluid p-0">
            <div class="row align-items-center max-width mx-auto">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="container p-0">
                        <div class="content-wrapper">
                            <div class="content-block">
                                <h2 class="text-blue">
                                    <strong> NEWS </strong>
                                </h2>
                                <div class="news-showcase row clearfix">

                                    <div class="col-md-4 " data-wow-delay="0.0s">
                                        <div class="news-article-background stretch"></div>

                                        <div class="news-article ">
                                            <div class="news-article-image bg-article-360"
                                                 style="background-image: url('/assets/images/news1.webp');">
                                                <div class="fader stretch soft-hide"></div>
                                            </div>

                                            <div class="news-article-content">
                                                <h5 class="text-red">Tungsram opened its R&amp;D vertical farm </h5>

                                                <p>An R&amp;D purpose vertical farm unique in Central Europe was
                                                    presented in the Újpest
                                                    headquarters of Tungsram. </p>
                                            </div>
                                        </div>

                                        <a class="btn btn-red btn-sm transition-xs" href="">Read article</a>
                                    </div>

                                    <div class="col-md-4 " data-wow-delay="0.1s">
                                        <div class="news-article-background stretch"></div>

                                        <div class="news-article ">
                                            <div class="news-article-image bg-article-352"
                                                 style="background-image: url('/assets/images/news2.webp');">
                                                <div class="fader stretch soft-hide"></div>
                                            </div>

                                            <div class="news-article-content">
                                                <h5 class="text-red">Tungsram Wins Major Tunnel Lighting Project in
                                                    Spain </h5>

                                                <p>The Budapest-based company closes successful year in the
                                                    Mediterranean country </p>
                                            </div>
                                        </div>

                                        <a class="btn btn-red btn-sm transition-xs" href="">Read article</a>
                                    </div>

                                    <div class="col-md-4 wow fadeIn" data-wow-delay="0.2s"
                                         style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                                        <div class="news-article-background stretch"></div>

                                        <div class="news-article ">
                                            <div class="news-article-image bg-article-348"
                                                 style="background-image: url('/assets/images/news3.webp');">
                                                <div class="fader stretch soft-hide"></div>
                                            </div>

                                            <div class="news-article-content">
                                                <h5 class="text-red">Tungsram UV-C Sanitizer</h5>

                                                <p>Keeping customers and staff COVID-safe with a proven technology</p>
                                            </div>
                                        </div>

                                        <a class="btn btn-red btn-sm transition-xs" href="">Read article</a>
                                    </div>


                                </div>

                                <div class="news-showcase row clearfix">

                                    <div class="col-md-4 wow fadeIn" data-wow-delay="0.0s"
                                         style="visibility: visible; animation-delay: 0s; animation-name: fadeIn;">
                                        <div class="news-article-background stretch"></div>

                                        <div class="news-article ">
                                            <div class="news-article-image bg-article-325"
                                                 style="background-image: url('/assets/images/news4.webp');">
                                                <div class="fader stretch soft-hide"></div>
                                            </div>

                                            <div class="news-article-content">
                                                <h5 class="text-red">Tungsram offers seminars at CPD e-learning platform
                                                </h5>

                                                <p>Tungsram UK’s seminars about “IoT, Sensors and the Digital Ceiling”
                                                    and “Smart Cities” are listed
                                                    at CPD e-learning platform</p>
                                            </div>
                                        </div>

                                        <a class="btn btn-red btn-sm transition-xs" href="">Read article</a>
                                    </div>

                                    <div class="col-md-4 wow fadeIn" data-wow-delay="0.1s"
                                         style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                                        <div class="news-article-background stretch"></div>

                                        <div class="news-article ">
                                            <div class="news-article-image bg-article-321"
                                                 style="background-image: url('/assets/images/news5.webp');">
                                                <div class="fader stretch soft-hide"></div>
                                            </div>

                                            <div class="news-article-content">
                                                <h5 class="text-red">New businesses, 2019 results at Tungsram</h5>

                                                <p>New businesses, 2019 results at Tungsram – an interview with Gábor
                                                    Boncz</p>
                                            </div>
                                        </div>

                                        <a class="btn btn-red btn-sm transition-xs" href="">Read article</a>
                                    </div>

                                    <div class="col-md-4 wow fadeIn" data-wow-delay="0.2s"
                                         style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                                        <div class="news-article-background stretch"></div>

                                        <div class="news-article ">
                                            <div class="news-article-image bg-article-317"
                                                 style="background-image: url('/assets/images/news6.webp');">
                                                <div class="fader stretch soft-hide"></div>
                                            </div>

                                            <div class="news-article-content">
                                                <h5 class="text-red">Tungsram donates face shields and lighting products
                                                    to Beirut</h5>

                                                <p>Tungsram is donating protective face shields and lighting products to
                                                    Beirut, Lebanon helping
                                                    rebuilding the city after the devastating explosion in the port of
                                                    the city in August.</p>
                                            </div>
                                        </div>

                                        <a class="btn btn-red btn-sm transition-xs" href="">Read article</a>
                                    </div>
                                </div>
                                <div class="text-center m-t-xxl">
                                    <h3 class="text-blue m-b-lg">
                                        <strong> READ MORE NEWS </strong>
                                    </h3>
                                    <a class="btn btn-red btn-sm transition-xs" href="">Go to news page</a>
                                    <h4 class="m-t-xxl text-uppercase text-blue max-width-100 text-center"
                                        style="background-color: #143A84; color: white; border-radius: 35px; padding: 30px 10px;">
                                        <strong>
                                            <a href="">Read more stories from the Tungsram Heritage</a>
                                        </strong>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- =============================================
    =           news End        =
    =============================================  -->
@endsection
