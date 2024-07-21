<!-- =============================================
=          Header Start        =
=============================================  -->
<section class="header">
    <div class="container-fluid p-0">
        <div class="row align-items-center mx-auto max-width">
            <div class="col-12">
                <div class="web-logo container p-0 mt-3">
                    <a href="/">
                        <img src="/assets/images/logo.png" alt="" style="width:150px;" class="img-fluid">
                    </a>
                </div>
                <div class="header-menu">
                    
                <a href="javascript:void(0)" class="navigation-toggle transition-xs soft-hide">
                                    <i class="fa fa-bars"></i>
                                </a>
                    <div class="container p-0">
                        <div class="website-menu row gx-0">
                            <div class="web-links col-md-12 col-sm-12">
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
                                                    <li><a href="{{ route('products-list') }}">LED Indoor</a></li>
                                                    <li><a href="{{ route('products-list') }}">LED Retrofit</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{ route('professional') }}">Professional</a>
                                                <ul class="nested-menu">
                                                    <li><a href="{{ route('products-list') }}">LED Indoor</a></li>
                                                    <li><a href="{{ route('products-list') }}">LED Retrofit</a></li>
                                                </ul>
                                            </li>
                                            
                                        </ul>
                                    </li>
                                    </li>
                                    <li class="web-link-li">
                                        <a href="{{ route('about.us') }}">About</a>
                                    </li>
                                    <li class="web-link-li">
                                        <a href="{{ route('contact.us') }}">Contact</a>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =============================================
=           Header End         =
=============================================  -->
