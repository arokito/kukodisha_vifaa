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

<form method="POST" action="{{route('categories.store')}}" enctype="multipart/form-data">
@csrf
    <div class="card-body">
        <div class="row">
      <div class="form-group col-md-6">
        <label for="category">Category name</label>
        <input type="text" class="form-control" id="category" placeholder="Enter  category" name="name">
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