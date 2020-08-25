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
            <h1 class="m-0 text-dark">Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Manage Product</h5>
    
              <a href="{{route('admin.product.create')}}" class="card-link float-right">Add New</a>
            </div>
          </div>
    
          <div class="card card-body">
              <table class="table table-hover">
                  <thead>
                      <tr>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Subtitle</th>
                        <th>Price</th>
                        <th>SPrice</th>
                        <th>QTY</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                  </thead>

                  <tbody>
                    @foreach ($products as $product)
                     <tr>
                        <td>{{ $product->title }}</td>        
                        <td>{{ $product->slug }}</td>               
                        <td>{{ $product->subtitle }}</td>      
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->sell_price }}</td>
                        <td>{{ $product->quantity }}</td>     
                        <td><img width="100px" src="{{ asset('uploads/images/products/'.$product->image)}}"></td>     
                        <td>
                          @if($product->p_categories)
                          {{  $product->p_categories->title}} 
                          @endif
                        </td>
                        <td><span
                          class="badge badge-@if($product->status == true){{ 'success' }} @else{{ 'warning' }} @endif">{{ $product->status_text }}</span>
                        </td>
                        <td>
                          <a href=""
                            class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a>
                        <a href="{{ route('admin.product.edit',$product->id)}}" class="btn btn-info btn-sm"><i
                                class="fas fa-edit"></i></a>  
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