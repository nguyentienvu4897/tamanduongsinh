@extends('site.layouts.master')
@section('title')
    {{ $product->name }}
@endsection
@section('description')
    {{ $product->short_des }}
@endsection

@section('css')
<link href="{{ asset('site/css/breadcrumb_style.scss.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('site/css/product_style.scss.css') }}" rel="stylesheet" type="text/css" media="all" />
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
                    {{ $product->name }}
                </div>
                <ul class="breadcrumb">
                    <li class="home">
                        <a href="{{ route('front.home-page') }}"><span>Trang chủ</span></a>
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
                        <a class="changeurl" href="{{ route('front.show-product-category', ['categorySlug' => $category->slug]) }}"><span>{{ $category->name }}</span></a>
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
                    <li><strong><span>{{ $product->name }}</span></strong>
                    <li>
                </ul>
            </div>
        </section>
        <section class="product layout-product" itemscope itemtype="https://schema.org/Product">
            <div class="container">
                <div class="block-background">
                    <div class="row">
                        <div class="product-detail-left product-images col-12 col-md-12 col-lg-5">
                            <div class="product-image-block">
                                <div class="swiper-container gallery-top p-5">
                                    <div class="swiper-wrapper" id="lightgallery">
                                        @foreach ($product->galleries as $image)
                                        <a class="swiper-slide" data-hash="0"
                                            href="{{ $image->image->path }}"
                                            title="Click để xem">
                                            <img height="400" width="400"
                                                src="{{ $image->image->path }}"
                                                alt="{{ $product->name }}"
                                                data-image="{{ $image->image->path }}"
                                                class="img-responsive mx-auto d-block swiper-lazy" />
                                        </a>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="swiper-container gallery-thumbs p-5">
                                    <div class="swiper-wrapper">
                                        @foreach ($product->galleries as $image)
                                        <div class="swiper-slide" data-hash="0">
                                            <div class="p-100">
                                                <img height="80" width="80"
                                                    src="{{ $image->image->path }}"
                                                    alt="{{ $product->name }}"
                                                    data-image="{{ $image->image->path }}"
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
                        </div>
                        <div class=" col-12 col-md-12 col-lg-7">
                            <div class="details-pro">
                                <h1 class="title-product">{{ $product->name }}</h1>
                                {{-- <div class="inventory_quantity">
                                    <div class="thump-break row">
                                        <div class="mb-break type col-md-6">
                                            <span class="stock-brand-title">Loại:</span>
                                            <span class="a-vendor">
                                                Đang cập nhật
                                            </span>
                                        </div>
                                        <div class="mb-break type col-md-6">
                                            <span class="stock-brand-title">Thương hiệu:</span>
                                            <span class="a-vendor">
                                                Đang cập nhật
                                            </span>
                                        </div>
                                        <div class="mb-break inventory col-md-6">
                                            <span class="stock-brand-title">Tình trạng:</span>
                                            <span class="a-stock">
                                                Còn hàng
                                            </span>
                                        </div>
                                        <div class="mb-break sku-product clearfix col-md-6">
                                            <span class="stock-brand-title">Mã sản phẩm:</span>
                                            <span class="variant-sku" itemprop="sku" content="Đang cập nhật"><span
                                                    class="a-sku">Đang cập nhật</span></span>
                                            <br>
                                        </div>
                                    </div>
                                </div> --}}
                                <form enctype="multipart/form-data" data-cart-form id="add-to-cart-form" class="form-inline">
                                    <div class="price-box clearfix">
                                        <span class="title-price">Giá bán:</span>
                                        <div class="special-price">
                                            <span class="price product-price">{{ formatCurrency($product->base_price) }}₫</span>
                                        </div>
                                        <!-- Giá -->
                                    </div>
                                    <div class="price-box clearfix">
                                        <span class="title-price">Giá khuyến mãi:</span>
                                        <div class="special-price">
                                            <span class="price product-price">{{ formatCurrency($product->price) }}₫</span>
                                        </div>
                                        <!-- Giá -->
                                    </div>
                                    <div class="khuyen-mai">
                                        <h3 class="title">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-lightning-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M5.52.359A.5.5 0 0 1 6 0h4a.5.5 0 0 1 .474.658L8.694 6H12.5a.5.5 0 0 1 .395.807l-7 9a.5.5 0 0 1-.873-.454L6.823 9.5H3.5a.5.5 0 0 1-.48-.641l2.5-8.5z" />
                                            </svg>
                                            Danh sách khuyến mãi
                                        </h3>
                                        <div class="content">
                                            <ul>
                                                <li><img width="20" height="20"
                                                        src="{{asset('site/images/km_product1.png')}}"
                                                        alt="Áp dụng Phiếu quà tặng/ Mã giảm giá theo sản phẩm.">Áp dụng
                                                    Phiếu quà tặng/ Mã giảm giá theo sản phẩm.</li>
                                                <li><img width="20" height="20"
                                                        src="{{asset('site/images/km_product2.png')}}"
                                                        alt="Giảm giá 10% khi mua từ 5 sản phẩm trở lên.">Giảm giá 10% khi
                                                    mua từ 5 sản phẩm trở lên.</li>
                                                <li><img width="20" height="20"
                                                        src="{{asset('site/images/km_product3.png')}}"
                                                        alt="Tặng 100.000₫ mua hàng tại website thành viên {{$config->web_title}}, áp dụng khi mua Online tại Hà Nội và 1 số khu vực khác.">Tặng
                                                    100.000₫ mua hàng tại website thành viên {{$config->web_title}}, áp dụng khi mua
                                                    Online tại Hà Nội và 1 số khu vực khác.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form-product">
                                        <div class="box-variant clearfix  d-none ">
                                            <input type="hidden" id="one_variant" name="variantId" value="120482870" />
                                        </div>
                                        <div class="clearfix form-group ">
                                            {{-- <div class="flex-quantity"> --}}
                                                {{-- <div class="custom custom-btn-number show">
                                                    <label class="sl section">Số lượng:</label>
                                                    <div class="input_number_product form-control">
                                                        <button class="btn_num num_1 button button_qty"
                                                            onClick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro ) &amp;&amp; qtypro &gt; 1 ) result.value--;return false;"
                                                            type="button">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-dash"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8" />
                                                            </svg>
                                                        </button>
                                                        <input type="text" id="qtym" name="quantity"
                                                            value="1" maxlength="3"
                                                            class="form-control prd_quantity"
                                                            onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;"
                                                            onchange="if(this.value == 0)this.value=1;">
                                                        <button class="btn_num num_2 button button_qty"
                                                            onClick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro )) result.value++;return false;"
                                                            type="button">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-plus"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="btn-mua button_actions clearfix">
                                                    <button type="submit" title="Thêm vào giỏ"
                                                        class="btn btn_base normal_button btn_add_cart add_to_cart btn-cart">
                                                        <span class="txt-main text_1">Thêm vào giỏ</span>
                                                    </button>
                                                </div>
                                            </div> --}}
                                            <div class="group-button">
                                                {{-- <a href="javascript:void(0)" title="Mua ngay" class="btn-buyNow">
                                                    Mua ngay
                                                </a> --}}
                                                <a class="button-phone" title="{{$config->hotline}}" href="tel:{{str_replace(' ', '', $config->hotline)}}">
                                                    <span>Liên hệ <b>{{$config->hotline}}</b></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="camket">
                                        <div class="title">
                                            Cam kết của chúng tôi
                                        </div>
                                        <ul>
                                            <li>
                                                <img src="{{asset('site/images/camket_1.png')}}"
                                                    alt="cam kết">
                                                <span>Cam kết 100% chính hãng</span>
                                            </li>
                                            <li>
                                                <img src="{{asset('site/images/camket_2.png')}}"
                                                    alt="cam kết">
                                                <span>Hoàn tiền 111% nếu hàng kém chất lượng</span>
                                            </li>
                                            <li>
                                                <img src="{{asset('site/images/camket_3.png')}}"
                                                    alt="cam kết">
                                                <span>Giao tận tay khách hàng</span>
                                            </li>
                                            <li>
                                                <img src="{{asset('site/images/camket_4.png')}}"
                                                    alt="cam kết">
                                                <span>Mở hộp kiểm tra nhận hàng</span>
                                            </li>
                                            <li>
                                                <img src="{{asset('site/images/camket_5.png')}}"
                                                    alt="cam kết">
                                                <span>Hỗ trợ 24/7</span>
                                            </li>
                                            <li>
                                                <img src="{{asset('site/images/camket_6.png')}}"
                                                    alt="cam kết">
                                                <span>Đổi trả trong 7 ngày</span>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="product-tab e-tabs not-dqtab" id="tab-product">
                                <ul class="tabs tabs-title clearfix">
                                    <li class="tab-link active" data-tab="#tab-1">
                                        <h3>Mô tả sản phẩm</h3>
                                    </li>
                                    {{-- <li class="tab-link" data-tab="#tab-2">
                                        <h3>Hướng dẫn mua hàng</h3>
                                    </li>
                                    <li class="tab-link" data-tab="#tab-3">
                                        <h3>Đánh giá sản phẩm</h3>
                                    </li> --}}
                                </ul>
                                <div class="tab-float">
                                    <div id="tab-1" class="tab-content active content_extab">
                                        <div class="rte product_getcontent">
                                            <div class="ba-text-fpt">
                                                {!! $product->body !!}
                                            </div>
                                            <div class="show-more d-none">
                                                <div class="btn btn-default btn--view-more see-more">
                                                    <a href="javascript:void(0)" class="more-text see-more">Xem thêm</a>
                                                    <a href="javascript:void(0)" class="less-text see-more">Thu gọn </a>
                                                </div>
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
        <div class="productRelate product-lq">
            <div class="container ">
                <div class="block-product block-background">
                    <h3 class="title-index">
                        <a class="title-name" href="#" title="Sản phẩm liên quan">Sản phẩm liên quan
                        </a>
                    </h3>
                    <div class="product-relate-swiper swiper-container p-5">
                        <div class="swiper-wrapper">
                            @foreach ($productsRelated as $product)
                            <div class="swiper-slide swiper-slide-pro">
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
        </div>
        <script>
            $('.voucher-product .voucher').click(function() {
                $('.section_coupon_pro').addClass('active');
                $('.backdrop__body-backdrop___1rvky').addClass('active');
            });

            function activeTab(obj) {
                $('.product-tab>ul>li').removeClass('active');
                $(obj).addClass('active');
                var id = $(obj).attr('data-tab');
                $('.tab-content').removeClass('active');
                $(id).addClass('active');
            }
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
                slidesPerColumnFill: 'row',
                direction: 'horizontal',
                slidesPerView: 4,
                spaceBetween: 20,
                slidesPerGroup: 1,
                slidesPerColumn: 1,
                navigation: {
                    nextEl: '.product-relate-swiper .swiper-button-next',
                    prevEl: '.product-relate-swiper .swiper-button-prev',
                },
                breakpoints: {
                    280: {
                        slidesPerView: 2,
                        spaceBetween: 15
                    },
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 15
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 15
                    },
                    992: {
                        slidesPerView: 3,
                        spaceBetween: 15
                    },
                    1025: {
                        slidesPerView: 4,
                        spaceBetween: 20
                    }
                }
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
