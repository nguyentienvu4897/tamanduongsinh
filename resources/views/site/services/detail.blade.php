@extends('site.layouts.master')
@section('title')
    {{ $title }}
@endsection
@section('description')
    {{ $description ?? '' }}
@endsection

@section('css')
    <link href="{{ asset('/site/css/breadcrumb_style.scss.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('/site/css/product_style.scss.css') }}" rel="stylesheet" type="text/css" media="all" />
    <style>
        .text-limit-3-line {
            line-height: 1.5;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
@endsection

@section('content')
    <div class="bodywrap">
        <section class="bread-crumb"
            style="background-image: url({{asset('site/images/breadcrumb.png')}})">
            <div class="container">
                <div class="title-bread-crumb">
                    {{$title}}
                </div>
                <ul class="breadcrumb">
                    <li class="home">
                        <a href="{{route('front.home-page')}}"><span>Trang chủ</span></a>
                        <span class="mr_lr">
                            &nbsp;
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                class="svg-inline--fa fa-chevron-right fa-w-10">
                                <path fill="currentColor"
                                    d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                                    class=""></path>
                            </svg>
                            &nbsp;
                        </span>
                    </li>
                    <li>
                        <a class="changeurl" href="{{route('front.service-type', $serviceType->slug)}}"><span>{{$serviceType->name}}</span></a>
                        <span class="mr_lr">
                            &nbsp;
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                class="svg-inline--fa fa-chevron-right fa-w-10">
                                <path fill="currentColor"
                                    d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                                    class=""></path>
                            </svg>
                            &nbsp;
                        </span>
                    </li>
                    <li><strong><span>{{$title}}</span></strong>
                    <li>
                </ul>
            </div>
        </section>
        <section class="product layout-product" itemscope itemtype="https://schema.org/Product">
            <div class="container">
                <div class="block-background">
                    <div class="row">
                        <div class="product-detail-left product-images col-12 col-md-12 col-lg-8">
                            <div class="product-image-block">
                                <div class="swiper-container gallery-top p-5">
                                    <div class="swiper-wrapper" id="lightgallery">
                                        @foreach($service->galleries as $gallery)
                                        <a class="swiper-slide" data-hash="0"
                                            href="{{($gallery->image->path)}}"
                                            title="Click để xem">
                                            <img style="width: 100% !important; height: 100% !important;"
                                                src="{{($gallery->image->path)}}"
                                                alt="{{$service->name}}"
                                                data-image="{{($gallery->image->path)}}"
                                                class="img-responsive mx-auto d-block swiper-lazy" />
                                        </a>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="swiper-container gallery-thumbs p-5">
                                    <div class="swiper-wrapper">
                                        @foreach($service->galleries as $gallery)
                                        <div class="swiper-slide" data-hash="0">
                                            <div class="p-100">
                                                <img height="80" width="80"
                                                    src="{{($gallery->image->path)}}"
                                                    alt="{{$service->name}}"
                                                    data-image="{{($gallery->image->path)}}"
                                                    class="swiper-lazy" />
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
                            <div class="rte rte-dv">
                                <div>
                                    <h3>Giới thiệu dịch vụ</h3>
                                </div>
                                {!!$content!!}
                            </div>
                        </div>
                        <div class=" col-12 col-md-12 col-lg-4">
                            <div class="details-pro-dv">
                                <div class="details">
                                    <h1 class="title-product">{{$service->name}}</h1>
                                    <ul>
                                        <li class="content">
                                            {!!$description!!}
                                        </li>
                                        <li class="time-dv">Thời gian: <b>{{$service->time}}</b></li>
                                        <li class="price-dv">
                                            Giá:
                                            <div class="special-price">
                                                <span class="price product-price">{{formatCurrency($service->base_price)}}₫</span>
                                            </div>
                                            <!-- Giá -->
                                        </li>
                                        @if ($service->price)
                                        <li class="price-dv">
                                            Giá khuyến mãi:
                                            <div class="special-price">
                                                <span class="price product-price">{{formatCurrency($service->price)}}₫</span>
                                            </div>
                                            <!-- Giá -->
                                        </li>
                                        @endif
                                        <li><a href="/dat-lich?dieu-tri-tham-mun" title="Đặt lịch ngay"
                                                class="button-dl">Đặt lịch ngay</a></li>
                                    </ul>
                                </div>
                                <div class="contact-dv"
                                    style="background-image: url('//bizweb.dktcdn.net/100/512/203/themes/943792/assets/product_image_pro_hotro.jpg?1727784692442')">
                                    <div class="title">
                                        Hỗ trợ 24/7
                                    </div>
                                    <div class="content">
                                        {{$config->web_title}} luôn lắng nghe, tiếp nhận những hỗ trợ, phản hồi và đóng góp của khách
                                        hàng.
                                    </div>
                                    <a href="tel:{{str_replace(' ', '', $config->hotline)}}" title="Liên hệ ngay">Liên hệ ngay</a>
                                </div>
                                <div class="productRelate-dv product-lq">
                                    <div class="block-product block-background">
                                        <h3 class="title-index">
                                            <a class="title-name" href="#" title="Dịch vụ khác">Dịch vụ khác
                                            </a>
                                        </h3>
                                        <div class="product-relate-swiper swiper-container p-5">
                                            <div class="swiper-wrapper">
                                                @foreach($otherServices as $otherService)
                                                <div class="swiper-slide swiper-slide-pro">
                                                    @include('site.services.service_item', ['service' => $otherService])
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            $('.button-thongso').click(function() {
                $('.thong-so-popup, .backdrop__body-backdrop___1rvky').addClass('active');

            });
            $('.product-tab>ul>li').click(function() {
                activeTab(this);
                return false;
            });
            var swiperflash = new Swiper('.product1-swiper', {
                slidesPerView: 3,
                loop: false,
                grabCursor: true,
                roundLengths: true,
                slideToClickedSlide: false,
                spaceBetween: 20,
                autoplay: false,
                slidesPerColumn: 2,
                slidesPerColumnFill: "row",
                navigation: {
                    nextEl: '.product1-swiper .swiper-button-next',
                    prevEl: '.product1-swiper .swiper-button-prev',
                },
                breakpoints: {
                    300: {
                        slidesPerView: 2,
                        spaceBetween: 15,
                    },
                    450: {
                        slidesPerView: 2,
                    },
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 20
                    },
                    767: {
                        slidesPerView: 3,
                        spaceBetween: 20
                    },
                    991: {
                        slidesPerView: 2,
                        spaceBetween: 20
                    },
                    1200: {
                        slidesPerView: 2,
                        spaceBetween: 20
                    }
                }
            });

            var variantsize = false;
            var ww = $(window).width();

            jQuery(function($) {

                // Add label if only one product option and it isn't 'Title'. Could be 'Size'.

                // Hide selectors if we only have 1 variant and its title contains 'Default'.

                $('.selector-wrapper').hide();

                $('.selector-wrapper').css({
                    'text-align': 'left',
                    'margin-bottom': '15px'
                });
            });

            jQuery('.swatch :radio').change(function() {
                var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
                var optionValue = jQuery(this).val();
                jQuery(this)
                    .closest('form')
                    .find('.single-option-selector')
                    .eq(optionIndex)
                    .val(optionValue)
                    .trigger('change');
                $(this).closest('.swatch').find('.header .value-roperties').html(optionValue);
            });

            setTimeout(function() {
                $('.swatch .swatch-element').each(function() {
                    $(this).closest('.swatch').find('.header .value-roperties').html($(this).closest('.swatch')
                        .find('input:checked').val());
                });
            }, 500);
            setTimeout(function() {
                var ch = $('.product_getcontent').height(),
                    smore = $('.show-more');
                console.log(ch);
                if (ch > 1451) {
                    $('.ba-text-fpt').addClass('has-height');
                    smore.removeClass('d-none');
                }
            }, 200);
            $('.btn--view-more').on('click', function(e) {
                e.preventDefault();
                var $this = $(this);
                $this.parents('.product_getcontent').toggleClass('expanded');
                $('html, body').animate({
                    scrollTop: $('.product_getcontent').offset().top - 110
                }, 'slow');
                $(this).toggleClass('active');

            });




            var galleryThumbs = new Swiper('.gallery-thumbs', {
                spaceBetween: 5,
                slidesPerView: 20,
                freeMode: true,
                lazy: true,
                watchSlidesVisibility: true,
                watchSlidesProgress: true,
                hashNavigation: true,
                slideToClickedSlide: true,
                breakpoints: {
                    300: {
                        slidesPerView: 3,
                        spaceBetween: 10,
                    },
                    500: {
                        slidesPerView: 3,
                        spaceBetween: 10,
                    },
                    640: {
                        slidesPerView: 4,
                        spaceBetween: 10,
                    },
                    768: {
                        slidesPerView: 4,
                        spaceBetween: 10,
                    },
                    1024: {
                        slidesPerView: 4,
                        spaceBetween: 10,
                    },
                    1199: {
                        slidesPerView: 4,
                        spaceBetween: 10,
                    },
                },
                navigation: {
                    nextEl: '.gallery-thumbs .swiper-button-next',
                    prevEl: '.gallery-thumbs .swiper-button-prev',
                },
            });
            var galleryTop = new Swiper('.gallery-top', {
                spaceBetween: 0,
                lazy: true,
                hashNavigation: true,
                effect: 'fade',
                thumbs: {
                    swiper: galleryThumbs
                }
            });
            var swiper = new Swiper('.product-relate-swiper', {
                slidesPerView: 1,
                navigation: {
                    nextEl: '.product-relate-swiper .swiper-button-next',
                    prevEl: '.product-relate-swiper .swiper-button-prev',
                },
                breakpoints: {
                    300: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                    },
                    500: {
                        slidesPerView: 2,
                        spaceBetween: 10,
                    },
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 10,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 10,
                    },
                    1024: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                    },
                    1199: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                    },
                },

            });

            $(document).ready(function() {
                $("#lightgallery").lightGallery({
                    thumbnail: false
                });
                $('.playVideo').on('click', function(e) {
                    var idVideo = $(this).attr('data-video');
                    $('.popup-video').addClass('active');
                    $('.popup-video .body-popup').html(
                        `<iframe width="560" height="315" src="https://www.youtube.com/embed/` + idVideo +
                        `" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>`
                        )
                });
                $('.close-popup-video').on('click', function(e) {
                    $('.popup-video').removeClass('active');
                    $('.popup-video .body-popup').html(' ');
                });
            });
        </script>
    </div>
@endsection

@push('script')
@endpush
