@extends('layouts.back_master')
@section('title','Create Slider')
@section('main_content')
    <div class="card">
        <div class="card-header">
            <h3 class="d-inline">Create New Slider</h3>
            <h3 class="d-inline" style="float: right;">
                <a href="{{route('sliders.index')}}" class="btn btn-info">Back</a>
            </h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-12">
                    <form action="{{route('slider.store')}}" method="post" enctype="multipart/form-data" id="">
                        @csrf

                        <div class="form-group">
                            <label for="">Text One</label>
                            <textarea  id="" cols="5" rows="2" class="form-control" name="text_1">{{old('text_1')}}</textarea>
                            <span class="text-danger">{{($errors->has('text_1'))? ($errors->first('text_1')) : ''}}</span>
                        </div>

                        <div class="form-group">
                            <label for="">Text Two</label>
                            <textarea name="text_2" id="" cols="5" rows="2" class="form-control" name="text_2">{{old('text_2')}}</textarea>
                            <span class="text-danger">{{($errors->has('text_2'))? ($errors->first('text_2')) : ''}}</span>
                        </div>


                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" class="form-control" name="image">
                            <span class="text-danger">{{($errors->has('image'))? ($errors->first('image')) : ''}}</span>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-block btn-success"><i class="fa fa-plus"></i> Add New Slider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

@stop



