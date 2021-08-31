@extends('layouts.base')

@section('content')
<form method="POST" action="{{route('categories.update', [$category->id])}}" enctype="multipart/form-data">
@csrf
{{method_field('PATCH')}}
    <div class="card-body">
      <div class="form-group">
        
        <label for="category">Category name</label>
        <input type="text" class="form-control" id="category" placeholder="Enter  category" name="name" value="{{$category->name}}">
      </div>
     
</div>
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>

  @endsection