@extends('layouts.customer')
@section('title','Customer | Home ')
@section('customer_content')
    <div class="card">
        <div class="card-body">
          <h2 class="d-inline">Hello : {{Auth::user()->name}}</h2>
          <h2 class="d-inline" style="float: right;">Time : {{Carbon\Carbon::now()}}</h2>
        </div>
    </div>
@stop