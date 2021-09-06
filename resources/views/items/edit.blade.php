@extends('layouts.base')
@section('content')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
<div class="card">
<div class="card-header">
    <h3 class="card-title">Update Item</h3>
</div>

<form method="POST" action="{{route('items.update',[$item->id])}}" enctype="multipart/form-data" >
@csrf
{{method_field('PATCH')}}
<div class="card-body">
    <div class="card-body " >
      @if(Session::has('message'))
         <p class="alert alert-danger">{{Session::get('message')}}</p>
       @endif
      <div class="row">
      <div class="form-group col-6">
        <label for="exampleInputEmail1">Item Name</label>
        <input type="text" value="{{$item->name}}" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter item name" name="name">
        @error('name')
        <span class="text-danger">
         {{$message}}
        </span>
      @enderror
      </div>

      <div class="form-group col-6">
        <label for="exampleInputPassword1">Item Category</label>
       <select name="category" class="form-control category   @error('category')  is-invalid @enderror"> 
         <option value="">--Select Item Category---</option>
         @foreach(App\Models\Category::all() as $category )
         <option value="{{$category->id}}">{{$category->name}}</option>
         @endforeach
       </select>
       @error('category')
        <span class="text-danger">
         {{$message}}
        </span>
      @enderror
      </div>
    </div>

    <div class="row">
      <div class="form-group col-12">
        <label for="exampleInputEmail1">Item Description</label>
        <input type="textarea" value="{{$item->description}}" name="description" id="item_description" class="form-control @error('description') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter description">
        @error('description')
        <span class="text-danger">
         {{$message}}
        </span>
      @enderror
      </div>
    </div>

    <div  class="row">
    <div class="form-group col-12">
      </div>
      </div>
    <div class="row">
      <div class="form-group col-6">
        <label for="exampleInputPassword1">How Many Items?</label>
        <input type="text" value="{{$item->item_number}}" class="form-control" id="exampleInputPassword1" placeholder="number of Items" name="item_number">
        @error('item_number')
        <span class="text-danger">
         {{$message}}
        </span>
      @enderror
      </div>
      <div class="form-group col-6">
        <label for="exampleInputPassword1">Price($)</label>
        <input type="text" value="{{$item->price}}" class="form-control @error('price') is-invalid @enderror" id="exampleInputPassword1" placeholder="Price" name="price">
        @error('price')
        <span class="text-danger">
         {{$message}}
        </span>
      @enderror
      </div>
    </div>
    <button class="form-control btn-success">Update</button>
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
 