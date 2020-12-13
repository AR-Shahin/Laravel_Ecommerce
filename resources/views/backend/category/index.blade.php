@extends('layouts.back_master')
@section('title','Category')
@section('main_content')
    <div class="row no-gutters">
        <div class="col-12 col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Manage Category</h3>
                </div>
                <div class="card-body">
                    <div class="table-wrapper">
                        <table id="datatable1" class="table display responsive nowrap table-bordered">
                            <thead>
                            <tr>
                                <th width="2%">SL</th>
                                <th class="wd-15p">Name</th>
                                <th class="wd-20p">Image</th>
                                <th class="wd-10p">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i = 0;
                            ?>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{++$i}}</td>
                                    <td>{{$category->name}}</td>
                                    <td><img src="{{asset($category->image)}}" alt="" width="150px" height="100px"></td>
                                    <td>
                                        <a data-toggle="modal" data-target="#SliderEditModal_{{$category->id}}"class="btn btn-sm btn-info text-light">Edit</a>

                                        <form  action="{{route('category.destroy',$category->id)}}" class="d-inline del_form" method="post" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
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
                    <h3>Add Category</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-tag tx-16 lh-0 op-6"></i></span>
                            <input type="text" class="form-control" placeholder="Category Name" name="name" value="{{old('name')}}">
                            <span class="text-danger">{{($errors->has('name'))? ($errors->first('name')) : ''}}</span>
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-image tx-16 lh-0 op-6"></i></span>
                            <input type="file" class="form-control" name="image">
                            <span class="text-danger">{{($errors->has('image'))? ($errors->first('image')) : ''}}</span>
                        </div>
                        <br>
                        <div class="form-group">
                            <button class="btn btn-success btn-block mr-1"><i class="fa fa-plus"></i> Add New Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop

<!-- Modal -->
@foreach($categories as $category)
    <div class="modal fade" id="SliderEditModal_{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('category.update',$category->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-tag tx-16 lh-0 op-6"></i></span>
                            <input type="text" class="form-control" placeholder="Category Name" name="name" value="{{$category->name}}">
                            <span class="text-danger">{{($errors->has('name'))? ($errors->first('name')) : ''}}</span>
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-image tx-16 lh-0 op-6"></i></span>
                            <input type="file" class="form-control" name="image">
                            <span class="text-danger">{{($errors->has('image'))? ($errors->first('image')) : ''}}</span>
                        </div>
                        <br>
                        <img src="{{asset($category->image)}}" alt="" width="100px" height="100px">
                        <br>
                        <input type="hidden" value="{{$category->image}}" name="old_img">
                        <div class="form-group">
                            <button class="btn btn-success btn-block mr-1"><i class="fa fa-edit"></i> Edit Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
