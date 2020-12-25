@extends('layouts.front_master')
@section('title','Single Product')
@section('main_content')
    <!--Body Content-->
    <div id="page-content">
        <!--MainContent-->
        <div id="MainContent" class="main-content" role="main">
            <!--Breadcrumb-->
            <div class="bredcrumbWrap">
                <div class="container breadcrumbs">
                    <a href="index.html" title="Back to the home page">Home</a><span aria-hidden="true">›</span><span>Product Pre-orders New</span>
                </div>
            </div>
            <!--End Breadcrumb-->

            <div id="ProductSection-product-template" class="product-template__container prstyle1 container product-right-sidebar">
                <!--product-single-->
                <div class="product-single">
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                            <div class="product-details-img">
                                <div class="zoompro-wrap product-zoom-right pl-20">
                                    <div class="zoompro-span">
                                        <img class="blur-up lazyload zoompro" data-zoom-image="{{asset($product->image)}}" alt="" src="{{asset($product->image)}}" />
                                    </div>
                                    <div class="product-labels"><span class="lbl on-sale">Sale</span><span class="lbl pr-label1">new</span></div>
                                    <div class="product-buttons">
                                        <a href="https://www.youtube.com/watch?v=93A2jOW5Mog" class="btn popup-video" title="View Video"><i class="icon anm anm-play-r" aria-hidden="true"></i></a>
                                        <a href="#" class="btn prlightbox" title="Zoom"><i class="icon anm anm-expand-l-arrows" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="lightboximages">
                                    @foreach($product->sliderImages as $image)
                                        <a href="{{asset(asset($image->image))}}" data-size="1462x2048"></a>
                                    @endforeach
                                </div>
                                <div class="product-thumb">
                                    <div id="gallery" class="product-dec-slider-2 product-tab-left">
                                        @foreach($product->sliderImages as $image)
                                            <a data-image="{{asset(asset($image->image))}}" data-zoom-image="{{asset(asset($image->image))}}" class="slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" tabindex="-1">
                                                <img class="blur-up lazyload" src="{{asset(asset($image->image))}}" alt="" />
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="product-information">
                                <div class="product-single__meta">
                                    <h1 class="product-single__title">{{$product->name}}</h1>
                                    <div class="product-nav clearfix">
                                        <a href="#" class="next" title="Next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="prInfoRow">
                                        <div class="product-stock">
                                            @if($product->quantity == 0)
                                                <span class="text-danger">Unavailable</span>
                                            @else
                                                <span class="text-success">In Stock</span>
                                            @endif
                                        </div>
                                        <div class="product-review"><a class="reviewLink" href="#tab2"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><span class="spr-badge-caption">6 reviews</span></a></div>
                                    </div>
                                    <p class="product-single__price product-single__price-product-template">
                                        <span class="visually-hidden">Regular price</span>
                                        <span class="product-price__price product-price__price-product-template">
                                            <span id="ProductPrice-product-template"><span class="money">{{$site->currency}} {{$product->sell_price}}</span></span>
                                        </span>
                                    </p>
                                    <div class="product-single__description rte">
                                        <p>{{$product->short_des}}</p>
                                    </div>
                                    <form method="post" action="{{route('add.cart')}}" id="" accept-charset="UTF-8" class="product-form product-form-product-template hidedropdown" enctype="multipart/form-data">
                                        @csrf
                                        <div class="swatch clearfix swatch-0 option1" data-option-index="0">
                                            <div class="product-form__item">
                                                <label class="header">Color: <span class="slVariant">
                                                        <select name="color_name" id="" class="form-control">
                                                            <option value="" class="text-danger">Select Color</option>
                                                            @foreach($product->colors as $color)
                                                                <option value="{{$color->color_name}}">{{$color->color_name}}</option>
                                                            @endforeach
                                                        </select>
                                                              <span class="text-danger">{{($errors->has('color_name'))? ($errors->first('color_name')) : ''}}</span>
                                                    </span></label>
                                            </div>
                                        </div>
                                        <div class="swatch clearfix swatch-1 option2" data-option-index="1">
                                            <div class="product-form__item">
                                                <label class="header">Size: <span class="slVariant">
                                                           <select name="size_name" id="" class="form-control">
                                                            <option value="">Select Size</option>
                                                               @foreach($product->sizes as $size)
                                                                   <option value="{{$size->size_name}}">{{$size->size_name}}</option>
                                                               @endforeach
                                                        </select>
                                                          <span class="text-danger">{{($errors->has('size_name'))? ($errors->first('size_name')) : ''}}</span>
                                                    </span></label>
                                            </div>
                                        </div>
                                        <!-- Product Action -->
                                        <div class="product-action clearfix">
                                            <div class="product-form__item--quantity">
                                                <div class="wrapQtyBtn">
                                                    <div class="qtyField">
                                                        <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                        <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                        <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="id" value="{{$product->id}}">
                                            <div class="product-form__item--submit">
                                                <button type="submit" name="add" class="btn product-form__cart-submit">
                                                    <span id="AddToCartText-product-template">Add to Cart</span>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- End Product Action -->
                                    </form>
                                    <div class="display-table shareRow">
                                        <div class="display-table-cell medium-up--one-third">
                                            <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist"><i class="icon anm anm-heart-l" aria-hidden="true"></i> <span>Add to Wishlist</span></a>
                                            </div>
                                        </div>
                                        <div class="display-table-cell text-right">
                                            <div class="social-sharing">
                                                <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-facebook" title="Share on Facebook">
                                                    <i class="fa fa-facebook-square" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Share</span>
                                                </a>
                                                <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-twitter" title="Tweet on Twitter">
                                                    <i class="fa fa-twitter" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Tweet</span>
                                                </a>
                                                <a href="#" title="Share on google+" class="btn btn--small btn--secondary btn--share" >
                                                    <i class="fa fa-google-plus" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Google+</span>
                                                </a>
                                                <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-pinterest" title="Pin on Pinterest">
                                                    <i class="fa fa-pinterest" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Pin it</span>
                                                </a>
                                                <a href="#" class="btn btn--small btn--secondary btn--share share-pinterest" title="Share by Email" target="_blank">
                                                    <i class="fa fa-envelope" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Email</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <p class="product-type"><span class="lbl">Category:</span> <a href="#" title="Women's">{{$product->category->name}}</a></p>
                                        <p class="product-cat"> <span class="lbl">Brand: </span><a href="#" title="">Women</a> </p>
                                        <p class="product-tags"> <span class="lbl">Product Tags: </span>
                                            @foreach($product->tags as $tag)
                                                <a href="">{{$tag->tag}}</a>
                                            @endforeach
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--Product Tabs-->
                            <div class="tabs-listing">
                                <h6>Product Description : </h6>
                                <p class="lead">{{$product->long_des}}</p>
                            </div>
                            <!--End Product Tabs-->
                        </div>
                        <!--Product Sidebar-->
                        <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                            <div class="prSidebar sidebar-product">
                                <!--Product Feature-->
                                <div class="prFeatures">
                                    <div class="feature">
                                        <img src="{{asset('frontend/assets/images/credit-card.png')}}" alt="Safe Payment" title="Safe Payment" />
                                        <div class="details"><h5>Safe Payment</h5>Pay with the world's most payment methods.</div>
                                    </div>
                                    <div class="feature">
                                        <img src="{{asset('frontend/assets/images/shield.png')}}" alt="Confidence" title="Confidence" />
                                        <div class="details"><h5>Confidence</h5>Protection covers your purchase and personal data.</div>
                                    </div>
                                    <div class="feature">
                                        <img src="{{asset('frontend/assets/images/worldwide.png')}}" alt="Worldwide Delivery" title="Worldwide Delivery" />
                                        <div class="details"><h5>Worldwide Delivery</h5>FREE &amp; fast shipping to over 200+ countries &amp; regions.</div>
                                    </div>
                                    <div class="feature">
                                        <img src="{{asset('frontend/assets/images/phone-call.png')}}" alt="Hotline" title="Hotline" />
                                        <div class="details"><h5>Hotline</h5>Talk to help line for your question on 4141 456 789, 4125 666 888</div>
                                    </div>
                                </div>
                                <!--End Product Feature-->
                                <!--Related Product-->
                                <div class="related-product grid-products clearfix">
                                    <header class="section-header">
                                        <h2 class="section-header__title text-center h2"><span>Related Products</span></h2>
                                        <p class="sub-heading">You can stop autoplay, increase/decrease aniamtion speed and number of grid to show and products from store admin.</p>
                                    </header>
                                    <div class="grid">
                                        @foreach($Rproducts as $rproduct)
                                            <div class="grid__item">
                                                <div class="mini-list-item">
                                                    <div class="mini-view_image">
                                                        <a class="grid-view-item__link" href="{{route('single.product',$rproduct->slug)}}">
                                                            <img class="grid-view-item__image" src="{{asset($rproduct->image)}}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="details">
                                                        <a class="grid-view-item__title" href="{{route('single.product',$rproduct->slug)}}">{{$rproduct->name}}</a>
                                                        <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">{{$site->currency}} {{$rproduct->sell_price}}</span></span></div>
                                                        <div class="product-review">
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <!--End Related Product-->
                            </div>
                        </div>
                        <!--Product Sidebar-->
                    </div>
                </div>
                <!--End-product-single-->
            </div>
            <!--#ProductSection-product-template-->
        </div>
        <!--MainContent-->
    </div>
    <!--End Body Content-->
@stop