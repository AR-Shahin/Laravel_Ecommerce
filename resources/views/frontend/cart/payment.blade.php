@extends('layouts.front_master')
@section('title','Payment ')
@section('main_content')
    <div id="page-content">
        <!--Page Title-->
        <div class="page section-header text-center">
            <div class="page-title">
                <div class="wrapper"><h1 class="page-width">Payment</h1></div>
            </div>
        </div>
        <!--End Page Title-->

        <div class="container">
            <div class="row billing-fields justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 sm-margin-30px-bottom">
                    <div class="your-order-payment">
                        <div class="your-order">
                            <h2 class="order-title mb-4">Your Order</h2>

                            <div class="table-responsive-sm order-table">
                                <table class="bg-white table table-bordered table-hover text-center">
                                    <thead>
                                    <tr>
                                        <th class="text-left">Product Name</th>
                                        <th>Price</th>
                                        <th>Size</th>
                                        <th>Color</th>
                                        <th>Qty</th>
                                        <th>Subtotal</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(Cart::content() as $item)
                                        <tr>
                                            <td class="text-left">{{$item->name}}</td>
                                            <td>${{$item->price}}</td>
                                            <td>{{$item->options->size_name}}</td>
                                            <td>{{$item->options->color_name}}</td>
                                            <td>{{$item->qty}}</td>
                                            <td>$ {{$item->qty*$item->price}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot class="font-weight-600">
                                    <tr>
                                        <td colspan="5" class="text-right">Shipping </td>
                                        <td>(5%)-> {{$ship = Cart::subtotal() * 0.05}}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" class="text-right">Total</td>
                                        <td>${{$ship + Cart::subtotal()}}</td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>

                        <hr>

                        <div class="your-payment">
                            <h2 class="payment-title mb-3">payment method</h2>
                            <div class="payment-method">
                                <div class="payment-accordion">
                                    <div id="accordion" class="payment-section">
                                        <div class="card mb-2">
                                            <div class="card-header">
                                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="false">Direct Bank Transfer </a>
                                            </div>
                                            <div id="collapseOne" class="collapse" data-parent="#accordion" style="">
                                                <div class="card-body">
                                                    <p class="no-margin font-15">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won't be shipped until the funds have cleared in our account.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2">
                                            <div class="card-header">
                                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false">Cheque Payment</a>
                                            </div>
                                            <div id="collapseTwo" class="collapse" data-parent="#accordion" style="">
                                                <div class="card-body">
                                                    <p class="no-margin font-15">Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card margin-15px-bottom border-radius-none">
                                            <div class="card-header">
                                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false"> PayPal </a>
                                            </div>
                                            <div id="collapseThree" class="collapse" data-parent="#accordion" style="">
                                                <div class="card-body">
                                                    <p class="no-margin font-15">Pay via PayPal; you can pay with your credit card if you don't have a PayPal account.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2">
                                            <div class="card-header">
                                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false"> Payment Information </a>
                                            </div>
                                            <div id="collapseFour" class="collapse" data-parent="#accordion" style="">
                                                <div class="card-body">
                                                    <fieldset>
                                                        <div class="row">
                                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                <label for="input-cardname">Name on Card <span class="required-f">*</span></label>
                                                                <input name="cardname" value="" placeholder="Card Name" id="input-cardname" class="form-control" type="text">
                                                            </div>
                                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                <label for="input-country">Credit Card Type <span class="required-f">*</span></label>
                                                                <select name="country_id" class="form-control">
                                                                    <option value=""> --- Please Select --- </option>
                                                                    <option value="1">American Express</option>
                                                                    <option value="2">Visa Card</option>
                                                                    <option value="3">Master Card</option>
                                                                    <option value="4">Discover Card</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                <label for="input-cardno">Credit Card Number  <span class="required-f">*</span></label>
                                                                <input name="cardno" value="" placeholder="Credit Card Number" id="input-cardno" class="form-control" type="text">
                                                            </div>
                                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                <label for="input-cvv">CVV Code <span class="required-f">*</span></label>
                                                                <input name="cvv" value="" placeholder="Card Verification Number" id="input-cvv" class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                <label>Expiration Date <span class="required-f">*</span></label>
                                                                <input type="date" name="exdate" class="form-control">
                                                            </div>
                                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                <img class="padding-25px-top xs-padding-5px-top" src="assets/images/payment-img.jpg" alt="card" title="card">
                                                            </div>
                                                        </div>
                                                    </fieldset>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="order-button-payment">
                                    <button style="float: right;" class="btn" value="Place order" type="submit">Place order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
@stop