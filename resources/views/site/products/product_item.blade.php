<form class="variants product-action"  enctype="multipart/form-data">
    <div class="product-thumbnail">
        <a class="image_thumb scale_hover" href="{{route('front.show-product-detail', $product->slug)}}" title="{{$product->name}}">
            <img  width="234" height="234" class="lazyload image1" src="/site/images/lazy.png"  data-src="{{$product->image->path}}" alt="{{$product->name}}">
            <img width="234" height="234" class="lazyload image2" src="/site/images/lazy.png" data-src="{{$product->image->path}}" alt="{{$product->name}}" />
        </a>
    </div>

    <div class="product-info">
        <h3 class="product-name"><a class="line-clamp line-clamp-2" href="{{route('front.show-product-detail', $product->slug)}}" title="{{$product->name}}">{{$product->name}}</a></h3>
        <div class="price-box">
            {{formatCurrency($product->price)}}₫
        </div>
        <a class="button" href="tel:{{$config->hotline}}" title="Liên hệ">
            Liên hệ
        </a>
    </div>

</form>
