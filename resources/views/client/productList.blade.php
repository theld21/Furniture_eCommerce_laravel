@extends('client.layouts.master')

@section('client-content')
<section class="shop__area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-4">
                <div class="shop__sidebar">
                    <div class="sidebar__widget mb-55">
                        <div class="sidebar__widget-title mb-25">
                            <h3>Product Categories</h3>
                        </div>
                        <div class="sidebar__widget-content">
                            <div class="categories">
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header white-bg" id="accessories">
                                        <h5 class="mb-0">
                                            <button class="shop-accordion-btn" data-toggle="collapse" data-target="#collapseAccessories" aria-expanded="true" aria-controls="collapseAccessories">
                                                Accessories
                                            </button>
                                        </h5>
                                        </div>
                                    
                                        <div id="collapseAccessories" class="collapse show" aria-labelledby="accessories" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="categories__list">
                                                <ul>
                                                    <li><a href="#">Catagories 1</a></li>
                                                    <li><a href="#">Catagories 2</a></li>
                                                    <li><a href="#">Catagories 3</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header white-bg" id="cloth">
                                        <h5 class="mb-0">
                                            <button class="shop-accordion-btn collapsed" data-toggle="collapse" data-target="#collapsecloth" aria-expanded="false" aria-controls="collapsecloth">
                                                Clothing
                                            </button>
                                        </h5>
                                        </div>
                                        <div id="collapsecloth" class="collapse" aria-labelledby="cloth" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="categories__list">
                                                <ul>
                                                    <li><a href="#">Catagories 1</a></li>
                                                    <li><a href="#">Catagories 2</a></li>
                                                    <li><a href="#">Catagories 3</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header white-bg" id="men">
                                        <h5 class="mb-0">
                                            <button class="shop-accordion-btn collapsed" data-toggle="collapse" data-target="#collapsemen" aria-expanded="false" aria-controls="collapsemen">
                                                Men's
                                            </button>
                                        </h5>
                                        </div>
                                        <div id="collapsemen" class="collapse" aria-labelledby="men" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="categories__list">
                                                <ul>
                                                    <li><a href="#">Catagories 1</a></li>
                                                    <li><a href="#">Catagories 2</a></li>
                                                    <li><a href="#">Catagories 3</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header white-bg" id="music">
                                        <h5 class="mb-0">
                                            <button class="shop-accordion-btn collapsed" data-toggle="collapse" data-target="#collapsemusic" aria-expanded="false" aria-controls="collapsemusic">
                                                Music
                                            </button>
                                        </h5>
                                        </div>
                                        <div id="collapsemusic" class="collapse" aria-labelledby="music" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="categories__list">
                                                <ul>
                                                    <li><a href="#">Catagories 1</a></li>
                                                    <li><a href="#">Catagories 2</a></li>
                                                    <li><a href="#">Catagories 3</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header white-bg" id="decoration">
                                        <h5 class="mb-0">
                                            <button class="shop-accordion-btn collapsed" data-toggle="collapse" data-target="#collapseDecoration" aria-expanded="false" aria-controls="collapseDecoration">
                                                Decoration
                                            </button>
                                        </h5>
                                        </div>
                                        <div id="collapseDecoration" class="collapse" aria-labelledby="decoration" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="categories__list">
                                                <ul>
                                                    <li><a href="#">Catagories 1</a></li>
                                                    <li><a href="#">Catagories 2</a></li>
                                                    <li><a href="#">Catagories 3</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header white-bg" id="chair">
                                        <h5 class="mb-0">
                                            <button class="shop-accordion-btn collapsed" data-toggle="collapse" data-target="#collapsechair" aria-expanded="false" aria-controls="collapsechair">
                                                Chair
                                            </button>
                                        </h5>
                                        </div>
                                        <div id="collapsechair" class="collapse" aria-labelledby="chair" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="categories__list">
                                                <ul>
                                                    <li><a href="#">Catagories 1</a></li>
                                                    <li><a href="#">Catagories 2</a></li>
                                                    <li><a href="#">Catagories 3</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header white-bg" id="light">
                                        <h5 class="mb-0">
                                            <button class="shop-accordion-btn collapsed" data-toggle="collapse" data-target="#collapselight" aria-expanded="false" aria-controls="collapselight">
                                                Lighting
                                            </button>
                                        </h5>
                                        </div>
                                        <div id="collapselight" class="collapse" aria-labelledby="light" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="categories__list">
                                                <ul>
                                                    <li><a href="#">Catagories 1</a></li>
                                                    <li><a href="#">Catagories 2</a></li>
                                                    <li><a href="#">Catagories 3</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar__widget mb-55">
                        <div class="sidebar__widget-title mb-30">
                            <h3>Filter By Price</h3>
                        </div>
                        <div class="sidebar__widget-content">
                            <div class="price__slider">
                                <div id="slider-range" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"><div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 15%; width: 45%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 15%;"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 60%;"></span></div>
                                <div>
                                    <form action="#">
                                        <button type="submit">Filter</button>
                                        <label for="amount">Price :</label>
                                        <input type="text" id="amount" readonly="">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar__widget mb-55">
                        <div class="sidebar__widget-title mb-30">
                            <h3>Any Size</h3>
                        </div>
                        <div class="sidebar__widget-content">
                            <div class="size">
                                <ul>
                                    <li><a href="#">S</a></li>
                                    <li><a href="#">M</a></li>
                                    <li><a href="#">X</a></li>
                                    <li><a href="#">L</a></li>
                                    <li><a href="#">XXL</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar__widget mb-60">
                        <div class="sidebar__widget-title mb-20">
                            <h3>Choose Color</h3>
                        </div>
                        <div class="sidebar__widget-content">
                            <div class="color__pick">
                                <form action="#">
                                    <ul>
                                        <li><button type="submit" class="color color-1"></button></li>
                                        <li><button type="submit" class="color color-2"></button></li>
                                        <li><button type="submit" class="color color-3"></button></li>
                                        <li><button type="submit" class="color color-4"></button></li>
                                        <li><button type="submit" class="color color-5"></button></li>
                                        <li><button type="submit" class="color color-6"></button></li>
                                        <li><button type="submit" class="color color-7"></button></li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar__widget mb-50">
                        <div class="sidebar__widget-title mb-25">
                            <h3>Brand</h3>
                        </div>
                        <div class="sidebar__widget-content">
                            <div class="brand">
                                <ul>
                                    <li><a href="#">Sony</a></li>
                                    <li><a href="#">Panasonic</a></li>
                                    <li><a href="#">Apple</a></li>
                                    <li><a href="#">Samsung</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-8">
                <div class="shop__content-area">
                    <div class="shop__header d-sm-flex justify-content-between align-items-center mb-40">
                        <div class="shop__header-left">
                            <div class="show-text">
                                <span>Showing 1–12 of 20 results</span>
                            </div>
                        </div>
                        <div class="shop__header-right d-flex align-items-center justify-content-between justify-content-sm-end">
                            <div class="sort-wrapper mr-30 pr-25 p-relative">
                                <select>
                                    <option value="1">Default Sorting</option>
                                    <option value="2">Type 1</option>
                                    <option value="3">Type 2</option>
                                    <option value="4">Type 3</option>
                                    <option value="5">Type 4</option>
                                </select>
                            </div>
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-grid-tab" data-toggle="pill" href="#pills-grid" role="tab" aria-controls="pills-grid" aria-selected="true"><i class="fas fa-th"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-list-tab" data-toggle="pill" href="#pills-list" role="tab" aria-controls="pills-list" aria-selected="false"><i class="fas fa-list-ul"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-grid" role="tabpanel" aria-labelledby="pills-grid-tab">
                            <div class="row custom-row-10">
                                @foreach($products as $i=>$x)
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
                        <div class="tab-pane fade" id="pills-list" role="tabpanel" aria-labelledby="pills-list-tab">
                            <div class="product__wrapper mb-40">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="product__thumb">
                                            <a href="product-details.html" class="w-img">
                                                <img src="{{asset('img/shop/product/product-5.jpg')}}" alt="product-img">
                                                <img class="product__thumb-2" src="{{asset('img/shop/product/product-5.jpg')}}" alt="product-img">
                                            </a>
                                            <div class="product__sale ">
                                                <span class="new">new</span>
                                                <span class="percent">-16%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-8">
                                        <div class="product__content p-relative">
                                            <div class="product__content-inner list">
                                                <h4><a href="product-details.html">Wooden container Bowl</a></h4>
                                                <div class="product__price-2 mb-10">
                                                    <span>$96.00</span>
                                                    <span class="old-price">$96.00</span>
                                                </div>
                                                <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus.</p>
                                                <div class="product__list mb-30">
                                                    <ul>
                                                        <li><span>Light green crewneck sweatshirt.</span></li>
                                                        <li><span>Hand pockets.</span></li>
                                                        <li><span>Relaxed fit.</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="add-cart-list d-sm-flex align-items-center">
                                                <a href="#" class="add-cart-btn mr-10">+ Add to Cart</a>
                                                <div class="product__action-2 transition-3 mr-20">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                        <i class="fal fa-heart"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare">
                                                        <i class="fal fa-sliders-h"></i>
                                                    </a>
                                                    <!-- Button trigger modal -->
                                                    <a href="#" data-toggle="modal" data-target="#productModalId">
                                                        <i class="fal fa-search"></i>
                                                    </a>
    
                                                </div>
                                            </div>
                                            <!-- shop modal start -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__wrapper mb-40">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="product__thumb">
                                            <a href="product-details.html" class="w-img">
                                                <img src="{{asset('img/shop/product/product-5.jpg')}}" alt="product-img">
                                                <img class="product__thumb-2" src="{{asset('img/shop/product/product-5.jpg')}}" alt="product-img">
                                            </a>
                                            <div class="product__sale ">
                                                <span class="new">new</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-8">
                                        <div class="product__content p-relative">
                                            <div class="product__content-inner list">
                                                <h4><a href="product-details.html">Wooden container Bowl</a></h4>
                                                <div class="product__price-2 mb-10">
                                                    <span>$60.00</span>
                                                </div>
                                                <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus.</p>
                                                <div class="product__list mb-30">
                                                    <ul>
                                                        <li><span>Light green crewneck sweatshirt.</span></li>
                                                        <li><span>Hand pockets.</span></li>
                                                        <li><span>Relaxed fit.</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="add-cart-list d-sm-flex align-items-center">
                                                <a href="#" class="add-cart-btn mr-10">+ Add to Cart</a>
                                                <div class="product__action-2 transition-3 mr-20">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                        <i class="fal fa-heart"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare">
                                                        <i class="fal fa-sliders-h"></i>
                                                    </a>
                                                    <!-- Button trigger modal -->
                                                    <a href="#" data-toggle="modal" data-target="#productModalId">
                                                        <i class="fal fa-search"></i>
                                                    </a>
    
                                                </div>
                                            </div>
                                            <!-- shop modal start -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__wrapper mb-40">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="product__thumb">
                                            <a href="product-details.html" class="w-img">
                                                <img src="{{asset('img/shop/product/product-5.jpg')}}" alt="product-img">
                                                <img class="product__thumb-2" src="{{asset('img/shop/product/product-5.jpg')}}" alt="product-img">
                                            </a>
                                            <div class="product__sale ">
                                                <span class="new">new</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-8">
                                        <div class="product__content p-relative">
                                            <div class="product__content-inner list">
                                                <h4><a href="product-details.html">Wooden container Bowl</a></h4>
                                                <div class="product__price-2 mb-10">
                                                    <span>$50.00</span>
                                                </div>
                                                <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus.</p>
                                                <div class="product__list mb-30">
                                                    <ul>
                                                        <li><span>Light green crewneck sweatshirt.</span></li>
                                                        <li><span>Hand pockets.</span></li>
                                                        <li><span>Relaxed fit.</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="add-cart-list d-sm-flex align-items-center">
                                                <a href="#" class="add-cart-btn mr-10">+ Add to Cart</a>
                                                <div class="product__action-2 transition-3 mr-20">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                        <i class="fal fa-heart"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare">
                                                        <i class="fal fa-sliders-h"></i>
                                                    </a>
                                                    <!-- Button trigger modal -->
                                                    <a href="#" data-toggle="modal" data-target="#productModalId">
                                                        <i class="fal fa-search"></i>
                                                    </a>
    
                                                </div>
                                            </div>
                                            <!-- shop modal start -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__wrapper mb-40">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="product__thumb">
                                            <a href="product-details.html" class="w-img">
                                                <img src="assets/img/shop/product/product-4.jpg" alt="product-img">
                                                <img class="product__thumb-2" src="assets/img/shop/product/product-7.jpg" alt="product-img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-8">
                                        <div class="product__content p-relative">
                                            <div class="product__content-inner list">
                                                <h4><a href="product-details.html">Wooden container Bowl</a></h4>
                                                <div class="product__price-2 mb-10">
                                                    <span>$50.00</span>
                                                    <span class="old-price">$70</span>
                                                </div>
                                                <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus.</p>
                                                <div class="product__list mb-30">
                                                    <ul>
                                                        <li><span>Light green crewneck sweatshirt.</span></li>
                                                        <li><span>Hand pockets.</span></li>
                                                        <li><span>Relaxed fit.</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="add-cart-list d-sm-flex align-items-center">
                                                <a href="#" class="add-cart-btn mr-10">+ Add to Cart</a>
                                                <div class="product__action-2 transition-3 mr-20">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                        <i class="fal fa-heart"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare">
                                                        <i class="fal fa-sliders-h"></i>
                                                    </a>
                                                    <!-- Button trigger modal -->
                                                    <a href="#" data-toggle="modal" data-target="#productModalId">
                                                        <i class="fal fa-search"></i>
                                                    </a>
    
                                                </div>
                                            </div>
                                            <!-- shop modal start -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__wrapper mb-40">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="product__thumb">
                                            <a href="product-details.html" class="w-img">
                                                <img src="{{asset('img/shop/product/product-5.jpg')}}" alt="product-img">
                                                <img class="product__thumb-2" src="{{asset('img/shop/product/product-5.jpg')}}" alt="product-img">
                                            </a>
                                            <div class="product__sale ">
                                                <span class="new">new</span>
                                                <span class="percent">-50%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-8">
                                        <div class="product__content p-relative">
                                            <div class="product__content-inner list">
                                                <h4><a href="product-details.html">Wooden container Bowl</a></h4>
                                                <div class="product__price-2 mb-10">
                                                    <span>$60.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus.</p>
                                                <div class="product__list mb-30">
                                                    <ul>
                                                        <li><span>Light green crewneck sweatshirt.</span></li>
                                                        <li><span>Hand pockets.</span></li>
                                                        <li><span>Relaxed fit.</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="add-cart-list d-sm-flex align-items-center">
                                                <a href="#" class="add-cart-btn mr-10">+ Add to Cart</a>
                                                <div class="product__action-2 transition-3 mr-20">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                        <i class="fal fa-heart"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare">
                                                        <i class="fal fa-sliders-h"></i>
                                                    </a>
                                                    <!-- Button trigger modal -->
                                                    <a href="#" data-toggle="modal" data-target="#productModalId">
                                                        <i class="fal fa-search"></i>
                                                    </a>
    
                                                </div>
                                            </div>
                                            <!-- shop modal start -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-40">
                        <div class="col-xl-12">
                            <div class="shop-pagination-wrapper d-md-flex justify-content-between align-items-center">
                                <div class="basic-pagination">
                                    <ul>
                                        <li><a href="#"><i class="fal fa-angle-left"></i></a></li>
                                        <li><a href="#">01</a></li>
                                        <li class="active"><a href="#">02</a></li>
                                        <li><a href="#">03</a></li>
                                        <li><a href="#"><i class="fas fa-ellipsis-h"></i></a></li>
                                        <li><a href="#"><i class="fal fa-angle-right"></i></a></li>
                                    </ul>
                                </div>
                                <div class="shop__header-left">
                                    <div class="show-text bottom">
                                        <span>Showing 1–12 of 20 results</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection