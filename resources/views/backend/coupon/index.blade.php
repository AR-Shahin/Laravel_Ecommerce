@extends('layouts.back_master')
@section('title','Coupon')
@section('main_content')
    <div class="row no-gutters">
        <div class="col-12 col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Manage Coupon</h3>
                </div>
                <div class="card-body">
                    <div class="table-wrapper">
                        <table id="datatable1" class="table display responsive nowrap table-bordered">
                            <thead>
                            <tr>
                                <th width="2%">SL</th>
                                <th class="wd-15p">Name</th>
                                <th class="wd-15p">Discount</th>
                                <th class="wd-15p">Status</th>
                                <th class="wd-10p">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i = 0;
                            ?>
                            @foreach($coupons as $coupon)
                                <tr>
                                    <td>{{++$i}}</td>
                                    <td>{{$coupon->name}}</td>
                                    <td>{{$coupon->discount}} %</td>
                                    <td>
                                        @if($coupon->status == 1)
                                            <span class="badge badge-success">Active</span>
                                            @else
                                            <span class="badge badge-warning">Inactive</span>
                                            @endif

                                    </td>
                                    <td>
                                        @if($coupon->status == 1)
                                            <a href="{{route('coupon.inactive',$coupon->id)}}" class="btn btn-sm btn-warning">Inactive</a>
                                            @else
                                            <a href="{{route('coupon.active',$coupon->id)}}" class="btn btn-sm btn-success">Active</a>
                                            @endif
                                        <a data-toggle="modal" data-target="#SliderEditModal_{{$coupon->id}}"class="btn btn-sm btn-info text-light">Edit</a>

                                        <form  action="{{route('coupon.delete',$coupon->id)}}" class="d-inline del_form" method="post" style="display: inline;">
                                            @csrf
                                            <button id="delete" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div><!-- table-wrapper -->
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3>Add Coupon</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('coupon.store')}}" method="post" >
                        @csrf
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-tag tx-16 lh-0 op-6"></i></span>
                            <input type="text" class="form-control" placeholder="Coupon Name" name="name" value="{{old('name')}}">
                            <span class="text-danger">{{($errors->has('name'))? ($errors->first('name')) : ''}}</span>
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-tag tx-16 lh-0 op-6"></i></span>
                            <input type="text" class="form-control" placeholder="Discount Amount" name="discount" value="{{old('discount')}}">
                            <span class="text-danger">{{($errors->has('discount'))? ($errors->first('discount')) : ''}}</span>
                        </div>
                        <br>
                        <div class="form-group">
                            <button class="btn btn-success btn-block mr-1"><i class="fa fa-plus"></i> Add New Coupon</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop

<!-- Modal -->
@foreach($coupons as $coupon)
    <div class="modal fade" id="SliderEditModal_{{$coupon->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Size</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('coupon.update',$coupon->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-tag tx-16 lh-0 op-6"></i></span>
                            <input type="text" class="form-control" placeholder="Category Name" name="name" value="{{$coupon->name}}">
                            <span class="text-danger">{{($errors->has('name'))? ($errors->first('name')) : ''}}</span>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-tag tx-16 lh-0 op-6"></i></span>
                            <input type="text" class="form-control"  name="discount" value="{{$coupon->discount}}">
                            <span class="text-danger">{{($errors->has('discount'))? ($errors->first('discount')) : ''}}</span>
                        </div>
                        <br>
                        <div class="form-group">
                            <button class="btn btn-success btn-block mr-1"><i class="fa fa-edit"></i> Edit Coupon</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
