<div class="blog_left_base col-lg-3 col-xl-3 col-fix">
    <div class="block-background">
        <div class="aside-content-menu-blog aside-content-blog">
            <div class="title-head-col">
                Danh mục tin tức
            </div>
            <nav class="nav-category">
                <ul class="nav navbar-pills">
                    <li class="nav-item  relative">
                        <a title="Trang chủ" class="nav-link" href="{{route('front.home-page')}}">Trang chủ</a>
                    </li>
                    <li class="nav-item  relative">
                        <a title="Giới thiệu" class="nav-link" href="{{route('front.about-us')}}">Giới thiệu</a>
                    </li>
                    @foreach ($productCategories as $item)
                    <li class="nav-item  relative">
                        <a title="{{$item->name}}" href="{{route('front.show-product-category', $item->slug)}}" class="nav-link pr-5">{{$item->name}}</a>
                        <i class="open_mnu down_icon"></i>
                        <ul class="menu_down" style="display:none;">
                            @foreach ($item->childs as $child)
                            <li class="dropdown-submenu nav-item  relative">
                                <a title="{{$child->name}}" class="nav-link pr-5"
                                    href="{{route('front.show-product-category', $child->slug)}}">{{$child->name}}</a>
                                <i class="open_mnu down_icon"></i>
                                <ul class="menu_down" style="display:none;">
                                    @foreach ($child->childs as $child)
                                    <li class="nav-item">
                                        <a title="{{$child->name}}" class="nav-link pl-4"
                                            href="{{route('front.show-product-category', $child->slug)}}">{{$child->name}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    @endforeach
                    <li class="nav-item  relative">
                        <a title="Dịch vụ" href="#" class="nav-link pr-5">Dịch vụ</a>
                        <i class="open_mnu down_icon"></i>
                        <ul class="menu_down" style="display:none;">
                            @foreach ($listServiceType as $item)
                            <li class="nav-item">
                                <a title="{{$item->name}}" class="nav-link"
                                    href="{{route('front.service-type', $item->slug)}}">{{$item->name}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item  relative">
                        <a title="Lữ hành" class="nav-link" href="{{route('front.travel')}}">Lữ hành</a>
                    </li>
                    @foreach ($postCategories as $item)
                    <li class="nav-item active relative">
                        <a title="{{$item->name}}" class="nav-link" href="{{route('front.list-blog', $item->slug)}}">{{$item->name}}</a>
                    </li>
                    @endforeach
                    <li class="nav-item  relative">
                        <a title="Liên hệ" class="nav-link" href="{{route('front.contact-us')}}">Liên hệ</a>
                    </li>
                </ul>
            </nav>
        </div>
        <script>
            $(".open_mnu").click(function() {
                $(this).toggleClass('cls_mn').next().slideToggle();
            });
        </script>
        <div class="blog_noibat">
            <h2 class="h2_sidebar_blog">
                <a href="#" title="Tin tức nổi bật">Tin tức nổi bật</a>
            </h2>
            <div class="blog_content">
                @foreach ($newBlogs as $item)
                <div class="item clearfix">
                    <div class="post-thumb">
                        <a class="image-blog scale_hover"
                            href="{{route('front.detail-blog', $item->slug)}}"
                            title="{{$item->name}}">
                            <img class="img_blog lazyload"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                data-src="{{$item->image->path}}"
                                alt="{{$item->name}}">
                        </a>
                        <span class="num">1</span>
                    </div>
                    <div class="contentright">
                        <h3><a class="line-clamp line-clamp-3"
                                title="{{$item->name}}"
                                href="{{route('front.detail-blog', $item->slug)}}">{{$item->name}}</a></h3>
                        <div class="time-post">
                            {{date('d/m/Y', strtotime($item->created_at))}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>