@extends('site.layouts.master')
@section('title')
    {{ $category->meta_title ? $category->meta_title : $category->name }}
@endsection
@section('description')
    {{ $category->meta_des ? $category->meta_des : $category->short_des }}
@endsection
@section('css')
<link href="{{ asset('site/css/breadcrumb_style.scss.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('site/css/paginate.scss.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('site/css/sidebar_style.scss.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('site/css/collection_style.scss.css') }}" rel="stylesheet" type="text/css" media="all" />
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
                    {{ $category->name }}
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
                    <li><strong><span>{{ $category->name }}</span></strong></li>
                </ul>
            </div>
        </section>
        <div class="layout-collection">
            <div class="container">
                <h1 class="title-page d-none">
                    {{ $category->name }}
                </h1>
                <div class="row">
                    {{-- <aside class="dqdt-sidebar sidebar col-lg-4 col-xl-3 col-12">
                        <script src="//bizweb.dktcdn.net/100/512/203/themes/943792/assets/search_filter.js?1727784692442"
                            type="text/javascript"></script>
                        <div class="filter-content">
                            <div class="filter-container">
                                <div class="col_title">
                                    <div class="filter-container__selected-filter" style="display: none;">
                                        <div class="filter-container__selected-filter-header clearfix">
                                            <span class="filter-container__selected-filter-header-title">
                                                Bạn chọn
                                            </span>
                                        </div>
                                        <div class="filter-container__selected-filter-list">
                                            <a href="javascript:void(0)" onclick="clearAllFiltered()"
                                                class="filter-container__clear-all">
                                                Bỏ hết
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="10"
                                                    height="10" x="0" y="0" viewBox="0 0 365.696 365.696"
                                                    style="enable-background:new 0 0 512 512" xml:space="preserve"
                                                    class="">
                                                    <g>
                                                        <path xmlns="http://www.w3.org/2000/svg"
                                                            d="m243.1875 182.859375 113.132812-113.132813c12.5-12.5 12.5-32.765624 0-45.246093l-15.082031-15.082031c-12.503906-12.503907-32.769531-12.503907-45.25 0l-113.128906 113.128906-113.132813-113.152344c-12.5-12.5-32.765624-12.5-45.246093 0l-15.105469 15.082031c-12.5 12.503907-12.5 32.769531 0 45.25l113.152344 113.152344-113.128906 113.128906c-12.503907 12.503907-12.503907 32.769531 0 45.25l15.082031 15.082031c12.5 12.5 32.765625 12.5 45.246093 0l113.132813-113.132812 113.128906 113.132812c12.503907 12.5 32.769531 12.5 45.25 0l15.082031-15.082031c12.5-12.503906 12.5-32.769531 0-45.25zm0 0"
                                                            fill="#ffffff" data-original="#fff" style=""
                                                            class=""></path>
                                                    </g>
                                                </svg>
                                            </a>
                                            <ul></ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Lọc giá -->
                                <aside class="aside-item filter-price">
                                    <div class="title-head">
                                        Chọn mức giá
                                    </div>
                                    <div class="aside-content filter-group content_price">
                                        <ul>
                                            <li class="filter-item filter-item--check-box filter-item--green">
                                                <span>
                                                    <label data-filter="10-000d" for="filter-duoi-10-000d">
                                                        <input type="checkbox" id="filter-duoi-10-000d"
                                                            data-group="Khoảng giá" data-field="price_min"
                                                            data-text="Dưới 10.000đ" value="(<10000)" data-operator="OR">
                                                        <i class="fa"></i>
                                                        Dưới 10.000đ
                                                    </label>
                                                </span>
                                            </li>
                                            <li class="filter-item filter-item--check-box filter-item--green">
                                                <span>
                                                    <label data-filter="50-000d" for="filter-10-000d-50-000d">
                                                        <input type="checkbox" id="filter-10-000d-50-000d"
                                                            data-group="Khoảng giá" data-field="price_min"
                                                            data-text="10.000đ - 50.000đ" value="(>=10000 AND <=50000)"
                                                            data-operator="OR">
                                                        <i class="fa"></i>
                                                        Từ 10.000đ - 50.000đ
                                                    </label>
                                                </span>
                                            </li>
                                            <li class="filter-item filter-item--check-box filter-item--green">
                                                <span>
                                                    <label data-filter="100-000d" for="filter-50-000d-100-000d">
                                                        <input type="checkbox" id="filter-50-000d-100-000d"
                                                            data-group="Khoảng giá" data-field="price_min"
                                                            data-text="50.000đ - 100.000đ" value="(>=50000 AND <=100000)"
                                                            data-operator="OR">
                                                        <i class="fa"></i>
                                                        Từ 50.000đ - 100.000đ
                                                    </label>
                                                </span>
                                            </li>
                                            <li class="filter-item filter-item--check-box filter-item--green">
                                                <span>
                                                    <label data-filter="200-000d" for="filter-100-000d-200-000d">
                                                        <input type="checkbox" id="filter-100-000d-200-000d"
                                                            data-group="Khoảng giá" data-field="price_min"
                                                            data-text="100.000đ - 200.000đ" value="(>=100000 AND <=200000)"
                                                            data-operator="OR">
                                                        <i class="fa"></i>
                                                        Từ 100.000đ - 200.000đ
                                                    </label>
                                                </span>
                                            </li>
                                            <li class="filter-item filter-item--check-box filter-item--green">
                                                <span>
                                                    <label data-filter="300-000d" for="filter-200-000d-300-000d">
                                                        <input type="checkbox" id="filter-200-000d-300-000d"
                                                            data-group="Khoảng giá" data-field="price_min"
                                                            data-text="200.000đ - 300.000đ"
                                                            value="(>=200000 AND <=300000)" data-operator="OR">
                                                        <i class="fa"></i>
                                                        Từ 200.000đ - 300.000đ
                                                    </label>
                                                </span>
                                            </li>
                                            <li class="filter-item filter-item--check-box filter-item--green">
                                                <span>
                                                    <label data-filter="500-000d" for="filter-300-000d-500-000d">
                                                        <input type="checkbox" id="filter-300-000d-500-000d"
                                                            data-group="Khoảng giá" data-field="price_min"
                                                            data-text="300.000đ - 500.000đ"
                                                            value="(>=300000 AND <=500000)" data-operator="OR">
                                                        <i class="fa"></i>
                                                        Từ 300.000đ - 500.000đ
                                                    </label>
                                                </span>
                                            </li>
                                            <li class="filter-item filter-item--check-box filter-item--green">
                                                <span>
                                                    <label data-filter="1-000-000d" for="filter-500-000d-1-000-000d">
                                                        <input type="checkbox" id="filter-500-000d-1-000-000d"
                                                            data-group="Khoảng giá" data-field="price_min"
                                                            data-text="500.000đ - 1.000.000đ"
                                                            value="(>=500000 AND <=1000000)" data-operator="OR">
                                                        <i class="fa"></i>
                                                        Từ 500.000đ - 1 triệu
                                                    </label>
                                                </span>
                                            </li>
                                            <li class="filter-item filter-item--check-box filter-item--green">
                                                <span>
                                                    <label data-filter="1-000-000d" for="filter-tren1-000-000d">
                                                        <input type="checkbox" id="filter-tren1-000-000d"
                                                            data-group="Khoảng giá" data-field="price_min"
                                                            data-text="Trên 1.000.000đ" value="(>1000000)"
                                                            data-operator="OR">
                                                        <i class="fa"></i>
                                                        Trên 1 triệu
                                                    </label>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                                <!-- End Lọc giá -->
                                <!-- Lọc Loại -->
                                <!-- End Lọc Loại -->
                                <!-- Lọc Thương hiệu -->
                                <!-- End Lọc Thương hiệu -->
                                <aside class="aside-item filter-tag">
                                    <div class="title-head">
                                        Loại da
                                    </div>
                                    <div class="aside-content filter-group">
                                        <ul>
                                            <li class="filter-item filter-item--check-box filter-item--green">
                                                <span>
                                                    <label for="filter-da-dau">
                                                        <input type="checkbox" id="filter-da-dau" data-group="tag2"
                                                            data-field="tags" data-text="Da dầu" value="(Da dầu)"
                                                            data-operator="OR">
                                                        <i class="fa"></i>
                                                        Da dầu
                                                    </label>
                                                </span>
                                            </li>
                                            <li class="filter-item filter-item--check-box filter-item--green">
                                                <span>
                                                    <label for="filter-da-nhon">
                                                        <input type="checkbox" id="filter-da-nhon" data-group="tag2"
                                                            data-field="tags" data-text="Da nhờn" value="(Da nhờn)"
                                                            data-operator="OR">
                                                        <i class="fa"></i>
                                                        Da nhờn
                                                    </label>
                                                </span>
                                            </li>
                                            <li class="filter-item filter-item--check-box filter-item--green">
                                                <span>
                                                    <label for="filter-da-kho">
                                                        <input type="checkbox" id="filter-da-kho" data-group="tag2"
                                                            data-field="tags" data-text="Da khô" value="(Da khô)"
                                                            data-operator="OR">
                                                        <i class="fa"></i>
                                                        Da khô
                                                    </label>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                                <!-- Lọc theo chất liệu -->
                                <!-- End lọc theo chất liệu -->
                                <!-- Lọc kích thước màn hình -->
                                <!-- End lọc theo kích thước màn hình -->
                                <div class="border_filter">
                                </div>
                                <!-- Lọc tính năng camera -->
                                <aside class="aside-item filter-tag">
                                    <div class="title-head">
                                        Dịch vụ giao hàng
                                    </div>
                                    <div class="aside-content filter-group">
                                        <ul>
                                            <li class="filter-item filter-item--check-box filter-item--green">
                                                <span>
                                                    <label for="filter-mien-phi-giao-hang">
                                                        <input type="checkbox" id="filter-mien-phi-giao-hang"
                                                            data-group="tag4" data-field="tags"
                                                            data-text="Miễn phí giao hàng" value="(Miễn phí giao hàng)"
                                                            data-operator="OR">
                                                        <i class="fa"></i>
                                                        Miễn phí giao hàng
                                                    </label>
                                                </span>
                                            </li>
                                            <li class="filter-item filter-item--check-box filter-item--green">
                                                <span>
                                                    <label for="filter-giao-hang-nhanh-4h">
                                                        <input type="checkbox" id="filter-giao-hang-nhanh-4h"
                                                            data-group="tag4" data-field="tags"
                                                            data-text="Giao hàng nhanh 4h" value="(Giao hàng nhanh 4h)"
                                                            data-operator="OR">
                                                        <i class="fa"></i>
                                                        Giao hàng nhanh 4h
                                                    </label>
                                                </span>
                                            </li>
                                            <li class="filter-item filter-item--check-box filter-item--green">
                                                <span>
                                                    <label for="filter-giao-hang-tiet-kiem">
                                                        <input type="checkbox" id="filter-giao-hang-tiet-kiem"
                                                            data-group="tag4" data-field="tags"
                                                            data-text="Giao hàng tiết kiệm" value="(Giao hàng tiết kiệm)"
                                                            data-operator="OR">
                                                        <i class="fa"></i>
                                                        Giao hàng tiết kiệm
                                                    </label>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                                <!-- End lọc theo tính nắng camera -->
                                <!-- Lọc theo tính năng đặc biệt -->
                                <!-- End lọc theo tính năng đặc biệt -->
                            </div>
                        </div>
                    </aside> --}}
                    <div class="block-collection col-lg-12 col-xl-12 col-12">
                        <div class="category-products">
                            <div class="sort-cate clearfix margin-bottom-10 hidden-xs">
                                <div class="sort-cate-left hidden-xs">
                                    <h3>
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="12px"
                                            height="12px" viewBox="0 0 97.761 97.762"
                                            style="enable-background:new 0 0 97.761 97.762;" xml:space="preserve">
                                            <path d="M42.761,65.596H34.75V2c0-1.105-0.896-2-2-2H16.62c-1.104,0-2,0.895-2,2v63.596H6.609c-0.77,0-1.472,0.443-1.804,1.137
                                      c-0.333,0.695-0.237,1.519,0.246,2.117l18.076,26.955c0.38,0.473,0.953,0.746,1.558,0.746s1.178-0.273,1.558-0.746L44.319,68.85
                                      c0.482-0.6,0.578-1.422,0.246-2.117C44.233,66.039,43.531,65.596,42.761,65.596z">
                                            </path>
                                            <path d="M93.04,95.098L79.71,57.324c-0.282-0.799-1.038-1.334-1.887-1.334h-3.86c-0.107,0-0.213,0.008-0.318,0.024
                                      c-0.104-0.018-0.21-0.024-0.318-0.024h-3.76c-0.849,0-1.604,0.535-1.887,1.336L54.403,95.1c-0.215,0.611-0.12,1.289,0.255,1.818
                                      s0.983,0.844,1.633,0.844h5.773c0.88,0,1.657-0.574,1.913-1.416l2.536-8.324h14.419l2.536,8.324
                                      c0.256,0.842,1.033,1.416,1.913,1.416h5.771c0.649,0,1.258-0.314,1.633-0.844C93.16,96.387,93.255,95.709,93.04,95.098z
                                      M68.905,80.066c2.398-7.77,4.021-13.166,4.82-16.041l4.928,16.041H68.905z"></path>
                                            <path
                                                d="M87.297,34.053H69.479L88.407,6.848c0.233-0.336,0.358-0.734,0.358-1.143V2.289c0-1.104-0.896-2-2-2H60.694
                                      c-1.104,0-2,0.896-2,2v3.844c0,1.105,0.896,2,2,2h16.782L58.522,35.309c-0.233,0.336-0.358,0.734-0.358,1.146v3.441
                                      c0,1.105,0.896,2,2,2h27.135c1.104,0,2-0.895,2-2v-3.842C89.297,34.947,88.402,34.053,87.297,34.053z">
                                            </path>
                                        </svg>
                                        Xếp theo:
                                    </h3>
                                    <ul>
                                        <li class="btn-quick-sort position-default active">
                                            <a href="javascript:;" onclick="sortby('default')"
                                                title="Mặc định"><i></i>Mặc định</a>
                                        </li>
                                        <li class="btn-quick-sort alpha-asc">
                                            <a href="javascript:;" onclick="sortby('alpha-asc')"
                                                title="Tên A-Z"><i></i>Tên A-Z</a>
                                        </li>
                                        <li class="btn-quick-sort alpha-desc">
                                            <a href="javascript:;" onclick="sortby('alpha-desc')"
                                                title="Tên Z-A"><i></i>Tên Z-A</a>
                                        </li>
                                        <li class="btn-quick-sort position-desc">
                                            <a href="javascript:;" onclick="sortby('created-desc')"
                                                title="Hàng mới"><i></i>Hàng mới</a>
                                        </li>
                                        <li class="btn-quick-sort price-asc">
                                            <a href="javascript:;" onclick="sortby('price-asc')"
                                                title="Giá thấp đến cao"><i></i>Giá thấp đến cao</a>
                                        </li>
                                        <li class="btn-quick-sort price-desc">
                                            <a href="javascript:;" onclick="sortby('price-desc')"
                                                title="Giá cao xuống thấp"><i></i>Giá cao xuống thấp</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="products-view products-view-grid list_hover_pro">
                                <div class="row row-fix">
                                    @foreach ($products as $product)
                                    <div class="col-12 col-md-6 col-lg-6 col-xl-3 col-fix">
                                        <div class="item_product_main">
                                            @include('site.products.product_item', ['product' => $product])
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="open-filters" class="open-filters d-lg-none d-xl-none">
                </div>
            </div>
        </div>
        <div class="opacity_sidebar"></div>
    </div>
@endsection

@push('script')
@endpush
