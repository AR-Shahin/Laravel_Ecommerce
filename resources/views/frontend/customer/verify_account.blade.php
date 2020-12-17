@extends('layouts.front_master')
@section('title','Customer Verify Account')
@section('main_content')
    <div id="page-content">
        <!--Page Title-->
        <div class="page section-header text-center">
            <div class="page-title">
                <div class="wrapper"><h1 class="page-width">Verify Your Account</h1></div>
            </div>
        </div>
        <!--End Page Title-->

        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3">
                    <div class="mb-4">
                        <form method="post" action="{{route('customer.verify-account')}}" id="CustomerLoginForm" accept-charset="UTF-8" class="contact-form">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="CustomerEmail">Email</label>
                                        <input type="email" name="email" placeholder="Enter Email" id="CustomerEmail" class="" autocorrect="off" autocapitalize="off" autofocus="" value="{{old('email')}}">
                                        <span class="text-danger">{{($errors->has('email'))? ($errors->first('email')) : ''}}</span>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="CustomerPassword">Verification Code</label>
                                        <input type="text" value="" name="code" placeholder="Verification Code" id="CustomerPassword" class="">
                                        <span class="text-danger">{{($errors->has('code'))? ($errors->first('code')) : ''}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                                    <button type="submit" class="btn mb-3 btn-block">Verify Account</button>
                                    <p class="mb-4">
                                        <a href="#" id="RecoverPassword">Forgot your password?</a> &nbsp; | &nbsp;
                                        <a href="{{route('customer.registration')}}" id="customer_register_link">Create account</a>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop