<!DOCTYPE html>
<html lang="vi">
<head>
    @include('site.partials.head')
    <link rel="preload" as="script" href="{{ asset('/site/js/jquery.js') }}" />
    <script src="{{ asset('/site/js/jquery.js') }}" type="text/javascript"></script>
    <link rel="preload" as="script" href="{{ asset('/site/js/cookie.js') }}" />
    <script src="{{ asset('/site/js/cookie.js') }}" type="text/javascript"></script>
    <link rel="preload" as="script" href="{{ asset('/site/js/swiper.js') }}" />
    <script src="{{ asset('/site/js/swiper.js') }}" type="text/javascript"></script>
    <link rel="preload" as="script" href="{{ asset('/site/js/lazy.js') }}" />
    <script src="{{ asset('/site/js/lazy.js') }}" type="text/javascript"></script>
    <link rel="preload" as='style' type="text/css" href="{{ asset('/site/css/main.scss.css') }}">
    <link rel="preload" as='style' type="text/css" href="{{ asset('/site/css/quickviews_popup_cart.scss.css') }}">
    <link rel="preload" as='style'  type="text/css" href="{{ asset('/site/css/index.scss.css') }}">
    <link rel="preload" as='style'  type="text/css" href="{{ asset('/site/css/bootstrap-4-3-min.css') }}">
    <link href="{{ asset('/site/css/bootstrap-4-3-min.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('/site/css/main.scss.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('/site/css/index.scss.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('/site/css/quickviews_popup_cart.scss.css') }}" rel="stylesheet" type="text/css" media="all" />
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    @yield('css')
    <script>
        (function () {
            function asyncLoad() {
                var urls = [];
                for (var i = 0; i < urls.length; i++) {
                    var s = document.createElement('script');
                    s.type = 'text/javascript';
                    s.async = true;
                    s.src = urls[i];
                    var x = document.getElementsByTagName('script')[0];
                    x.parentNode.insertBefore(s, x);
                }
            };
            window.attachEvent ? window.attachEvent('onload', asyncLoad) : window.addEventListener('load', asyncLoad, false);
        })();
    </script>
    <script>
        $(document).ready(function ($) {
            awe_lazyloadImage();
        });
        function awe_lazyloadImage() {
            var ll = new LazyLoad({
                elements_selector: ".lazyload",
                load_delay: 100,
                threshold: 0
            });
        } window.awe_lazyloadImage=awe_lazyloadImage;
    </script>
