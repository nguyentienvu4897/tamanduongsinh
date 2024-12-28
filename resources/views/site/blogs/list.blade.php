@extends('site.layouts.master')
@section('title')
    {{ $cate_title }}
@endsection
@section('description')
    {{ $cate_des ?? '' }}
@endsection

@section('css')
    <link href="{{ asset('/site/css/breadcrumb_style.scss.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('/site/css/paginate.scss.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('/site/css/blog_article_style.scss.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('/site/css/sidebar_style.scss.css') }}" rel="stylesheet" type="text/css" media="all" />
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
                    Tin tức
                </div>
                <ul class="breadcrumb">
                    <li class="home">
                        <a href="{{ route('front.home-page')}}"><span>Trang chủ</span></a>
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
                    <li><strong><span>{{$cate_title}}</span></strong></li>
                </ul>
            </div>
        </section>
        <div class="blog_wrapper layout-blog" itemscope itemtype="https://schema.org/Blog">
            <meta itemprop="name" content="{{$cate_title}}">
            <meta itemprop="description" content="">
            <div class="container">
                <div class="article-main" style="margin-bottom: 50px;">
                    <div class="row row-fix">
                        <div class="right-content col-lg-9 col-xl-9 col-12 col-fix">
                            <div class="block-background-relate" style="margin-bottom: 20px;">
                                <div class="title-page">
                                    <span>Tin mới nhất</span>
                                </div>
                                <div class="blog-slider swiper-container">
                                    <div class="swiper-wrapper">
                                        @foreach ($newBlogs as $item)
                                            <div class="swiper-slide"
                                                title="{{$item->name}}">
                                                <div class="block-thumb">
                                                    <a class="thumb"
                                                        href="{{route('front.detail-blog', $item->slug)}}"
                                                        title="{{$item->name}}">
                                                        <img class="lazyload"
                                                            src="{{asset('/site/images/lazy.png')}}"
                                                            data-src="{{$item->image->path}}"
                                                            alt="{{$item->name}}">
                                                    </a>
                                                </div>
                                                <div class="block-content">
                                                    <h3 class="line-clamp line-clamp-2">
                                                        <a href="{{route('front.detail-blog', $item->slug)}}"
                                                            title="{{$item->name}}">{{$item->name}}</a>
                                                    </h3>
                                                    <div class="time-post">
                                                        Ngày đăng: {{date('d/m/Y', strtotime($item->created_at))}}
                                                    </div>
                                                    <p style="height: auto;" class="justify line-clamp line-clamp-3">
                                                        {{$item->intro}}
                                                    </p>
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
                            <div class="list-blogs block-background">
                                <h1 class="title-page">
                                    <span>Tin tức</span>
                                </h1>
                                <div class="row row-fix">
                                    @foreach ($blogs as $item)
                                    <div class="col-lg-4 col-sm-6 col-12 col-fix">
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
                                                    <b>Tháng {{date('M', strtotime($item->created_at))}}</b>
                                                </div>
                                            </div>
                                            <div class="block-content">
                                                <h3>
                                                    <a class="line-clamp line-clamp-2"
                                                        href="{{route('front.detail-blog', $item->slug )}}"
                                                        title="{{$item->name}}">{{$item->name}}</a>
                                                </h3>
                                                <p class="justify line-clamp line-clamp-3">
                                                    {{$item->intro}}
                                                </p>
                                                <a class="viewmore"
                                                    href="{{route('front.detail-blog', $item->slug )}}"
                                                    title="Đọc tiếp">
                                                    Đọc tiếp
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-chevron-double-right"
                                                        viewBox="0 0 16 16">
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
                                <div class="text-center">
                                    {{$blogs->links()}}
                                </div>
                            </div>
                        </div>
                        @include('site.blogs.nav-blog')
                    </div>
                </div>
            </div>
        </div>
        <script>
            var swiper = new Swiper('.blog-slider', {
                autoplay: true,
                effect: 'fade',
                navigation: {
                    nextEl: '.blog-slider .swiper-button-next',
                    prevEl: '.blog-slider .swiper-button-prev',
                },

            });
        </script>
    </div>
@endsection

@push('script')
@endpush
