<div class="topbar">
    <div class="container">
        <div class="row align-items-center">
        <div class="col-lg-9">
            <div class="topbar-text">
                {{-- <div class="text-slider swiper-container">
                    <div class="swiper-wrapper">
                    <div class="swiper-slide"> {{ $config->web_title }} xin chào!
                    </div>
                    <div class="swiper-slide"> Thiên đường làm đẹp
                    </div>
                    <div class="swiper-slide"> Không gian sang trọng
                    </div>
                    <div class="swiper-slide"> Mang đến sự thoải mái
                    </div>
                    </div>
                </div> --}}
                <marquee behavior="scroll" direction="left">
                    <span class="text-slider">{{ $config->short_name_company }}</span>
                </marquee>
            </div>
        </div>
        <div class="col-lg-3 d-none d-lg-block">
            <ul class="topbar-account">
                {{-- <li class="li-account">
                    <a rel="nofollow" href="/account/login" title="Đăng nhập">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"></path>
                        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"></path>
                    </svg>
                    Đăng nhập
                    </a>
                </li>
                <li class="li-account">
                    <a rel="nofollow" href="/account/register" title="Đăng ký">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"></path>
                    </svg>
                    Đăng ký
                    </a>
                </li> --}}
                <li class="li-account">
                    <a rel="nofollow" href="{{ route('front.contact-us') }}" title="Hệ thống cửa hàng">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg>
                    Hệ thống cửa hàng
                    </a>
                </li>
            </ul>
        </div>
        </div>
    </div>
