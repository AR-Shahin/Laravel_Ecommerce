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
                                    {{--<tr>--}}
                                        {{--<td colspan="5" class="text-right">Shipping </td>--}}
                                        {{--<td>(5%)-> {{ Cart::subtotal()}}</td>--}}
                                    {{--</tr>--}}
                                    <tr>
                                        <td colspan="5" class="text-right">Total</td>
                                        <td>${{$total =  Cart::subtotal()}}</td>
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
                                                <a class="card-link collapsed" data-toggle="collapse" href="#handCash" aria-expanded="false">Hand Cash </a>
                                            </div>
                                            <div id="handCash" class="collapse" data-parent="#accordion" style="">
                                                <div class="card-body">
                                                    <p class="no-margin font-15">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won't be shipped until the funds have cleared in our account.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2">
                                            <div class="card-header">
                                                <a class="card-link collapsed" data-toggle="collapse" href="#Bkash" aria-expanded="false">Bkash </a>
                                            </div>
                                            <div id="Bkash" class="collapse" data-parent="#accordion" style="">
                                                <div class="card-body">
                                                    <p class="no-margin font-15">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won't be shipped until the funds have cleared in our account.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <form action="{{route('payment')}}" method="post" id="paymenttForm">
                                    @csrf
                                    <input type="hidden" value="{{Cart::subtotal()}}" name="order_total">
                                    <div class="mt-3">
                                        <div class="row">
                                            <div class="col-12 col-md-4 align-self-center">
                                                <h3 class="d-inline">Select Payment Method : </h3>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <select name="payment_method" id="payment_method" class="form-control">
                                                    <option value="">Choose Payment Method</option>
                                                    <option value="Hand Cash">Hand Cash</option>
                                                    <option value="Bank Check">Bank Check</option>
                                                    <option value="Bkash">Bkash</option>
                                                </select>
                                                <span class="text-danger">{{($errors->has('payment_method'))? ($errors->first('payment_method')) : ''}}</span>
                                                <div class="mt-3" id="bkshNumber" c>
                                                    <p>Our Bkash Number : +8801754100439</p>
                                                    <input type="text" class="form-control" name="transication_id" placeholder="Bkash Trans ID" id="trndId">
                                                    <span class="text-danger">{{($errors->has('transication_id'))? ($errors->first('transication_id')) : ''}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-button-payment text-right">
                                        <button class="btn" value="Place order" type="submit">Place order</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">

    </script>
@stop