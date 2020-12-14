@extends('layouts.back_master')
@section('title','Product')
@section('main_content')
    <div class="row no-gutters">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="d-inline">Manage Product</h3>
                    <a href="{{route('product.create')}}" class="btn btn-success" style="float: right;"><i class="fa fa-plus mr-1"></i> Add New Product</a>
                </div>
                <div class="card-body">
                    <div class="table-wrapper">
                        <table id="datatable1" class="table display responsive nowrap table-bordered">
                            <thead>
                            <tr>
                                <th width="2%">SL</th>
                                <th class="wd-15p">Name</th>
                                <th class="wd-15p">Category</th>
                                <th class="wd-15p">Image</th>
                                <th class="wd-15p">Price</th>
                                <th class="wd-15p">Sell Price</th>
                                <th class="wd-15p">Quantity</th>
                                <th class="wd-15p">View</th>
                                <th class="wd-15p">Status</th>
                                <th class="wd-15p">Added Date</th>
                                <th class="wd-10p">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i = 0;
                            ?>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{++$i}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->category->name}}</td>
                                    <td><img src="{{asset($product->image)}}" alt="" width="50px" height="50px"></td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->sell_price}}</td>
                                    <td>{{$product->quantity}}</td>
                                    <td>{{$product->view}}</td>
                                    <td>
                                        @if($product->status == 0)
                                            <a href="{{route('active.product',$product->id)}}" class="badge badge-danger">Inactive</a>
                                        @else
                                            <a href="{{route('inactive.product',$product->id)}}" class="badge badge-success">Active</a>
                                        @endif
                                    </td>
                                    <td>{{$product->created_at->diffForHumans()}}</td>
                                    <td>
                                        <a href="{{route('product.show',$product->id)}}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                        <a href="{{route('product.edit',$product->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                            <a href="{{route('product.delete',$product->id)}}" id="" class="btn btn-danger btn-sm delete_swal"><i class="fa fa-trash"></i></a>
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

