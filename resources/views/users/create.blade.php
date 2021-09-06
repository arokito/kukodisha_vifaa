
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kukodisha| Registration Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>KU</b>KODISHA</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
    @if(Session::has('message'))
         <p class="alert alert-danger">{{Session::get('message')}}</p>
       @endif
      <p class="login-box-msg">Jisajili </p>

      <form action="{{route('users.store')}}" method="post">
      @csrf
        <div class="row">
             <div class="form-group ">
             <label for="">First Name</label>
             <input type="text" class="form-control @error('f_name') is-invalid @enderror" placeholder="First name" name="f_name">
             @error('f_name')
              <span class="text-danger">
              {{$message}}
              </span>
              @enderror
            </div>
         </div>


         <div class="row">
             <div class="form-group ">
             <label for="">Last Name</label>
             <input type="text" class="form-control @error('l_name') is-invalid @enderror" placeholder="Last name" name="l_name">
             @error('l_name')
              <span class="text-danger">
              {{$message}}
              </span>
              @enderror
            </div>
         </div>


         <div class="row">
             <div class="form-group ">
             <label for="">Email</label>
             <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email name" name="email">
             @error('email')
              <span class="text-danger">
              {{$message}}
              </span>
              @enderror
            </div>
         </div>

         <div class="row">
             <div class="form-group ">
             <label for="">Phone</label>
             <input type="text" class="form-control @error('phone') is-invalid @enderror" placeholder="Enter Phone" name="phone">
             @error('phone')
              <span class="text-danger">
              {{$message}}
              </span>
              @enderror
            </div>
         </div>

         <div class="row">
             <div class="form-group ">
             <label for="">Password</label>
             <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="First name" name="password">
             @error('password')
              <span class="text-danger">
              {{$message}}
              </span>
              @enderror
            </div>
         </div>
    
         <div class="row">
             <div class="form-group ">
             <label for="">Confirm Password</label>
             <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Confirm Password" name="password">
             @error('password')
              <span class="text-danger">
              {{$message}}
              </span>
              @enderror
            </div>
         </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

  

      <a href="login.html" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
