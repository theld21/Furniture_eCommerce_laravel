{{-- <header>
    <div id="header-sticky" class="header__area box-25">
        <div class="container-fliud">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                    <div class="logo">
                        <a href="{{ route('client.home') }}"><h2 style="font-weight: bolder;">MUJI</h2></a>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8">
                    <div class="header__right p-relative d-flex justify-content-between align-items-center">
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul>
                                    <li class="active has-dropdown"><a href="{{ route('client.product.index') }}">Products</a>
                                        <ul class="submenu transition-3">
                                            <li><a href="{{ route('client.product.detail', ['product'=>3]) }}">Home Style 1</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('client.contact') }}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="mobile-menu-btn d-lg-none">
                            <a href="javascript:void(0);" class="mobile-menu-toggle"><i class="fas fa-bars"></i></a>
                        </div>
                        <div class="header__action">
                            <ul>
                                <li><a href="#" class="search-toggle"><i class="ion-ios-search-strong"></i> Search</a></li>
                                <li><a href="{{ route('client.cart') }}" class="cart"><i class="ion-bag"></i> Cart <span>(01)</span></a>
                                    <div class="mini-cart">
                                        <div class="mini-cart-inner">
                                            <ul class="mini-cart-list">
                                                <li>
                                                    <div class="cart-img f-left">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('/img/shop/product/cart-sm/16.jpg')}}" alt="" />
                                                        </a>
                                                    </div>
                                                    <div class="cart-content f-left text-left">
                                                        <h5>
                                                            <a href="product-details.html">Consectetur adi </a>
                                                        </h5>
                                                        <div class="cart-price">
                                                            <span class="ammount">1 <i class="fal fa-times"></i></span>
                                                            <span class="price">$ 400</span>
                                                        </div>
                                                    </div>
                                                    <div class="del-icon f-right mt-30">
                                                        <a href="#">
                                                            <i class="fal fa-times"></i>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="cart-img f-left">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('/img/shop/product/cart-sm/17.jpg')}}" alt="" />
                                                        </a>
                                                    </div>
                                                    <div class="cart-content f-left text-left">
                                                        <h5>
                                                            <a href="product-details.html">Wooden container Bowl </a>
                                                        </h5>
                                                        <div class="cart-price">
                                                            <span class="ammount">1 <i class="fal fa-times"></i></span>
                                                            <span class="price">$ 400</span>
                                                        </div>
                                                    </div>
                                                    <div class="del-icon f-right mt-30">
                                                        <a href="#">
                                                            <i class="fal fa-times"></i>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="cart-img f-left">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('/img/shop/product/cart-sm/18.jpg')}}" alt="" />
                                                        </a>
                                                    </div>
                                                    <div class="cart-content f-left text-left">
                                                        <h5>
                                                            <a href="product-details.html">Black White Towel </a>
                                                        </h5>
                                                        <div class="cart-price">
                                                            <span class="ammount">1 <i class="fal fa-times"></i></span>
                                                            <span class="price">$ 400</span>
                                                        </div>
                                                    </div>
                                                    <div class="del-icon f-right mt-30">
                                                        <a href="#">
                                                            <i class="fal fa-times"></i>
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="total-price d-flex justify-content-between mb-30">
                                                <span>Subtotal:</span>
                                                <span>$400.0</span>
                                            </div>
                                            <div class="checkout-link">
                                                <a href="{{ route('client.cart') }}" class="os-btn">view Cart</a>
                                                <a class="os-btn os-btn-black" href="{{ route('client.checkout') }}">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li> <a href="javascript:void(0);"><i class="far fa-bars"></i></a>
                                    <ul class="extra-info">
                                        <li>
                                            <div class="my-account">
                                                <div class="extra-title">
                                                    <h5 style="font-weight: bolder;">Lee Duy The</h5>
                                                    <hr>
                                                </div>
                                                <ul>
                                                    <li><a href="#">My Account</a></li>
                                                    <li><a href="{{ route('client.login') }}">Login</a></li>
                                                    <li><a href="{{ route('client.signup') }}">Sign Up</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header> --}}

<header>
    <div id="header-sticky" class="header__area box-25">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-12">
                    <div class="logo">
                        <a href="{{ route('client.home') }}"><h2>MUJI</h2></a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 col-md-2 col-sm-1 col-2">
                    <div class="header__right p-relative">
                        <div class="main-menu main-menu-2 d-none d-lg-block text-center">
                            <nav>
                                <ul>
                                    <li class="active has-dropdown"><a href="{{ route('client.product.index') }}">Product</a>
                                        <ul class="submenu transition-3">
                                            <li><a href="{{ route('client.product.detail', ['product'=>3]) }}">Product Detail</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown"><a href="blog.html">Blog</a>
                                        <ul class="submenu transition-3">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                            <li><a href="blog-no-sidebar.html">Blog No Sidebar</a></li>
                                            <li><a href="blog-2-col.html">Blog 2 Column</a></li>
                                            <li><a href="blog-2-col-mas.html">BLog 2 Col Masonary</a></li>
                                            <li><a href="blog-3-col.html">Blog 3 Column</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('client.contact') }}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="mobile-menu-btn text-center d-lg-none">
                            <a href="javascript:void(0);" class="mobile-menu-toggle"><i class="fas fa-bars"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-7 col-10">
                    <div class="header__action header__action-2 f-right">
                        <ul>
                            <li><a href="#" class="search-toggle"><i class="ion-ios-search-strong"></i> Search</a></li>
                            <li><a href="{{ route('client.cart') }}" class="cart"><i class="ion-bag"></i> Cart <span>(01)</span></a>
                            </li>
                            <li> <a href="javascript:void(0);"><i class="far fa-bars"></i></a>
                                <ul class="extra-info">
                                    <li>
                                        <div class="my-account">
                                            <div class="extra-title">
                                                <h5 style="font-weight: bolder;">Lee Duy The</h5>
                                                <hr>
                                            </div>
                                            <ul>
                                                <li><a href="#">My Account</a></li>
                                                <li><a href="{{ route('client.login') }}">Login</a></li>
                                                <li><a href="{{ route('client.signup') }}">Sign Up</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- scroll up area start -->
