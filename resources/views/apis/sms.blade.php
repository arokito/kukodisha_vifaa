@extends('layouts.base')
@section('content')
<div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
    <div class="card ">
  <div class="card-header">
  <h3 class="card-title">API CREDENTIALS</h3>
  </div>

<form method="POST" action="" >
@csrf
    <div class="card-body">
        <div class="row">
      <div class="form-group col-md-6">
        <label for="category">API provider</label>
        <input type="text" class="form-control" id="" placeholder="Enter Api Provider" name="api_provider">
      </div>
      </div>

      <div class="row">
      <div class="form-group col-md-6">
        <label for="category">API  Key</label>
        <input type="text" class="form-control" id="" placeholder="Enter Api Key" name="api_key">
      </div>
      </div>

      <div class="row">
      <div class="form-group col-md-6">
        <label for="category">API  Secret Key</label>
        <input type="text" class="form-control" id="" placeholder="Enter Api secret Key" name="api_secret_key">
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