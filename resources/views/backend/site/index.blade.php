@extends('layouts.back_master')
@section('title','Site Identity')
@section('main_content')
    <div class="row no-gutters">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="d-inline">Site Identity</h3>
                    <a href="{{route('add-site-identity')}}" class="btn btn-success btn-sm pull-right">Add Site Identity</a>
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
                            <td><img src="{{$data->logo}}" alt=""></td>
                        </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop


