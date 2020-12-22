@extends('layouts.back_master')
@section('title','Site Identity')
@section('main_content')
    <div class="row no-gutters">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="d-inline">Site Identity</h3>
                    @if($count == 1)
                        <a href="{{route('update-site-identity')}}" class="btn btn-info btn-sm pull-right">Update Site Identity</a>
                        @else
                        <a href="{{route('add-site-identity')}}" class="btn btn-success btn-sm pull-right">Add Site Identity</a>
                        @endif
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Logo</th>
                            <th>Currency</th>
                            <th>Top Text</th>
                            <th>Footer Text</th>
                            <th>Address</th>
                        </tr>
                        @foreach($SiteIdentity as $data)
                        <tr>
                            <td><img src="{{asset($data->logo)}}" alt=""></td>
                            <td>{{$data->currency}}</td>
                            <td>{{$data->top_text}}</td>
                            <td>{{$data->footer_text}}</td>
                            <td>{{$data->address}}</td>
                        </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop


