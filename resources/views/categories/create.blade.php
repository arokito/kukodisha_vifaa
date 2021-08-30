@extends('layouts.base')


@section('content')


<form method="POST" action="{{route('categories.store')}}" enctype="multipart/form-data">
@csrf
    <div class="card-body">
      <div class="form-group">
        
        <label for="category">Category name</label>
        <input type="text" class="form-control" id="category" placeholder="Enter  category" name="name">
      </div>
     

</div>
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>

  @endsection