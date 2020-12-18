@extends('layouts.front_master')
@section('title','Shipping Address ')
@section('main_content')
    <div id="page-content">
        <!--Page Title-->
        <div class="page section-header text-center">
            <div class="page-title">
                <div class="wrapper"><h1 class="page-width">Checkout</h1></div>
            </div>
        </div>
        <!--End Page Title-->

        <div class="container">
            <div class="row billing-fields justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 sm-margin-30px-bottom">
                    <div class="create-ac-content bg-light-gray padding-20px-all">
                        <form method="post" action="{{route('shipping.form')}}">
                            @csrf
                            <fieldset>
                                <h2 class="login-title mb-3">Billing details</h2>
                                <div class="row">
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-firstname">First Name <span class="required-f">*</span></label>
                                        <input name="firstname" value="{{old('firstname')}}" id="input-firstname" type="text">
                                        <span class="text-danger">{{($errors->has('firstname'))? ($errors->first('firstname')) : ''}}</span>
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-lastname">Last Name <span class="required-f">*</span></label>
                                        <input name="lastname" value="{{old('lastname')}}" id="input-lastname" type="text">
                                        <span class="text-danger">{{($errors->has('lastname'))? ($errors->first('lastname')) : ''}}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-email">E-Mail <span class="required-f">*</span></label>
                                        <input name="email" value="{{old('email')}}" id="input-email" type="email">
                                        <span class="text-danger">{{($errors->has('email'))? ($errors->first('email')) : ''}}</span>
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-telephone">Phone <span class="required-f">*</span></label>
                                        <input name="phone" value="{{old('phone')}}" id="input-telephone" type="tel">
                                        <span class="text-danger">{{($errors->has('phone'))? ($errors->first('phone')) : ''}}</span>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <div class="row">
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                        <label for="input-company">House</label>
                                        <input name="house" value="{{old('house')}}" id="input-company" type="text">
                                        <span class="text-danger">{{($errors->has('house'))? ($errors->first('house')) : ''}}</span>
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-address-1">Address <span class="required-f">*</span></label>
                                        <input name="address" value="{{old('address')}}" id="input-address-1" type="text">
                                        <span class="text-danger">{{($errors->has('address'))? ($errors->first('address')) : ''}}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                        <label for="input-address-2">Zip Code <span class="required-f">*</span></label>
                                        <input name="zip_code" value="{{old('zip_code')}}" id="input-address-2" type="text">
                                        <span class="text-danger">{{($errors->has('zip_code'))? ($errors->first('zip_code')) : ''}}</span>
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-city">City <span class="required-f">*</span></label>
                                        <input name="city" value="{{old('city')}}" id="input-city" type="text">
                                        <span class="text-danger">{{($errors->has('city'))? ($errors->first('city')) : ''}}</span>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <div class="row">
                                    <div class="form-group col-md-12 col-lg-12 col-xl-12">
                                        <label for="input-company">Order Notes <span class="required-f">*</span></label>
                                        <textarea class="form-control resize-both" rows="3"name="note">{{old('note')}}</textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12 col-lg-12 col-xl-12">
                                     <button type="submit" class="btn w-100"><i class="fa fa-van"></i> Go to Payment</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
@stop