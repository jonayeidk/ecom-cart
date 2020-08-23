@extends('admin.layouts.master')

@section('head')
    

<title>Admin | Category</title>

<!-- Font Awesome Icons -->
<link rel="stylesheet" href="{{asset('assets/admin/')}}/plugins/fontawesome-free/css/all.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('assets/admin/')}}/dist/css/adminlte.min.css">
<!-- Google Font: Source Sans Pro -->

@endsection


@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Category</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Manage Category</h5>
    
              <a href="{{route('admin.category.create')}}" class="card-link float-right">Add New</a>
            </div>
          </div>
    
          <div class="card card-body">
              <table class="table table-hover">
                  <thead>
                      <tr>
                        <th>Categoy Name</th>
                        <th>Slug</th>
                        <th>Meta Title</th>
                        <th>Meta Keword</th>
                        <th>Meta Description</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                  </thead>

                  <tbody>
                     @foreach ($p_categories as $p_category)
                        <tr>
                          <td>{{ $p_category->title}}</td>
                          <td>{{ $p_category->slug}}</td>
                          <td>{{ $p_category->meta_title}}</td>
                          <td>{{ $p_category->meta_keyword}}</td>
                          <td>{{ $p_category->meta_description}}</td>
                          <td><img width="100px" src="{{ asset($p_category->image) }}"></td>
                          <td>Status</td>
                          <td>
                              <a href="" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                              <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                          </td>
                        </tr>
                     @endforeach
                     
                  </tbody>
              </table>
          </div><!-- /.card -->
        </div>
       
        <!-- /.col-md-6 -->
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection


@section('js')
    
<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('assets/admin/')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/admin/')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/admin/')}}/dist/js/adminlte.min.js"></script>


@endsection