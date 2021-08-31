@extends('layouts.base')

@section('content')
<form method="POST" action="{{route('items.update', [$item->id])}}" enctype="multipart/form-data">
@csrf
{{method_field('PATCH')}}
<div class="card-body " >
      @if(Session::has('message'))
         <p class="alert alert-danger">{{Session::get('message')}}</p>
       @endif
      <div class="row">
      <div class="form-group col-6">
        <label for="exampleInputEmail1">name</label>
        <input type="text" class="form-control" id="category" placeholder="Enter  category" name="name" value="{{$item->name}}">
        <!-- <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter email" name="name"> -->
        @error('name')
        <span class="text-danger">
         {{$message}}
        </span>
      @enderror
      </div>

      <div class="form-group col-6">
        <label for="exampleInputPassword1">category</label>

       <select name="category" id="" class="form-control"> 
         @foreach(App\Models\Category::all() as $category )
         <option value="{{$category->id}}">{{$category->name}}</option>
         @endforeach
       </select>
      </div>
    </div>

    <div class="row">
      <div class="form-group col-6">
        <label for="exampleInputEmail1">description</label>
        <!-- <input type="textarea" name="description" class="form-control" id="exampleInputEmail1" placeholder="Enter description"> -->
        <input type="text" class="form-control" id="description" placeholder="Enter  category" name="name" value="{{$item->description}}">
      </div>

      <div class="form-group col-6">
        <label for="exampleInputPassword1">Price($)</label>
        <input type="text" class="form-control" id="price" placeholder="Enter  price" name="name" value="{{$item->price}}">
        <!-- <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Price" name="price"> -->
      </div>


    </div>
    <div  class="row">
      <div class="form-group col-6">
        <label for="exampleInputPassword1">Item Number</label>
        <input type="text" class="form-control" id="category" placeholder="Enter  category" name="name" value="{{$item->item_number}}">
        <!-- <input type="text" class="form-control" id="exampleInputPassword1" placeholder="number of Items" name="item_number"> -->
      </div>



      <div class="form-group">
        <label for="exampleInputFile">Item Photo</label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="exampleInputFile" name="photo">
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
          </div>

          
          
        </div>

        
      </div>
     

    </div>
 
    <button class="form-control btn-success">submit</button>

 
     
     
    </div>
  </div>
  </form>

  @endsection