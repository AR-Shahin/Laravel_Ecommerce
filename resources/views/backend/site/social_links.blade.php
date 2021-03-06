@extends('layouts.back_master')
@section('title','Social Links')
@section('main_content')
    <div class="card">
        <div class="card-header">
            <h3>Social Links</h3>
        </div>
        <div class="row card-body">
            <div class="col-12 col-md-6">
                <h5 class="text-info mb-3">All Links</h5>
                @if($count == 0)
                    <table class="table table-bordered">
                        <tr><th width="30%">Phone</th><td></td></tr>
                        <tr><th>Email</th><td></td></tr>
                        <tr><th>Facebook</th><td></td></tr>
                        <tr><th>Twitter</th><td></td></tr>
                        <tr><th>Instagram</th><td></td></tr>
                        <tr><th>Pintarest</th><td></td></tr>
                        <tr><th>Linkedin</th><td></td></tr>
                        <tr><th>Youtube</th><td></td></tr>
                    </table>
                @else
                    @foreach($links as $link)
                        <table class="table table-bordered">
                            <tr><th>Phone</th><td>{{$link->phone}}</td></tr>
                            <tr><th>Email</th><td>{{$link->email}}</td></tr>
                            <tr><th>Facebook</th><td>{{$link->fb}}</td></tr>
                            <tr><th>Twitter</th><td>{{$link->tw}}</td></tr>
                            <tr><th>Instagam</th><td>{{$link->insta}}</td></tr>
                            <tr><th>Pintarest</th><td>{{$link->pin}}</td></tr>
                            <tr><th>Youtube</th><td>{{$link->you}}</td></tr>
                        </table>
                    @endforeach
                @endif
            </div>
            @if($count == 0)
                <div class="col-12 col-md-6">{{-- insert--}}
                    <h5 class="text-info mb-3">Insert Link</h5>
                    <form action="{{route('social-links')}}" method="post">
                        @csrf
                        <table class="table table-bordered">
                            <tr><th>Phone</th><td><input type="text" class="form-control" name="phone" placeholder="Phone" value="{{old('phone')}}"></td></tr>
                            <tr><th>Email</th><td><input type="text" class="form-control" name="email" placeholder="Email" value="{{old('email')}}"></td></tr>
                            <tr><th>Facebook</th><td><input type="text" class="form-control" name="fb" placeholder="facebook" value="{{old('fb')}}"></td></tr>
                            <tr><th>Twitter</th><td><input type="text" class="form-control" name="tw" placeholder="twitter" value="{{old('tw')}}"></td></tr>
                            <tr><th>Instagram</th><td><input type="text" class="form-control" name="insta" placeholder="instagram" value="{{old('insta')}}"></td></tr>
                            <tr><th>Pintarest</th><td><input type="text" class="form-control" name="pin" placeholder="pintarest" value="{{old('pin')}}"></td></tr>
                            <tr><th>Youtube</th><td><input type="text" class="form-control" name="you" placeholder="you" value="{{old('you')}}"></td></tr>
                            <tr>
                                <td colspan="2"><button class="btn btn-block btn-success"><i class="fa fa-plus"></i> Save</button></td>
                            </tr>
                        </table>
                    </form>
                </div>
            @else
                <div class="col-12 col-md-6">{{-- update--}}
                    <h5 class="text-info mb-3">Update Links </h5>
                    <form action="{{route('social-links.update')}}" method="post">
                        @csrf
                        <table class="table table-bordered">
                            <tr><th>Phone</th><td><input type="text" class="form-control" name="phone" placeholder="Phone" value="{{$link->phone}}"></td></tr>
                            <tr><th>Email</th><td><input type="text" class="form-control" name="email" placeholder="Email" value="{{$link->email}}"></td></tr>
                            <tr><th>Facebook</th><td><input type="text" class="form-control" name="fb" placeholder="facebook" value="{{$link->fb}}"></td></tr>
                            <tr><th>Twitter</th><td><input type="text" class="form-control" name="tw" placeholder="twitter" value="{{$link->tw}}"></td></tr>
                            <tr><th>Instagram</th><td><input type="text" class="form-control" name="insta" placeholder="instagram" value="{{$link->insta}}"></td></tr>
                            <tr><th>Pintarest</th><td><input type="text" class="form-control" name="pin" placeholder="pintarest" value="{{$link->pin}}"></td></tr>
                            <tr><th>Youtube</th><td><input type="text" class="form-control" name="you" placeholder="linke" value="{{$link->you}}"></td></tr>
                            <tr>
                                <td colspan="2"><button class="btn btn-block btn-success"><i class="fa fa-edit"></i> Update</button></td>
                            </tr>
                        </table>
                        <input type="hidden" value="{{$link->id}}" name="id">
                    </form>
                </div>
            @endif

        </div>
    </div>
@stop


