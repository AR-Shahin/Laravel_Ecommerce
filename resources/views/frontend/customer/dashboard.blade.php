@extends('layouts.customer')
@section('title','Customer | Home ')
@section('customer_content')
    Hello : {{Auth::user()->name}}
    <a href="{{route('customer.logout')}}">logout</a>
@stop