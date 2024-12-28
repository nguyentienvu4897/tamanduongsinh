@extends('site.layouts.master')
@section('title')
    {{ $blog_title }}
@endsection

@section('css')
<link href="{{ asset('/site/css/breadcrumb_style.scss.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('/site/css/paginate.scss.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('/site/css/blog_article_style.scss.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('/site/css/sidebar_style.scss.css') }}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('content')
    <div class="bodywrap">
        <section class="bread-crumb"
            style="background-image: url({{asset('site/images/breadcrumb.png')}})">
            <div class="container">
                <div class="title-bread-crumb">
                    {{ $blog_title }}
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
                        <a href="{{route('front.list-blog', $category->slug)}}"><span>{{$cate_title}}</span></a>
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
                    <li><strong><span>{{$blog_title}}</span></strong></li>
                </ul>
            </div>
        </section>
        <section class="blogpage">
            <div class="container layout-article" itemscope itemtype="https://schema.org/Article">
                <div class="bg_blog">
                    <meta itemprop="mainEntityOfPage" content="{{route('front.detail-blog', $blog->slug)}}">
                    <meta itemprop="description" content="{{$blog_des}}">
                    <meta itemprop="author" content="{{$blog->user_create->name}}">
                    <meta itemprop="headline" content="{{$blog_title}}">
                    <meta itemprop="image"
                        content="{{$blog->image->path}}">
                    <meta itemprop="datePublished" content="30-06-2024">
                    <meta itemprop="dateModified" content="30-06-2024">
                    <article class="article-main">
                        <div class="row row-fix">
                            <div class="right-content col-lg-9 col-xl-9 col-12 col-fix">
                                <div class="article-details clearfix block-background">
                                    <h1 class="article-title">{{$blog_title}}
                                    </h1>
                                    <div class="posts">
                                        <div class="time-post f">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="clock"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                class="svg-inline--fa fa-clock fa-w-16">
                                                <path fill="currentColor"
                                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm216 248c0 118.7-96.1 216-216 216-118.7 0-216-96.1-216-216 0-118.7 96.1-216 216-216 118.7 0 216 96.1 216 216zm-148.9 88.3l-81.2-59c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h14c6.6 0 12 5.4 12 12v146.3l70.5 51.3c5.4 3.9 6.5 11.4 2.6 16.8l-8.2 11.3c-3.9 5.3-11.4 6.5-16.8 2.6z"
                                                    class=""></path>
                                            </svg>
                                            @php
                                                $days = [
                                                    'Monday' => 'Thứ Hai',
                                                    'Tuesday' => 'Thứ Ba',
                                                    'Wednesday' => 'Thứ Tư',
                                                    'Thursday' => 'Thứ Năm',
                                                    'Friday' => 'Thứ Sáu',
                                                    'Saturday' => 'Thứ Bảy',
                                                    'Sunday' => 'Chủ Nhật',
                                                ];

                                                // Lấy thứ bằng tiếng Anh
                                                $dayInEnglish = date('l', strtotime($blog->created_at));

                                                // Chuyển đổi sang tiếng Việt
                                                $dayInVietnamese = $days[$dayInEnglish];
                                            @endphp
                                            {{ $dayInVietnamese }}, {{date('d/m/Y', strtotime($blog->created_at))}}
                                        </div>
                                        <div class="time-post">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                class="svg-inline--fa fa-user fa-w-14">
                                                <path fill="currentColor"
                                                    d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"
                                                    class=""></path>
                                            </svg>
                                            <span>{{$blog->user_create->name}}</span>
                                        </div>
                                    </div>
                                    <div class="goto-wrapper ftoc-head">
                                        <a class="title-goto-wrapper" href="javascript:;">Nội dung chính
                                        </a>
                                        <div class="dola-toc"></div>
                                    </div>
                                    <div class="rte article-content">
                                        {!! $blog->body !!}
                                    </div>
                                </div>
                            </div>
                            @include('site.blogs.nav-blog')
                            @if($other_blogs->count() > 0)
                            <div class="col-12 blog_lienquan col-fix">
                                <div class="block-background">
                                    <h3 class="title-index p-5">
                                        <a class="title-name" href="tin-tuc" title="Tin liên quan">Tin liên quan
                                        </a>
                                    </h3>
                                    <div class="blog-swiper swiper-container p-5">
                                        <div class="swiper-wrapper">
                                            @foreach ($other_blogs as $item)
                                            <div class="swiper-slide">
                                                <div class="item-blog">
                                                    <div class="block-thumb">
                                                        <a class="thumb"
                                                            href="{{route('front.detail-blog', $item->slug)}}"
                                                            title="{{$item->name}}">
                                                            <img class="lazyload"
                                                                src="{{asset('/site/images/lazy.png')}}"
                                                                data-src="{{$item->image->path}}"
                                                                alt="{{$item->name}}">
                                                        </a>
                                                        <div class="time-post">
                                                            {{date('d', strtotime($item->created_at))}}
                                                            <b>{{date('m', strtotime($item->created_at))}}</b>
                                                        </div>
                                                    </div>
                                                    <div class="block-content">
                                                        <h3>
                                                            <a class="line-clamp line-clamp-2"
                                                                href="{{route('front.detail-blog', $item->slug)}}"
                                                                title="{{$item->name}}">{{$item->name}}</a>
                                                        </h3>
                                                        <p class="justify line-clamp line-clamp-3">{{$item->intro}}</p>
                                                        <a class="viewmore"
                                                            href="{{route('front.detail-blog', $item->slug)}}"
                                                            title="Đọc tiếp">
                                                            Đọc tiếp
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd"
                                                                    d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z">
                                                                </path>
                                                                <path fill-rule="evenodd"
                                                                    d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z">
                                                                </path>
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
                            @endif
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <script>
            var swiperwish = new Swiper('.blog-swiper', {
                slidesPerView: 3,
                loop: false,
                grabCursor: true,
                spaceBetween: 30,
                roundLengths: true,
                slideToClickedSlide: false,
                navigation: {
                    nextEl: '.blog-swiper .swiper-button-next',
                    prevEl: '.blog-swiper .swiper-button-prev',
                },
                autoplay: false,
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
                        slidesPerView: 4,
                        spaceBetween: 20
                    }
                }
            });
        </script>
        <script>
            var $heading2 = $('.article-content h2');
            $heading2.attr("id", function() {
                return $(this)
                    .text() // get the h1 text
                    .trim() // remove spaces from start and the end
                    .toLowerCase() // optional
                    .replace(/\s/g, '_'); // convert all spaces to underscores
            });
            var $heading3 = $('.article-content h3');
            $heading3.attr("id", function() {
                return $(this)
                    .text() // get the h1 text
                    .trim() // remove spaces from start and the end
                    .toLowerCase() // optional
                    .replace(/\s/g, '_'); // convert all spaces to underscores
            });

            $('.title-goto-wrapper').click(function() {
                $(this).find('.fa').toggleClass('fa-angle-up');
                $(this).find('.fa').toggleClass('fa-angle-down');
                $('.dola-toc').toggleClass('hidden');
            });
            $(document).ready(function() {
                $('.setmenuclick.auto .tabClick').click(function() {
                    $(this).addClass('hidescroll');
                    $('.fixMenu').removeClass('hidescroll');
                });
                $('.fixMenu .closeftoc span').click(function(event) {
                    event.stopPropagation();
                    $('.setmenuclick.auto .tabClick').removeClass('hidescroll');
                    $('.fixMenu').addClass('hidescroll');
                });
                $(document).click(function(event) {
                    if (!$(event.target).closest('.setmenuclick.auto').length) {
                        $('.setmenuclick.auto .tabClick').removeClass('hidescroll');
                        $('.setmenuclick.auto .fixMenu').addClass('hidescroll');
                    }
                });

                $(window).scroll(function() {
                    var khoan_cach_all = $('.product-content').height();
                    if ($(this).scrollTop() > 500 && $(this).scrollTop() < khoan_cach_all) {
                        $('.setmenuclick').removeClass('hidescroll');
                    } else {
                        $('.setmenuclick').addClass('hidescroll');
                    }
                });
            });
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tocbot/4.4.2/tocbot.min.js" type="text/javascript"></script>
        <script>
            $(document).ready(function($) {
                tocbot.init({
                    tocSelector: '.dola-toc',
                    contentSelector: '.article-content',
                    headingSelector: 'h2,h3'
                });
                tocbot.init({
                    tocSelector: '.dola-toc-bottom',
                    contentSelector: '.article-content',
                    headingSelector: 'h2,h3'
                });
            });
        </script>
    </div>
@endsection

@push('script')
@endpush