</div>
<header class="header">
    <div class="container">
        <div class="row row-fix align-items-center">
        <div class="col-lg-2 col-5 col-fix margin-0">
            <a href="{{ route('front.home-page') }}" class="logo" title="Logo">
            <img width="414" height="85" src="{{ $config->image->path ?? '' }}" alt="{{ $config->web_title }}">
            </a>
        </div>
        <div class="col-lg-8 col-fix margin-0 d-none d-lg-block">
            <div class="header-menu-des">
                <nav class="header-nav d-none d-lg-block">
                    <ul class="item_big">
                    <li class="title-mobile d-block d-lg-none">
                        <span>{{ $config->web_title }}</span>
                    </li>
                    <li class="d-block d-lg-none title-danhmuc"><span>Menu chính</span></li>
                    <li class="nav-item @if (Route::is('front.home-page')) active @endif  ">
                        <a class="a-img" href="{{ route('front.home-page') }}" title="Trang chủ">
                        Trang chủ
                        </a>
                    </li>
                    <li class="nav-item @if (Route::is('front.about-us')) active @endif  ">
                        <a class="a-img" href="{{ route('front.about-us') }}" title="Giới thiệu">
                        Giới thiệu
                        </a>
                    </li>
                    @foreach ($productCategories as $category)
                    <li class="nav-item @if ($category->childs->count() > 0) has-mega @endif @if (Route::is('front.show-product-category', $category->slug)) active @endif  " >
                        <a class="a-img @if ($category->childs->count() > 0) caret-down @endif" href="{{route('front.show-product-category', $category->slug)}}" title="{{ $category->name }}">
                        {{ $category->name }}
                        </a>
                        @if ($category->childs->count() > 0)
                        <i class="fa fa-caret-down"></i>
                        <div class="mega-content d-lg-block d-none">
                            <div class="row">
                                <div class="col-lg-12">
                                <ul class="level0">
                                    @foreach ($category->childs as $child)
                                    <li class="level1 parent item fix-navs" data-title="{{ $child->name }}" data-link="{{route('front.show-product-category', $child->slug)}}" >
                                        <a class="hmega" href="{{route('front.show-product-category', $child->slug)}}" title="{{ $child->name }}">{{ $child->name }}</a>
                                        @if ($child->childs->count() > 0)
                                        <ul class="level1">
                                            @foreach ($child->childs as $childChild)
                                            <li class="level2">
                                            <a href="{{route('front.show-product-category', $childChild->slug)}}" title="{{ $childChild->name }}">{{ $childChild->name }}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @endif
                                    </li>
                                    @endforeach
                                </ul>
                                </div>
                            </div>
                        </div>
                        <ul class="item_small d-lg-none d-block">
                            @foreach ($category->childs as $child)
                            <li>
                                <a class="caret-down" href="{{route('front.show-product-category', $child->slug)}}" title="{{ $child->name }}">
                                {{ $child->name }}
                                </a>
                                @if ($child->childs->count() > 0)
                                <i class="fa fa-caret-down"></i>
                                <ul>
                                    @foreach ($child->childs as $childChild)
                                    <li>
                                        <a href="{{route('front.show-product-category', $childChild->slug)}}" title="{{ $childChild->name }}" class="a3">{{ $childChild->name }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                                @endif
                            </li>
                            @endforeach
                        </ul>
                        @endif
                    </li>
                    @endforeach
                    <li class="nav-item @if (Route::is('front.service')) active @endif  " >
                        <a class="a-img caret-down" href="{{ route('front.service') }}" title="Dịch vụ">
                        Dịch vụ
                        </a>
                        <i class="fa fa-caret-down"></i>
                        <ul class="item_small">
                            @foreach ($listServiceType as $type)
                            <li>
                                <a class="" href="{{ route('front.service-type', $type->slug) }}" title="{{ $type->name }}">
                                {{ $type->name }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item @if (Route::is('front.travel')) active @endif  ">
                        <a class="a-img" href="{{ route('front.travel') }}" title="Lữ hành">
                        Lữ hành
                        </a>
                    </li>
                    @foreach ($postCategories as $postCategory)
                    <li class="nav-item @if (Route::is('front.list-blog', $postCategory->slug)) active @endif  ">
                        <a class="a-img" href="{{ route('front.list-blog', $postCategory->slug) }}" title="{{ $postCategory->name }}">
                        {{ $postCategory->name }}
                        </a>
                    </li>
                    @endforeach
                    <li class="nav-item @if (Route::is('front.contact-us')) active @endif  ">
                        <a class="a-img" href="{{ route('front.contact-us') }}" title="Liên hệ">
                        Liên hệ
                        </a>
                    </li>
                    </ul>
                </nav>
                <div class="control-menu d-none">
                    <a href="#" id="prev">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path fill="#fff" d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 278.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/>
                    </svg>
                    </a>
                    <a href="#" id="next">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path fill="#fff" d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/>
                    </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-7 col-fix margin-0">
            <ul class="header-control">
                <li class="control button-search">
                    <div title="Tìm kiếm">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                            <g transform="translate(-2 -2)">
                                <g transform="translate(2 2)">
                                <path d="M24.1,0.5c12.7,0,23.1,10.3,23.1,23c0,5.8-2.2,11.3-6.1,15.6l7.4,7.4c0.7,0.7,0.7,1.8,0,2.5   c-0.7,0.7-1.8,0.7-2.5,0l0,0l-7.5-7.5c-9.9,8-24.5,6.3-32.4-3.6S-0.3,13.5,9.7,5.5C13.8,2.2,18.8,0.5,24.1,0.5z M24.1,4   C13.3,4,4.6,12.7,4.6,23.5S13.3,43,24.1,43s19.5-8.7,19.5-19.5C43.6,12.8,34.8,4,24.1,4z"></path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    </div>
                </li>
                {{-- <li class="control">
                    <a href="/san-pham-yeu-thich" title="Yêu thích">
                    <div class="icon">
                        <svg style="    position: relative;  top: 1px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
                        </svg>
                    </div>
                    <span class="count js-wishlist-count">0</span>
                    </a>
                </li>
                <li class="control header-cart block-cart">
                    <a href="/cart" title="Giỏ hàng">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                            <g id="Iconly_Light-Outline_Buy" transform="translate(-2.39 -3)">
                                <g id="Buy" transform="translate(2.39 3)">
                                <path id="Combined-Shape" d="M12.9,43c1.8,0,3.2,1.4,3.2,3.2s-1.4,3.2-3.2,3.2c-1.8,0-3.2-1.4-3.2-3.2C9.7,44.4,11.1,43,12.9,43z    M41.1,43c1.8,0,3.2,1.4,3.2,3.2s-1.4,3.2-3.2,3.2s-3.2-1.4-3.2-3.2C37.9,44.4,39.3,43,41.1,43z M2.2,0.6l5.2,0.9   c0.8,0.1,1.5,0.8,1.5,1.7l0.6,7h36c2.9,0.4,4.8,3.1,4.4,5.9c0,0,0,0,0,0l-2.4,16.4c-0.5,3.1-3.1,5.5-6.3,5.5H14   c-3.3,0-6.1-2.6-6.4-5.9L5.3,4.9L1.5,4.3C0.5,4.1-0.1,3.1,0,2.1C0.2,1.1,1.2,0.4,2.2,0.6z M11.2,13.9H9.8l1.5,17.9   c0.1,1.4,1.2,2.4,2.6,2.4h27.3c1.3,0,2.4-1,2.6-2.3l2.4-16.4c0.1-0.4,0-0.8-0.3-1.1c-0.2-0.3-0.6-0.5-1-0.6L11.2,13.9L11.2,13.9z    M37.2,19.4c1,0,1.9,0.8,1.9,1.9s-0.8,1.9-1.9,1.9h-6.9c-1,0-1.9-0.8-1.9-1.9s0.8-1.9,1.9-1.9H37.2z"></path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="count count_item_pr">0</span>
                    </a>
                    <div class="top-cart-content">
                    <div class="CartHeaderContainer">
                    </div>
                    </div>
                </li> --}}
                <li class="control ">
                    <div class="menu-bar"  title="Menu">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="four-dot-ham" x="0px" y="0px" viewBox="0 0 45 47.5" style="enable-background:new 0 0 45 47.5;" xml:space="preserve">
                            <path d="M35,3c3.9,0,7,3.1,7,7s-3.1,7-7,7s-7-3.1-7-7S31.1,3,35,3 M10,3c3.9,0,7,3.1,7,7s-3.1,7-7,7s-7-3.1-7-7S6.1,3,10,3 M35,30.5 c3.9,0,7,3.1,7,7s-3.1,7-7,7s-7-3.1-7-7S31.1,30.5,35,30.5 M10,30.5c3.9,0,7,3.1,7,7s-3.1,7-7,7s-7-3.1-7-7S6.1,30.5,10,30.5 M35,0 c-5.5,0-10,4.5-10,10s4.5,10,10,10s10-4.5,10-10S40.5,0,35,0z M10,0C4.5,0,0,4.5,0,10s4.5,10,10,10s10-4.5,10-10S15.5,0,10,0z  M35,27.5c-5.5,0-10,4.5-10,10s4.5,10,10,10s10-4.5,10-10S40.5,27.5,35,27.5z M10,27.5c-5.5,0-10,4.5-10,10s4.5,10,10,10 s10-4.5,10-10S15.5,27.5,10,27.5z"></path>
                        </svg>
                    </div>
                    </div>
                </li>
            </ul>
        </div>
        </div>
    </div>
</header>
<nav class="menu-sub">
    <ul class="item_big">
        <li class="title-danhmuc">
            <span>{{ $config->web_title }}</span>
            <div class="close-popup">
                <svg class="Icon Icon--close" viewBox="0 0 16 14">
                    <path d="M15 0L1 14m14 0L1 0" stroke="currentColor" fill="none" fill-rule="evenodd"></path>
                </svg>
            </div>
        </li>
        <li class="title d-flex d-lg-none">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
                    <path d="M50,99c-9.7,0-17.6-7.9-17.6-17.6c0-8.2,3.6-12.5,11.5-19.8c3.1-2.8,4.3-5.2,4.3-7.5v-2.3h-2.3c-2.7,0-6.3,2.7-10.8,7.9 c-4.6,5.4-10.1,7.9-16.5,7.9C8.9,67.6,1,59.7,1,50s7.9-17.6,17.6-17.6c6.5,0,11.9,2.7,16.3,7.8c4.5,5.1,8.2,7.8,11,7.8h2.3v-2 c0-2.3-1.3-4.7-4.3-7.5l-2.9-2.7c-4.3-4-8.5-9.2-8.5-17.1C32.4,8.9,40.2,1,50,1c9.7,0,17.6,8,17.6,17.6c0,6.5-2.7,11.9-7.8,16.3 c-5.1,4.5-7.8,8-7.8,11v2h2c2.9,0,6.6-2.7,11-7.8c4.3-5.2,9.8-7.8,16.3-7.8C91.1,32.4,99,40.2,99,50c0,9.7-7.9,17.6-17.6,17.6 c-8,0-12.9-4-19.8-11.5c-2.8-3.1-5.2-4.3-7.5-4.3h-2v2.3c0,2.9,2.6,6.8,7.8,11c5.2,4.2,7.8,9.7,7.8,16.3C67.6,91.1,59.8,99,50,99z"/>
                </svg>
                Menu chính
            </span>
        </li>
        <li class="nav-item d-block d-lg-none active  ">
            <a class="a-img" href="{{ route('front.home-page') }}" title="Trang chủ">
            Trang chủ
            </a>
        </li>
        <li class="nav-item d-block d-lg-none  ">
            <a class="a-img" href="{{ route('front.about-us') }}" title="Giới thiệu">
            Giới thiệu
            </a>
        </li>
        @foreach ($productCategories as $productCategory)
        <li class="nav-item  d-block d-lg-none   has-mega " >
            <a class="a-img @if ($productCategory->childs->count() > 0) caret-down @endif" href="{{ route('front.show-product-category', $productCategory->slug) }}" title="{{ $productCategory->name }}">
            {{ $productCategory->name }}
            </a>
            @if ($productCategory->childs->count() > 0)
            <i class="fa fa-caret-down"></i>
            <ul class="item_small">
                @foreach ($productCategory->childs as $child)
                <li>
                    <a class="caret-down" href="{{ route('front.show-product-category', $child->slug) }}" title="{{ $child->name }}">
                    {{ $child->name }}
                    </a>
                    @if ($child->childs->count() > 0)
                    <i class="fa fa-caret-down"></i>
                    <ul>
                        @foreach ($child->childs as $childChild)
                        <li>
                            <a href="{{ route('front.show-product-category', $childChild->slug) }}" title="{{ $childChild->name }}" class="a3">{{ $childChild->name }}</a>
                        </li>
                        @endforeach
                    </ul>
                    @endif
                </li>
                @endforeach
            </ul>
            @endif
        </li>
        @endforeach
        <li class="nav-item  d-block d-lg-none   " >
            <a class="a-img caret-down" href="{{ route('front.service') }}" title="Dịch vụ">
            Dịch vụ
            </a>
            @if ($listServiceType->count() > 0)
            <i class="fa fa-caret-down"></i>
            <ul class="item_small">
                @foreach ($listServiceType as $type)
                <li>
                    <a class="" href="{{ route('front.service-type', $type->slug) }}" title="{{ $type->name }}">
                    {{ $type->name }}
                    </a>
                </li>
                @endforeach
            </ul>
            @endif
        </li>
        <li class="nav-item d-block d-lg-none  ">
            <a class="a-img" href="{{ route('front.travel')}}" title="Lữ hành">
            Lữ hành
            </a>
        </li>
        @foreach ($postCategories as $postCategory)
        <li class="nav-item d-block d-lg-none  ">
            <a class="a-img" href="{{ route('front.list-blog', $postCategory->slug) }}" title="{{$postCategory->name}}">
            {{$postCategory->name}}
            </a>
        </li>
        @endforeach

        <li class="nav-item d-block d-lg-none  ">
            <a class="a-img" href="{{ route('front.contact-us') }}" title="Liên hệ">
            Liên hệ
            </a>
        </li>
        <li class="title dv">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
                    <path d="M50,99c-9.7,0-17.6-7.9-17.6-17.6c0-8.2,3.6-12.5,11.5-19.8c3.1-2.8,4.3-5.2,4.3-7.5v-2.3h-2.3c-2.7,0-6.3,2.7-10.8,7.9 c-4.6,5.4-10.1,7.9-16.5,7.9C8.9,67.6,1,59.7,1,50s7.9-17.6,17.6-17.6c6.5,0,11.9,2.7,16.3,7.8c4.5,5.1,8.2,7.8,11,7.8h2.3v-2 c0-2.3-1.3-4.7-4.3-7.5l-2.9-2.7c-4.3-4-8.5-9.2-8.5-17.1C32.4,8.9,40.2,1,50,1c9.7,0,17.6,8,17.6,17.6c0,6.5-2.7,11.9-7.8,16.3 c-5.1,4.5-7.8,8-7.8,11v2h2c2.9,0,6.6-2.7,11-7.8c4.3-5.2,9.8-7.8,16.3-7.8C91.1,32.4,99,40.2,99,50c0,9.7-7.9,17.6-17.6,17.6 c-8,0-12.9-4-19.8-11.5c-2.8-3.1-5.2-4.3-7.5-4.3h-2v2.3c0,2.9,2.6,6.8,7.8,11c5.2,4.2,7.8,9.7,7.8,16.3C67.6,91.1,59.8,99,50,99z"/>
                </svg>
                Dịch vụ
            </span>
        </li>
        @foreach ($listService as $service)
            <li class="nav-item  ">
                <a class="a-img" href="{{ route('front.service-detail', $service->slug) }}" title="{{ $service->name }}">
                {{ $service->name }}
                </a>
            </li>
        @endforeach
        <li class="title cuahang">
        <span>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
                <path d="M50,99c-9.7,0-17.6-7.9-17.6-17.6c0-8.2,3.6-12.5,11.5-19.8c3.1-2.8,4.3-5.2,4.3-7.5v-2.3h-2.3c-2.7,0-6.3,2.7-10.8,7.9 c-4.6,5.4-10.1,7.9-16.5,7.9C8.9,67.6,1,59.7,1,50s7.9-17.6,17.6-17.6c6.5,0,11.9,2.7,16.3,7.8c4.5,5.1,8.2,7.8,11,7.8h2.3v-2 c0-2.3-1.3-4.7-4.3-7.5l-2.9-2.7c-4.3-4-8.5-9.2-8.5-17.1C32.4,8.9,40.2,1,50,1c9.7,0,17.6,8,17.6,17.6c0,6.5-2.7,11.9-7.8,16.3 c-5.1,4.5-7.8,8-7.8,11v2h2c2.9,0,6.6-2.7,11-7.8c4.3-5.2,9.8-7.8,16.3-7.8C91.1,32.4,99,40.2,99,50c0,9.7-7.9,17.6-17.6,17.6 c-8,0-12.9-4-19.8-11.5c-2.8-3.1-5.2-4.3-7.5-4.3h-2v2.3c0,2.9,2.6,6.8,7.8,11c5.2,4.2,7.8,9.7,7.8,16.3C67.6,91.1,59.8,99,50,99z"/>
            </svg>
            Thông tin cửa hàng
        </span>
        </li>
        <li class="group-address">
        <ul>
            <li><b>Địa chỉ: </b><span>
                {{ $config->address_company}}
                </span>
            </li>
            <li>
                <b>Điện thoại: </b><a title="{{$config->hotline}}" href="tel:{{ str_replace('&', ' &amp; ', $config->hotline) }}">{{$config->hotline}}</a>
            </li>
            <li>
                <b>Email: </b><a  title="{{ $config->email }}" href="mailto:{{ $config->email }}">{{ $config->email }}</a>
            </li>
        </ul>
        <ul class="social">
            <li><a href="#" title="Facebook"><img width="32" height="32" title="Facebook" class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/facebook.png?1727784692442"></a></li>
            <li><a href="#" title="Youtube"><img width="32" height="32" title="Youtube" class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/youtube.png?1727784692442"></a></li>
            <li><a href="#" title="twitter"><img width="32" height="32" title="twitter" class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/twitter.png?1727784692442"></a></li>
            <li><a href="#" title="pinterest"><img width="32" height="32" title="pinterest" class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/pinterest.png?1727784692442"></a></li>
            <li><a href="#" title="instagram"><img width="32" height="32" title="instagram" class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/instagram.png?1727784692442"></a></li>
        </ul>
        </li>
    </ul>
</nav>
<div class="popup-search">
    <div class="search-header">
        <div class="search-smart">
        <form action="/search" method="get" class="header-search-form input-group search-bar" role="search">
            <input type="text" name="query" required class="input-group-field auto-search search-auto form-control" placeholder="Bạn cần tìm gì..." autocomplete="off">
            <input type="hidden" name="type" value="product">
            <button type="submit" class="btn icon-fallback-text" aria-label="Tìm kiếm" title="Tìm kiếm">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                    <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path fill="#fff" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
                </svg>
            </button>
            <div class="search-suggest">
                <ul class="smart-search-title">
                    <li data-tab="#tab-search-1" class="active">
                    <div title="Sản phẩm">Sản phẩm</div>
                    </li>
                    <li data-tab="#tab-search-2">
                    <div title="Tin tức">Tin tức</div>
                    </li>
                </ul>
                <div class="list-search-suggest">
                    <div class="list-search list-search-style active" id="tab-search-1">
                    </div>
                    <div class="list-search2 list-search-style" id="tab-search-2">
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
    <div  class="close-popup-search">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
        <g>
            <g>
                <path d="M284.286,256.002L506.143,34.144c7.811-7.811,7.811-20.475,0-28.285c-7.811-7.81-20.475-7.811-28.285,0L256,227.717    L34.143,5.859c-7.811-7.811-20.475-7.811-28.285,0c-7.81,7.811-7.811,20.475,0,28.285l221.857,221.857L5.858,477.859    c-7.811,7.811-7.811,20.475,0,28.285c3.905,3.905,9.024,5.857,14.143,5.857c5.119,0,10.237-1.952,14.143-5.857L256,284.287    l221.857,221.857c3.905,3.905,9.024,5.857,14.143,5.857s10.237-1.952,14.143-5.857c7.811-7.811,7.811-20.475,0-28.285    L284.286,256.002z"></path>
            </g>
        </g>
        </svg>
    </div>
</div>
