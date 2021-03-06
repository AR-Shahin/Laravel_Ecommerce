<!-- ########## START: LEFT PANEL ########## -->
<div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i> Admin Panel</a></div>
<div class="sl-sideleft">
    <div class="input-group input-group-search">
        <input type="search" name="search" class="form-control" placeholder="Search">
        <span class="input-group-btn">
          <button class="btn"><i class="fa fa-search"></i></button>
        </span><!-- input-group-btn -->
    </div><!-- input-group -->

    <label class="sidebar-label">Navigation</label>
    <div class="sl-sideleft-menu">

        <a href="{{route('dashboard')}}" class="sl-menu-link @if($main_menu == 'Dashboard') active @endif">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                <span class="menu-item-label">Dashboard</span>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{route('home')}}" class="sl-menu-link " target="_blank">
            <div class="sl-menu-item">
                <i class="menu-item-icon fa fa-share tx-22"></i>
                <span class="menu-item-label">View Site</span>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        {{--Slider--}}
        <a href="#" class="sl-menu-link @if($main_menu == 'Slider') active show-sub @endif" >
            <div class="sl-menu-item">
                <i class="menu-item-icon fa fa-sliders tx-20"></i>
                <span class="menu-item-label">Slider</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item "><a href="{{route('sliders.index')}}" class="nav-link @if($sub_menu == 'Slider') active @endif">Manage Slider</a></li>
        </ul>

        {{--Product--}}
        <a href="#" class="sl-menu-link @if($main_menu == 'Product') active show-sub @endif">
            <div class="sl-menu-item">
                <i class="menu-item-icon fa fa-product-hunt tx-20"></i>
                <span class="menu-item-label">Product</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item "><a href="{{route('category.index')}}" class="nav-link @if($sub_menu == 'Cat') active @endif">Manage Categories</a></li>
            <li class="nav-item "><a href="{{route('size.index')}}" class="nav-link @if($sub_menu == 'Size') active @endif">Manage Size</a></li>
            <li class="nav-item "><a href="{{route('color.index')}}" class="nav-link @if($sub_menu == 'Color') active @endif">Manage Color</a></li>
            <li class="nav-item "><a href="{{route('coupon.index')}}" class="nav-link @if($sub_menu == 'Coupon') active @endif">Manage Coupon</a></li>
            <li class="nav-item "><a href="{{route('product.index')}}" class="nav-link @if($sub_menu == 'Product') active @endif">Manage Product</a></li>
        </ul>

        {{--Order--}}
        <a href="#" class="sl-menu-link @if($main_menu == 'Order') active show-sub @endif">
            <div class="sl-menu-item">
                <i class="menu-item-icon fa fa-first-order tx-20"></i>
                <span class="menu-item-label">Order</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item "><a href="{{route('order.unapproved')}}" class="nav-link @if($sub_menu == 'New_Order') active show-sub @endif">New Orders</a></li>
            <li class="nav-item "><a href="{{route('order.index')}}" class="nav-link @if($sub_menu == 'Manage_Order') active @endif">Manage Order</a></li></a></li>
        </ul>

        {{--Site Identity--}}
        <a href="#" class="sl-menu-link @if($main_menu == 'Site') active show-sub @endif">
            <div class="sl-menu-item">
                <i class="menu-item-icon fa fa-globe tx-20"></i>
                <span class="menu-item-label">Site Identity</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item "><a href="{{route('site.identity')}}" class="nav-link @if($sub_menu == 'logo') active @endif">Logo & Footer</a></li>
            <li class="nav-item "><a href="{{route('social-links')}}" class="nav-link @if($sub_menu == 'link') active @endif">Social Links</a></li></a></li>
        </ul>
        {{--Custmer--}}
        <a href="#" class="sl-menu-link  @if($main_menu == 'Customer') active show-sub @endif">
            <div class="sl-menu-item">
                <i class="menu-item-icon fa fa-user-o tx-20"></i>
                <span class="menu-item-label">Customer</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item "><a href="{{route('customers')}}" class="nav-link @if($sub_menu == 'manage_cus') active @endif">Manage Customer</a></li>
            <li class="nav-item "><a href="{{route('draft.customers')}}" class="nav-link  @if($sub_menu == 'draft_cus') active @endif">Draft Customer</a></li></a></li>
        </ul>

        {{--Admin--}}
        <a href="#" class="sl-menu-link  @if($main_menu == 'Admin') active show-sub @endif">
            <div class="sl-menu-item">
                <i class="menu-item-icon fa fa-users tx-20"></i>
                <span class="menu-item-label">Admin Panel</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            @if(Auth::guard('web')->user()->status == 1)
            <li class="nav-item "><a href="{{route('admin.index')}}" class="nav-link  @if($sub_menu == 'manage') active @endif">Manage Admin</a></li>
            @endif
            <li class="nav-item "><a href="{{route('profile')}}" class="nav-link  @if($sub_menu == 'profile') active  @endif">My Profile</a></li></a></li>
        </ul>

    </div><!-- sl-sideleft-menu -->
    <br>
</div><!-- sl-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->



<!-- ########## START: HEAD PANEL ########## -->
<div class="sl-header">
    <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
    </div><!-- sl-header-left -->
    <div class="sl-header-right">
        <nav class="nav">
            <div class="dropdown">
                <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                    <span class="logged-name">{{Auth::user()->name}}</span>
                    <img src="{{asset(Auth::user()->image)}}" class="wd-32 rounded-circle" alt="">
                </a>
                <div class="dropdown-menu dropdown-menu-header wd-200">
                    <ul class="list-unstyled user-profile-nav">
                        <li><a href=""><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                        <li><a href=""><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
                        <li><a href=""><i class="icon ion-ios-download-outline"></i> Downloads</a></li>
                        <li><a href=""><i class="icon ion-ios-star-outline"></i> Favorites</a></li>
                        <li><a href=""><i class="icon ion-ios-folder-outline"></i> Collections</a></li>
                        <li><a href="{{route('admin.logout')}}"><i class="icon ion-power"></i> Sign Out</a></li>

                    </ul>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
        </nav>
        <div class="navicon-right">
            <a id="btnRightMenu" href="" class="pos-relative">
                <i class="icon ion-ios-bell-outline"></i>
                <!-- start: if statement -->
                <span class="square-8 bg-danger"></span>
                <!-- end: if statement -->
            </a>
        </div><!-- navicon-right -->
    </div><!-- sl-header-right -->
</div><!-- sl-header -->
<!-- ########## END: HEAD PANEL ########## -->