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
                        <li class="list-group-item active"><a class="text-light" href="{{route('customer.dashboard')}}">Home</a></li>
                        <li class="list-group-item">Orders</li>
                        <li class="list-group-item">Profile</li>
                    </ul>
                </div>
                <div class="col-12 col-md-9 card-body">
                    @yield('customer_content')
                </div>
            </div>
        </div>

    </div>
@stop