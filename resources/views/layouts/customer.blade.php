@extends('layouts.front_master')
@section('main_content')
    <div id="page-content">
        <!--Page Title-->
        <div class="page section-header text-center">
            <div class="page-title">
                <div class="wrapper"><h1 class="page-width">Dashboard</h1></div>
            </div>
        </div>
        <!--End Page Title-->

        <div class="container-fluid">
            <div class="row ">
                <div class="col-12 col-md-3 card-body">
                    <ul class="list-group">
                        <li class="list-group-item text-light @if($cus_menu == 'Home') active @endif"><a href="{{route('customer.dashboard')}}" class="btn btn-dark w-100 d-block">Home</a></li>
                        <li class="list-group-item @if($cus_menu == 'Order') active @endif"><a href="{{route('customer.order-details')}}" class="btn btn-dark w-100 d-block">Orders</a></li>
                        <li class="list-group-item @if($cus_menu == 'Profile') active @endif"><a href="{{route('customer.profile')}}" class="btn btn-dark w-100 d-block">Profile</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-9 card-body">
                    @yield('customer_content')
                </div>
            </div>
        </div>

    </div>
@stop