@extends('layouts.customer')
@section('title','Customer | Order Details ')
@section('customer_content')
    <div class="card mt-0 pt-0">
        <div class="card-header">
            <h5 class="d-inline">Single Order Products</h5>
            <a href="{{route('customer.order-details')}}" class="btn btn-sm" style="float: right;">Back</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered text-center table-responsive-sm">
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
                @foreach($orders as $order)
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
        </div>
    </div>
@stop