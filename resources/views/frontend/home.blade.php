@extends('layouts.front_master')
@section('title','Home')
@section('main_content')

    <style>
        .slideshow__text-content.bottom{
            bottom: 25%;
        }
    </style>
    <!--Body Content-->
    <div id="page-content">
    @include('includes.slider')
    <!--Collection Tab slider-->
        <div class="tab-slider-product section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="section-header text-center">
                            <h2 class="h2">New Arrivals</h2>

                            <p>Browse the huge variety of our products</p>
                        </div>
                        <div class="tabs-listing">
                            <ul class="tabs clearfix">
                                <li class="active" rel="tab_all">All</li>
                                @foreach($cats as $cat)
                                    <li rel="tab_{{$cat->id}}">{{$cat->name}}</li>
                                @endforeach
                                {{--<li rel="tab2">Men</li>--}}
                                {{--<li rel="tab3">Sale</li>--}}
                            </ul>
                            <div class="tab_container">
                                <div id="tab_all" class="tab_content grid-products">
                                    <div class="productSlider">
                                        @foreach($products as $product)
                                            <div class="col-12 item">
                                                <!-- start product image -->
                                                <div class="product-image">
                                                    <!-- start product image -->
                                                    <a href="{{route('single.product',$product->slug)}}">
                                                        <!-- image -->
                                                        <img class="primary blur-up lazyload" data-src="{{asset($product->image)}}" src="{{asset($product->image)}}" alt="image" title="product">
                                                        <!-- End image -->
                                                        <!-- Hover image -->
                                                        <img class="hover blur-up lazyload" data-src="{{asset($product->hover_image)}}" src="" alt="image" title="product">
                                                        <!-- End hover image -->
                                                        <!-- product label -->
                                                        <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                                        <!-- End product label -->
                                                    </a>
                                                    <!-- end product image -->


                                                    <!-- Start product button -->
                                                    <form class="variants add" action="#" method="post">
                                                        <a href="{{route('single.product',$product->slug)}}" class="btn btn-addto-cart" type="button" tabindex="0">View Product</a>
                                                    </form>
                                                    <div class="button-set">
                                                        <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                            <i class="icon anm anm-search-plus-r"></i>
                                                        </a>
                                                        <div class="wishlist-btn">
                                                            <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                                <i class="icon anm anm-heart-l"></i>
                                                            </a>
                                                        </div>
                                                        <div class="compare-btn">
                                                            <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                                <i class="icon anm anm-random-r"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!-- end product button -->
                                                </div>
                                                <!-- end product image -->
                                                <!--start product details -->
                                                <div class="product-details text-center">
                                                    <!-- product name -->
                                                    <div class="product-name">
                                                        <a href="short-description.html">{{$product->name}}</a>
                                                    </div>
                                                    <!-- End product name -->
                                                    <!-- product price -->
                                                    <div class="product-price">
                                                        <span class="price">${{$product->sell_price}}</span>
                                                        <br>
                                                        @if($product->quantity == 0)
                                                            <span class="text-danger">Out Of Stock</span>
                                                        @else
                                                            <span class="price">Available : {{$product->quantity}}</span>
                                                        @endif
                                                    </div>
                                                    <!-- End product price -->

                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                                <!-- End product details -->
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                @foreach($cats as $cat)
                                    <div id="tab_{{$cat->id}}" class="tab_content grid-products">
                                        <?php
                                        $products = getProductByCategoryId($cat->id);
                                        ?>
                                        <div class="productSlider">
                                            @foreach($products as $product)
                                                <div class="col-12 item">
                                                    <!-- start product image -->
                                                    <div class="product-image">
                                                        <!-- start product image -->
                                                        <a href="{{route('single.product',$product->slug)}}">
                                                            <!-- image -->
                                                            <img class="primary blur-up lazyload" data-src="{{asset($product->image)}}" src="{{asset($product->image)}}" alt="image" title="product">
                                                            <!-- End image -->
                                                            <!-- Hover image -->
                                                            <img class="hover blur-up lazyload" data-src="{{asset($product->hover_image)}}" src="" alt="image" title="product">
                                                            <!-- End hover image -->
                                                            <!-- product label -->
                                                            <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                                            <!-- End product label -->
                                                        </a>
                                                        <!-- end product image -->


                                                        <!-- Start product button -->
                                                        <form class="variants add" action="#"method="post">
                                                            <a href="{{route('single.product',$product->slug)}}" class="btn btn-addto-cart" type="button" tabindex="0">View Product</a>
                                                        </form>
                                                        <div class="button-set">
                                                            <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                                <i class="icon anm anm-search-plus-r"></i>
                                                            </a>
                                                            <div class="wishlist-btn">
                                                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                                    <i class="icon anm anm-heart-l"></i>
                                                                </a>
                                                            </div>
                                                            <div class="compare-btn">
                                                                <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                                    <i class="icon anm anm-random-r"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- end product button -->
                                                    </div>
                                                    <!-- end product image -->
                                                    <!--start product details -->
                                                    <div class="product-details text-center">
                                                        <!-- product name -->
                                                        <div class="product-name">
                                                            <a href="short-description.html">{{$product->name}}</a>
                                                        </div>
                                                        <!-- End product name -->
                                                        <!-- product price -->
                                                        <div class="product-price">
                                                            <span class="price">${{$product->sell_price}}</span>
                                                            <br>
                                                            @if($product->quantity == 0)
                                                                <span class="text-danger">Out Of Stock</span>
                                                            @else
                                                                <span class="price">Available : {{$product->quantity}}</span>
                                                            @endif
                                                        </div>
                                                        <!-- End product price -->

                                                        <div class="product-review">
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                        </div>
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Collection Tab slider-->

        <!--Collection Box slider-->
        <div class="collection-box section">
            <div class="container-fluid">
                <div class="collection-grid">
                    @foreach($cats as $cat)
                        <div class="collection-grid-item">
                            <a href="collection-page.html" class="collection-grid-item__link">
                                <img data-src="{{asset($cat->image)}}" src="{{asset($cat->image)}}" alt="Fashion" class="blur-up lazyload"/>
                                <div class="collection-grid-item__title-wrapper">
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border">{{$cat->name}}</h3>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!--End Collection Box slider-->

        <!--Logo Slider-->
        <div class="section logo-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="logo-bar">
                            <div class="logo-bar__item">
                                <img src="{{asset('frontend')}}/assets/images/logo/brandlogo1.png" alt="" title="" />
                            </div>
                            <div class="logo-bar__item">
                                <img src="{{asset('frontend')}}/assets/images/logo/brandlogo2.png" alt="" title="" />
                            </div>
                            <div class="logo-bar__item">
                                <img src="{{asset('frontend')}}/assets/images/logo/brandlogo3.png" alt="" title="" />
                            </div>
                            <div class="logo-bar__item">
                                <img src="{{asset('frontend')}}/assets/images/logo/brandlogo4.png" alt="" title="" />
                            </div>
                            <div class="logo-bar__item">
                                <img src="{{asset('frontend')}}/assets/images/logo/brandlogo5.png" alt="" title="" />
                            </div>
                            <div class="logo-bar__item">
                                <img src="{{asset('frontend')}}/assets/images/logo/brandlogo6.png" alt="" title="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Logo Slider-->

        <!--Featured Product-->
        <div class="product-rows section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="section-header text-center">
                            <h2 class="h2">Featured collection</h2>
                            <p>Our most popular products based on sales</p>
                        </div>
                    </div>
                </div>
                <div class="grid-products">
                    <div class="row">
                        @foreach($Fproducts as $fproduct)
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 item grid-view-item style2">
                                <div class="grid-view_image">
                                    <!-- start product image -->
                                    <a href="{{route('single.product',$fproduct->slug)}}" class="grid-view-item__link">
                                        <!-- image -->
                                        <img class="grid-view-item__image primary blur-up lazyload" data-src="{{asset($fproduct->image)}}" src="{{asset($fproduct->image)}}" alt="image" title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="grid-view-item__image hover blur-up lazyload" data-src="{{asset($fproduct->hover_image)}}" src="{{asset($fproduct->hover_image)}}" alt="image" title="product">
                                        <!-- End hover image -->
                                        <!-- product label -->
                                        <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details hoverDetails text-center mobile">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="{{route('single.product',$fproduct->slug)}}">{{$fproduct->name}}</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">${{$fproduct->sell_price}}</span>
                                        </div>
                                        <!-- End product price -->

                                        <!-- product button -->
                                        <div class="button-set">
                                            <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-r"></i>
                                            </a>
                                            <!-- Start product button -->
                                            <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                                <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                            </form>
                                            <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                    <i class="icon anm anm-heart-l"></i>
                                                </a>
                                            </div>
                                            <div class="compare-btn">
                                                <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                    <i class="icon anm anm-random-r"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- end product button -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!--End Featured Product-->

        <!--Latest Blog-->
        <div class="latest-blog section pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="section-header text-center">
                            <h2 class="h2">Latest From our Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="wrap-blog">
                            <a href="blog-left-sidebar.html" class="article__grid-image">
                                <img src="{{asset('frontend')}}/assets/images/blog/post-img1.jpg" alt="It's all about how you wear" title="It's all about how you wear" class="blur-up lazyloaded"/>
                            </a>
                            <div class="article__grid-meta article__grid-meta--has-image">
                                <div class="wrap-blog-inner">
                                    <h2 class="h3 article__title">
                                        <a href="blog-left-sidebar.html">It's all about how you wear</a>
                                    </h2>
                                    <span class="article__date">May 02, 2017</span>
                                    <div class="rte article__grid-excerpt">
                                        I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account...
                                    </div>
                                    <ul class="list--inline article__meta-buttons">
                                        <li><a href="blog-article.html">Read more</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="wrap-blog">
                            <a href="blog-left-sidebar.html" class="article__grid-image">
                                <img src="{{asset('frontend')}}/assets/images/blog/post-img2.jpg" alt="27 Days of Spring Fashion Recap" title="27 Days of Spring Fashion Recap" class="blur-up lazyloaded"/>
                            </a>
                            <div class="article__grid-meta article__grid-meta--has-image">
                                <div class="wrap-blog-inner">
                                    <h2 class="h3 article__title">
                                        <a href="blog-right-sidebar.html">27 Days of Spring Fashion Recap</a>
                                    </h2>
                                    <span class="article__date">May 02, 2017</span>
                                    <div class="rte article__grid-excerpt">
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab...
                                    </div>
                                    <ul class="list--inline article__meta-buttons">
                                        <li><a href="blog-article.html">Read more</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Latest Blog-->

        <!--Store Feature-->
        <div class="store-feature section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="display-table store-info">
                            <li class="display-table-cell">
                                <i class="icon anm anm-truck-l"></i>
                                <h5>Free Shipping &amp; Return</h5>
                                <span class="sub-text">Free shipping on all US orders</span>
                            </li>
                            <li class="display-table-cell">
                                <i class="icon anm anm-dollar-sign-r"></i>
                                <h5>Money Guarantee</h5>
                                <span class="sub-text">30 days money back guarantee</span>
                            </li>
                            <li class="display-table-cell">
                                <i class="icon anm anm-comments-l"></i>
                                <h5>Online Support</h5>
                                <span class="sub-text">We support online 24/7 on day</span>
                            </li>
                            <li class="display-table-cell">
                                <i class="icon anm anm-credit-card-front-r"></i>
                                <h5>Secure Payments</h5>
                                <span class="sub-text">All payment are Secured and trusted.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--End Store Feature-->
    </div>
    <!--End Body Content-->
@stop