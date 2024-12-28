@extends('site.layouts.master')
@section('title')
    Liên hệ
@endsection

@section('css')
<link href="{{ asset('/site/css/breadcrumb_style.scss.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('/site/css/paginate.scss.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('/site/css/style_page.scss.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('/site/css/contact_style.scss.css') }}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('content')
    <div class="bodywrap">
        <section class="bread-crumb"
            style="background-image: url({{asset('site/images/breadcrumb.png')}})">
            <div class="container">
                <div class="title-bread-crumb">
                    Liên hệ
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
                    <li><strong><span>Liên hệ</span></strong></li>
                </ul>
            </div>
        </section>
        <h1 class="title-head-contact a-left d-none">Liên hệ</h1>
        <div class="layout-contact">
            <div class="container">
                <div class="pg_page padding-top-15 block-background" style="margin-bottom: 20px">
                    <div class="row row-fix">
                        <div class="col-lg-6 col-12 col-fix">
                            <div class="contact">
                                <h4>
                                    {{ $config->web_title }}
                                </h4>
                                <div class="content">
                                    {!! $config->web_des !!}
                                </div>
                                <div class="info-contact">
                                    <div class="group-address">
                                        <ul>
                                            <li>
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                        <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                        <path
                                                            d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z" />
                                                    </svg>
                                                </div>
                                                <div class="info">
                                                    <b>Địa chỉ</b>
                                                    <span>
                                                        {!! $config->address_company !!}
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                        <path
                                                            d="M256 512C114.6 512 0 397.4 0 256S114.6 0 256 0S512 114.6 512 256s-114.6 256-256 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                                                    </svg>
                                                </div>
                                                <div class="info">
                                                    <b>Thời gian làm việc</b>
                                                    <span>
                                                        8h - 22h<br>
                                                        Từ thứ 2 đến chủ nhật
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                        <path
                                                            d="M280 0C408.1 0 512 103.9 512 232c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-101.6-82.4-184-184-184c-13.3 0-24-10.7-24-24s10.7-24 24-24zm8 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32-72c0-13.3 10.7-24 24-24c75.1 0 136 60.9 136 136c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-48.6-39.4-88-88-88c-13.3 0-24-10.7-24-24zM117.5 1.4c19.4-5.3 39.7 4.6 47.4 23.2l40 96c6.8 16.3 2.1 35.2-11.6 46.3L144 207.3c33.3 70.4 90.3 127.4 160.7 160.7L345 318.7c11.2-13.7 30-18.4 46.3-11.6l96 40c18.6 7.7 28.5 28 23.2 47.4l-24 88C481.8 499.9 466 512 448 512C200.6 512 0 311.4 0 64C0 46 12.1 30.2 29.5 25.4l88-24z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <div class="info">
                                                    <b>Hotline</b>
                                                    <a title="{{ $config->hotline }}" href="tel:{{ str_replace(' ', '', $config->hotline) }}">{{ $config->hotline }}</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                        <path
                                                            d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <div class="info">
                                                    <b>Email</b>
                                                    <a title="{{ $config->email }}"
                                                        href="mailto:{{ $config->email }}">{{ $config->email }}</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 col-fix">
                            <div class="form-contact">
                                <h4>
                                    Liên hệ với chúng tôi
                                </h4>
                                <span class="content-form">
                                    Nếu bạn có thắc mắc gì, có thể gửi yêu cầu cho chúng tôi, và chúng tôi sẽ liên lạc lại
                                    với bạn sớm nhất có thể .
                                </span>
                                <div id="pagelogin">
                                    <form id="contact" accept-charset="UTF-8">
                                        <div class="group_contact">
                                            <div class="form-group">
                                                <input placeholder="Họ và tên" type="text"
                                                    class="form-control  form-control-lg" required value=""
                                                    name="contact[Họ và tên]">
                                            </div>
                                            <div class="form-group">
                                                <input placeholder="Email" type="email"
                                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required id="email1"
                                                    class="form-control form-control-lg" value="" name="contact[Email]">
                                            </div>
                                            <div class="form-group">
                                                <input type="number" placeholder="Điện thoại*" name="contact[Số điện thoại]"
                                                    class="form-control form-control-lg" required>
                                            </div>
                                            <div class="form-group">
                                                <textarea placeholder="Nội dung" name="contact[Nội dung]" id="comment" class="form-control content-area form-control-lg"
                                                    rows="5"></textarea>
                                            </div>
                                            <input type="hidden" name="contact[Loại]" value="Lữ hành">

                                            <button type="submit" class="btn-lienhe">Gửi thông tin</button>
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
                                                "contact[Loại]": {
                                                    required: true,
                                                },
                                            },
                                            messages: {
                                                "contact[Họ và tên]": {
                                                    required: "Vui lòng nhập họ và tên",
                                                },
                                                "contact[Email]": {
                                                    required: "Email không được để trống",
                                                },
                                                "contact[Số điện thoại]": {
                                                    required: "Nhập số điện thoại liên hệ",
                                                },
                                                "contact[Loại]": {
                                                    required: "Chọn loại",
                                                },
                                            },
                                            submitHandler: function(form) {
                                                jQuery.ajax({
                                                    url: "https://script.google.com/macros/s/AKfycbwacSU5_P2qnY1Stzh3vvk6T0Rb6qEX_nK3VjLwvmMKKFNZf6qYogZO35RqfCaPP9utrw/exec",
                                                    type: "post",
                                                    data: jQuery("#contact").serializeArray(),
                                                    success: function() {
                                                        toastr.success("Gửi thông tin thành công");
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
                        <div class="col-12 col-fix">
                            <div id="contact_map" class="map">
                                {!! $config->location !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        app.controller('ContactUsController', function($scope, $http) {
            $scope.loading = false;
            $scope.errors = {};
            $scope.submitContact = function() {
                console.log(123);

                $scope.loading = true;
                let data = {
                    your_name: $scope.your_name,
                    your_email: $scope.your_email,
                    your_phone: $scope.your_phone,
                    your_message: $scope.your_message
                };
                jQuery.ajax({
                    url: '{{ route('front.post-contact') }}',
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    data: data,
                    success: function(response) {
                        if (response.success) {
                            toastr.success('Thao tác thành công !')
                        } else {
                            $scope.errors = response.errors;
                            toastr.error('Thao tác thất bại !')
                        }
                    },
                    error: function() {
                        toastr.error('Thao tác thất bại !')
                    },
                    complete: function() {
                        $scope.$applyAsync();
                        $scope.loading = false;
                    }
                });
            };
        });
    </script>
@endpush
