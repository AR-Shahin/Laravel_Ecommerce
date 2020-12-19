@extends('layouts.back_master')
@section('title','Billing Info')
@section('main_content')
    <div class="row no-gutters">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="d-inline">Billing Information of <span>{{$order->customer->name}}</span></h3>
                    <a href="{{route('order.index')}}" class="btn btn-info btn-sm pull-right">Back</a>
                </div>
                <div class="card-body">
                    <div class="table-wrapper">
                        <table class="table table-bordered text-center table-responsive-sm">
                            <tr>
                                <td colspan="1">Billing Address</td>
                                <td colspan="4">
                                    <strong>Name : </strong>{{ucwords($order->shippingDetails->first_name)}} {{$order->shippingDetails->last_name}}
                                    <br>
                                    <strong>Email : </strong>{{$order->shippingDetails->email}} <br>
                                    <strong>Phone : </strong>{{$order->shippingDetails->phone}} <br>
                                    <strong>Address : </strong>{{$order->shippingDetails->address}}<br>
                                    <strong>City : </strong>{{$order->shippingDetails->city}}<br>
                                </td>
                                <td colspan="2">
                                    <span>Order No : {{$order->order_num}}</span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="6">Billing Details</td>
                            </tr>
                            <tr>
                                <th>SL</th>
                                <th>Product Name</th>
                                <th>Size</th>
                                <th>Color</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                            <?php
                            $i=0;
                            $total = 0;
                            ?>
                            @foreach($order->customerOrders as $order)
                                <tr>
                                    <td>{{++$i}}</td>
                                    <td>{{$order->product->name}}</td>
                                    <td>{{$order->size_name}}</td>
                                    <td>{{$order->color_name}}</td>
                                    <td>$ {{$order->product->sell_price}}</td>
                                    <td>{{$order->quantity}}</td>
                                    <td>$ {{$T = $order->product->sell_price * $order->quantity}}</td>
                                </tr>
                                <?php
                                $total += $T;
                                ?>
                            @endforeach
                            <tr>
                                <td colspan="6" class="text-right">Subtotal : </td>
                                <td>$ {{$total}}</td>
                            </tr>
                        </table>
                    </div><!-- table-wrapper -->
                </div>
            </div>
        </div>
    </div>
@stop

