@extends('layouts.back_master')
@section('title','View Product')
@section('main_content')
    <div class="row no-gutters">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="d-inline">View Product</h3>
                    <a href="{{route('product.index')}}" class="btn btn-success" style="float: right;"><i class="fa fa-angle-double-left mr-1"></i> Back</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Name</th>
                            <td>{{$product->name}}</td>
                        </tr>
                        <tr>
                            <th>Category</th>
                            <td>{{$product->category->name}}</td>
                        </tr>
                        <tr>
                            <th>Color</th>
                            <td>{{$product->name}}</td>
                        </tr>
                        <tr>
                            <th>Size</th>
                            <td>{{$product->name}}</td>
                        </tr>
                        <tr>
                            <th>Price</th>
                            <td>$ {{$product->price}}</td>
                        </tr>
                        <tr>
                            <th>Sell Price</th>
                            <td>$ {{$product->sell_price}}</td>
                        </tr>
                        <tr>
                            <th>Quantity</th>
                            <td>{{$product->quantity}}</td>
                        </tr>
                        <tr>
                            <th>View</th>
                            <td><i class="fa fa-eye mr-2"></i>{{$product->view}}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>
                                @if($product->status == 0)
                                    <span class="badge badge-danger">Inactive</span>
                                @else
                                    <span class="badge badge-success">Active</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td>
                                <img src="{{asset($product->image)}}" alt="" class="w-25">
                                <img src="{{asset($product->hover_image)}}" alt="" class="w-25">
                            </td>
                        </tr>

                        <tr>
                            <th>Slider Images</th>
                            <td>
                                @foreach($product->sliderImages as $img)
                                    <img src="{{asset($img->image)}}" alt="" class="w-25">
                                @endforeach
                            </td>
                        </tr>

                        <tr>
                            <th>Tags</th>
                            <td>
                                @foreach($product->tags as $tag)
                                    <span class="text-primary" style="font-weight: bold;">{{$tag->tag . "  "}}</span>
                                @endforeach
                            </td>
                        </tr>

                        <tr>
                            <th>Short Description</th>
                            <td>{{$product->short_des}}</td>
                        </tr>

                        <tr>
                            <th>Long Description</th>
                            <td>{{$product->long_des}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

