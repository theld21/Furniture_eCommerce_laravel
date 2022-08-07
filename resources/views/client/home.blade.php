@extends('client.layouts.master')

@section('client-content')
<main>

    <div class="box-25">
        
        <!-- slider area start -->
        <section class="slider__area slider__area-2 p-relative pl-15 pr-15">
            <div class="slider-active">
                @foreach ($slides as $x)
                <div class="single-slider single-slider-2 slider__height-2 d-flex align-items-center" data-background="{{asset($x->image)}}">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10 col-12">
                                <div class="slider__content slider__content-{{$x->isDarkText ? '3' : 'black'}} slider__content-3 pl-250">
                                    <h2 data-animation="fadeInUp" data-delay=".2s">{{$x->name}}</h2>
                                    <p data-animation="fadeInUp" data-delay=".4s">{{$x->description}}</p>
                                    <a href="#" class="os-btn os-btn-{{$x->isDarkText ? 'black' : 'white'}}" data-animation="fadeInUp" data-delay=".6s">Discover now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        <!-- slider area end -->

        <!-- banner area start -->
        <div class="banner__area pt-95">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="banner__item mb-30 p-relative">
                            <div class="banner__thumb fix">
                                <a href="product-details.html" class="w-img"><img src="{{asset('img/shop/banner/banner-sm-1.jpg')}}" alt="banner"></a>
                            </div>
                            <div class="banner__content p-absolute transition-3">
                                <h5><a href="product-details.html">Sunflower Clock <br> Quartz Hands</a></h5>
                                <a href="product-details.html" class="link-btn">Discover now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="banner__item mb-30 p-relative">
                            <div class="banner__thumb fix">
                                <a href="product-details.html" class="w-img"><img src="{{asset('img/shop/banner/banner-sm-2.jpg')}}" alt="banner"></a>
                            </div>
                            <div class="banner__content p-absolute transition-3">
                                <h5><a href="product-details.html">Chair Kimi No Isu <br> Project</a></h5>
                                <a href="product-details.html" class="link-btn">Discover now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="banner__item mb-30 p-relative">
                            <div class="banner__thumb fix">
                                <a href="product-details.html" class="w-img"><img src="{{asset('img/shop/banner/banner-sm-3.jpg')}}" alt="banner"></a>
                            </div>
                            <div class="banner__content p-absolute transition-3">
                                <h5><a href="product-details.html">Sweeper and Dustpan <br> by Jan Kochanski </a></h5>
                                <a href="product-details.html" class="link-btn">Discover now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner area end -->

        <!-- product area start -->
        <section class="product__area pt-60 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section__title-wrapper text-center mb-55">
                            <div class="section__title mb-10">
                                <h2>Trending Products</h2>
                            </div>
                            <div class="section__sub-title">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="product__banner p-relative">
                    <div class="row">
                        @foreach($featureProduct as $i=>$x)
                        <div class="col-xl-3 col-lg-3 col-md-4 col sm-6 col-xs-12">
                            <div class="product__wrapper mb-60">
                                <div class="product__thumb">
                                    <a href="{{ route('client.product.detail', ['product'=>$x->id]) }}" class="w-img">
                                        <img src="{{asset($x->feature_image)}}" alt="product-img">
                                        <img class="product__thumb-2" src="{{asset($x->feature_image)}}" alt="product-img">
                                    </a>
                                    <div class="product__action transition-3">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                            <i class="fal fa-heart"></i>
                                        </a>

                                    </div>
                                </div>
                                <div class="product__content p-relative">
                                    <div class="product__content-inner">
                                        <h4><a href="{{ route('client.product.detail', ['product'=>1]) }}">{{$x->name}}</a></h4>
                                        <div class="product__price transition-3">
                                            <span>{{number_format($x->price, 0, 'vn<sup>đ</sup>', '.')}}<sup>đ</sup></span>
                                            <span class="old-price">{{number_format($x->old_price, 0, 'vn<sup>đ</sup>', '.')}}<sup>đ</sup></span>
                                        </div>
                                    </div>
                                    <div class="add-cart p-absolute transition-3">
                                        <a href="#">+ Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="text-center"><a href="{{ route('client.product.index') }}" class="os-btn os-btn-black">View More</a></div>
            </div>
        </section>
        <!-- product area end -->

        <!-- banner area start -->
        <div class="banner__area-2 pb-60">
            <div class="container-fluid">
                <div class="row no-gutters">
                    <div class="col-xl-6 col-lg-6">
                        <div class="banner__item-2 banner-right p-relative mb-30 pr-15">
                            <div class="banner__thumb fix">
                                <a href="product-details.html" class="w-img"><img src="{{asset('img/shop/banner/banner-big-1.jpg')}}" alt="banner"></a>
                            </div>
                            <div class="banner__content-2 p-absolute transition-3">
                                <span>Products Essentials</span>
                                <h4><a href="product-details.html">Bottle With Wooden Cork</a></h4>
                                <p>Mirum est notare quam littera gothica, quam nunc putamus <br> parum claram, anteposuerit litterarum formas.</p>
                                <a href="product-details.html" class="os-btn os-btn-2">buy now / <span>$59.25</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class=" banner__item-2 banner-left p-relative mb-30 pl-15">
                            <div class="banner__thumb fix">
                                <a href="product-details.html" class="w-img"><img src="{{asset('img/shop/banner/banner-big-2.jpg')}}" alt="banner"></a>
                            </div>
                            <div class="banner__content-2 banner__content-2-right p-absolute transition-3">
                                <span>Products Furniture</span>
                                <h4><a href="product-details.html">Hauteville Plywood Chair</a></h4>
                                <p>Mirum est notare quam littera gothica, quam nunc putamus <br> parum claram, anteposuerit litterarum formas.</p>
                                <a href="product-details.html" class="os-btn os-btn-2">buy now / <span>$396.99</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner area end -->

        <!-- sale off area start -->
        <section class="sale__area pb-55">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section__title-wrapper text-center mb-55">
                            <div class="section__title mb-10">
                                <h2>New Products</h2>
                            </div>
                            <div class="section__sub-title">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">

                    @foreach($newProducts as $i=>$x)
                    <div class="col-xl-3 col-lg-3 col-md-3 col sm-4 col-xs-6">
                        <div class="product__wrapper mb-60">
                            <div class="product__thumb">
                                <a href="{{ route('client.product.detail', ['product'=>$x->id]) }}" class="w-img">
                                    <img src="{{asset($x->feature_image)}}" alt="product-img">
                                    <img class="product__thumb-2" src="{{asset($x->feature_image)}}" alt="product-img">
                                </a>
                                <div class="product__action transition-3">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                        <i class="fal fa-heart"></i>
                                    </a>

                                </div>
                            </div>
                            <div class="product__content p-relative">
                                <div class="product__content-inner">
                                    <h4><a href="{{ route('client.product.detail', ['product'=>1]) }}">{{$x->name}}</a></h4>
                                    <div class="product__price transition-3">
                                        <span>{{number_format($x->price, 0, 'vn<sup>đ</sup>', '.')}}<sup>đ</sup></span>
                                        <span class="old-price">{{number_format($x->old_price, 0, 'vn<sup>đ</sup>', '.')}}<sup>đ</sup></span>
                                    </div>
                                </div>
                                <div class="add-cart p-absolute transition-3">
                                    <a href="#">+ Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="text-center"><a href="{{ route('client.product.index') }}" class="os-btn os-btn-black">View More</a></div>
        </section>
        <!-- sale off area end -->
    </div>
</main>
<script>

</script>
@endsection