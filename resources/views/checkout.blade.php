@extends('layouts.base')
@section('content')
<div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
    <div class="card ">
  <div class="card-header">
  <h3 class="card-title">Add New Category</h3>
  </div>

<form method="POST" action="{{url('/pesapalIframe')}}">
@csrf

    <div class="card-body">
        <div class="row">
      <div class="form-group col-md-6">
        <label for="category">First Name</label>
        <input type="text" class="form-control" id="category" placeholder="Enter  category" name="f_name">
      </div>
      </div>


      <div class="row">
      <div class="form-group col-md-6">
        <label for="category">last Name</label>
        <input type="text" class="form-control" id="category" placeholder="Enter  category" name="l_name">
      </div>
      </div>


      <div class="row">
      <div class="form-group col-md-6">
        <label for="category">description</label>
        <input type="text" class="form-control" id="category" placeholder="Enter  category" name="description">
      </div>
      </div>

      <div class="row">
      <div class="form-group col-md-6">
        <label for="category">Amount</label>
        <input type="text" class="form-control" id="category" placeholder="Enter  category" name="amount">
      </div>
      </div>

      <div class="row">
      <div class="form-group col-md-6">
        <label for="category">email</label>
        <input type="email" class="form-control" id="category" placeholder="Enter  category" name="email">
      </div>
      </div>

      <div class="row">
      <div class="form-group col-md-6">
        <label for="category">Type</label>
        <input type="hidden" class="form-control" value="MERCHANT" placeholder="Enter  category" name="f_name">
      </div>
      </div>

      <div class="row">
      <div class="form-group col-md-6">
        <label for="category">Reference</label>
        <input type="text" class="form-control" value="2020-001" placeholder="Enter  category" name="reference">
      </div>
      </div>

    <div class="form-group col-md-6">
      <button type="submit" class="form-control btn btn-primary">Submit</button>
    </div>
</div>
  </form>

   
      </div>
    </div>
 </div>
  </div>
  @endsection