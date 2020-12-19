@extends('layouts.back_master')
@section('title','Unapproved')
@section('main_content')
    <div class="row no-gutters">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="d-inline">Unapproved  Order</h3>
                </div>
                <div class="card-body">
                    <div class="table-wrapper">
                        <table id="datatable1" class=" text-center table display responsive nowrap table-bordered">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Customer Name</th>
                                <th>Payment Method</th>
                                <th>Total Amount</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>1</td>
                                    <td>{{$order->customer->name}}</td>
                                    <td>{{$order->payment->payment_method}}</td>
                                    <td>{{$order->order_total}}</td>
                                    <td>
                                        @if($order->status == 0)
                                            <span class="badge badge-warning">Unapproved</span>
                                        @else
                                            <span class="badge badge-success">Approved</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('billing.info',$order->id)}}" class="btn btn-sm btn-info">Billing Info</a>
                                        <a href="{{route('approved.order',$order->id)}}" class="btn btn-sm btn-success">Approved Order</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div><!-- table-wrapper -->
                </div>
            </div>
        </div>
    </div>
@stop

