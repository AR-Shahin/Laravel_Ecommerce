@extends('layouts.back_master')
@section('title','Add Site Identity')
@section('main_content')
    <div class="row no-gutters justify-content-center">
        <div class="col-12 col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="d-inline">Add Site Identity</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('add-site-identity')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <h6>Currency : </h6>
                            <input type="text" class="form-control" placeholder="Enter Currency" name="currency">
                            <span class="text-danger">{{($errors->has('currency'))? ($errors->first('currency')) : ''}}</span>
                        </div>
                        <div class="form-group">
                            <h6>Top Text : </h6>
                            <input type="text" class="form-control" placeholder="Enter top_text" name="top_text">
                            <span class="text-danger">{{($errors->has('top_text'))? ($errors->first('top_text')) : ''}}</span>
                        </div>
                        <div class="form-group">
                            <h6>Footer Text : </h6>
                            <input type="text" class="form-control" placeholder="Enter footer_txt" name="footer_text">
                            <span class="text-danger">{{($errors->has('footer_text'))? ($errors->first('footer_text')) : ''}}</span>
                        </div>
                        <div class="form-group">
                            <h6>Address : </h6>
                            <input type="text" class="form-control" placeholder="Enter address" name="address">
                            <span class="text-danger">{{($errors->has('address'))? ($errors->first('address')) : ''}}</span>
                        </div>
                        <div class="form-group">
                            <h6>Logo : </h6>
                            <input type="file" class="form-control"name="logo">
                            <span class="text-danger">{{($errors->has('logo'))? ($errors->first('logo')) : ''}}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success btn-block"><i class="fa fa-add"></i> Save Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop


