@extends('layouts.back_master')
@section('title','Product Create')
@section('main_content')
    <div class="row no-gutters">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="d-inline">Add New Product</h3>
                    <a href="{{route('product.index')}}" class="btn btn-success" style="float: right;"><i class="fa fa-angle-double-left mr-1"></i> Back</a>
                </div>
                <div class="card-body">
                    <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">Product Name : </label>
                                    <input type="text" class="form-control" name="name" placeholder="Product Name" id="productName" value="{{old('name')}}">
                                    <span class="text-danger">{{($errors->has('name'))? ($errors->first('name')) : ''}}</span>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">Product Category : </label>
                                    <select class="form-control select2-show-search" data-placeholder="Choose Category" name="cat_id">
                                        <option label="Choose one"></option>
                                        @foreach($cats as $cat)
                                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                                        @endforeach
                                    </select>

                                    <span class="text-danger">{{($errors->has('cat_id'))? ($errors->first('cat_id')) : ''}}</span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">Product Size : </label>
                                    <select class="form-control select2" data-placeholder="Choose Browser" multiple name="size_id[]">
                                        @foreach($sizes as $size)
                                            <option value="{{$size->name}}">{{$size->name}}</option>
                                        @endforeach
                                    </select>

                                    <span class="text-danger">{{($errors->has('size_id'))? ($errors->first('size_id')) : ''}}</span>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">Color Size : </label>
                                    <select class="form-control select2" data-placeholder="Choose Browser" multiple name="color_id[]">
                                        @foreach($colors as $color)
                                            <option value="{{$color->name}}">{{$color->name}}</option>
                                        @endforeach
                                    </select>

                                    <span class="text-danger">{{($errors->has('color_id'))? ($errors->first('color_id')) : ''}}</span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 col-md-4">
                                <label for="">Price : </label>
                                <input type="text" class="form-control" name="price" placeholder="Product Price" value="{{old('price')}}">
                                <span class="text-danger">{{($errors->has('price'))? ($errors->first('price')) : ''}}</span>
                            </div>
                            <div class="col-6 col-md-4">
                                <label for="">Sell Price : </label>
                                <input type="text" class="form-control" name="sell_price" placeholder="Product Price" value="{{old('sell_price')}}">
                                <span class="text-danger">{{($errors->has('sell_price'))? ($errors->first('sell_price')) : ''}}</span>
                            </div>
                            <div class="col-6 col-md-4">
                                <label for="">Quantity : </label>
                                <input type="text" class="form-control" name="quantity" placeholder="Product Quantity" value="{{old('quantity')}}">
                                <span class="text-danger">{{($errors->has('quantity'))? ($errors->first('quantity')) : ''}}</span>
                            </div>
                        </div>


                        <div class="row mt-4">
                            <div class="col-6 col-md-4">
                                <label for="">Main Image : </label>
                                <input type="file" class="form-control" name="image" placeholder="Product Image">
                                <span class="text-danger">{{($errors->has('image'))? ($errors->first('image')) : ''}}</span>
                            </div>
                            <div class="col-6 col-md-4">
                                <label for="">Hover Image : </label>
                                <input type="file" class="form-control" name="hover_image">
                                <span class="text-danger">{{($errors->has('hover_image'))? ($errors->first('hover_image')) : ''}}</span>
                            </div>
                            <div class="col-6 col-md-4">
                                <label for="">Slider Images : </label>
                                <input type="file" class="form-control" name="slider_images[]" multiple>
                                <span class="text-danger">{{($errors->has('slider_images'))? ($errors->first('slider_images')) : ''}}</span>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12 col-md-8">
                                <div class="form-group">
                                    <label for="">Short Description: </label>
                                    <textarea name="short_des" id="" cols="30" rows="3" class="form-control">{{old('short_des')}}</textarea>
                                    <span class="text-danger">{{($errors->has('short_des'))? ($errors->first('short_des')) : ''}}</span>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label for="">Product Tags : </label>
                                    <input type="text" class="form-control" name="tag" placeholder="Product Tags" value="{{old('tag')}}">
                                    <span class="text-danger">{{($errors->has('tag'))? ($errors->first('tag')) : ''}}</span>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="">Long Description: </label>
                                <textarea name="long_des" id="" cols="30" rows="3" class="form-control">{{old('long_des')}}</textarea>
                                <span class="text-danger">{{($errors->has('long_des'))? ($errors->first('long_des')) : ''}}</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 mt-3">
                                <button class="btn-block btn btn-success"><i class="fa fa-plus mr-1"></i> Add New Product</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

