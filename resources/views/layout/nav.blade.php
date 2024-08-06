<!-- =============================================
=          Header Start        =
=============================================  -->
<section class="header">
        <div class="container-fluid p-0">
            <div class="row align-items-start">
                <div class="col-md-12 ">
                {{-- <div class="web-logo container p-0 mt-3">
                    <a href="/">
                        <img src="/assets/images/logo.png" alt="" style="width:150px;" class="img-fluid">
                    </a>
                </div> --}}
                <div class="header-menu d-flex">

                    <div class="container d-flex justify-content-between">
                        <div class="web-logo">
                            <a href="/">
                                {{-- <h1 class="text-white">QH</h1> --}}
                                <img src="/assets/images/QH-logo-remove.png" alt="" style="width:150px; padding: 15px 5px;" class="img-fluid">
                            </a>
                        </div>
                        <div class="website-menu row gx-0 px-4 py-3 w-75">
                            <div class="web-links ">
                                <ul class="web-link-ul d-flex align-items-center justify-content-start mb-0 mt-2 gap-4">
                                    <li class="web-link-li">
                                        <a href="/">Home</a>
                                    </li>
                                    <li class="web-link-li">
                                        <a href="{{ route('products') }}">Products</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="{{ route('consumer') }}">Consumer</a>
                                                <ul class="nested-menu">
                                                    @php
                                                        $comsumer_tpye_products = getProductTypes(\App\Models\ProductType::CONSUMER_TYPE);
                                                        $professional_tpye_products= getProductTypes(\App\Models\ProductType::PROFESSIONAL_TYPE);
                                                    @endphp

                                                    @foreach($comsumer_tpye_products as $product)
                                                        <li><a href="{{ route('products-list') }}">{{ $product->type_name }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{ route('professional') }}">Professional</a>
                                                <ul class="nested-menu">
                                                    @foreach($professional_tpye_products as $product)
                                                        <li><a href="{{ route('products-list') }}">{{ $product->type_name }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>

                                        </ul>
                                    </li>
                                    </li>
                                    <li class="web-link-li">
                                        <a href="{{ route('about.us') }}">About us</a>
                                    </li>
                                    <li class="web-link-li">
                                        <a href="{{ route('contact.us') }}">Contact us</a>
                                    </li>


                                      <li class="web-link-li">
                                        <a href="{{ route('support') }}">Support</a>
                                    </li>
                                    <div class="col-md-3 header-right">
                                        <div class="search-bar ">
                                            <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                                        </div>
                                    </div>
                                </ul>
                            </div>

                            <!-- <div class="search-wrap col-sm-2">
                                <div class="d-flex align-items-center justify-content-end gap-2">
                                    <div class="lang">
                                        <select class="form-select form-select-sm shadow-none"
                                                aria-label="Large select example">
                                            <option selected="selected" value="/en">EN - English</option>
                                            <option value="/hu">HU - Magyar</option>
                                            <option value="/se">SE - Svenska</option>
                                            <option value="/it">IT - Italiano</option>
                                            <option value="/fr">FR - Français</option>
                                            <option value="/es">ES - Español</option>
                                            <option value="/ru">RU - русский</option>
                                            <option value="/de">DE - Deutsch</option>
                                        </select>
                                    </div>

                                    <div class="search-button">
                                        <a href="javascript:void(0)">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </a>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div class="web-search"></div>
                    </div>
                    <a href="javascript:void(0)" class="navigation-toggle transition-xs soft-hide">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- =============================================
=           Header End         =
=============================================  -->
