@extends('layouts.back_master')
@section('title','Size')
@section('main_content')
    <div class="row no-gutters">
        <div class="col-12 col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Manage Size</h3>
                </div>
                <div class="card-body">
                    <div class="table-wrapper">
                        <table id="datatable1" class="table display responsive nowrap table-bordered">
                            <thead>
                            <tr>
                                <th width="2%">SL</th>
                                <th class="wd-15p">Name</th>
                                <th class="wd-10p">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i = 0;
                            ?>
                            @foreach($sizes as $size)
                                <tr>
                                    <td>{{++$i}}</td>
                                    <td>{{$size->name}}</td>
                                    <td>
                                        <a data-toggle="modal" data-target="#SliderEditModal_{{$size->id}}"class="btn btn-sm btn-info text-light">Edit</a>

                                        <form  action="{{route('size.delete',$size->id)}}" class="d-inline del_form" method="post" style="display: inline;">
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
                    <h3>Add Size</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('size.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-tag tx-16 lh-0 op-6"></i></span>
                            <input type="text" class="form-control" placeholder="Size Name" name="name" value="{{old('name')}}">
                            <span class="text-danger">{{($errors->has('name'))? ($errors->first('name')) : ''}}</span>
                        </div>
                        <br>
                        <div class="form-group">
                            <button class="btn btn-success btn-block mr-1"><i class="fa fa-plus"></i> Add New Size</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop

<!-- Modal -->
@foreach($sizes as $size)
    <div class="modal fade" id="SliderEditModal_{{$size->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Size</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('size.update',$size->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-tag tx-16 lh-0 op-6"></i></span>
                            <input type="text" class="form-control" placeholder="Category Name" name="name" value="{{$size->name}}">
                            <span class="text-danger">{{($errors->has('name'))? ($errors->first('name')) : ''}}</span>
                        </div>
                        <br>
                        <div class="form-group">
                            <button class="btn btn-success btn-block mr-1"><i class="fa fa-edit"></i> Edit Size</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
