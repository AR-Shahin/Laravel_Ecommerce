@extends('layouts.back_master')
@section('title','Slider')
@section('main_content')
    <div class="card">
        <div class="card-header">
            <h3 class="d-inline">Manage Slider</h3>
            <h3 class="d-inline" style="float: right;">
                <a href="{{route('slider.create')}}" class="btn btn-info">Add new Slider</a>
            </h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="table-wrapper">
                        <table id="datatable1" class="table display responsive nowrap">
                            <thead>
                            <tr>
                                <th width="2%">SL</th>
                                <th class="wd-15p">Primary Text</th>
                                <th class="wd-15p">Secondary Text</th>
                                <th class="wd-20p">Image</th>
                                <th class="wd-15p">Status</th>
                                <th class="wd-10p">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i = 0;
                            ?>
                            @foreach($sliders as $slider)
                                <tr>
                                    <td>{{++$i}}</td>
                                    <td>{{$slider->text_1}}</td>
                                    <td>{{$slider->text_2}}</td>
                                    <td><img src="{{asset($slider->image)}}" width="100px" alt=""></td>
                                    <td>
                                        @if($slider->status == 1)
                                            <a href="{{route('inactive.slider',$slider->id)}}" class="btn btn-sm btn-success" id="inactive_Slider">Active</a>
                                        @else
                                            <a href="{{route('active.slider',$slider->id)}}" class="btn btn-sm btn-warning">Inactive</a>
                                        @endif
                                    </td>
                                    <td>
                                        <a data-toggle="modal" data-target="#SliderEditModal_{{$slider->id}}"class="btn btn-sm btn-info text-light">Edit</a>
                                        <form  action="{{route('slider.delete',$slider->id)}}" class="d-inline del_form" method="post" style="display: inline;">
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
    </div>
@stop

<!-- Modal -->
@foreach($sliders as $slider)
    <div class="modal fade" id="SliderEditModal_{{$slider->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Slider</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('slider.update',$slider->id)}}" method="post" enctype="multipart/form-data" id="">
                        @csrf

                        <div class="form-group">
                            <label for="">Text One</label>
                            <textarea  id="" cols="5" rows="2" class="form-control" name="text_1">{{$slider->text_1}}</textarea>
                            <span class="text-danger">{{($errors->has('text_1'))? ($errors->first('text_1')) : ''}}</span>
                        </div>

                        <div class="form-group">
                            <label for="">Text Two</label>
                            <textarea name="text_2" id="" cols="5" rows="2" class="form-control" name="text_2">{{$slider->text_2}}</textarea>
                            <span class="text-danger">{{($errors->has('text_2'))? ($errors->first('text_2')) : ''}}</span>
                        </div>


                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" class="form-control" name="image">
                            <span class="text-danger">{{($errors->has('image'))? ($errors->first('image')) : ''}}</span>
                            <img src="{{asset($slider->image)}}" alt="" width="100px">
                            <input type="hidden" value="{{$slider->image}}" name="old _img">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-block btn-success"><i class="fa fa-edit"></i> Update Slider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
