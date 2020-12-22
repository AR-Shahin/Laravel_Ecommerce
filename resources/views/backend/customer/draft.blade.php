@extends('layouts.back_master')
@section('title','Draft Customer')
@section('main_content')
    <div class="row no-gutters">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="d-inline">Manage Draft Customer</h3>
                </div>
                <div class="card-body">
                    <div class="table-wrapper">
                        <table id="datatable1" class="table display responsive nowrap table-bordered">
                            <thead>
                            <tr>
                                <th width="2%">SL</th>
                                <th class="wd-15p">Name</th>
                                <th class="wd-15p">Email</th>
                                <th class="wd-15p">Image</th>
                                <th class="wd-10p">Joined</th>
                                <th class="wd-10p">Actions</th>
                            </tr>

                            <?php
                            $i=0;
                            ?>   </thead>
                            <tbody>
                            @foreach($customers as $customer)
                                <tr>
                                    <td>
                                        {{++$i}}
                                    </td>
                                    <td>{{$customer->name}}</td>
                                    <td>{{$customer->email}}</td>
                                    <td><img src="{{asset($customer->image)}}" alt="" width="100px"></td>
                                    <td>{{$customer->created_at->diffForHumans()}}</td>
                                    <td>
                                        <a href="{{route('delete-draft',$customer->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Remove</a>
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

