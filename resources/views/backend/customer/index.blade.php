@extends('layouts.back_master')
@section('title','Customer')
@section('main_content')
    <div class="row no-gutters">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="d-inline">Manage Customer</h3>
                </div>
                <div class="card-body">
                    <div class="table-wrapper text-center">
                        <table id="datatable1" class="table display responsive nowrap table-bordered">
                            <thead>
                            <tr>
                                <th width="2%">SL</th>
                                <th class="wd-15p">Name</th>
                                <th class="wd-15p">Email</th>
                                <th class="wd-15p">Image</th>
                                <th class="wd-15p">Status</th>
                                <th class="wd-10p">Joined</th>
                                <th class="wd-10p">Ordered</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i=0;
                            ?>
                            @foreach($customers as $customer)
                                <tr>
                                    <td>{{++$i}}</td>
                                    <td>{{$customer->name}}</td>
                                    <td>{{$customer->email}}</td>
                                    <td><img src="{{asset($customer->image)}}" alt="" width="100px"></td>
                                    <td>
                                        @if($customer->status == 0)
                                            <span class="badge badge-warning">Draft</span>
                                        @else
                                            <span class="badge badge-success">Verified</span>
                                        @endif
                                    </td>
                                    <td>{{$customer->created_at->diffForHumans()}}</td>
                                    <td>{{$customer->orders->count()}}</td>
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

