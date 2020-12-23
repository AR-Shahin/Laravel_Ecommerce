@extends('layouts.back_primary')
@section('title','Login')
@section('main_section')
    <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

        <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
            <form action="" method="post">
                @csrf
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Enter your email" name="password" value="{{old('email')}}">
                    <span class="text-danger">{{($errors->has('email'))? ($errors->first('email')) : ''}}</span>
                </div><!-- form-group -->
                <button type="submit" class="btn btn-info btn-block">Submit</button>
                <a href="{{route('admin.login')}}" class="btn btn-link">Login</a>
            </form>
        </div><!-- login-wrapper -->
    </div>
@endsection