<div class="scroll-up" id="scroll" style="display: none;">
    <a href="javascript:void(0);"><i class="fas fa-level-up-alt"></i></a>
</div>
<!-- scroll up area end -->

<!-- search area start -->
<section class="header__search white-bg transition-3">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="header__search-inner text-center">
                    <form action="#">
                        <div class="header__search-btn">
                            <a href="javascript:void(0);" class="header__search-btn-close"><i class="fal fa-times"></i></a>
                        </div>
                        <div class="header__search-header">
                            <h3>Search</h3>
                        </div>
                        <div class="header__search-input p-relative">
                            <input type="text" placeholder="Search for products... ">
                            <button type="submit"><i class="far fa-search"></i></button>
                        </div>
                    </form>
        
                    
                </div>
            </div>
        </div>
    </div>
</section>
<div class="body-overlay transition-3"></div>
<!-- search area end -->

<!-- extra info area start -->
<section class="extra__info transition-3">
    <div class="extra__info-inner">
        <div class="extra__info-close text-right">
            <a href="javascript:void(0);" class="extra__info-close-btn"><i class="fal fa-times"></i></a>
        </div>
        <!-- side-mobile-menu start -->
        <nav class="side-mobile-menu d-block d-lg-none">
            <ul id="mobile-menu-active">
                <li class="active has-dropdown"><a href="index.html">Home</a>
                    <ul class="submenu transition-3">
                        <li><a href="index.html">Home Style 1</a></li>
                        <li><a href="index-2.html">Home Style 2</a></li>
                        <li><a href="index-3.html">Home Style 3</a></li>
                        <li><a href="index-4.html">Home Style 4</a></li>
                        <li><a href="index-5.html">Home Style 5</a></li>
                        <li><a href="index-6.html">Home Style 6</a></li>
                    </ul>
                </li>
                <li class="mega-menu has-dropdown"><a href="shop.html">Shop</a>
                    <ul class="submenu transition-3" data-background="assets/img/bg/mega-menu-bg.jpg">
                        <li class="has-dropdown">
                            <a href="shop.html">Shop Pages</a>
                            <ul>
                                <li><a href="shop.html">Standard Shop Page</a></li>
                                <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                <li><a href="shop-4-col.html">Shop 4 Column</a></li>
                                <li><a href="shop-3-col.html">Shop 3 Column</a></li>
                                <li><a href="shop.html">Shop Page</a></li>
                                <li><a href="shop.html">Shop Page </a></li>
                                <li><a href="shop.html">Shop Infinity</a></li>
                            </ul>
                        </li>
                        <li  class="has-dropdown">
                            <a href="shop.html">Products Pages</a>
                            <ul>
                                <li><a href="product-details.html">Product Details</a></li>
                                <li><a href="product-details.html">Product Page V2</a></li>
                                <li><a href="product-details.html">Product Page V3</a></li>
                                <li><a href="product-details.html">Product Page V4</a></li>
                                <li><a href="product-details.html">Simple Product</a></li>
                                <li><a href="product-details.html">Variable Product</a></li>
                                <li><a href="product-details.html">External Product</a></li>
                            </ul>
                        </li>
                        <li  class="has-dropdown">
                            <a href="shop.html">Other Shop Pages</a>
                            <ul>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="cart.html">Shopping Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="login.html">Login</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-dropdown"><a href="blog.html">Blog</a>
                    <ul class="submenu transition-3">
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                        <li><a href="blog-no-sidebar.html">Blog No Sidebar</a></li>
                        <li><a href="blog-2-col.html">Blog 2 Column</a></li>
                        <li><a href="blog-2-col-mas.html">BLog 2 Col Masonary</a></li>
                        <li><a href="blog-3-col.html">Blog 3 Column</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li class="has-dropdown"><a href="shop.html">Pages</a>
                    <ul class="submenu transition-3">
                        <li><a href="wishlist.html">Wishlist</a></li>
                        <li><a href="cart.html">Shopping Cart</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="register.html">Register</a></li>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="error.html">Error 404</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('client.contact') }}">Contact</a></li>
            </ul>
        </nav>
        <!-- side-mobile-menu end -->
    </div>
</section>
<div class="body-overlay transition-3"></div>
<!-- extra info area end -->