</head>
<body>
    <div class="opacity_menu"></div>
    @include('site.partials.header')

    @yield('content')

    @include('site.partials.footer')
    <a href="#"  class="backtop"  title="Lên đầu trang">
        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="angle-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-angle-up fa-w-10">
            <path fill="currentColor" d="M168.5 164.2l148 146.8c4.7 4.7 4.7 12.3 0 17l-19.8 19.8c-4.7 4.7-12.3 4.7-17 0L160 229.3 40.3 347.8c-4.7 4.7-12.3 4.7-17 0L3.5 328c-4.7-4.7-4.7-12.3 0-17l148-146.8c4.7-4.7 12.3-4.7 17 0z" class=""></path>
        </svg>
    </a>
    <div class="backdrop__body-backdrop___1rvky"></div>
    <script type="text/javascript">
        $('.img_hover_cart').click(function(){
        $('.cart-sidebar, .backdrop__body-backdrop___1rvky').addClass('active');
        });

        $(document).on('click','.backdrop__body-backdrop___1rvky, .cart_btn-close, .close-popup, .close-popup-search', function() {
        $('.backdrop__body-backdrop___1rvky, .cart-sidebar, #popup-cart-desktop, .popup-cart-mobile, .popup-coupon,.menu-vertical,.vertical-menu-category, .popup-search, .header-scroll  .header-menu, .thong-so-popup').removeClass('active');


        return false;
        })

    </script>
    <div id="quick-view-product" class="quickview-product" style="{{ Route::is('front.home-page') || (Route::currentRouteName() == 'front.service-type' && request()->route('slug') === 'tri-lieu') || Route::is('front.service-detail') ? '' : 'display:none;' }}">
        <div class="quickview-overlay fancybox-overlay fancybox-overlay-fixed"></div>
        <div class="quick-view-product">
            <div id="quickview-modal" style="height: 100%;">
                <div class="block-quickview primary_block details-product" style="height: 100%;">
                    <div class="row" style="height: 100%;">
                        <section class="section_khuyenmai section_product_km" style="height: 100%;">
                            <div class="container" style="height: 100%;">
                            <div class="thumb-khuyenmai" style="height: 100%;">
                                <img width="1774" style="height: 100%;" alt="Trải nghiệm khuyến mãi đặc biệt" class="lazyload" src="{{asset('/site/images/lazy.png')}}"  data-src="{{asset('/site/images/hot_icon.png')}}">
                                <div class="thumb-content">
                                    <h3 class="title-index p-5">
                                        <span class="title-name">Trải nghiệm ưu đãi đặc biệt
                                        </span>
                                        <img width="320" height="24" class="lazyload" src="{{asset('/site/images/lazy.png')}}"  data-src="{{asset('/site/images/title.png')}}" alt="{{$config->web_title}}">
                                    </h3>
                                    <div class="content">
                                        <h5>Chỉ áp dụng ưu đãi cho dịch vụ trị liệu</h5>
                                        Trải nhiệm chăm sóc chuyên sâu bằng phương pháp đông y dưỡng sinh cải thiện sức khỏe cơ thể<br>Xóa tan các hiện tượng căng thẳng đau đầu, mất ngủ, đau mỏi vai gáy, đĩa đệm....
                                    </div>
                                    <div class="count-down">
                                        <div class="timer-view">
                                        <div class="block-timer">Chỉ với <b>179.000đ</b></div>
                                        </div>
                                    </div>
                                    <form id="contact-promotion-popup" accept-charset="UTF-8">
                                        <div id="pagelogin">
                                            <div class="form-signup clearfix">
                                                <div class="group_contact row">
                                                    <fieldset class="form-group">
                                                        <label>Họ và tên:</label>
                                                        <input placeholder="Họ và tên..." type="text" class="form-control form-control-lg" required="" value="" name="contact[Họ và tên]">
                                                    </fieldset>
                                                    <fieldset class="form-group">
                                                        <label>Số điện thoại:</label>
                                                        <input placeholder="Số điện thoại..." type="number" class="form-control form-control-lg" required="" value="" name="contact[Số điện thoại]">
                                                    </fieldset>
                                                    <fieldset class="form-group">
                                                        <label>Dịch vụ:</label>
                                                        <select id="city" name="contact[Dịch vụ]" class="select select-dv" required="">
                                                        <option value="" selected="">Chọn dịch vụ</option>
                                                        @foreach ($tri_lieu_services as $item)
                                                        <option class="check" value="{{$item->name}}">{{$item->name}}</option>
                                                        @endforeach
                                                        </select>
                                                    </fieldset>
                                                    <input type="hidden" name="contact[Loại]" value="Đăng ký trải nghiệm">
                                                    <div class="submit">
                                                        <button type="submit" class="btn-primary button_45 btn">Đăng ký trải nghiệm</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <script>
                                        jQuery('#contact-promotion-popup').validate({
                                            rules: {
                                                "contact[Họ và tên]": {
                                                    required: true,
                                                },
                                                "contact[Số điện thoại]": {
                                                    required: true,
                                                    number: true,
                                                    minlength: 10,
                                                },
                                                "contact[Dịch vụ]": {
                                                    required: true,
                                                },
                                            },
                                            messages: {
                                                "contact[Họ và tên]": {
                                                    required: "Vui lòng nhập họ và tên",
                                                },
                                                "contact[Số điện thoại]": {
                                                    required: "Nhập số điện thoại liên hệ",
                                                },
                                                "contact[Dịch vụ]": {
                                                    required: "Vui lòng chọn dịch vụ",
                                                },
                                                "contact[Loại]": {
                                                    required: "Chọn loại",
                                                },
                                            },
                                            submitHandler: function(form) {
                                                jQuery.ajax({
                                                    url: "https://script.google.com/macros/s/AKfycbwacSU5_P2qnY1Stzh3vvk6T0Rb6qEX_nK3VjLwvmMKKFNZf6qYogZO35RqfCaPP9utrw/exec",
                                                    type: "post",
                                                    data: jQuery("#contact-promotion-popup").serializeArray(),
                                                    success: function() {
                                                        toastr.success("Đăng ký trải nghiệm thành công");
                                                    },
                                                    error: function() {
                                                        toastr.error("Gửi thông tin thất bại");
                                                    }
                                                });
                                            }
                                        });
                                    </script>
                                    <style>
                                        #contact-promotion-popup #pagelogin {
                                            padding: 20px;
                                            background: #121f38;
                                            border-radius: 30px 10px;
                                        }
                                        #contact-promotion-popup #pagelogin .form-signup .group_contact .form-group {
                                            flex: 0 0 50%;
                                            max-width: 33.33%;
                                            position: relative;
                                            width: 100%;
                                            padding-right: 10px;
                                            padding-left: 10px;
                                            margin-bottom: 20px;
                                            color: #fff;
                                        }
                                        @media (max-width: 768px) {
                                            #contact-promotion-popup #pagelogin .form-signup .group_contact .form-group {
                                                flex: 0 0 100%;
                                                max-width: 100%;
                                            }
                                        }
                                        #contact-promotion-popup #pagelogin .form-signup .group_contact .form-group label {
                                            width: 100%;
                                            font-weight: 700;
                                            font-size: 14px;
                                            text-align: left;
                                        }
                                        #contact-promotion-popup #pagelogin .form-signup .group_contact .form-group input {
                                            width: 100% !important;
                                            border-radius: 10px 2px;
                                            height: 35px;
                                            font-size: 15px;
                                            border: 0;
                                            border-bottom: 2px solid #121f38;
                                            padding: 1px 10px;
                                        }
                                        #contact-promotion-popup #pagelogin .form-signup .group_contact .form-group input:focus {
                                            border-bottom: 2px solid #121f38;
                                        }
                                        #contact-promotion-popup #pagelogin .form-signup .group_contact .submit {
                                            text-align: center;
                                            display: inline-block;
                                            width: 100%;
                                        }
                                        #contact-promotion-popup #pagelogin .form-signup .group_contact .submit .button_45 {
                                            background: #9a563a;
                                            color: #fff;
                                            border-radius: 10px 2px;
                                            height: 35px;
                                            font-size: 15px;
                                            border: 0;
                                            padding: 1px 10px;
                                        }
                                        #contact-promotion-popup #pagelogin .form-signup .group_contact .form-group select {
                                            width: 100% !important;
                                            border-radius: 10px 2px;
                                            height: 35px;
                                            font-size: 15px;
                                            border: 0;
                                            border-bottom: 2px solid #121f38;
                                            padding: 1px 10px;
                                        }
                                    </style>
                                </div>
                            </div>
                            </div>
                        </section>
                    </div>
                </div>
                <a title="Close" class="quickview-close close-window" href="javascript:;">
                <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-times fa-w-10">
                    <path fill="currentColor" d="M207.6 256l107.72-107.72c6.23-6.23 6.23-16.34 0-22.58l-25.03-25.03c-6.23-6.23-16.34-6.23-22.58 0L160 208.4 52.28 100.68c-6.23-6.23-16.34-6.23-22.58 0L4.68 125.7c-6.23 6.23-6.23 16.34 0 22.58L112.4 256 4.68 363.72c-6.23 6.23-6.23 16.34 0 22.58l25.03 25.03c6.23 6.23 16.34 6.23 22.58 0L160 303.6l107.72 107.72c6.23 6.23 16.34 6.23 22.58 0l25.03-25.03c6.23-6.23 6.23-16.34 0-22.58L207.6 256z" class=""></path>
                </svg>
                </a>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function changeImageQuickView(img, selector) {
            var src = $(img).attr("src");
            src = src.replace("_compact", "");

            $(selector).attr("src", src);
        }
        function validate(evt) {
            var theEvent = evt || window.event;
            var key = theEvent.keyCode || theEvent.which;
            key = String.fromCharCode( key );
            var regex = /[0-9]|\./;
            if( !regex.test(key) ) {
                theEvent.returnValue = false;
                if(theEvent.preventDefault) theEvent.preventDefault();
            }
        }
        var selectCallbackQuickView = function(variant, selector) {
            $('#quick-view-product form').show();
            var productItem = jQuery('.quick-view-product .product-item'),
                addToCart = productItem.find('.add_to_cart_detail'),
                productPrice = productItem.find('.price'),
                comparePrice = productItem.find('.old-price'),
                form2 = jQuery('.soluong1'),
                status = productItem.find('.soluong'),
                sku = productItem.find('.sku_'),
                totalPrice = productItem.find('.total-price span');

            if(variant && variant.sku ){
                sku.text(variant.sku);
            }else{
                sku.text('Đang cập nhật');
            }
            if (variant && variant.available) {

                var form = jQuery('#' + selector.domIdPrefix).closest('form');
                for (var i=0,length=variant.options.length; i<length; i++) {
                    var radioButton = form.find('.swatch[data-option-index="' + i + '"] :radio[value="' + variant.options[i] +'"]');

                }

                addToCart.removeClass('disabled').removeAttr('disabled');
                addToCart.html('<span class="btn-content text_1">Thêm vào giỏ hàng</span>').removeAttr('disabled');
                status.text('Còn hàng');
                if(variant.price < 1){
                    $("#quick-view-product .price").html('Liên hệ');
                    $("#quick-view-product del, #quick-view-product .quantity_wanted_p").hide();
                    $("#quick-view-product .prices .old-price").hide();
                    form2.hide();
                }else{
                    if ( variant.compare_at_price > variant.price ) {
                                    productPrice.addClass('on-sale');
                } else {
                    comparePrice.hide();
                    productPrice.removeClass('on-sale');
                }

                $(".quantity_wanted_p").show();
                $(".input_qty_qv_").show();
                form2.show();
            }



            updatePricingQuickView();

                                /*begin variant image*/
                                if (variant && variant.featured_image) {

                var originalImage = $("#product-featured-image-quickview");
                var newImage = variant.featured_image;
                var element = originalImage[0];
                Bizweb.Image.switchImage(newImage, element, function (newImageSizedSrc, newImage, element) {
                    $('#thumblist_quickview img').each(function() {
                        var parentThumbImg = $(this).parent();
                        var productImage = $(this).parent().data("image");
                        if (newImageSizedSrc.includes(productImage)) {
                            $(this).parent().trigger('click');
                            return false;
                        }
                    });

                });
                $('#product-featured-image-quickview').attr('src',variant.featured_image.src);
            }
        } else {
            addToCart.addClass('disabled').attr('disabled', 'disabled');
            addToCart.removeClass('d-none').addClass('btn_buy').attr('disabled','disabled').html('<div class="disabled">Hết hàng</div>').show();
            status.text('Hết hàng');
            $(".quantity_wanted_p").show();
            if(variant){
                if(variant.price < 1){
                    $("#quick-view-product .price").html('Liên hệ');
                    $("#quick-view-product del").hide();
                    $("#quick-view-product .quantity_wanted_p").hide();
                    $("#quick-view-product .prices .old-price").hide();
                    form2.hide();
                    comparePrice.hide();
                    productPrice.removeClass('on-sale');
                    addToCart.addClass('disabled').attr('disabled', 'disabled');
                    addToCart.removeClass('d-none').addClass('btn_buy').attr('disabled','disabled').html('<div class="disabled">Hết hàng</div>').show();
                }else{
                    if ( variant.compare_at_price > variant.price ) {
                                                            productPrice.addClass('on-sale');
                                        } else {
                                        comparePrice.hide();
                        productPrice.removeClass('on-sale');
                        $("#quick-view-product .prices .old-price").html('');
                    }
                                                                            $("#quick-view-product del ").hide();
                                                        $("#quick-view-product .prices .old-price").show();
                    $(".input_qty_qv_").hide();
                    form2.hide();
                    addToCart.addClass('disabled').attr('disabled', 'disabled');
                    addToCart.removeClass('d-none').addClass('btn_buy').attr('disabled','disabled').html('<div class="disabled">Hết hàng</div>').show();
                }
            }else{
                $("#quick-view-product .price").html('Liên hệ');
                $("#quick-view-product del").hide();
                $("#quick-view-product .quantity_wanted_p").hide();
                $("#quick-view-product .prices .old-price").hide();
                form2.hide();
                comparePrice.hide();
                productPrice.removeClass('on-sale');
                addToCart.addClass('disabled').attr('disabled', 'disabled');
                addToCart.removeClass('d-none').addClass('btn_buy').attr('disabled','disabled').html('<div class="disabled">Hết hàng</div>').show();
            }
        }
        /*begin variant image*/
        if (variant && variant.featured_image) {

            var originalImage = $("#product-featured-image-quickview");
            var newImage = variant.featured_image;
            var element = originalImage[0];
            Bizweb.Image.switchImage(newImage, element, function (newImageSizedSrc, newImage, element) {
                $('#thumblist_quickview img').each(function() {
                    var parentThumbImg = $(this).parent();
                    var productImage = $(this).parent().data("image");
                    if (newImageSizedSrc.includes(productImage)) {
                        $(this).parent().trigger('click');
                        return false;
                    }
                });

            });
            $('#product-featured-image-quickview').attr('src',variant.featured_image.src);
        }

        };

    </script>
    <script>
        initQuickView();
        var product = {};
        var currentLinkQuickView = '';
        var option1 = '';
        var option2 = '';
        function setButtonNavQuickview() {
            $("#quickview-nav-button a").hide();
            $("#quickview-nav-button a").attr("data-index", "");
            var listProducts = $(currentLinkQuickView).closest(".slide").find("a.quick-view");
            if(listProducts.length > 0) {
                var currentPosition = 0;
                for(var i = 0; i < listProducts.length; i++) {
                    if($(listProducts[i]).data("handle") == $(currentLinkQuickView).data("handle")) {
                        currentPosition = i;
                        break;
                    }
                }
                if(currentPosition < listProducts.length - 1) {
                    $("#quickview-nav-button .btn-next-product").show();
                    $("#quickview-nav-button .btn-next-product").attr("data-index", currentPosition + 1);
                }
                if(currentPosition > 0) {
                    $("#quickview-nav-button .btn-previous-product").show();
                    $("#quickview-nav-button .btn-previous-product").attr("data-index", currentPosition - 1);
                }
            }
            $("#quickview-nav-button a").click(function() {
                $("#quickview-nav-button a").hide();
                var indexLink = parseInt($(this).data("index"));
                if(!isNaN(indexLink) && indexLink >= 0) {
                    var listProducts = $(currentLinkQuickView).closest(".slide").find("a.quick-view");
                    if(listProducts.length > 0 && indexLink < listProducts.length) {
                        //$(".quickview-close").trigger("click");
                        $(listProducts[indexLink]).trigger("click");
                    }
                }
            });
        }
        function initQuickView(){

            $(document).on("click", "#thumblist_quickview li", function() {
                changeImageQuickView($(this).find("img:first-child"), ".product-featured-image-quickview");
                $('#thumblist_quickview li').removeClass('active');
                $(this).addClass('active');
            });
            $(document).on('click', '.quick-view', function(e) {

                if($(window).width() > 1025){
                    $('.soluong1').show();
                    e.preventDefault();

                    var producthandle = $(this).data("handle");
                    currentLinkQuickView = $(this);
                    Bizweb.getProduct(producthandle,function(product) {
                        var qvhtml = $("#quickview-modal").html();
                        $(".quick-view-product").html(qvhtml);
                        var quickview= $(".quick-view-product");

                        if(product.summary != null && product.summary !=""){
                            var productdes = product.summary;
                        }
                        else{
                            quickview.find(".rte").html('Thông tin sản phẩm đang cập nhật');
                        }
                        var featured_image = Bizweb.resizeImage(product.featured_image, "large");
                        if(featured_image == null){
                            featured_image = 'https://bizweb.dktcdn.net/thumb/grande/assets/themes_support/noimage.gif';
                        }
                        // Reset current link quickview and button navigate in Quickview
                        setButtonNavQuickview();
                        if(featured_image != null){
                            quickview.find(".view_full_size img").attr("src",featured_image);
                        }


                        if(product.price < 1 && product.variants.length < 2){
                            quickview.find(".price").html('Liên hệ');
                            quickview.find("del").html('');
                            quickview.find("#quick-view-product form").hide();

                            quickview.find(".prices").html('<span class="price product-price">Liên hệ</span>');

                            quickview.find(".add_to_cart_detail span").html('Liên hệ');

                        }
                        else{
                            quickview.find("#quick-view-product form").show();
                                                                            }
                                                                            quickview.find(".product-item").attr("id", "product-" + product.id);
                                                        quickview.find(".qv-link").attr("href",product.url);
                            quickview.find(".variants").attr("id", "product-actions-" + product.id);
                            quickview.find(".variants select").attr("id", "product-select-" + product.id);

                            quickview.find(".qwp-name").html('<a class="text2line" href="'+ product.url +'" title="'+product.name+'">'+product.name +'</a>');
                            quickview.find(".reviews_qv .text_revi").html('<a href="'+ product.url +'" title="Đánh giá '+product.name+'"><i class="fa fa-edit"></i>&nbsp;Đánh giá</a>');

                            if(product.vendor){
                                quickview.find(".vend-qv .vendor_").append(product.vendor);
                            }else{
                                quickview.find(".vend-qv .vendor_").append("Đang cập nhật");
                            }

                            if(product.product_type){
                                quickview.find(".vend-qv .type_").append(product.product_type);
                            }else{
                                quickview.find(".vend-qv .type_").append("Đang cập nhật");
                            }
                            if(product.variants[0].sku){
                                quickview.find(".vend-qv .sku_").append(product.variants[0].sku);
                            }else{
                                quickview.find(".vend-qv .sku_").append("Đang cập nhật");
                            }
                            if(product.available){
                                if (product.variants[0].inventory_management == 'bizweb') {
                                    quickview.find(".vend-qv .soluong").html('Còn hàng');
                                }else{
                                    quickview.find(".vend-qv .soluong").html('Còn hàng');
                                }
                            }else {
                                quickview.find(".vend-qv .soluong").html('Hết hàng');
                                $('.soluong1').hide();
                            }



                            quickview.find(".product-description .rte").html(productdes);
                            quickview.find(".view-more").attr('href',product.url);

                            if (product.compare_at_price_max > product.price) {
                                                                                    quickview.find(".price").addClass("sale-price")
                                                                }
                                                                else {
                                                                quickview.find(".old-price").html("");
                                quickview.find(".price").removeClass("sale-price")
                            }
                            if (!product.available) {

                                $(".quick-view-product form").show();
                                $(".quick-view-product .quantity_wanted_p").show();
                                quickViewVariantsSwatch(product, quickview);

                                if(product.price < 1){
                                    $('#quick-view-product form').hide();
                                }else{
                                    $('#quick-view-product form').show();
                                }
                                $(".soluong_qv").hide();
                                $('.soluong1').hide();
                                quickview.find(".add_to_cart_detail").text("Hết hàng").addClass("disabled").attr("disabled", "disabled");
                                if(product.variants.length > 1){

                                    quickview.find("select, .dec, .inc, .variants label").show();



                                }else{
                                    quickview.find("select, .dec, .inc, .variants label").hide();
                                }

                            }
                            else {
                                quickViewVariantsSwatch(product, quickview);
                                $(".quick-view-product .quantity_wanted_p").show();
                                if(product.variants.length > 1){
                                    $('#quick-view-product form').show();
                                }else{
                                    if(product.price < 1){
                                        $('#quick-view-product form').hide();
                                    }else{
                                        $('#quick-view-product form').show();
                                    }
                                }
                            }

                            quickview.find('.more_info_block .page-product-heading li:first, .more_info_block .tab-content section:first').addClass('active');

                            //$("#quick-view-product").modal();

                            $(".view_scroll_spacer").removeClass("hidden");


                            loadQuickViewSlider(product, quickview);

                            // Action
                            setTimeout(function(){
                                var thumbLargeimg = $('.view_full_size .img-product #product-featured-image-quickview').attr('src');
                                var thumMedium = $('#thumbs_list_quickview .owl-item li').find('img').attr('src');
                                if (thumbLargeimg == thumMedium) {
                                    $( "#thumbs_list_quickview .owl-item li" ).first().addClass( "active" );
                                }
                            },2000);

                            //initQuickviewAddToCart();

                            $(".quick-view").fadeIn(500);
                            if ($(".quick-view .total-price").length > 0) {
                                $(".quick-view input[name=quantity]").on("change", updatePricingQuickView)
                            }
                            updatePricingQuickView();
                            // Setup listeners to add/subtract from the input
                            $(".js-qty__adjust").on("click", function() {
                                var el = $(this),
                                    id = el.data("id"),
                                    qtySelector = el.siblings(".js-qty__num"),
                                    qty = parseInt(qtySelector.val().replace(/\D/g, ''));

                                var qty = validateQty(qty);

                                // Add or subtract from the current quantity
                                if (el.hasClass("js-qty__adjust--plus")) {
                                    qty = qty + 1;
                                } else {
                                    qty = qty - 1;
                                    if (qty <= 1) qty = 1;
                                }

                                // Update the input's number
                                qtySelector.val(qty);
                                updatePricingQuickView();
                            });
                            $(".js-qty__num").on("change", function() {
                                updatePricingQuickView();
                            });
                        });



                        var numInput = document.querySelector('.quantity_wanted_p input');
                        numInput.addEventListener('input', function(){
                            // Let's match only digits.
                            var num = this.value.match(/^\d+$/);
                            if (num === null) {
                                // If we have no match, value will be empty.
                                this.value = "";
                            }
                            if (num ==0) {
                                // If we have no match, value will be empty.
                                this.value = 1;
                            }
                        }, false)

                        return false;
                    }
                                    });


                }

                function loadQuickViewSlider(n, r) {
                    productImage();

                    var loadingImgQuickView = $('.loading-imgquickview');
                    var s = Bizweb.resizeImage(n.featured_image, "large");

                    r.find(".quickview-featured-image").append('<a href="' + n.url + '"><img src="' + s + '" title="' + n.title + '"/><div style="height: 100%; width: 100%; top:0; left:0 z-index: 2000; position: absolute; display: none; background: url(' + window.loading_url + ') 50% 50% no-repeat;"></div></a>');
                    if (n.images.length > 1) {
                        $('.thumbs_quickview').addClass('thumbs_list_quickview');
                        var o = r.find(".more-view-wrapper ul");
                        for (i in n.images) {
                            var u = Bizweb.resizeImage(n.images[i], "large");
                            var a = Bizweb.resizeImage(n.images[i], "large");
                            var f = '<li class="swiper-slide"><a href="javascript:void(0)" data-imageid="' + n.id + '"" data-zoom-image="' + u + '"  ><img src="' + u + '" alt="Zomart" style="max-width:120px; max-height:120px;" /></a></li>';
                            o.append(f)
                        }
                        o.find("a").click(function() {
                            var t = r.find("#product-featured-image-quickview");
                            if (t.attr("src") != $(this).attr("data-image")) {
                                t.attr("src", $(this).attr("data-image"));
                                loadingImgQuickView.show();
                                t.load(function(t) {
                                    loadingImgQuickView.hide();
                                    $(this).unbind("load");
                                    loadingImgQuickView.hide()
                                })
                            }
                        });
                        var swiper = new Swiper('#thumbs_list_quickview', {
                            slidesPerView: 4,
                            spaceBetween: 15,
                            slidesPerGroup: 2,
                            pagination: {
                                el: '#thumbs_list_quickview .swiper-pagination',
                                clickable: true,
                            },
                            navigation: {
                                nextEl: '#thumbs_list_quickview .swiper-button-next',
                                prevEl: '#thumbs_list_quickview .swiper-button-prev',
                            },
                            breakpoints: {
                                300: {
                                    slidesPerView: 'auto',
                                    spaceBetween: 15
                                },
                                640: {
                                    slidesPerView: 3,
                                    spaceBetween: 15
                                },
                                768: {
                                    slidesPerView: 2,
                                    spaceBetween: 30
                                },
                                1024: {
                                    slidesPerView: 3,
                                    spaceBetween: 30
                                },
                                1200: {
                                    slidesPerView: 4,
                                    spaceBetween: 15
                                }
                            }
                        });
                        $('.more-view-wrapper').removeClass('d-none');
                    } else {
                        $('.more-view-wrapper').addClass('d-none');
                    }
                    //if($('.thumbs_quickview .swiper-slide').length > 0){
                    //	$('.more-view-wrapper').removeClass('d-none');
                    //}else{
                    //	$('.more-view-wrapper').addClass('d-none');
                    //}

                    //if($('#thumblist_quickview').html().trim() == ''){
                    //	$('.more-view-wrapper').addClass('d-none');
                    //}else{
                    //$('.more-view-wrapper').removeClass('d-none');
                    //}
                }
                function productImage() {
                    var swiper = new Swiper('.thumbs_list_quickview', {
                        slidesPerView: 3,
                        spaceBetween: 43,
                        slidesPerGroup: 2,
                        pagination: {
                            el: '.thumbs_list_quickview .swiper-pagination',
                            clickable: true,
                        },
                        breakpoints: {
                            300: {
                                slidesPerView: 'auto',
                                spaceBetween: 15
                            },
                            640: {
                                slidesPerView: 3,
                                spaceBetween: 15
                            },
                            768: {
                                slidesPerView: 2,
                                spaceBetween: 30
                            },
                            1024: {
                                slidesPerView: 3,
                                spaceBetween: 30
                            },
                            1200: {
                                slidesPerView: 3,
                                spaceBetween: 43
                            }
                        }
                    });

                    if (!!$.prototype.fancybox){
                        $('li:visible .fancybox, .fancybox.shown').fancybox({
                            'hideOnContentClick': true,
                            'openEffect'	: 'elastic',
                            'closeEffect'	: 'elastic'
                        });
                    }
                }
                /* Quick View ADD TO CART */

                function validate(evt) {
                    var theEvent = evt || window.event;
                    var key = theEvent.keyCode || theEvent.which;
                    key = String.fromCharCode( key );
                    var regex = /[0-9]|\./;
                    if( !regex.test(key) ) {
                        theEvent.returnValue = false;
                        if(theEvent.preventDefault) theEvent.preventDefault();
                    }
                }

                $(document).on('click', '.quickview-close, #quick-view-product .quickview-overlay, .fancybox-overlay', function(e){
                    $("#quick-view-product").fadeOut(0);

                });

                var modal = $('.quickview-product');
                var btn = $('.quick-view');
                var span = $('.quickview-close');

                btn.click(function () {
                    modal.show();
                });

                span.click(function () {
                    modal.hide();
                });

                $(window).on('click', function (e) {
                    if ($(e.target).is('.modal')) {
                        modal.hide();
                    }
                });




    </script>
    <link rel="preload" as="script" href="{{ asset('/site/js/index.js') }}" />
    <script src="{{ asset('/site/js/index.js') }}" type="text/javascript"></script>
    <link rel="preload" as="script" href="{{ asset('/site/js/main.js') }}" />
    <script src="{{ asset('/site/js/main.js') }}" type="text/javascript"></script>
    <div id="list-favorite" class="d-none">
        <div class="list-favorite-right container" data-type="wishlist">
            <div class="list-favorite-main">
            <div class="list-favorite-list row">
            </div>
            </div>
        </div>
    </div>
    <div id="popupCartModal" class="modal fade" role="dialog">
    </div>
    <div style="visibility:hidden; position: absolute; z-index: -1; bottom: 0; left: 0;">
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="icon-cart">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <path fill="#fff" d="M253.3 35.1c6.1-11.8 1.5-26.3-10.2-32.4s-26.3-1.5-32.4 10.2L117.6 192H32c-17.7 0-32 14.3-32 32s14.3 32 32 32L83.9 463.5C91 492 116.6 512 146 512H430c29.4 0 55-20 62.1-48.5L544 256c17.7 0 32-14.3 32-32s-14.3-32-32-32H458.4L365.3 12.9C359.2 1.2 344.7-3.4 332.9 2.7s-16.3 20.6-10.2 32.4L404.3 192H171.7L253.3 35.1zM192 304v96c0 8.8-7.2 16-16 16s-16-7.2-16-16V304c0-8.8 7.2-16 16-16s16 7.2 16 16zm96-16c8.8 0 16 7.2 16 16v96c0 8.8-7.2 16-16 16s-16-7.2-16-16V304c0-8.8 7.2-16 16-16zm128 16v96c0 8.8-7.2 16-16 16s-16-7.2-16-16V304c0-8.8 7.2-16 16-16s16 7.2 16 16z"/>
            </svg>
            </symbol>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="icon-detail">
            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 20 18" fill="none">
                <path d="M1 3H4" stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path>
                <path d="M1 15H4" stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path>
                <path d="M12 3L19 3" stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path>
                <path d="M12 15L19 15" stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path>
                <path d="M1 9H2.5H3.25M13 9H7" stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path>
                <rect x="6" y="1" width="4" height="4" rx="1.5" stroke="#fff" stroke-width="1.5"></rect>
                <rect x="6" y="13" width="4" height="4" rx="1.5" stroke="#fff" stroke-width="1.5"></rect>
                <rect x="15" y="7" width="4" height="4" rx="1.5" stroke="#fff" stroke-width="1.5"></rect>
            </svg>
            </symbol>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="icon-quickview">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path  fill="#000" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/>
            </svg>
            </symbol>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="icon-wishlist">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="#ffffff" d="M0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L256 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 .0003 232.4 .0003 190.9L0 190.9z"></path>
            </svg>
            </symbol>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="icon-wishlist-active">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="#ff0000" d="M0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L256 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 .0003 232.4 .0003 190.9L0 190.9z"></path>
            </svg>
            </symbol>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="icon-search">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="#000" xmlns="http://www.w3.org/2000/svg">
                <path fill="#000" d="M14.1404 13.4673L19.852 19.1789C20.3008 19.6276 19.6276 20.3008 19.1789 19.852L13.4673 14.1404C12.0381 15.4114 10.1552 16.1835 8.09176 16.1835C3.6225 16.1835 0 12.5613 0 8.09176C0 3.6225 3.62219 0 8.09176 0C12.561 0 16.1835 3.62219 16.1835 8.09176C16.1835 10.1551 15.4115 12.038 14.1404 13.4673ZM0.951972 8.09176C0.951972 12.0356 4.14824 15.2316 8.09176 15.2316C12.0356 15.2316 15.2316 12.0353 15.2316 8.09176C15.2316 4.14797 12.0353 0.951972 8.09176 0.951972C4.14797 0.951972 0.951972 4.14824 0.951972 8.09176Z"></path>
            </svg>
            </symbol>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="icon-phone">
            <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path fill="#121f38" d="M280 0C408.1 0 512 103.9 512 232c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-101.6-82.4-184-184-184c-13.3 0-24-10.7-24-24s10.7-24 24-24zm8 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32-72c0-13.3 10.7-24 24-24c75.1 0 136 60.9 136 136c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-48.6-39.4-88-88-88c-13.3 0-24-10.7-24-24zM117.5 1.4c19.4-5.3 39.7 4.6 47.4 23.2l40 96c6.8 16.3 2.1 35.2-11.6 46.3L144 207.3c33.3 70.4 90.3 127.4 160.7 160.7L345 318.7c11.2-13.7 30-18.4 46.3-11.6l96 40c18.6 7.7 28.5 28 23.2 47.4l-24 88C481.8 499.9 466 512 448 512C200.6 512 0 311.4 0 64C0 46 12.1 30.2 29.5 25.4l88-24z"/>
            </svg>
            </symbol>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="icon-email">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path fill="#121f38" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/>
            </svg>
            </symbol>
        </svg>
    </div>
    <div class="addThis_listSharing" style="display: block;">
        <div class="listSharing_action">
            <button type="button" class="addThis_close" data-dismiss="modal">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g stroke="none" stroke-width="1" fill-rule="evenodd">
                    <g transform="translate(-1341.000000, -90.000000)">
                        <g transform="translate(1341.000000, 90.000000)">
                        <polygon points="19 6.4 17.6 5 12 10.6 6.4 5 5 6.4 10.6 12 5 17.6 6.4 19 12 13.4 17.6 19 19 17.6 13.4 12"></polygon>
                        </g>
                    </g>
                </g>
            </svg>
            </button>
            <ul class="addThis_listing">
            <li class="addThis_item">
                <a class="addThis_item--icon" href="tel:{{str_replace(' ', '', $config->hotline)}}" title="Gọi ngay cho chúng tôi" rel="nofollow" aria-label="phone">
                    <svg viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="22" cy="22" r="22" fill="url(#paint2_linear)"></circle>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.0087 9.35552C14.1581 9.40663 14.3885 9.52591 14.5208 9.61114C15.3315 10.148 17.5888 13.0324 18.3271 14.4726C18.7495 15.2949 18.8903 15.9041 18.758 16.3558C18.6214 16.8415 18.3953 17.0971 17.384 17.9109C16.9786 18.239 16.5988 18.5756 16.5391 18.6651C16.3855 18.8866 16.2617 19.3212 16.2617 19.628C16.266 20.3395 16.7269 21.6305 17.3328 22.6232C17.8021 23.3944 18.6428 24.3828 19.4749 25.1413C20.452 26.0361 21.314 26.6453 22.2869 27.1268C23.5372 27.7488 24.301 27.9064 24.86 27.6466C25.0008 27.5826 25.1501 27.4974 25.1971 27.4591C25.2397 27.4208 25.5683 27.0202 25.9268 26.5772C26.618 25.7079 26.7759 25.5674 27.2496 25.4055C27.8513 25.201 28.4657 25.2563 29.0844 25.5716C29.5538 25.8145 30.5779 26.4493 31.2393 26.9095C32.1098 27.5187 33.9703 29.0355 34.2221 29.3381C34.6658 29.8834 34.7427 30.5821 34.4439 31.3534C34.1281 32.1671 32.8992 33.6925 32.0415 34.3444C31.2649 34.9323 30.7145 35.1581 29.9891 35.1922C29.3917 35.222 29.1442 35.1709 28.3804 34.8556C22.3893 32.3887 17.6059 28.7075 13.8081 23.65C11.8239 21.0084 10.3134 18.2688 9.28067 15.427C8.67905 13.7696 8.64921 13.0495 9.14413 12.2017C9.35753 11.8438 10.2664 10.9575 10.9278 10.4633C12.0288 9.64524 12.5365 9.34273 12.9419 9.25754C13.2193 9.19787 13.7014 9.24473 14.0087 9.35552Z" fill="white"></path>
                        <defs>
                        <linearGradient id="paint2_linear" x1="22" y1="-7.26346e-09" x2="22.1219" y2="40.5458" gradientUnits="userSpaceOnUse">
                            <stop offset="50%" stop-color="#e8434c"></stop>
                            <stop offset="100%" stop-color="#d61114"></stop>
                        </linearGradient>
                        </defs>
                    </svg>
                    <span class="tooltip-text">Gọi ngay cho chúng tôi</span>
                </a>
            </li>
            <li class="addThis_item">
                <a class="addThis_item--icon" href="https://zalo.me/{{str_replace('', ' ', $config->zalo)}}" title="Chat với chúng tôi qua Zalo" target="_blank" rel="nofollow noreferrer" aria-label="zalo">
                    <svg viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="22" cy="22" r="22" fill="url(#paint4_linear)"></circle>
                        <g clip-path="url(#clip0)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.274 34.0907C15.7773 34.0856 16.2805 34.0804 16.783 34.0804C16.7806 34.0636 16.7769 34.0479 16.7722 34.0333C16.777 34.0477 16.7808 34.0632 16.7832 34.0798C16.8978 34.0798 17.0124 34.0854 17.127 34.0965H25.4058C26.0934 34.0965 26.7809 34.0977 27.4684 34.0989C28.8434 34.1014 30.2185 34.1039 31.5935 34.0965H31.6222C33.5357 34.0798 35.0712 32.5722 35.0597 30.7209V27.4784C35.0597 27.4582 35.0612 27.4333 35.0628 27.4071C35.0676 27.3257 35.0731 27.2325 35.0368 27.2345C34.9337 27.2401 34.7711 27.2757 34.7138 27.3311C34.2744 27.6145 33.8483 27.924 33.4222 28.2335C32.57 28.8525 31.7179 29.4715 30.7592 29.8817C27.0284 31.0993 23.7287 31.157 20.2265 30.3385C20.0349 30.271 19.9436 30.2786 19.7816 30.292C19.6773 30.3007 19.5436 30.3118 19.3347 30.3068C19.3093 30.3077 19.2829 30.3085 19.2554 30.3093C18.9099 30.3197 18.4083 30.3348 17.8088 30.6877C16.4051 31.1034 14.5013 31.157 13.5175 31.0147C13.522 31.0245 13.5247 31.0329 13.5269 31.0407C13.5236 31.0341 13.5204 31.0275 13.5173 31.0208C13.5036 31.0059 13.4864 30.9927 13.4696 30.98C13.4163 30.9393 13.3684 30.9028 13.46 30.8268C13.4867 30.8102 13.5135 30.7929 13.5402 30.7757C13.5937 30.7412 13.6472 30.7067 13.7006 30.6771C14.4512 30.206 15.1559 29.6905 15.6199 28.9311C16.2508 28.1911 15.9584 27.9025 15.4009 27.3524L15.3799 27.3317C12.6639 24.6504 11.8647 21.8054 12.148 17.9785C12.486 15.8778 13.4829 14.0708 14.921 12.4967C15.7918 11.5433 16.8288 10.7729 17.9632 10.1299C17.9796 10.1198 17.9987 10.1116 18.0182 10.1032C18.0736 10.0793 18.1324 10.0541 18.1408 9.98023C18.1475 9.92191 18.0507 9.90264 18.0163 9.90264C17.3698 9.90264 16.7316 9.89705 16.0964 9.89148C14.8346 9.88043 13.5845 9.86947 12.3041 9.90265C10.465 9.95254 8.78889 11.1779 8.81925 13.3614C8.82689 17.2194 8.82435 21.0749 8.8218 24.9296C8.82053 26.8567 8.81925 28.7835 8.81925 30.7104C8.81925 32.5007 10.2344 34.0028 12.085 34.0749C13.1465 34.1125 14.2107 34.1016 15.274 34.0907ZM13.5888 31.1403C13.5935 31.1467 13.5983 31.153 13.6032 31.1594C13.7036 31.2455 13.8031 31.3325 13.9021 31.4202C13.8063 31.3312 13.7072 31.2423 13.6035 31.1533C13.5982 31.1487 13.5933 31.1444 13.5888 31.1403ZM16.5336 33.8108C16.4979 33.7885 16.4634 33.7649 16.4337 33.7362C16.4311 33.7358 16.4283 33.7352 16.4254 33.7345C16.4281 33.7371 16.4308 33.7397 16.4335 33.7423C16.4632 33.7683 16.4978 33.79 16.5336 33.8108Z" fill="white"></path>
                        <path d="M17.6768 21.6754C18.5419 21.6754 19.3555 21.6698 20.1633 21.6754C20.6159 21.6809 20.8623 21.8638 20.9081 22.213C20.9597 22.6509 20.6961 22.9447 20.2034 22.9502C19.2753 22.9613 18.3528 22.9558 17.4247 22.9558C17.1554 22.9558 16.8919 22.9669 16.6226 22.9502C16.2903 22.9336 15.9637 22.8671 15.8033 22.5345C15.6429 22.2019 15.7575 21.9026 15.9752 21.631C16.8575 20.5447 17.7455 19.4527 18.6336 18.3663C18.6851 18.2998 18.7367 18.2333 18.7883 18.1723C18.731 18.0781 18.6508 18.1224 18.582 18.1169C17.9633 18.1114 17.3388 18.1169 16.72 18.1114C16.5768 18.1114 16.4335 18.0947 16.296 18.067C15.9695 17.995 15.7689 17.679 15.8434 17.3686C15.895 17.158 16.0669 16.9862 16.2846 16.9363C16.4221 16.903 16.5653 16.8864 16.7085 16.8864C17.7284 16.8809 18.7539 16.8809 19.7737 16.8864C19.9571 16.8809 20.1347 16.903 20.3123 16.9474C20.7019 17.0749 20.868 17.4241 20.7133 17.7899C20.5758 18.1058 20.3581 18.3774 20.1404 18.649C19.3899 19.5747 18.6393 20.4948 17.8888 21.4093C17.8258 21.4814 17.7685 21.5534 17.6768 21.6754Z" fill="white"></path>
                        <path d="M24.3229 18.7604C24.4604 18.5886 24.6036 18.4279 24.8385 18.3835C25.2911 18.2948 25.7151 18.5775 25.7208 19.021C25.738 20.1295 25.7323 21.2381 25.7208 22.3467C25.7208 22.6349 25.526 22.8899 25.2453 22.973C24.9588 23.0783 24.6322 22.9952 24.4432 22.7568C24.3458 22.6404 24.3057 22.6183 24.1682 22.7236C23.6468 23.1338 23.0567 23.2058 22.4207 23.0063C21.4009 22.6848 20.9827 21.9143 20.8681 20.9776C20.7478 19.9632 21.0973 19.0986 22.0369 18.5664C22.816 18.1175 23.6067 18.1563 24.3229 18.7604ZM22.2947 20.7836C22.3061 21.0275 22.3863 21.2603 22.5353 21.4543C22.8447 21.8534 23.4348 21.9365 23.8531 21.6372C23.9218 21.5873 23.9848 21.5263 24.0421 21.4543C24.363 21.033 24.363 20.3402 24.0421 19.9189C23.8817 19.7027 23.6296 19.5752 23.3603 19.5697C22.7301 19.5309 22.289 20.002 22.2947 20.7836ZM28.2933 20.8168C28.2474 19.3923 29.2157 18.3281 30.5907 18.2893C32.0517 18.245 33.1174 19.1928 33.1632 20.5785C33.209 21.9808 32.321 22.973 30.9517 23.106C29.4563 23.2502 28.2704 22.2026 28.2933 20.8168ZM29.7313 20.6838C29.7199 20.961 29.8058 21.2326 29.9777 21.4598C30.2928 21.8589 30.8829 21.9365 31.2955 21.6261C31.3585 21.5818 31.41 21.5263 31.4616 21.4709C31.7939 21.0496 31.7939 20.3402 31.4673 19.9189C31.3069 19.7083 31.0548 19.5752 30.7855 19.5697C30.1668 19.5364 29.7313 19.991 29.7313 20.6838ZM27.7891 19.7138C27.7891 20.573 27.7948 21.4321 27.7891 22.2912C27.7948 22.6848 27.474 23.0118 27.0672 23.0229C26.9985 23.0229 26.924 23.0174 26.8552 23.0007C26.5688 22.9287 26.351 22.6349 26.351 22.2857V17.8791C26.351 17.6186 26.3453 17.3636 26.351 17.1031C26.3568 16.6763 26.6375 16.3992 27.0615 16.3992C27.4969 16.3936 27.7891 16.6708 27.7891 17.1142C27.7948 17.9789 27.7891 18.8491 27.7891 19.7138Z" fill="white"></path>
                        <path d="M22.2947 20.7828C22.289 20.0013 22.7302 19.5302 23.3547 19.5634C23.6239 19.5745 23.876 19.702 24.0364 19.9181C24.3573 20.3339 24.3573 21.0322 24.0364 21.4535C23.7271 21.8526 23.1369 21.9357 22.7187 21.6364C22.65 21.5865 22.5869 21.5255 22.5296 21.4535C22.3864 21.2595 22.3062 21.0267 22.2947 20.7828ZM29.7314 20.683C29.7314 19.9957 30.1668 19.5357 30.7856 19.569C31.0549 19.5745 31.307 19.7075 31.4674 19.9181C31.794 20.3394 31.794 21.0544 31.4617 21.4701C31.1408 21.8636 30.545 21.9302 30.1382 21.6198C30.0752 21.5754 30.0236 21.52 29.9778 21.459C29.8059 21.2318 29.7257 20.9602 29.7314 20.683Z" fill="#0068FF"></path>
                        </g>
                        <defs>
                        <linearGradient id="paint4_linear" x1="22" y1="0" x2="22" y2="44" gradientUnits="userSpaceOnUse">
                            <stop offset="50%" stop-color="#3985f7"></stop>
                            <stop offset="100%" stop-color="#1272e8"></stop>
                        </linearGradient>
                        <clipPath id="clip0">
                            <rect width="26.3641" height="24.2" fill="white" transform="translate(8.78906 9.90234)"></rect>
                        </clipPath>
                        </defs>
                    </svg>
                    <span class="tooltip-text">Chat với chúng tôi qua Zalo</span>
                </a>
            </li>
            <li class="addThis_item">
                <a class="addThis_item--icon" href="{{route('front.contact-us')}}" title="Thông tin cửa hàng" aria-label="Liên hệ">
                    <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="22" cy="22" r="22" fill="url(#paint5_linear)"></circle>
                        <path class="down" d="M22 10C17.0374 10 13 13.7367 13 18.3297C13 24.0297 21.0541 32.3978 21.397 32.7512C21.7191 33.0832 22.2815 33.0826 22.603 32.7512C22.9459 32.3978 31 24.0297 31 18.3297C30.9999 13.7367 26.9626 10 22 10ZM22 22.5206C19.5032 22.5206 17.4719 20.6406 17.4719 18.3297C17.4719 16.0188 19.5032 14.1388 22 14.1388C24.4968 14.1388 26.528 16.0189 26.528 18.3297C26.528 20.6406 24.4968 22.5206 22 22.5206Z" fill="white"></path>
                        <defs>
                        <linearGradient id="paint5_linear" x1="22" y1="0" x2="22" y2="44" gradientUnits="userSpaceOnUse">
                            <stop offset="50%" stop-color="#fecf72"></stop>
                            <stop offset="100%" stop-color="#ef9f00"></stop>
                        </linearGradient>
                        </defs>
                    </svg>
                    <span class="tooltip-text">Thông tin cửa hàng</span>
                </a>
            </li>
            </ul>
        </div>
        <div class="listSharing_overlay"></div>
    </div>
    <div class="addThis_iconContact">
        <div class="box-item item-contact">
            <div class="svgico">
            <svg width="34" height="35" viewBox="0 0 34 35" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.35522 31V25.416H5.41122V30.064H7.61122V31H4.35522ZM8.97509 26.216C8.76176 26.216 8.60709 26.168 8.51109 26.072C8.42043 25.976 8.37509 25.8533 8.37509 25.704V25.544C8.37509 25.3947 8.42043 25.272 8.51109 25.176C8.60709 25.08 8.76176 25.032 8.97509 25.032C9.18309 25.032 9.33509 25.08 9.43109 25.176C9.52709 25.272 9.57509 25.3947 9.57509 25.544V25.704C9.57509 25.8533 9.52709 25.976 9.43109 26.072C9.33509 26.168 9.18309 26.216 8.97509 26.216ZM8.46309 26.824H9.48709V31H8.46309V26.824ZM12.834 24.712L13.842 25.944L13.33 26.344L12.37 25.424L11.41 26.344L10.898 25.944L11.906 24.712H12.834ZM12.362 31.096C12.0527 31.096 11.7754 31.0453 11.53 30.944C11.29 30.8373 11.0847 30.6907 10.914 30.504C10.7487 30.312 10.6207 30.0827 10.53 29.816C10.4394 29.544 10.394 29.24 10.394 28.904C10.394 28.5733 10.4367 28.2747 10.522 28.008C10.6127 27.7413 10.7407 27.5147 10.906 27.328C11.0714 27.136 11.274 26.9893 11.514 26.888C11.754 26.7813 12.026 26.728 12.33 26.728C12.6554 26.728 12.938 26.784 13.178 26.896C13.418 27.008 13.6154 27.16 13.77 27.352C13.9247 27.544 14.0394 27.768 14.114 28.024C14.194 28.2747 14.234 28.544 14.234 28.832V29.168H11.458V29.272C11.458 29.576 11.5434 29.8213 11.714 30.008C11.8847 30.1893 12.138 30.28 12.474 30.28C12.73 30.28 12.938 30.2267 13.098 30.12C13.2634 30.0133 13.41 29.8773 13.538 29.712L14.09 30.328C13.9194 30.568 13.6847 30.7573 13.386 30.896C13.0927 31.0293 12.7514 31.096 12.362 31.096ZM12.346 27.496C12.074 27.496 11.858 27.5867 11.698 27.768C11.538 27.9493 11.458 28.184 11.458 28.472V28.536H13.17V28.464C13.17 28.176 13.098 27.944 12.954 27.768C12.8154 27.5867 12.6127 27.496 12.346 27.496ZM15.135 31V26.824H16.159V27.52H16.199C16.2843 27.296 16.4176 27.1093 16.599 26.96C16.7856 26.8053 17.0416 26.728 17.367 26.728C17.799 26.728 18.1296 26.8693 18.359 27.152C18.5883 27.4347 18.703 27.8373 18.703 28.36V31H17.679V28.464C17.679 28.1653 17.6256 27.9413 17.519 27.792C17.4123 27.6427 17.2363 27.568 16.991 27.568C16.8843 27.568 16.7803 27.584 16.679 27.616C16.583 27.6427 16.495 27.6853 16.415 27.744C16.3403 27.7973 16.279 27.8667 16.231 27.952C16.183 28.032 16.159 28.128 16.159 28.24V31H15.135ZM21.7287 25.08H22.7527V27.52H22.7927C22.8781 27.296 23.0114 27.1093 23.1927 26.96C23.3794 26.8053 23.6354 26.728 23.9607 26.728C24.3927 26.728 24.7234 26.8693 24.9527 27.152C25.1821 27.4347 25.2967 27.8373 25.2967 28.36V31H24.2727V28.464C24.2727 28.1653 24.2194 27.9413 24.1127 27.792C24.0061 27.6427 23.8301 27.568 23.5847 27.568C23.4781 27.568 23.3741 27.584 23.2727 27.616C23.1767 27.6427 23.0887 27.6853 23.0087 27.744C22.9341 27.7973 22.8727 27.8667 22.8247 27.952C22.7767 28.032 22.7527 28.128 22.7527 28.24V31H21.7287V25.08ZM28.5918 24.712L29.5998 25.944L29.0878 26.344L28.1278 25.424L27.1678 26.344L26.6558 25.944L27.6638 24.712H28.5918ZM28.1198 31.096C27.8105 31.096 27.5332 31.0453 27.2878 30.944C27.0478 30.8373 26.8425 30.6907 26.6718 30.504C26.5065 30.312 26.3785 30.0827 26.2878 29.816C26.1972 29.544 26.1518 29.24 26.1518 28.904C26.1518 28.5733 26.1945 28.2747 26.2798 28.008C26.3705 27.7413 26.4985 27.5147 26.6638 27.328C26.8292 27.136 27.0318 26.9893 27.2718 26.888C27.5118 26.7813 27.7838 26.728 28.0878 26.728C28.4132 26.728 28.6958 26.784 28.9358 26.896C29.1758 27.008 29.3732 27.16 29.5278 27.352C29.6825 27.544 29.7972 27.768 29.8718 28.024C29.9518 28.2747 29.9918 28.544 29.9918 28.832V29.168H27.2158V29.272C27.2158 29.576 27.3012 29.8213 27.4718 30.008C27.6425 30.1893 27.8958 30.28 28.2318 30.28C28.4878 30.28 28.6958 30.2267 28.8558 30.12C29.0212 30.0133 29.1678 29.8773 29.2958 29.712L29.8478 30.328C29.6772 30.568 29.4425 30.7573 29.1438 30.896C28.8505 31.0293 28.5092 31.096 28.1198 31.096ZM28.1038 27.496C27.8318 27.496 27.6158 27.5867 27.4558 27.768C27.2958 27.9493 27.2158 28.184 27.2158 28.472V28.536H28.9278V28.464C28.9278 28.176 28.8558 27.944 28.7118 27.768C28.5732 27.5867 28.3705 27.496 28.1038 27.496ZM28.1038 32.552C27.8958 32.552 27.7465 32.5067 27.6558 32.416C27.5705 32.3307 27.5278 32.2213 27.5278 32.088V31.912C27.5278 31.7787 27.5705 31.6667 27.6558 31.576C27.7465 31.4907 27.8958 31.448 28.1038 31.448C28.3118 31.448 28.4585 31.4907 28.5438 31.576C28.6345 31.6667 28.6798 31.7787 28.6798 31.912V32.088C28.6798 32.2213 28.6345 32.3307 28.5438 32.416C28.4585 32.5067 28.3118 32.552 28.1038 32.552Z"></path>
                <path d="M27.2212 0H10.7532C9.76511 0 8.97461 0.834345 8.97461 1.82643V12.334C8.97461 13.3487 9.78701 14.1604 10.7532 14.1604H22.1051L24.6741 16.8211C24.7839 16.9338 24.9157 17.0015 25.0693 17.0015C25.3768 17.0015 25.6402 16.7535 25.6402 16.4153V14.1604H27.2212C28.2092 14.1604 28.9997 13.3261 28.9997 12.334V1.82643C28.9997 0.811779 28.1873 0 27.2212 0ZM13.2783 9.04195C12.378 9.04195 11.6315 8.2753 11.6315 7.35077C11.6315 6.42631 12.378 5.65966 13.2783 5.65966C14.1785 5.65966 14.925 6.42631 14.925 7.35077C14.925 8.2753 14.2005 9.04195 13.2783 9.04195ZM19.0531 9.04195C18.1528 9.04195 17.4062 8.2753 17.4062 7.35077C17.4062 6.42631 18.1528 5.65966 19.0531 5.65966C19.9533 5.65966 20.6998 6.42631 20.6998 7.35077C20.6998 8.2753 19.9533 9.04195 19.0531 9.04195ZM24.8059 9.04195C23.9056 9.04195 23.1591 8.2753 23.1591 7.35077C23.1591 6.42631 23.9056 5.65966 24.8059 5.65966C25.7061 5.65966 26.4526 6.42631 26.4526 7.35077C26.4526 8.2753 25.7061 9.04195 24.8059 9.04195Z"></path>
                <path d="M7.9649 12.3782V8.79297H6.16437C5.52762 8.79297 5.00066 9.33418 5.00066 9.98807V16.8878C4.97869 17.5868 5.50564 18.128 6.16437 18.128H7.19637V19.6162C7.19637 19.8192 7.37202 19.9995 7.56964 19.9995C7.67944 19.9995 7.76727 19.9544 7.83312 19.8868L9.52385 18.1505H16.9894C17.6261 18.1505 18.1531 17.6094 18.1531 16.9555V15.2418H10.7535C9.2165 15.2418 7.9649 13.9566 7.9649 12.3782Z"></path>
            </svg>
            <span class="svgico--close">
                <svg viewBox="0 0 19 19" role="presentation">
                    <path d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z" fill-rule="evenodd"></path>
                </svg>
            </span>
            </div>
        </div>
    </div>
    <script>
        $('.addThis_iconContact .item-contact,.addThis_listSharing .addThis_close').on('click', function(e){
            if($('.addThis_listSharing').hasClass('active')){
                $('.addThis_listSharing').removeClass('active');
                $('.addThis_listSharing').fadeOut(150);
            }
            else{
                $('.addThis_listSharing').fadeIn(100);
                $('.addThis_listSharing').addClass('active');
            }
        });
        $('.listSharing_overlay').on('click', function(e){
            $('.addThis_listSharing').removeClass('active');
            $('.addThis_listSharing').fadeOut(150);
        })
    </script>
    {{-- <div class="popup-sapo">
        <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
            <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <path d="M224 0c-17.7 0-32 14.3-32 32V51.2C119 66 64 130.6 64 208v18.8c0 47-17.3 92.4-48.5 127.6l-7.4 8.3c-8.4 9.4-10.4 22.9-5.3 34.4S19.4 416 32 416H416c12.6 0 24-7.4 29.2-18.9s3.1-25-5.3-34.4l-7.4-8.3C401.3 319.2 384 273.9 384 226.8V208c0-77.4-55-142-128-156.8V32c0-17.7-14.3-32-32-32zm45.3 493.3c12-12 18.7-28.3 18.7-45.3H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7z"/>
            </svg>
        </div>
        <div class="content">
            <div class="title">
            Tích hợp sẵn các ứng dụng
            </div>
            <ul>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                    <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"/>
                </svg>
                <a href="https://apps.sapo.vn/danh-gia-san-pham-v2" target="_blank" title="Đánh giá sản phẩm">Đánh giá sản phẩm</a>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                    <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"/>
                </svg>
                <a href="https://apps.sapo.vn/mua-x-tang-y-v2" target="_blank" title="Mua X tặng Y">Mua X tặng Y</a>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                    <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"/>
                </svg>
                <a href="https://apps.sapo.vn/quan-ly-affiliate-v2" target="_blank" title="Ứng dụng Affiliate">Ứng dụng Affiliate</a>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                    <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"/>
                </svg>
                <a href="https://apps.sapo.vn/ae-da-ngon-ngu" target="_blank" title="Đa ngôn ngữ">Đa ngôn ngữ</a>
            </li>
            </ul>
            <div class="ghichu">
            Lưu ý với các ứng dụng trả phí bạn cần cài đặt và mua ứng dụng này trên App store Sapo để sử dụng ngay
            </div>
            <a title="Đóng" class="close-popup-sapo">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
                <g>
                    <g>
                        <path d="M284.286,256.002L506.143,34.144c7.811-7.811,7.811-20.475,0-28.285c-7.811-7.81-20.475-7.811-28.285,0L256,227.717    L34.143,5.859c-7.811-7.811-20.475-7.811-28.285,0c-7.81,7.811-7.811,20.475,0,28.285l221.857,221.857L5.858,477.859    c-7.811,7.811-7.811,20.475,0,28.285c3.905,3.905,9.024,5.857,14.143,5.857c5.119,0,10.237-1.952,14.143-5.857L256,284.287    l221.857,221.857c3.905,3.905,9.024,5.857,14.143,5.857s10.237-1.952,14.143-5.857c7.811-7.811,7.811-20.475,0-28.285    L284.286,256.002z"></path>
                    </g>
                </g>
            </svg>
            </a>
        </div>
    </div> --}}
    <script>
        $('.popup-sapo .icon').click(function() {
            $(".popup-sapo").toggleClass("active");
        });
        $('.close-popup-sapo').click(function() {
            $(".popup-sapo").toggleClass("active");
        });
    </script>
    {{-- <div class="popup-ngonngu">
        <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe2" viewBox="0 0 16 16">
            <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539c.142-.384.304-.744.481-1.078a6.7 6.7 0 0 1 .597-.933A7.01 7.01 0 0 0 3.051 3.05c.362.184.763.349 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9.124 9.124 0 0 1-1.565-.667A6.964 6.964 0 0 0 1.018 7.5h2.49zm1.4-2.741a12.344 12.344 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.612 13.612 0 0 1 7.5 10.91V8.5H4.51zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696c.12.312.252.604.395.872.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964A13.36 13.36 0 0 1 3.508 8.5h-2.49a6.963 6.963 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855.143-.268.276-.56.395-.872A12.63 12.63 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5a6.963 6.963 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008h2.49zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343a7.765 7.765 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z"/>
            </svg>
        </div>
        <ul class="language">
            <li>
            <a href="#"><img src="//bizweb.dktcdn.net/100/496/044/themes/927290/assets/vn.png?1699256128806" alt="Tiếng Việt">
            <span>Tiếng Việt</span>
            </a>
            </li>
            <li>
            <a href="#"><img src="//bizweb.dktcdn.net/100/496/044/themes/927290/assets/en.png?1699256128806" alt="Tiếng Anh">
            <span>English</span>
            </a>
            </li>
        </ul>
    </div> --}}
    <div class="popup-video">
        <div class="body-popup">
        </div>
        <div class="close-popup-video">
            <i class="fa fa-close"></i>
            Đóng
        </div>
    </div>
</body>
</html>
