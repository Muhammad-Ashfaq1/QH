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
                                        <a href="{{ route('product.group') }}" class="products-link">Products</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="{{ route('consumer') }}">Consumer</a>
                                                <ul class="nested-menu">
                                                 @foreach(@$consumerCategories ?? [] as $category)
                                        <li><a
                                                href="{{ route('product-list', ['id' => $category->id]) }}">{{ $category->type_name }}</a>
                                        </li>
                                        @endforeach



                                                    <li><a href="{{ route('products-list') }}">LED Indoor</a></li>
                                                    <li><a href="{{ route('products-list') }}">LED Retrofit</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{ route('professional') }}">Professional</a>
                                                <ul class="nested-menu">
                                                 @foreach(@$professionalCategories ?? [] as $category)
                                        <li><a
                                                href="{{ route('product-list', ['id' => $category->id]) }}">{{ $category->type_name }}</a>
                                        </li>
                                        @endforeach



                                                    <li><a href="{{ route('products-list') }}">LED Indoor</a></li>
                                                    <li><a href="{{ route('products-list') }}">LED Retrofit</a></li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </li>
                                    </li>
                                    <li class="web-link-li">
                                        <a href="{{ route('about.us') }}">About us</a>
                                    </li>
                                    <li class="web-link-li">
                                        <a href="{{ route('contact-us.index') }}">Contact us</a>
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


<script src="{{ asset('assetss/js/new-script.js') }}"></script>
<script>
$(document).ready(function() {
    const productsLink = $('.products-link');
    const productDropdown = $('.product-dropdown');
    $(document).on('click', function(event) {
        const isClickInside = productsLink.is(event.target) || productDropdown.has(event.target)
            .length > 0;
        if (!isClickInside) {
            productDropdown.removeClass('active');
            closeAllSubmenus();
        }
    });

    productDropdown.on('click', function(event) {
        event.stopPropagation();
    });

    productDropdown.on('mouseenter', function() {
        productDropdown.addClass('active');
    });


    productDropdown.on('mouseleave', function(event) {
        if (!isMouseOverDropdown(event)) {
            productDropdown.removeClass('active');
            closeAllSubmenus();
        }
    });
    // nested menu
    const submenuItems = $('.product-dropdown .nestedMenu');
    submenuItems.each(function() {
        const submenu = $(this);
        const parentItem = submenu.parent();
        parentItem.on('mouseenter', function() {
            submenu.css('display', 'block');
        });
        parentItem.on('mouseleave', function(event) {
            if (!isMouseOverElement(event, submenu.get(0))) {
                submenu.css('display', 'none');
            }
        });
        parentItem.on('click', function(event) {
            event
                .stopPropagation();
        });
    });

    function closeAllSubmenus() {
        submenuItems.css('display', 'none');
    }

    function isMouseOverDropdown(event) {
        return $(event.relatedTarget).is(productDropdown) || productDropdown.has(event.relatedTarget).length >
            0;
    }

    function isMouseOverElement(event, element) {
        return $(event.relatedTarget).is(element) || $.contains(element, event.relatedTarget);
    }
    $('.product-dropdown').find('li').each(function(index) {
        $(this).css('animation-delay', (index + 1) * 0.02 + 's');
    });
});
</script>
<!-- =============================================
=           Header End         =
=============================================  -->
