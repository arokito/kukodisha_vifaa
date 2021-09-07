@extends('layouts.base')


@section('content')


<div class="container-fluid">

<div class="card">
           <div class="card-header">
             <h3 class="card-title">Users</h3>
           </div>
           <div class="row">
           <!-- /.card-header -->
           <div class="card-body">
             <table id="example1" class="table table-bordered table-striped">
               <thead>
               <tr>
                 <th>#</th>
                 <th>User Name</th>
                 <th>Phone</th>
                 <th>Email</th>

                 <th>Action</th>
               </tr>
               </thead>
               <tbody>

               @if(count($user)> 0)
               @foreach ($user as $key => $user)
               <tr>
                 <td>{{$key + 1}}</td>
                 <td>
                   {{$user->f_name}} {{$user->l_name}}
                 </td>
                 <td>
                   {{$user->phone}}
                 </td>
                 <td>
                   {{$user->email}}
                 </td>
                
             <td>
                     <a href="{{route('users.edit',[$user->id])}}">
                     <i class="fas fa-edit"></i>
                 </a>
                 
                 </td>
                 
                 <td>
                 <a href="#" data-toggle="modal" data-target="#exampleModal{{$user->id}}">
                     <i class="fas fa-trash"></i>
                 </a>
                     <!-- Modal -->
           <div class="modal fade" id="exampleModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog" role="document">
               <form action="{{route('users.destroy',[$user->id])}}" method="post">@csrf
                   {{method_field('DELETE')}}
               <div class="modal-content">
                 <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Delete Confirm</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                   </button>
                 </div>
                 <div class="modal-body">
                 
                   Do you want to delete?
                 </div>
                 <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                   <button type="submit" class="btn btn-danger">Delete</button>
                 </div>
               </div>

               </tr>
               @endforeach
              @else
              <td>No data from db</td>
             @endif

               </tbody>
               <tfoot>
               <tr>
                 <th>#</th>
                 <th>User Name</th>
                 <th>Phone</th>
                 <th>Email</th>
                 
                 
                 <th>Action</th>
               </tr>
               </tfoot>
             </table>
           </div>
           <!-- /.card-body -->
         </div>
         <!-- /.card -->
       </div>
</div>


@endsection