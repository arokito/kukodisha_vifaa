@extends('layouts.base')
@section('content')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
<div class="card">
<div class="card-header">
    <h3 class="card-title">VIEW PROFILE</h3>
</div>

<form method="POST" action="/newPassword" >
@csrf
<div class="card-body">
    <div class="card-body " >
      @if(Session::has('message'))
         <p class="alert alert-danger">{{Session::get('message')}}</p>
       @endif
      <div class="row">
      <div class="form-group col-6">
        <label for="exampleInputEmail1"></label>
        <input type="text" class="form-control @error('current_password') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter Current Password" name="current_password">
        @error('current_password')
        <span class="text-danger">
         {{$message}}
        </span>
      @enderror
      </div>
    </div>

    <div class="row">
      <div class="form-group col-6">
        <label for="exampleInputEmail1">User Email</label>
        <input type="password" class="form-control @error('new_password') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter New Password" name="new_password">
        @error('new_password')
        <span class="text-danger">
         {{$message}}
        </span>
      @enderror
      </div>
    </div>

    <div class="row">
      <div class="form-group col-6">
        <label for="exampleInputEmail1">Confirm Password</label>
        <input type="password" class="form-control @error('confirm_password') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter Current Password" name="confirm_password">
        @error('confirm_password')
        <span class="text-danger">
         {{$message}}
        </span>
      @enderror
      </div>
    </div>

    
    <div class="col-md-6">
    <button class="form-control btn-success co">Change Password</button>
    </div>

  </div>
</div> 
<!-- end card -->
  </form>


 
</div>
</div>
</div>
</section>
  @endsection
 