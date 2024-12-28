@extends('site.layouts.master')
@section('title')
    Lữ hành
@endsection

@section('css')
    <link href="{{ asset('/site/css/breadcrumb_style.scss.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('/site/css/paginate.scss.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('/site/css/style_page.scss.css') }}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('content')
    <div class="bodywrap">
        <section class="bread-crumb"
            style="background-image: url({{asset('site/images/breadcrumb.png')}})">
            <div class="container">
                <div class="title-bread-crumb">
                    Lữ hành
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
                    <li><strong><span>Lữ hành</span></strong></li>
                </ul>
            </div>
        </section>
        <section class="page page-datlich">
            <div class="container">
                <div class=" padding-top-15">
                    <h2 class="title">
                        Giới thiệu về chương trình
                    </h2>
                </div>
            </div>
            <section class="dat-lich">
                <div class="container">
                    <form id="contact" accept-charset="UTF-8">
                        <div class="row">
                            <div class="col-lg-6" style="margin-bottom: 30px;">
                                <img style="border-radius: 30px 10px; width: 100%;"
                                    src="{{$data->image->path}}"
                                    alt="{{$data->name}}">
                            </div>
                            <div class="col-lg-6" style="margin-bottom: 30px;">
                                <div style="margin-bottom: 30px; background: #fff; padding: 20px; border-radius: 10px;">
                                    {!! $data->intro !!}
                                </div>
                                <div id="pagelogin">
                                    <p id="errorFills" style="margin-bottom:10px; color: red;"></p>
                                    <div class="form-signup clearfix">
                                        <div class="group_contact row">
                                            <fieldset class="form-group">
                                                <label>Họ và tên:</label>
                                                <input placeholder="Họ và tên..." type="text"
                                                    class="form-control form-control-lg" required value=""
                                                    name="contact[Name]">
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <label>Email:</label>
                                                <input placeholder="Email" type="email"
                                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required id="email1"
                                                    class="form-control form-control-lg" value="" name="contact[email]">
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <label>Số điện thoại:</label>
                                                <input placeholder="Số điện thoại..." type="number"
                                                    class="form-control form-control-lg" required value=""
                                                    name="contact[Số điện thoại]">
                                            </fieldset>
                                            <fieldset class="form-group form-group-textarea">
                                                <label>Ghi chú:</label>
                                                <textarea placeholder="Nhập ghi chú" name="contact[body]" id="comment"
                                                    class="form-control content-area form-control-lg" rows="3" Required></textarea>
                                            </fieldset>
                                            <div class="submit">
                                                <button type="submit" class="btn-primary button_45 btn">Gửi thông tin liên hệ</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div style="margin-bottom: 30px; background: #fff; padding: 20px; border-radius: 10px;">
                                    {!! $data->body !!}
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </section>
    </div>
@endsection

@push('script')
@endpush
