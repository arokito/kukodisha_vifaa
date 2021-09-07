@extends('layouts.base')
@section('content')
<div class="container-fluid">
     

<div>
  <a href="#" data-toggle="modal" data-target="#add_new_details" class="btn btn-success">Add New</a>
</div>
  <div class="modal fade" id="add_new_details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
 
<form method="POST" action="{{url('/storeSMSCredentials')}}" >
@csrf
    <div class="modal-content">
    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Delete Confirm</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
      </div>
      <div class="modal-body">
      <div class="row">
      <div class="form-group col-md-12">
        <label for="category">API provider</label>
        <input type="text" value="{{old('api_provider')}}" class="form-control @error('api_provider') is-invalid @enderror" id="" placeholder="Enter Api Provider" name="api_provider">
        @error('api_provider')
          <span class="text-danger">
            {{$message}}
          </span>
        @enderror
      </div>
      </div>

      <div class="row">
      <div class="form-group col-md-12">
        <label for="category">API  Key</label>
        <input type="text" value="{{old('api_key')}}" class="form-control @error('api_key') is-invalid @enderror" id="" placeholder="Enter Api Key" name="api_key">
        @error('api_key')
          <span class="text-danger">
            {{$message}}
          </span>
        @enderror
      </div>
      </div>

      <div class="row">
      <div class="form-group col-md-12">
        <label for="category">API  Secret Key</label>
        <input type="text" value="{{old('api_secret_key')}}" class="form-control @error('api_secret_key') is-invalid @enderror" id="" placeholder="Enter Api secret Key" name="api_secret_key">
        @error('api_secret_key')
          <span class="text-danger">
            {{$message}}
          </span>
        @enderror
      </div>
      </div>

</div>

    <div class="modal-footer form-group">
      <button type="submit" class="form-control btn btn-primary">Submit</button>
    </div>
    </div>
  </form>
</div>
</div>

 <!-- Modal ends here -->
</div>
 <div class="card">
              <div class="card-header">
                <h3 class="card-title">ACTIVE SMS APIS</h3>
              </div>
              <div class="row">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="item_list" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Api Provider</th>
                    <th>Api Key</th>
                    <th>Api Secret</th>
                    <th colspan="2">Action(s)</th>
                  </tr>
                  </thead>
                  <tbody>

                  @if(count($smsAPI)> 0)
                  @foreach ($smsAPI as $key => $smsAPI)
                  <tr>
                    <td>{{$key + 1}}</td>
                    <td>
                      {{$smsAPI->api_provider}}
                    </td>
                    <td>
                      {{$smsAPI->api_key}}
                    </td>
                    <td>
                      {{$smsAPI->api_secret_key}}
                    </td>
                <td>
                        <a href="#">
                        <i class="text-success fas fa-edit"></i>
                    </a>
                    
                    </td>
                    
                    <td>
                    <a href="#" data-toggle="modal" data-target="#exampleModal">
                        <i class="text-danger fas fa-trash"></i>
                    </a>
                        <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <form action="" method="post">@csrf
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
                 <td> colspan="2">No api used</td>
                @endif

                  </tbody>
                  <tfoot>
                  <tr>
                  <th>#</th>
                    <th>Api Provider</th>
                    <th>Api Key</th>
                    <th>Api Secret</th>
                    <th colspan="2">Action(s)</th>
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