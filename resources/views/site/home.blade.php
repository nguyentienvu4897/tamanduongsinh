@extends('site.layouts.master')
@section('title')
{{$config->web_title}}
@endsection
@section('description')
{{$config->web_des}}
@endsection
@section('image')
{{url(''.$banners[0]->image->path)}}
@endsection
@section('css')
<link href="{{ asset('/site/css/style_page.scss.css') }}" rel="stylesheet" type="text/css" media="all" />
@endsection
@section('content')
<div class="bodywrap">
    <h1 class="d-none">{{$config->web_title}} - </h1>
    <section class="section_slider">
        <div class="home-slider swiper-container">
        <div class="swiper-wrapper">
            @foreach ($banners as $banner)
                <div class="swiper-slide">
                    <div class="clearfix thumb-image">
                        <picture>
                        <source
                            media="(min-width: 1200px)"
                            srcset="{{$banner->image->path}}">
                        <source
                            media="(min-width: 992px)"
                            srcset="{{$banner->image->path}}">
                        <source
                            media="(min-width: 569px)"
                            srcset="{{$banner->image->path}}">
                        <source
                            media="(max-width: 567px)"
                            srcset="{{$banner->image->path}}">
                        <img width="1920" height="900" src="{{$banner->image->path}}" alt="Slider" class="img-responsive" />
                        </picture>
                    </div>
                    {{-- <div class="thumb-slider-text">
                        <div class="slider-text">
                        <h2 class="title">
                            {{$banner->title}}
                        </h2>
                        <div class="content">
                            {!!$banner->intro!!}
                        </div>
                        <a class="button" href="{{$banner->link}}" title="Xem ngay">Xem ngay</a>
                        </div>
                    </div> --}}
                </div>
            @endforeach
        </div>
        </div>
    </section>
    <script>
        var swiper = new Swiper('.home-slider', {
            autoplay: {
                delay: 5000,
            },
            effect: 'fade',
            pagination: {
                el: '.home-slider .swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.home-slider .swiper-button-next',
                prevEl: '.home-slider .swiper-button-prev',
            },
        });
    </script>
    {{-- <section class="section_chinhsach section2">
        <div class="container">
        <div class="chinhsach-thumb">
            <div class="chinhsach-swiper swiper-container">
                <div class="swiper-wrapper">
                    <div  class="swiper-slide">
                    <img width="64" height="64" src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/chinhsach_1.png?1727784692442" alt="Miễn phí vẫn chuyển">
                    <div class="text">
                        <span class="title">Miễn phí vẫn chuyển</span>
                        <span class="des">Cho tất cả đơn hàng trong nội thành Hà Nội</span>
                    </div>
                    </div>
                    <div  class="swiper-slide">
                    <img width="64" height="64" src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/chinhsach_2.png?1727784692442" alt="Miễn phí đổi - trả">
                    <div class="text">
                        <span class="title">Miễn phí đổi - trả</span>
                        <span class="des">Đối với sản phẩm lỗi sản xuất hoặc vận chuyển</span>
                    </div>
                    </div>
                    <div  class="swiper-slide">
                    <img width="64" height="64" src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/chinhsach_3.png?1727784692442" alt="Hỗ trợ nhanh chóng">
                    <div class="text">
                        <span class="title">Hỗ trợ nhanh chóng</span>
                        <span class="des">Gọi Hotline: 19006750 để được hỗ trợ ngay lập tức</span>
                    </div>
                    </div>
                    <div  class="swiper-slide">
                    <img width="64" height="64" src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/chinhsach_4.png?1727784692442" alt="Ưu đãi thành viên">
                    <div class="text">
                        <span class="title">Ưu đãi thành viên</span>
                        <span class="des">Đăng ký thành viên để được nhận được nhiều khuyến mãi</span>
                    </div>
                    </div>
                </div>
                <div class="swiper-button-next">
                </div>
                <div class="swiper-button-prev">
                </div>
            </div>
        </div>
        </div>
    </section> --}}
    {{-- <script>
        var swiperchinhsach = new Swiper('.chinhsach-swiper', {
            slidesPerView: 3,
            loop: false,
            grabCursor: true,
            spaceBetween: 30,
            roundLengths: true,
            slideToClickedSlide: false,
            navigation: {
                nextEl: '.chinhsach-swiper .swiper-button-next',
                prevEl: '.chinhsach-swiper .swiper-button-prev',
            },
            autoplay: false,
            breakpoints: {
                300: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                500: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 10
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 30
                },
                991: {
                    slidesPerView: 3,
                    spaceBetween: 30
                },
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 30
                }
            }
        });
    </script> --}}
    <section class="section_about section3">
        <div class="container">
        <div class="row" >
            <div class="col-12 col-lg-5 col-md-12 " style="    text-align: center;">
                <picture>
                    <source
                    media="(max-width: 567px)"
                    srcset="{{$config->about_image->path}}">
                    <img width="836" height="1081" src="{{$config->about_image->path}}" alt="{{$config->web_title}}">
                </picture>
            </div>
            <div class="col-12 col-lg-7 col-md-12 thump-content">
                <h2>
                    {{$config->web_title}}
                </h2>
                <span class="content">
                {!!$config->web_des!!}
                </span>
                <div class="row row-fix">
                    <div class="col-md-6 col-fix item">
                    <div class="icon">
                        <img width="64" height="64" alt="Nâng niu, chăm sóc làn da" class="lazyload" src="/site/images/lazy.png"  data-src="/site/images/about_content_image_1.png">
                    </div>
                    Nâng niu, chăm sóc làn da
                    </div>
                    <div class="col-md-6 col-fix item">
                    <div class="icon">
                        <img width="64" height="64" alt="Điều trị chuyên sâu" class="lazyload" src="/site/images/lazy.png"  data-src="/site/images/about_content_image_2.png">
                    </div>
                    Điều trị chuyên sâu
                    </div>
                    <div class="col-md-6 col-fix item">
                    <div class="icon">
                        <img width="64" height="64" alt="Sản phẩm điều trị đặc biệt" class="lazyload" src="/site/images/lazy.png"  data-src="/site/images/about_content_image_3.png">
                    </div>
                    Sản phẩm điều trị đặc biệt
                    </div>
                    <div class="col-md-6 col-fix item">
                    <div class="icon">
                        <img width="64" height="64" alt="Thăm khám, soi da hoàn toàn miễn phí" class="lazyload" src="/site/images/lazy.png"  data-src="/site/images/about_content_image_4.png">
                    </div>
                    Thăm khám, soi da hoàn toàn miễn phí
                    </div>
                    <div class="col-md-6 col-fix item">
                    <div class="icon">
                        <img width="64" height="64" alt="Trang thiết bị hiện đại" class="lazyload" src="/site/images/lazy.png"  data-src="/site/images/about_content_image_5.png">
                    </div>
                    Trang thiết bị hiện đại
                    </div>
                    <div class="col-md-6 col-fix item">
                    <div class="icon">
                        <img width="64" height="64" alt="Đội ngũ kỹ thuật viên giàu kinh nghiệm" class="lazyload" src="/site/images/lazy.png"  data-src="/site/images/about_content_image_6.png">
                    </div>
                    Đội ngũ kỹ thuật viên giàu kinh nghiệm
                    </div>
                </div>
                <a class="see" href="{{route('front.about-us')}}" title="Tìm hiểu thêm">Tìm hiểu thêm</a>
                <div class="call-about">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
                    <path d="M76,38.7C76,22.1,59.1,8.6,38.5,8.6S1,22.1,1,38.7c0.2,8.7,4.5,16.8,11.7,21.8l0.6,19.3l15.9-12 c3.1,0.6,6.2,1,9.3,1C59.1,68.7,75.9,55.2,76,38.7 M38.5,62.5c-3.5,0.1-7-0.3-10.3-1.3L18.1,70l-0.4-13.4 C10.9,52.2,7.2,46.3,7.2,38.7c0-13.2,14-23.9,31.3-23.9s31.3,10.7,31.3,23.9S55.8,62.5,38.5,62.5 M79,28.4c1.8,3.7,2.8,7.8,2.8,12 c-0.2,9.3-4.7,18.1-12.1,23.7c-8.1,6.3-18.2,9.6-28.4,9.5c-0.2,0-0.5,0-0.7,0c6.9,5.1,15.3,7.8,23.9,7.8c2.9,0,5.8-0.3,8.6-0.9 l14.7,11l0.5-17.7c6.6-4.6,10.6-12.1,10.8-20.2C99,42.4,90.8,32.8,79,28.4"></path>
                    </svg>
                    <div>
                    Gọi ngay cho chúng tôi để được tư vấn bất cứ lúc nào
                    <a href="tel:{{str_replace(' ', '', $config->hotline)}}" title="{{ str_replace(' ', '', $config->hotline)}}">{{$config->hotline}}</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    @foreach ($listServiceTypes as $type)
    @if ($type->services->count() > 0)
    <section class="section_product_dichvu">
        <div class="container">
        <h3 class="title-index p-5">
            <a class="title-name" href="{{route('front.service-type', $type->slug)}}" title="{{$type->name}}">{{$type->name}}
            </a>
            <img width="320" height="24" class="lazyload" src="/site/images/lazy.png"  data-src="/site/images/title.png" alt="{{$config->web_title}}">
        </h3>
        <div class="product-dichvu-swiper swiper_pro swiper-container">
            <div class="swiper-wrapper load-after" data-section="section_product_dichvu">
                @foreach ($type->services as $service)
                    <div class="swiper-slide">
                        @include('site.services.service_item', ['service' => $service])
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-next">
            </div>
            <div class="swiper-button-prev">
            </div>
        </div>
        </div>
    </section>
    <script>
        $(document).ready(function ($) {
            function runSwiperProdichvu() {
                var swiper_pro_dichvu = null;
                function initSwiperProdichvu() {
                    swiper_pro_dichvu = new Swiper('.product-dichvu-swiper', {
                        slidesPerView: 3,
                        loop: false,
                        grabCursor: true,
                        roundLengths: true,
                        slideToClickedSlide: false,
                        spaceBetween: 20,
                        autoplay: false,
                        navigation: {
                            nextEl: '.product-dichvu-swiper .swiper-button-next',
                            prevEl: '.product-dichvu-swiper .swiper-button-prev',
                        },
                        breakpoints: {
                            300: {
                                slidesPerView: 1,
                                spaceBetween: 15,
                            },
                            450: {
                                slidesPerView: 2,
                            },
                            640: {
                                slidesPerView: 2,
                                spaceBetween: 15
                            },
                            767: {
                                slidesPerView: 2,
                                spaceBetween: 15
                            },
                            991: {
                                slidesPerView: 3,
                                spaceBetween: 15
                            },
                            1200: {
                                slidesPerView: 4,
                                spaceBetween: 20
                            }
                        }
                    });
                }
                function destroySwiperProdichvu() {
                    if (swiper_pro_dichvu) {
                        swiper_pro_dichvu.destroy(true, true);
                        swiper_pro_dichvu = null;
                    }
                }
                function toggleSwiperProdichvu() {
                    initSwiperProdichvu();
                }
                toggleSwiperProdichvu();
                $(window).resize(toggleSwiperProdichvu);
            }
            lazyBlockProduct('section_product_dichvu','0px 0px -250px 0px',runSwiperProdichvu);
        });
    </script>
    @endif
    @endforeach
    <section class="section_product section5 section_product">
        <div class="container">
        <h3 class="title-index p-5">
            <a class="title-name" href="#" title="Sản phẩm nổi bật">Sản phẩm nổi bật
            </a>
            <img width="320" height="24" class="lazyload" src="/site/images/lazy.png"  data-src="/site/images/title.png" alt="{{$config->web_title}}">
        </h3>
        <div class="block-product-list">
            <div class="product-swiper swiper_pro swiper-container">
                <div class="swiper-wrapper load-after" data-section="section_product">
                    @foreach ($listProducts as $product)
                    <div class="swiper-slide">
                        @include('site.products.product_item', ['product' => $product])
                    </div>
                    @endforeach
                </div>
                <div class="swiper-button-next">
                </div>
                <div class="swiper-button-prev">
                </div>
            </div>
        </div>
        </div>
    </section>
    <script>
        $(document).ready(function ($) {
            function runSwiperPro() {
                var swiper_pro = null;
                function initSwiperPro() {
                    swiper_pro = new Swiper('.product-swiper', {
                        slidesPerView: 3,
                        loop: false,
                        grabCursor: true,
                        roundLengths: true,
                        slideToClickedSlide: false,
                        spaceBetween: 20,
                        autoplay: false,
                        navigation: {
                            nextEl: '.section_product .swiper-button-next',
                            prevEl: '.section_product .swiper-button-prev',
                        },
                        breakpoints: {
                            300: {
                                slidesPerView: 1,
                                spaceBetween: 15,
                            },
                            450: {
                                slidesPerView: 2,
                            },
                            640: {
                                slidesPerView: 2,
                                spaceBetween: 15
                            },
                            767: {
                                slidesPerView: 2,
                                spaceBetween: 15
                            },
                            991: {
                                slidesPerView: 3,
                                spaceBetween: 15
                            },
                            1200: {
                                slidesPerView: 4,
                                spaceBetween: 20
                            }
                        }
                    });
                }
                function destroySwiperPro() {
                    if (swiper_pro) {
                        swiper_pro.destroy(true, true);
                        swiper_pro = null;
                    }
                }
                function toggleSwiperPro() {
                    initSwiperPro();
                }
                toggleSwiperPro();
                $(window).resize(toggleSwiperPro);
            }
            lazyBlockProduct('section_product','0px 0px -250px 0px',runSwiperPro);
        });
    </script>
    {{-- <section class="section_khuyenmai section_product_km">
        <div class="container">
        <div class="thumb-khuyenmai">
            <img width="1774" height="775" alt="Sản phẩm khuyến mãi" class="lazyload" src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/lazy.png?1727784692442"  data-src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/hot_icon.png?1727784692442">
            <div class="thumb-content">
                <h3 class="title-index p-5">
                    <span class="title-name">Sản phẩm khuyến mãi
                    </span>
                    <img width="320" height="24" class="lazyload" src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/lazy.png?1727784692442"  data-src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/title.png?1727784692442" alt="{{$config->web_title}}">
                </h3>
                <div class="content">
                    Chúng tôi luôn đưa ra nhiều chương trình khuyến mãi để quý khách có thể trãi nghiệm và tận hưởng mọi sản phẩm từ cửa hàng.
                </div>
                <div class="count-down">
                    <div class="timer-view" data-countdown="countdown" data-date="2025-01-01-00-00-00">
                    <div class="block-timer"><b>65</b>Ngày</div>
                    <div class="block-timer"><b>10</b>Giờ</div>
                    <div class="block-timer"><b>24</b>Phút</div>
                    <div class="block-timer"><b>29</b>Giây</div>
                    </div>
                </div>
                <a class="button" href="san-pham-khyen-mai" title="Xem ngay">Xem ngay</a>
            </div>
        </div>
        <div class="block-product-list">
            <div class="productkm-swiper swiper_pro swiper-container">
                <div class="swiper-wrapper load-after" data-section="section_product_km">
                    <script type="text/x-custom-template" data-template="section_product_km">
                    <div class="swiper-slide">

                    <form action="/cart/add" method="post" class="variants product-action" data-cart-form data-id="product-actions-36324546" enctype="multipart/form-data">
                    <div class="product-thumbnail">
                    <a class="image_thumb scale_hover" href="/son-sieu-duong-vani-dua" title="Son siêu dưỡng Vani- Dừa">
                    <img  width="234" height="234" class="lazyload image1" src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/lazy.png?1727784692442"  data-src="https://bizweb.dktcdn.net/100/512/203/products/1-3191508a1fef420db2cbe4cf1ee9e5.jpg?v=1719390379030" alt="Son siêu dưỡng Vani- Dừa">

                    <img width="234" height="234" class="lazyload image2" src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/lazy.png?1727784692442"  data-src="https://bizweb.dktcdn.net/100/512/203/products/1-3191508a1fef420db2cbe4cf1ee9e5.jpg?v=1719390379030" alt="Son siêu dưỡng Vani- Dừa">

                    </a>

                    <input class="hidden" type="hidden" name="variantId" value="120484169" />
                    <div class="action">
                    <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                    <svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cart"></use> </svg>
                    </button>

                    <a href="javascript:void(0)" class="setWishlist btn-wishlist btn-views" data-wish="son-sieu-duong-vani-dua" tabindex="0" title="Thêm vào yêu thích">
                    <svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-wishlist"></use> </svg>
                    </a>

                    <a title="Xem nhanh" href="/son-sieu-duong-vani-dua" data-handle="son-sieu-duong-vani-dua" class="quick-view btn-views">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="#fff" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
                    </svg>
                    </a>
                    </div>

                    </div>

                    <div class="product-info">
                    <h3 class="product-name"><a class="line-clamp line-clamp-2" href="/son-sieu-duong-vani-dua" title="Son siêu dưỡng Vani- Dừa">Son siêu dưỡng Vani- Dừa</a></h3>
                    <div class="price-box">
                    79.000₫		</div>
                    </div>

                    </form>
                    </div>

                    <div class="swiper-slide">

                    <form action="/cart/add" method="post" class="variants product-action" data-cart-form data-id="product-actions-36324511" enctype="multipart/form-data">
                    <div class="product-thumbnail">
                    <a class="image_thumb scale_hover" href="/nuoc-tay-trang-green-tea" title="Nước tẩy trang Green Tea">
                    <img  width="234" height="234" class="lazyload image1" src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/lazy.png?1727784692442"  data-src="https://bizweb.dktcdn.net/100/512/203/products/nuoc-tay-trang-thien-nhien-tra-x.jpg?v=1719390146200" alt="Nước tẩy trang Green Tea">

                    <img width="234" height="234" class="lazyload image2" src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/lazy.png?1727784692442"  data-src="https://bizweb.dktcdn.net/100/512/203/products/nuoc-tay-trang-thien-nhien-tra-x.jpg?v=1719390146200" alt="Nước tẩy trang Green Tea">

                    </a>

                    <input class="hidden" type="hidden" name="variantId" value="120484081" />
                    <div class="action">
                    <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                    <svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cart"></use> </svg>
                    </button>

                    <a href="javascript:void(0)" class="setWishlist btn-wishlist btn-views" data-wish="nuoc-tay-trang-green-tea" tabindex="0" title="Thêm vào yêu thích">
                    <svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-wishlist"></use> </svg>
                    </a>

                    <a title="Xem nhanh" href="/nuoc-tay-trang-green-tea" data-handle="nuoc-tay-trang-green-tea" class="quick-view btn-views">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="#fff" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
                    </svg>
                    </a>
                    </div>

                    </div>

                    <div class="product-info">
                    <h3 class="product-name"><a class="line-clamp line-clamp-2" href="/nuoc-tay-trang-green-tea" title="Nước tẩy trang Green Tea">Nước tẩy trang Green Tea</a></h3>
                    <div class="price-box">
                    135.000₫		</div>
                    </div>

                    </form>
                    </div>

                    <div class="swiper-slide">

                    <form action="/cart/add" method="post" class="variants product-action" data-cart-form data-id="product-actions-36324278" enctype="multipart/form-data">
                    <div class="product-thumbnail">
                    <a class="image_thumb scale_hover" href="/dung-moi-khuech-tan" title="Dung môi khuếch tán">
                    <img  width="234" height="234" class="lazyload image1" src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/lazy.png?1727784692442"  data-src="https://bizweb.dktcdn.net/100/512/203/products/z4421348153157-c25350820631ebb7c.jpg?v=1719389052367" alt="Dung môi khuếch tán">

                    <img width="234" height="234" class="lazyload image2" src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/lazy.png?1727784692442" data-src="https://bizweb.dktcdn.net/100/512/203/products/moi-viec-luon-co-ve-la-khong-the.jpg?v=1719389052367" alt="Dung môi khuếch tán" />

                    </a>

                    <input class="hidden" type="hidden" name="variantId" value="120483645" />
                    <div class="action">
                    <button class="btn-cart btn-views" title="Xem chi tiết" type="button" onclick="window.location.href='/dung-moi-khuech-tan'" >
                    <svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-detail"></use> </svg>
                    </button>

                    <a href="javascript:void(0)" class="setWishlist btn-wishlist btn-views" data-wish="dung-moi-khuech-tan" tabindex="0" title="Thêm vào yêu thích">
                    <svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-wishlist"></use> </svg>
                    </a>

                    <a title="Xem nhanh" href="/dung-moi-khuech-tan" data-handle="dung-moi-khuech-tan" class="quick-view btn-views">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="#fff" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
                    </svg>
                    </a>
                    </div>

                    </div>

                    <div class="product-info">
                    <h3 class="product-name"><a class="line-clamp line-clamp-2" href="/dung-moi-khuech-tan" title="Dung môi khuếch tán">Dung môi khuếch tán</a></h3>
                    <div class="price-box">
                    80.000₫		</div>
                    </div>

                    </form>
                    </div>

                    <div class="swiper-slide">

                    <form action="/cart/add" method="post" class="variants product-action" data-cart-form data-id="product-actions-36324258" enctype="multipart/form-data">
                    <div class="product-thumbnail">
                    <a class="image_thumb scale_hover" href="/candle-lighter-do-dot-nen-usb" title="Candle lighter- đồ đốt nến USB">
                    <img  width="234" height="234" class="lazyload image1" src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/lazy.png?1727784692442"  data-src="https://bizweb.dktcdn.net/100/512/203/products/15-e7acf017a7354275b4b1bee5281c9-1.jpg?v=1719388953497" alt="Candle lighter- đồ đốt nến USB">

                    <img width="234" height="234" class="lazyload image2" src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/lazy.png?1727784692442" data-src="https://bizweb.dktcdn.net/100/512/203/products/16-ef0bb06b469a4edf8ebdbed41d30d.jpg?v=1719388953497" alt="Candle lighter- đồ đốt nến USB" />

                    </a>

                    <input class="hidden" type="hidden" name="variantId" value="120483602" />
                    <div class="action">
                    <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                    <svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cart"></use> </svg>
                    </button>

                    <a href="javascript:void(0)" class="setWishlist btn-wishlist btn-views" data-wish="candle-lighter-do-dot-nen-usb" tabindex="0" title="Thêm vào yêu thích">
                    <svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-wishlist"></use> </svg>
                    </a>

                    <a title="Xem nhanh" href="/candle-lighter-do-dot-nen-usb" data-handle="candle-lighter-do-dot-nen-usb" class="quick-view btn-views">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="#fff" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
                    </svg>
                    </a>
                    </div>

                    </div>

                    <div class="product-info">
                    <h3 class="product-name"><a class="line-clamp line-clamp-2" href="/candle-lighter-do-dot-nen-usb" title="Candle lighter- đồ đốt nến USB">Candle lighter- đồ đốt nến USB</a></h3>
                    <div class="price-box">
                    150.000₫		</div>
                    </div>

                    </form>
                    </div>

                    <div class="swiper-slide">

                    <form action="/cart/add" method="post" class="variants product-action" data-cart-form data-id="product-actions-36324228" enctype="multipart/form-data">
                    <div class="product-thumbnail">
                    <a class="image_thumb scale_hover" href="/sap-thom-phong-thuy" title="Sáp thơm phong thủy">
                    <img  width="234" height="234" class="lazyload image1" src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/lazy.png?1727784692442"  data-src="https://bizweb.dktcdn.net/100/512/203/products/1-vuong-c25eb881c8434bb3bfb2fbf3.jpg?v=1719388771327" alt="Sáp thơm phong thủy">

                    <img width="234" height="234" class="lazyload image2" src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/lazy.png?1727784692442" data-src="https://bizweb.dktcdn.net/100/512/203/products/7-vuong-44b8c028896d434dbdc503fb.jpg?v=1719388771327" alt="Sáp thơm phong thủy" />

                    </a>

                    <input class="hidden" type="hidden" name="variantId" value="120483563" />
                    <div class="action">
                    <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                    <svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cart"></use> </svg>
                    </button>

                    <a href="javascript:void(0)" class="setWishlist btn-wishlist btn-views" data-wish="sap-thom-phong-thuy" tabindex="0" title="Thêm vào yêu thích">
                    <svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-wishlist"></use> </svg>
                    </a>

                    <a title="Xem nhanh" href="/sap-thom-phong-thuy" data-handle="sap-thom-phong-thuy" class="quick-view btn-views">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="#fff" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
                    </svg>
                    </a>
                    </div>

                    </div>

                    <div class="product-info">
                    <h3 class="product-name"><a class="line-clamp line-clamp-2" href="/sap-thom-phong-thuy" title="Sáp thơm phong thủy">Sáp thơm phong thủy</a></h3>
                    <div class="price-box">
                    100.000₫		</div>
                    </div>

                    </form>
                    </div>

                    </script>
                </div>
                <div class="swiper-button-next">
                </div>
                <div class="swiper-button-prev">
                </div>
            </div>
        </div>
        </div>
    </section>
    <script>
        $(document).ready(function ($) {
            function runSwiperProkm() {
                var swiper_pro_km = null;
                function initSwiperProkm() {
                    swiper_pro_km = new Swiper('.productkm-swiper', {
                        slidesPerView: 3,
                        loop: false,
                        grabCursor: true,
                        roundLengths: true,
                        slideToClickedSlide: false,
                        spaceBetween: 20,
                        autoplay: false,
                        navigation: {
                            nextEl: '.productkm-swiper .swiper-button-next',
                            prevEl: '.productkm-swiper .swiper-button-prev',
                        },
                        breakpoints: {
                            300: {
                                slidesPerView: 1,
                                spaceBetween: 15,
                            },
                            450: {
                                slidesPerView: 2,
                                spaceBetween: 15,
                            },
                            640: {
                                slidesPerView: 2,
                                spaceBetween: 15
                            },
                            767: {
                                slidesPerView: 2,
                                spaceBetween: 15
                            },
                            991: {
                                slidesPerView: 2,
                                spaceBetween: 15
                            },
                            1200: {
                                slidesPerView: 4,
                                spaceBetween: 20
                            }
                        }
                    });
                }
                function destroySwiperProkm() {
                    if (swiper_pro_km) {
                        swiper_pro_km.destroy(true, true);
                        swiper_pro_km = null;
                    }
                }
                function toggleSwiperProkm() {
                    initSwiperProkm();
                }
                toggleSwiperProkm();
                $(window).resize(toggleSwiperProkm);
            }
            lazyBlockProduct('section_product_km','0px 0px -250px 0px',runSwiperProkm);
        });
    </script> --}}
    <section class="section_video">
        <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="title1">
                    Dịch vụ tốt nhất
                </div>
                <div class="title2">
                    Với hơn 1000+ khách hàng đã trãi nghiệm và hài lòng
                </div>
                <div class="content">
                    Chúng tôi luôn cam kết mang lại cho khách hàng những trãi nghiệm về dịch vụ và chăm sóc khách hàng tốt nhất. Giúp khách hàng có những phút giây cực kì thư giãn.
                </div>
                <div class="row">
                    <div class="col-4">
                    <span class="num "><span class="counter">2</span>+</span>
                    <span class="title">Cửa hàng</span>
                    </div>
                    <div class="col-4">
                    <span class="num "><span class="counter">100</span>+</span>
                    <span class="title">Nhân viên</span>
                    </div>
                    <div class="col-4">
                    <span class="num "><span class="counter">1000</span>+</span>
                    <span class="title">Khách hàng</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 page-datlich">
                {{-- <div class="thumb-video">
                    <img width="800" height="459" class="lazyload" src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/lazy.png?1727784692442"  data-src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/video.jpg?1727784692442" alt="{{$config->web_title}}">
                    <div class="btn-video" data-video="fuXfT4Rv_WM" href="javascript:void(0)" title="Play">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                        <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"></path>
                    </svg>
                    </div>
                </div> --}}
                <form id="contact" accept-charset="UTF-8">
                    <div id="pagelogin">
                        <div class="form-signup clearfix">
                            <div class="group_contact row">
                                <fieldset class="form-group">
                                    <label>Họ và tên:</label>
                                    <input placeholder="Họ và tên..." type="text" class="form-control form-control-lg" required="" value="" name="contact['Họ và tên']">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>Email:</label>
                                    <input placeholder="Email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required="" id="email1" class="form-control form-control-lg" value="" name="contact['Email']">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>Số điện thoại:</label>
                                    <input placeholder="Số điện thoại..." type="number" class="form-control form-control-lg" required="" value="" name="contact[Số điện thoại]">
                                </fieldset>

                                <fieldset class="form-group">
                                    <label>Chọn dịch vụ:</label>
                                    <select id="city" name="contact[Dịch vụ]" class="select select-dv" required="">
                                    <option value="" selected="">Chọn dịch vụ</option>
                                    @foreach ($listAllServices as $item)
                                    <option class="check" value="{{$item->name}}">{{$item->name}}</option>
                                    @endforeach
                                    </select>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>Chọn ngày:</label>
                                    <input class=" tourmaster-datepicker" id="datesss" name="contact[Ngày]" type="date" placeholder="Chọn Ngày" data-date-format="dd MM yyyy" required="">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>Số người:</label>
                                    <input placeholder="Số người..." type="number" class="form-control form-control-lg" required="" value="" name="contact[Số người]">
                                </fieldset>
                                <fieldset class="form-group form-group-textarea">
                                    <label>Ghi chú:</label>
                                    <textarea placeholder="Nhập ghi chú" name="contact[Nội dung]" id="comment" class="form-control content-area form-control-lg" rows="5"></textarea>
                                </fieldset>
                                <input type="hidden" name="contact[Loại]" value="Đặt lịch">
                                <div class="submit">
                                    <button type="submit" class="btn-primary button_45 btn">Đặt lịch ngay</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <script>
                    jQuery('#contact').validate({
                        rules: {
                            "contact[Họ và tên]": {
                                required: true,
                            },
                            "contact[Email]": {
                                required: true,
                                email: true,
                            },
                            "contact[Số điện thoại]": {
                                required: true,
                                number: true,
                                minlength: 10,
                            },
                            "contact[Dịch vụ]": {
                                required: true,
                            },
                            "contact[Ngày]": {
                                required: true,
                            },
                            "contact[Số người]": {
                                required: true,
                            },
                            "contact[Loại]": {
                                required: true,
                            },
                        },
                        messages: {
                            "contact[Họ và tên]": {
                                required: "Tên bạn là gì?",
                            },
                            "contact[Email]": {
                                required: "Email không được để trống",
                            },
                            "contact[Số điện thoại]": {
                                required: "Nhập sdt liên hệ",
                            },
                            "contact[Dịch vụ]": {
                                required: "Vui lòng chọn dịch vụ",
                            },
                            "contact[Ngày]": {
                                required: "Vui lòng chọn ngày",
                            },
                            "contact[Số người]": {
                                required: "Nhập số người",
                            },
                            "contact[Loại]": {
                                required: "Chọn loại",
                            },
                        },
                        submitHandler: function(form) {
                            console.log(jQuery("#contact").serializeArray());

                            jQuery.ajax({
                                url: "https://script.google.com/macros/s/AKfycbwacSU5_P2qnY1Stzh3vvk6T0Rb6qEX_nK3VjLwvmMKKFNZf6qYogZO35RqfCaPP9utrw/exec",
                                type: "post",
                                data: jQuery("#contact").serializeArray(),
                                success: function() {
                                    toastr.success("Thành công! Bạn đã đặt lịch thành công");
                                },
                                error: function() {
                                    toastr.error("Gửi thông tin thất bại");
                                }
                            });
                        }
                    });
                </script>
            </div>
        </div>
        </div>
    </section>
    <section class="section_danhgia">
        <div class="container">
        <div class="block-background">
            <h3 class="title-index p-5">
                <span class="title-name">Feedback từ khách hàng</span>
                <img width="320" height="24" class="lazyload" src="/site/images/lazy.png"  data-src="/site/images/title.png" alt="{{$config->web_title}}">
            </h3>
            <div class="fix-swipper-border">
                <div class="danhgia-slider swiper-container p-5">
                    <div class="swiper-wrapper">
                        @foreach ($reviews as $review)
                        <div class="swiper-slide ">
                            <div class="item">
                                <div class="avatar">
                                    <img width="100" height="100" alt="{{$review->name}}" class="lazyload" src="/site/images/lazy.png"  data-src="{{$review->image ? $review->image->path : ''}}">
                                    <div class="testimonial">
                                    <h5>
                                        {{$review->name}}
                                    </h5>
                                    <span>{{$review->position}}</span>
                                    </div>
                                </div>
                                <div class="content">
                                    <p>
                                    {{$review->message}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next">
                    </div>
                    <div class="swiper-button-prev">
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <script >
        var swiperdanhgia = new Swiper('.danhgia-slider', {
            autoplay: false,
            slidesPerView: 2,
            spaceBetween: 30,
            navigation: {
                nextEl: '.danhgia-slider .swiper-button-next',
                prevEl: '.danhgia-slider .swiper-button-prev',
            },
            breakpoints: {
                300: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                500: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                640: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                768: {
                    slidesPerView: 1,
                    spaceBetween: 30
                },
                991: {
                    slidesPerView: 2,
                    spaceBetween: 30
                },
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 30
                }
            }
        });
    </script>
    {{-- <section class="section_doingu">
        <div class="container">
        <h3 class="title-index p-5">
            <span class="title-name">Đội ngũ của chúng tôi
            </span>
            <img width="320" height="24" class="lazyload" src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/lazy.png?1727784692442"  data-src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/title.png?1727784692442" alt="{{$config->web_title}}">
        </h3>
        <div class="doingu-slider swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="item">
                    <div class="thumb-image">
                        <img width="296" height="421" class="lazyload" src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/lazy.png?1727784692442"  data-src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/doingu_1.jpg?1727784692442" alt="Lenda Murray">
                    </div>
                    <h3 class="title-item">
                        Lenda Murray
                    </h3>
                    <span class="text">Chuyên viên tư vấn</span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="item">
                    <div class="thumb-image">
                        <img width="296" height="421" class="lazyload" src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/lazy.png?1727784692442"  data-src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/doingu_2.jpg?1727784692442" alt="Emely jonson">
                    </div>
                    <h3 class="title-item">
                        Emely jonson
                    </h3>
                    <span class="text">Chuyên viên massage</span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="item">
                    <div class="thumb-image">
                        <img width="296" height="421" class="lazyload" src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/lazy.png?1727784692442"  data-src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/doingu_3.jpg?1727784692442" alt="Lola Jonson">
                    </div>
                    <h3 class="title-item">
                        Lola Jonson
                    </h3>
                    <span class="text">Chuyên viên chăm sóc da</span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="item">
                    <div class="thumb-image">
                        <img width="296" height="421" class="lazyload" src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/lazy.png?1727784692442"  data-src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/doingu_4.jpg?1727784692442" alt="Rose Marian">
                    </div>
                    <h3 class="title-item">
                        Rose Marian
                    </h3>
                    <span class="text">Chuyên viên chăm sóc da</span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="item">
                    <div class="thumb-image">
                        <img width="296" height="421" class="lazyload" src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/lazy.png?1727784692442"  data-src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/doingu_5.jpg?1727784692442" alt="Rose Marian">
                    </div>
                    <h3 class="title-item">
                        Rose Marian
                    </h3>
                    <span class="text">Chuyên viên chăm sóc da</span>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next">
            </div>
            <div class="swiper-button-prev">
            </div>
        </div>
        </div>
    </section>
    <script>
        var swiper = new Swiper('.doingu-slider', {
            autoplay: false,
            spaceBetween: 30,
            navigation: {
                nextEl: '.doingu-slider .swiper-button-next',
                prevEl: '.doingu-slider .swiper-button-prev',
            },
            breakpoints: {
                300: {
                    slidesPerView: 1,
                },
                500: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,

                },
                991: {
                    slidesPerView: 3,

                },
                1200: {
                    slidesPerView: 4,

                }
            }
        });
    </script> --}}
    <section class="section_blog section11 section_blog1">
        <div class="container">
        <h3 class="title-index">
            <a class="title-name" href="#" title="Tin tức mới nhất">Tin tức mới nhất
            </a>
            <img width="320" height="24" class="lazyload" src="/site/images/lazy.png"  data-src="/site/images/title.png" alt="{{$config->web_title}}">
        </h3>
        <div class="block-blog">
            <div class="blog-swiper swiper_pro swiper-container">
                <div class="swiper-wrapper load-after" data-section="section_blog1">
                    @foreach ($newBlogs as $newBlog)
                    <div class="swiper-slide">
                        <div class="item-blog">
                            <div class="block-thumb">
                                <a class="thumb" href="{{route('front.detail-blog', ['slug' => $newBlog->slug])}}" title="{{$newBlog->name}}">
                                <img class="lazyload" src="/site/images/lazy.png"
                                data-src="{{$newBlog->image->path}}"  alt="{{$newBlog->name}}">
                                </a>
                                <div class="time-post">
                                {{date('d', strtotime($newBlog->created_at))}}
                                <b>{{date('M', strtotime($newBlog->created_at))}}</b>
                                </div>
                            </div>
                            <div class="block-content">
                                <h3>
                                    <a class="line-clamp line-clamp-2" href="{{route('front.detail-blog', ['slug' => $newBlog->slug])}}" title="{{$newBlog->name}}">{{$newBlog->name}}</a>
                                </h3>

                                <p class="justify line-clamp line-clamp-3">{{$newBlog->intro}}
                                </p>

                                <a class="viewmore" href="{{route('front.detail-blog', ['slug' => $newBlog->slug])}}" title="Đọc tiếp">Đọc tiếp
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"></path>
                                    <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"></path>
                                    </svg>
                                </a>
                            </div>

                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-button-next">
                </div>
                <div class="swiper-button-prev">
                </div>
            </div>
        </div>
        </div>
    </section>
    <script>
        $(document).ready(function ($) {
            function runSwiperblog() {
                var swiper_blog = null;
                function initSwiperblog() {
                    swiper_blog = new Swiper('.blog-swiper', {
                        slidesPerView: 3,
                        loop: false,
                        grabCursor: true,
                        spaceBetween: 30,
                        roundLengths: true,
                        slideToClickedSlide: false,
                        autoplay: false,
                        navigation: {
                            nextEl: '.blog-swiper .swiper-button-next',
                            prevEl: '.blog-swiper .swiper-button-prev',
                        },
                        breakpoints: {
                            300: {
                                slidesPerView: 1,
                                spaceBetween: 20
                            },
                            500: {
                                slidesPerView: 1,
                                spaceBetween: 20
                            },
                            640: {
                                slidesPerView: 1,
                                spaceBetween: 20
                            },
                            768: {
                                slidesPerView: 2,
                                spaceBetween: 20
                            },
                            991: {
                                slidesPerView: 3,
                                spaceBetween: 20
                            },
                            1200: {
                                slidesPerView: 3,
                                spaceBetween: 20
                            }
                        }
                    });
                }
                function destroySwiperblog() {
                    if (swiper_blog) {
                        swiper_blog.destroy(true, true);
                        swiper_blog = null;
                    }
                }
                function toggleSwiperblog() {
                    initSwiperblog();
                }
                toggleSwiperblog();
                $(window).resize(toggleSwiperblog);
            }
            lazyBlockProduct('section_blog1','0px 0px -250px 0px',runSwiperblog);
        });
    </script>
    {{-- <section class="section_image">
        <div class="container">
        <h3 class="title-index p-5">
            <a class="title-name" href="#" title="Follow Instagram"> Follow Instagram
            </a>
            <img width="320" height="24" class="lazyload" src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/lazy.png?1727784692442"  data-src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/title.png?1727784692442" alt="{{$config->web_title}}">
        </h3>
        <div class="row row-fix">
            <div class="col-md-4 col-fix">
                <div class="thumb-image">
                    <img width="1154" height="700" alt="Follow Instagram" class="lazyload" src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/lazy.png?1727784692442"  data-src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/image_instagram_1.png?1727784692442">
                    <a href="#" title="Follow Instagram">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                    </svg>
                    </a>
                </div>
            </div>
            <div class="col-md-3  col-fix">
                <div class="thumb-image">
                    <img width="854" height="700" alt="Follow Instagram" class="lazyload" src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/lazy.png?1727784692442"  data-src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/image_instagram_2.png?1727784692442">
                    <a href="#" title="Follow Instagram">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                    </svg>
                    </a>
                </div>
            </div>
            <div class="col-md-5  col-fix">
                <div class="thumb-image">
                    <img width="1452" height="700" alt="Follow Instagram" class="lazyload" src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/lazy.png?1727784692442"  data-src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/image_instagram_3.png?1727784692442">
                    <a href="#" title="Follow Instagram">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                    </svg>
                    </a>
                </div>
            </div>
            <div class="col-md-5  col-fix">
                <div class="thumb-image">
                    <img width="1452" height="700" alt="Follow Instagram" class="lazyload" src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/lazy.png?1727784692442"  data-src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/image_instagram_4.png?1727784692442">
                    <a href="#" title="Follow Instagram">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                    </svg>
                    </a>
                </div>
            </div>
            <div class="col-md-3  col-fix">
                <div class="thumb-image">
                    <img width="854" height="700" alt="Follow Instagram" class="lazyload" src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/lazy.png?1727784692442"  data-src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/image_instagram_5.png?1727784692442">
                    <a href="#" title="Follow Instagram">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                    </svg>
                    </a>
                </div>
            </div>
            <div class="col-md-4  col-fix">
                <div class="thumb-image">
                    <img width="1154" height="700" alt="Follow Instagram" class="lazyload" src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/lazy.png?1727784692442"  data-src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/image_instagram_6.png?1727784692442">
                    <a href="#" title="Follow Instagram">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                    </svg>
                    </a>
                </div>
            </div>
        </div>
        </div>
    </section> --}}
</div>
@endsection
@push('script')
@endpush
