<!--Search Form Drawer-->
<div class="search">
    <div class="search__form">
        <form class="search-bar__form" action="#">
            <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
            <input class="search__input" type="search" name="q" value="" placeholder="Search entire store..." aria-label="Search" autocomplete="off">
        </form>
        <button type="button" class="search-trigger close-btn"><i class="icon anm anm-times-l"></i></button>
    </div>
</div>
<!--End Search Form Drawer-->
<!--Top Header-->
<div class="top-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-10 col-sm-8 col-md-5 col-lg-4">
                <div class="currency-picker">
                    <span class="selected-currency">USD</span>
                    <ul id="currencies">
                        <li data-currency="INR" class="">INR</li>
                        <li data-currency="GBP" class="">GBP</li>
                        <li data-currency="CAD" class="">CAD</li>
                        <li data-currency="USD" class="selected">USD</li>
                        <li data-currency="AUD" class="">AUD</li>
                        <li data-currency="EUR" class="">EUR</li>
                        <li data-currency="JPY" class="">JPY</li>
                    </ul>
                </div>
                <div class="language-dropdown">
                    <span class="language-dd">English</span>
                    <ul id="language">
                        <li class="">German</li>
                        <li class="">French</li>
                    </ul>
                </div>
                <p class="phone-no"><i class="anm anm-phone-s"></i> +440 0(111) 044 833</p>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 d-none d-lg-none d-md-block d-lg-block">
                <div class="text-center"><p class="top-header_middle-text"> {{$site->top_text}}</p></div>
            </div>
            <div class="col-2 col-sm-4 col-md-3 col-lg-4 text-right">
                <span class="user-menu d-block d-lg-none"><i class="anm anm-user-al" aria-hidden="true"></i></span>
                <ul class="customer-links list-inline">
                    @if(Auth::guard('customer')->check())
                        <li><a href="{{route('customer.dashboard')}}">Hi [{{Auth::guard('customer')->user()->name}}]</a></li>
                        <li><a href="{{route('customer.logout')}}">Logout</a></li>
                    @else
                        <li><a href="{{route('customer.login')}}">Login</a></li>
                        <li><a href="{{route('customer.registration')}}">Create Account</a></li>
                    @endif
                    <li><a href="wishlist.html">Wishlist</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--End Top Header-->
<!--Header-->
<div class="header-wrap animated d-flex">
    <div class="container-fluid">
        <div class="row align-items-center">
            <!--Desktop Logo-->
            <div class="logo col-md-2 col-lg-2 d-none d-lg-block">
                <a href="{{url('/')}}">
                    <img src="{{asset($site->logo)}}" alt="Belle Multipurpose Html Template" title="Belle Multipurpose Html Template" />
                </a>
            </div>
            <!--End Desktop Logo-->
            <div class="col-2 col-sm-3 col-md-3 col-lg-8">
                <div class="d-block d-lg-none">
                    <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                        <i class="icon anm anm-times-l"></i>
                        <i class="anm anm-bars-r"></i>
                    </button>
                </div>
                <!--Desktop Menu-->
                <nav class="grid__item" id="AccessibleNav"><!-- for mobile -->
                    <ul id="siteNav" class="site-nav medium center hidearrow">
                        <li class="lvl1 parent megamenu"><a href="{{route('home')}}">Home <i class="anm anm-angle-down-l"></i></a>
                        </li>
                        <li class="lvl1 parent megamenu"><a href="{{route('shop')}}">Shop <i class="anm anm-angle-down-l"></i></a>
                        </li>
                    </ul>
                </nav>
                <!--End Desktop Menu-->
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
                <div class="logo">
                    <a href="{{route('home')}}">
                        <img src="{{asset($site->logo)}}" alt="Belle Multipurpose Html Template" title="Belle Multipurpose Html Template" />
                    </a>
                </div>
            </div>
            <div class="col-4 col-sm-3 col-md-3 col-lg-2">
                <div class="site-cart">
                    <a href="{{route('view.cart')}}" class="site-header__cart" title="Cart">
                        <i class="icon anm anm-bag-l"></i>
                        <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count">{{Cart::count()}}</span>
                    </a>
                    <!--Minicart Popup-->
                    <div id="header-cart" class="block block-cart">
                        <ul class="mini-products-list">
                            @foreach(Cart::content() as $item)
                                <form action="{{route('update.cart')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="productId" value="{{$item->id}}">
                                    <li class="item">
                                        <a class="product-image" href="#">
                                            <img src="{{asset($item->options->image)}}" alt="3/4 Sleeve Kimono Dress" title="" />
                                        </a>
                                        <div class="product-details">
                                            <a href="{{route('delete.cart',$item->rowId)}}" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                            <button type="submit" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></button>
                                            <input type="hidden" name="rowId" value="{{$item->rowId}}">
                                            <a class="pName" href="{{route('view.cart')}}">{{$item->name}}</a>
                                            <div class="variant-cart">{{$item->options->color_name}} / {{$item->options->size_name}}</div>
                                            <div class="wrapQtyBtn">
                                                <div class="qtyField">
                                                    <span class="label">Qty:</span>
                                                    <div class="cart__qty text-center">
                                                        <div class="qtyField">
                                                            <a class="qtyBtn minus" href="javascript:void(0);"><i class="icon icon-minus"></i></a>
                                                            <input type="hidden" name="rowId" value="{{$item->rowId}}">
                                                            <input class="cart__qty-input qty" type="text" name="quantity" id="qty" value="{{$item->qty}}" pattern="[0-9]*">
                                                            <a class="qtyBtn plus" href="javascript:void(0);"><i class="icon icon-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="priceRow">
                                                <div class="product-price">
                                                    <span class="money">${{$item->price}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </form>
                            @endforeach
                        </ul>
                        <div class="total">
                            <div class="total-in">
                                <span class="label">Cart Subtotal:</span><span class="product-price"><span class="money">${{Cart::subtotal()}}</span></span>
                            </div>
                            <div class="buttonSet text-center">
                                <a href="{{route('view.cart')}}" class="btn btn-secondary btn--small">View Cart</a>
                                <a href="{{route('shipping.form')}}" class="btn btn-secondary btn--small">Checkout</a>
                            </div>
                        </div>
                    </div>
                    <!--End Minicart Popup-->
                </div>
                <div class="site-header__search">
                    <button type="button" class="search-trigger"><i class="icon anm anm-search-l"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Header-->
<!--Mobile Menu-->
<div class="mobile-nav-wrapper" role="navigation">
    <div class="closemobileMenu"><i class="icon anm anm-times-l pull-right"></i> Close Menu</div>
    <ul id="MobileNav" class="mobile-nav">
        <li class="lvl1 parent megamenu"><a href="{{route('home')}}">Home <i class="anm anm-plus-l"></i></a>
        </li>
        <li class="lvl1 parent megamenu"><a href="{{route('shop')}}">Shop <i class="anm anm-plus-l"></i></a>
        </li>
        </li>
    </ul>
</div>
<!--End Mobile Menu-->