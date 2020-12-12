@extends('layouts.back_primary')

@section('main_section')
@include('includes.back_nav')

<div class="sl-mainpanel">
    <div class="sl-pagebody">
        <div class="sl-page-title">
            @yield('main_content')
        </div><!-- sl-page-title -->

    </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->

@stop