@extends('layouts.back_master')
@section('title','Admin')
@section('main_content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-0" style="display: inline-block">Admins</h3>
                <a href="{{ route('admin.create')  }}" class="btn btn-outline-info" style="float: right"><i class="fa fa-plus mr-1"></i> New Admin</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" style="width:100%">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Image</th>
                            <th class="text-center">Role</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $i=1;
                        @endphp
                        @foreach($admins as $admin)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{ucwords($admin->name)}}</td>
                                <td>{{$admin->email}}</td>
                                <td>
                                    <img src="{{asset($admin->image)}}" alt="" width="100px">
                                </td>
                                <td class="text-center">
                                    @if($admin->status == 0)
                                        <span class="badge badge-info">Operator</span>
                                    @elseif($admin->status == 1)
                                        <span class="badge badge-success">Admin</span>
                                    @elseif($admin->status == 3)
                                        <span class="badge badge-danger">Blocked</span>
                                    @endif
                                </td>
                                <td class="text-right">
                                    @if($admin->id == Auth::guard('web')->user()->id)
                                        <a data-toggle="modal" data-target="#viewModal_{{ $admin->id }}" class="btn btn-sm btn-info text-light">View</a>
                                        <a data-toggle="modal" data-target="#editModal_{{ $admin->id }}" class="btn btn-sm btn-primary text-light">Edit</a>
                                    @else
                                        <a data-toggle="modal" data-target="#viewModal_{{ $admin->id }}" class="btn btn-sm btn-info text-light">View</a>
                                        <a data-toggle="modal" data-target="#editModal_{{ $admin->id }}" class="btn btn-sm btn-primary text-light">Edit</a>
                                        <a id="delete_swal" href="{{ url('admin/delete/'.$admin->id)}}" class="btn btn-sm btn-secondary">Delete</a>
                                        @if($admin->status == 0)
                                            <a href="{{ url('admin/promote/'.$admin->id)}}" class="btn btn-sm btn-success">Promote</a>
                                            <a href="{{ url('admin/block/'.$admin->id)}}" class="btn btn-sm btn-danger">Block</a>
                                        @elseif($admin->status == 1)
                                            <a href="{{ url('admin/demote/'.$admin->id)}}" class="btn btn-sm btn-warning">Demote</a>
                                            <a href="{{ url('admin/block/'.$admin->id)}}" class="btn btn-sm btn-danger">Block</a>
                                        @elseif($admin->status == 3)
                                            <a href="{{ url('admin/unblock/'.$admin->id)}}" class="btn btn-sm btn-success">Unblock</a>
                                        @endif
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop