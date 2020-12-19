@extends('layouts.customer')
@section('title','Customer | Order Details ')
@section('customer_content')
   <div class="card mt-0 pt-0">
      <div class="card-header">
         <h5>My Orders</h5>
      </div>
      <div class="card-body">
         <table class="table table-bordered text-center">

            @if(countCustomerOrder(Auth::guard('customer')->user()->id) == 0)
               <tr>
                  <td><p class="text-danger lead">Your'e not order anything.</p></td>
               </tr>
            @else
               <tr>
                  <th>SL</th>
                  <th>Shipping Name</th>
                  <th>Amount</th>
                  <th>Status</th>
                  <th>Order Date</th>
                  <th>Actions</th>
                   <?php $i = 0 ?>
               </tr>
               @foreach($orders as $order)
                  <tr>
                     <td>{{++$i}}</td>
                     <td>{{$order->shippingDetails->first_name}} {{$order->shippingDetails->last_name}}</td>
                     <td>${{$order->order_total}}</td>
                     <td>
                        @if($order->status == 0)
                           <span class="badge-warning badge">Unapproved</span>
                        @else
                           <span class="badge-success badge">Approved</span>
                        @endif
                     </td>
                     <td>
                        {{$order->created_at->diffforHumans()}}
                     </td>
                     <td>
                        <a href="{{route('view.order',$order->id)}}" class="p-2 btn-info btn-sm">View Order</a>
                        <a href="" class="p-2 btn-danger btn-sm">Remove</a>
                        <a href="{{route('invoice.pdf',$order->id)}}" class="btn btn--small"><i class="fa fa-print"></i> Print</a>
                     </td>
                  </tr>
               @endforeach
            @endif
         </table>
      </div>
   </div>
@stop