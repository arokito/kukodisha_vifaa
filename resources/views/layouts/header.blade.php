<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vifaa Vya kukodisha</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">

  <!-- Toastr css -->
    @toastr_css
    
<!-- datatable -->
<link href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
  <link href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  
  <!-- select2 -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

  <!-- summernote -->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

  <link href="{{asset('plugins/dropzone/dropzone.css')}}" rel="stylesheet">

  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('dist/img/favicon.png')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
 <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
        <img src="{{asset('dist/img/user.svg')}}" alt="User Avatar" class="img-circle" style="widht:30px; height:30px;">
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="/profile/view_profile" class="dropdown-item">
            <i class="fas fa-user mr-2"></i>Profile
          </a>
          <div class="dropdown-divider"></div>
          <a href="/profile/change_password" class="dropdown-item">
            <i class="fas fa-key mr-2"></i>Change Password
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-unlock-alt mr-2"></i>Logout
          </a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->