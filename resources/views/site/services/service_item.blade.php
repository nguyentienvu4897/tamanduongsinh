<div class="item-dichvu">
    <a class="image" href="{{route('front.service-detail', $service->slug)}}" title="{{$service->name}}">
    <img  width="234" height="234" class="lazyload image1" src="/site/images/lazy.png"  data-src="{{$service->image->path}}" alt="{{$service->name}}">
    </a>
    <h3 class="product-name"><a class="line-clamp line-clamp-2 title" href="{{route('front.service-detail', $service->slug)}}" title="{{$service->name}}">{{$service->name}}</a></h3>
    <span class="content line-clamp line-clamp-4">
    {{$service->description}}
    </span>
    <ul>

    <li>Thời gian: <b>{{$service->time}}</b></li>

    <li>Giá: <b>{{formatCurrency($service->base_price)}}₫</b></li>
    @if ($service->price)
    <li>Giá khuyến mãi: <b>{{formatCurrency($service->price)}}₫</b></li>
    @endif
    </ul>
    <a class="button" href="{{route('front.service-detail', $service->slug)}}" title="Xem ngay">Xem ngay</a>
</div>
