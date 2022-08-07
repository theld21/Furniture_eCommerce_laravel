@extends('client.layouts.master')

@section('client-content')
<section class="shop__area pb-65">
    <div class="shop__top grey-bg-6 pt-100 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="product__modal-box d-flex">
                        <div class="product__modal-nav mr-20">
                            <nav>
                                <div class="nav nav-tabs" id="product-details" role="tablist">
                                    {{-- @foreach ($product_images as $i=>$x)
                                    <a class="nav-item nav-link {{$i==0 ? 'active' : ''}}" id="pro-{{$x->id}}-tab" data-toggle="tab" href="#pro-{{$x->id}}" role="tab" aria-controls="pro-{{$x->id}}" aria-selected="true">
                                        <div class="product__nav-img w-img">
                                            <img src="{{$x->image}}" style="width:100px" alt="">
                                        </div>
                                    </a>
                                    @endforeach --}}
                                </div>
                            </nav>
                        </div>
                        {{-- <div class="tab-content mb-20" id="product-detailsContent">
                            @foreach ($product_images as $i=>$x)
                            <div class="tab-pane fade show {{$i==0 ? 'active' : ''}}" id="pro-{{$x->id}}" role="tabpanel" aria-labelledby="pro-{{$x->id}}-tab">
                                <div class="product__modal-img product__thumb w-img">
                                    <img src="{{$x->image}}" alt="">
                                    <div class="product__sale ">
                                        <span class="new">new</span>
                                        <span class="percent">-16%</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div> --}}
                        <div class="tab-pane fade show active" id="pro-{{$product->id}}" role="tabpanel" aria-labelledby="pro-{{$product->id}}-tab">
                            <div class="product__modal-img product__thumb w-img">
                                <img src="{{asset($product->feature_image)}}" alt="">
                                <div class="product__sale ">
                                    <span class="new">new</span>
                                    @if ($product->old_price/$product->price>0)
                                        <span class="percent">-{{round($product->old_price/$product->price*100)}}%</span>‘
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="product__modal-content product__modal-content-2">
                        <h4><a href="product-details.html">{{ $product->name }}</a></h4>
                        <div class="product__price-2 mb-25">
                            <span>{{number_format($product->price, 0, 'vn<sup>đ</sup>', '.')}}<sup>đ</sup></span>
                            <span class="old-price">{{number_format($product->old_price, 0, 'vn<sup>đ</sup>', '.')}}<sup>đ</sup></span>
                        </div>
                        <div class="rating rating-shop mb-15">
                            <ul>
                                <li><span><i class="fas fa-star"></i></span></li>
                                <li><span><i class="fas fa-star"></i></span></li>
                                <li><span><i class="fas fa-star"></i></span></li>
                                <li><span><i class="fas fa-star"></i></span></li>
                                <li><span><i class="fal fa-star"></i></span></li>
                            </ul>
                            <span class="rating-no ml-10 rating-left">
                                3 rating(s)
                            </span>
                            <span class="review rating-left"><a href="#">Add your Review</a></span>
                        </div>
                        <div class="product__tag mb-25">
                            <span>Category:</span>
                            <span><a href="#">{{$product->Category->name}}</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shop__bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="product__details-tab">
                        <div class="product__details-tab-nav text-center mb-45">
                            <nav>
                                <div class="nav nav-tabs justify-content-start justify-content-sm-center" id="pro-details" role="tablist">
                                    <a class="nav-item nav-link active" id="des-tab" data-toggle="tab" href="#des" role="tab" aria-controls="des" aria-selected="true">Description</a>
                                    {{-- <a class="nav-item nav-link" id="add-tab" data-toggle="tab" href="#add" role="tab" aria-controls="add" aria-selected="false">Additional Information</a> --}}
                                    <a class="nav-item nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews (4)</a>
                                </div>
                            </nav>
                        </div>
                        <div class="tab-content" id="pro-detailsContent">
                            <div class="tab-pane fade active show" id="des" role="tabpanel">
                                <div class="product__details-des">
                                    <p>{{ $product->content }}</p>    
                                </div>
                            </div>
                            <div class="tab-pane fade" id="add" role="tabpanel">
                                <div class="product__details-add">
                                    <ul>
                                        <li><span>Weight</span></li>
                                        <li><span>.25 KG</span></li>
                                        <li><span>Dimention</span></li>
                                        <li><span>62 × 56 × 12 cm</span></li>
                                        <li><span>Size</span></li>
                                        <li><span>XL, XXL, LG, SM, MD</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="review" role="tabpanel">
                                <div class="product__details-review">
                                    <div class="postbox__comments">
                                        <div class="postbox__comment-title mb-30">
                                            <h3>Reviews (32)</h3>
                                        </div>
                                        <div class="latest-comments mb-30">
                                            <ul>
                                                <li>
                                                    <div class="comments-box">
                                                        <div class="comments-avatar">
                                                            <img src="assets/img/blog/comments/avater-1.png" alt="">
                                                        </div>
                                                        <div class="comments-text">
                                                            <div class="avatar-name">
                                                                <h5>Siarhei Dzenisenka</h5>
                                                                <span> - 3 months ago </span>
                                                                <a class="reply" href="#">Leave Reply</a>
                                                            </div>
                                                            <div class="user-rating">
                                                                <ul>
                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for <span>“lorem ipsum”</span> will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="children">
                                                    <div class="comments-box">
                                                        <div class="comments-avatar">
                                                            <img src="assets/img/blog/comments/avater-2.png" alt="">
                                                        </div>
                                                        <div class="comments-text">
                                                            <div class="avatar-name">
                                                                <h5>Julias Roy</h5>
                                                                <span> - 6 months ago </span>
                                                                <a class="reply" href="#">Leave Reply</a>
                                                            </div>
                                                            <div class="user-rating">
                                                                <ul>
                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for <span>“lorem ipsum”</span> will uncover many web sites still in their infancy. </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="comments-box">
                                                        <div class="comments-avatar">
                                                            <img src="assets/img/blog/comments/avater-3.png" alt="">       
                                                        </div>
                                                        <div class="comments-text">
                                                            <div class="avatar-name">
                                                                <h5>Arista Williamson</h5>
                                                                <span> - 6 months ago </span>
                                                                <a class="reply" href="#">Leave Reply</a>
                                                            </div>
                                                            <div class="user-rating">
                                                                <ul>
                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for <span>“lorem ipsum”</span> will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="post-comments-form mb-100">
                                        <div class="post-comments-title mb-30">
                                            <h3>Your Review</h3>
                                            <div class="post-rating">
                                                <span>Your Rating :</span>
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fal fa-star"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fal fa-star"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fal fa-star"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fal fa-star"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fal fa-star"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <form id="contacts-form" class="conatct-post-form" action="#">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="contact-icon p-relative contacts-name">
                                                        <input type="text" placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="contact-icon p-relative contacts-name">
                                                        <input type="email" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="contact-icon p-relative contacts-email">
                                                        <input type="text" placeholder="Subject">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="contact-icon p-relative contacts-message">
                                                        <textarea name="comments" id="comments" cols="30" rows="10" placeholder="Comments"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <button class="os-btn os-btn-black" type="submit">Post comment</button>
                                                </div>
                                            </div>
                                        </form>
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