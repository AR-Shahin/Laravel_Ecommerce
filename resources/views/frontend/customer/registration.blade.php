@extends('layouts.front_master')
@section('title','Customer Registration')
@section('main_content')
    <div id="page-content">
        <!--Page Title-->
        <div class="page section-header text-center">
            <div class="page-title">
                <div class="wrapper"><h1 class="page-width">Create an Account</h1></div>
            </div>
        </div>
        <!--End Page Title-->

        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3">
                    <div class="mb-4">
                        <form method="post" action="{{route('customer.registration')}}" id="CustomerLoginForm" accept-charset="UTF-8" class="contact-form" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="FirstName">Name</label>
                                        <input type="text" name="name" placeholder="Enter Your Name" id="FirstName" autofocus="" value="{{old('name')}}">
                                        <span class="text-danger">{{($errors->has('name'))? ($errors->first('name')) : ''}}</span>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="CustomerEmail">Email</label>
                                        <input type="email" name="email" placeholder="Enter Your Email" id="CustomerEmail" class="" autocorrect="off" autocapitalize="off" autofocus="" value="{{old('email')}}">
                                        <span class="text-danger">{{($errors->has('email'))? ($errors->first('email')) : ''}}</span>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="CustomerEmail">Image</label>
                                        <input type="file" name="image" placeholder="" id="CustomerEmail" class="form-control" autocorrect="off" autocapitalize="off" autofocus="" value="{{old('image')}}">
                                        <span class="text-danger">{{($errors->has('image'))? ($errors->first('image')) : ''}}</span>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="CustomerPassword">Password</label>
                                        <input type="password" value="" name="password" placeholder="Enter Your Password" id="CustomerPassword" class="">
                                        <span class="text-danger">{{($errors->has('password'))? ($errors->first('password')) : ''}}</span>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="CustomerPassword">Confirm Password</label>
                                        <input type="password" value="" name="password_confirmation" placeholder="Confirm Password" id="CustomerPassword" class="">
                                        <span class="text-danger">{{($errors->has('password_confirmation'))? ($errors->first('password_confirmation')) : ''}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                                    <input type="submit" class="btn mb-3 btn-block" value="Create">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop