@extends('layouts.front_master')
@section('title','Shop Page')
@section('main_content')
    <!--Body Content-->
    <div id="page-content">
        <!--Collection Banner-->
        <div class="collection-header">
            <div class="collection-hero">
                <div class="collection-hero__image"><img class="blur-up lazyload" data-src="{{asset('frontend')}}/assets/images/cat-women2.jpg" src="{{asset('frontend')}}/assets/images/cat-women2.jpg" alt="Women" title="Women" /></div>
                <div class="collection-hero__title-wrapper"><h1 class="collection-hero__title page-width">Shop</h1></div>
            </div>
        </div>
        <!--End Collection Banner-->

        <div class="container-fluid mt-5">
            <div class="row">
                <!--Sidebar-->
                <div class="col-12 col-sm-12 col-md-3 col-lg-2 sidebar filterbar">
                    <div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i></div>
                    <div class="sidebar_tags">
                        <!--Categories-->
                        <div class="sidebar_widget categories filter-widget">
                            <div class="widget-title"><h2>Categories</h2></div>
                            <div class="widget-content">
                                <ul class="sidebar_categories">
                                    @foreach($cats as $cat)
                                        <li class="lvl-1"><a href="#;" class="site-nav">{{$cat->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!--Categories-->
                        <!--Price Filter-->
                        <div class="sidebar_widget filterBox filter-widget">
                            <div class="widget-title">
                                <h2>Price </h2>
                            </div>
                            <form action="#" method="post" class="price-filter">
                                <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                    <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p class="no-margin"><input id="" type="text" value="0"></p>
                                    </div>
                                    <div class="col-6 text-right margin-25px-top">
                                        <button class="btn btn-secondary btn--small">filter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--End Price Filter-->
                        <!--Size Swatches-->
                        <div class="sidebar_widget filterBox filter-widget size-swacthes">
                            <div class="widget-title"><h2>Size</h2></div>
                            <div class="filter-color swacth-list">
                                <ul>
                                    @foreach($sizes as $size)
                                        <li><span class="swacth-btn ">{{$size->name}}</span></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!--End Size Swatches-->
                    {{--<!--Color Swatches-->--}}
                    {{--<div class="sidebar_widget filterBox filter-widget">--}}
                    {{--<div class="widget-title"><h2>Color</h2></div>--}}
                    {{--<div class="filter-color swacth-list clearfix">--}}
                    {{--<span class="swacth-btn black"></span>--}}
                    {{--<span class="swacth-btn white checked"></span>--}}
                    {{--<span class="swacth-btn red"></span>--}}
                    {{--<span class="swacth-btn blue"></span>--}}
                    {{--<span class="swacth-btn pink"></span>--}}
                    {{--<span class="swacth-btn gray"></span>--}}
                    {{--<span class="swacth-btn green"></span>--}}
                    {{--<span class="swacth-btn orange"></span>--}}
                    {{--<span class="swacth-btn yellow"></span>--}}
                    {{--<span class="swacth-btn blueviolet"></span>--}}
                    {{--<span class="swacth-btn brown"></span>--}}
                    {{--<span class="swacth-btn darkGoldenRod"></span>--}}
                    {{--<span class="swacth-btn darkGreen"></span>--}}
                    {{--<span class="swacth-btn darkRed"></span>--}}
                    {{--<span class="swacth-btn dimGrey"></span>--}}
                    {{--<span class="swacth-btn khaki"></span>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<!--End Color Swatches-->--}}
                    <!--Popular Products-->
                        <div class="sidebar_widget">
                            <div class="widget-title"><h2>Popular Products</h2></div>
                            <div class="widget-content">
                                <div class="list list-sidebar-products">
                                    <div class="grid">
                                        @foreach($top_products as $product)
                                            <div class="grid__item">
                                                <div class="mini-list-item">
                                                    <div class="mini-view_image">
                                                        <a class="grid-view-item__link" href="{{route('single.product',$product->slug)}}">
                                                            <img class="grid-view-item__image" src="{{asset($product->image)}}" alt="" />
                                                        </a>
                                                    </div>
                                                    <div class="details"> <a class="grid-view-item__title" href="#">{{$product->name}}</a>
                                                        <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">{{$siteIdentity->currency}} {{$product->price}}</span></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Popular Products-->
                        <!--Banner-->
                        <div class="sidebar_widget static-banner">
                            <img src="{{asset('frontend')}}/assets/images/side-banner-2.jpg" alt="" />
                        </div>
                        <!--Banner-->
                        <!--Information-->
                        <div class="sidebar_widget">
                            <div class="widget-title"><h2>Information</h2></div>
                            <div class="widget-content"><p>Use this text to share information about your brand with your customers. Describe a product, share announcements, or welcome customers to your store.</p></div>
                        </div>
                        <!--end Information-->
                        <!--Product Tags-->
                        <div class="sidebar_widget">
                            <div class="widget-title">
                                <h2>Product Tags</h2>
                            </div>
                            <div class="widget-content">
                                <ul class="product-tags">
                                    @foreach($tags as $tag)
                                        <li><a href="#" title="Show products matching tag $100 - $400">{{$tag->tag}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!--end Product Tags-->
                    </div>
                </div>
                <!--End Sidebar-->
                <!--Main Content-->
                <div class="col-12 col-sm-12 col-md-9 col-lg-10 main-col">
                    <div class="productList">
                        <!--Toolbar-->
                        <button type="button" class="btn btn-filter d-block d-md-none d-lg-none"> Product Filters</button>
                        <!--End Toolbar-->
                        <div class="grid-products grid--view-items">
                            <div class="row">
                                @foreach($products as $product)

                                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 item grid-view-item style2 @if($product->quantity == 0)grid-view-item--sold-out @endif">
                                        <div class="grid-view_image">
                                            <!-- start product image -->
                                            <a href="{{route('single.product',$product->slug)}}" class="grid-view-item__link">
                                                <!-- image -->
                                                <img class="grid-view-item__image primary blur-up lazyload" data-src="{{asset($product->image)}}" src="{{asset($product->image)}}" alt="image" title="product" />
                                                <!-- End image -->
                                                <!-- Hover image -->
                                                <img class="grid-view-item__image hover blur-up lazyload" data-src="{{asset($product->hover_image)}}" src="{{asset($product->hover_image)}}" alt="image" title="product" />
                                                <!-- End hover image -->
                                                @if($product->quantity == 0)
                                                    <h5 class="sold-out text-danger"><span>Sold out</span></h5>
                                                @endif
                                            </a>
                                            <!-- end product image -->

                                            <!--start product details -->
                                            <div class="product-details hoverDetails text-center mobile">
                                                <!-- product name -->
                                                <div class="product-name">
                                                    <a href="{{route('single.product',$product->slug)}}">{{$product->name}}</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price">{{$siteIdentity->currency}} {{$product->sell_price}}</span>
                                                </div>
                                                <!-- End product price -->

                                                <div class="product-review">
                                                    <i class="font-13 fa fa-star-o"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                </div>
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!--End Main Content-->
                </div>
            </div>
        </div>
    </div>
    <!--End Body Content-->
@stop