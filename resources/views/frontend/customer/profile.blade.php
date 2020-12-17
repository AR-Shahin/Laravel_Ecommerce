@extends('layouts.customer')
@section('title','Customer | Profile ')
@section('customer_content')
   <div class="row justify-content-center">
      <div class="col-12 col-md-8">
         <div class="card">
            <div class="card-header">
               <h5>My Profile</h5>
            </div>
            <div class="card-body">
               <table class="table table-bordered">
                  <tr>
                     <th>Image</th>
                     <td><img src="{{asset(Auth::user()->image)}}" alt="" class="img-fluid w-25"></td>
                  </tr>
                  <tr>
                     <th>Name</th>
                     <td>{{Auth::user()->name}}</td>
                  </tr>
                  <tr>
                     <th>Email</th>
                     <td>{{Auth::user()->email}}</td>
                  </tr>
                  <tr>
                     <th>Joined</th>
                     <td>{{Auth::user()->created_at->diffforHumans()}}</td>
                  </tr>
                  <tr>
                     <th>Last Update Profile</th>
                     <td>{{Auth::user()->updated_at->diffforHumans()}}</td>
                  </tr>
                  <tr>
                     <th>Last Login</th>
                     <td>{{Auth::user()->updated_at->diffforHumans()}}</td>
                  </tr>
                  <tr>
                     <td colspan="2"><button class="btn btn-block btn-success"><i class="fa fa-edit"></i> Update Profile</button></td>
                  </tr>
               </table>
            </div>
         </div>
      </div>
   </div>
@stop