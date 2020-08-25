@extends('admin.layouts.master')

@section('head')
    

<title>Admin | Category</title>

<!-- Font Awesome Icons -->
<link rel="stylesheet" href="{{asset('assets/admin/')}}/plugins/fontawesome-free/css/all.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('assets/admin/')}}/dist/css/adminlte.min.css">
<!-- Google Font: Source Sans Pro -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
@endsection


@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Edit Product</h1>
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
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Add Category</h5>

                <a href="{{route('admin.product.index')}}" class="card-link float-right">Manage New</a>
              </div>
            </div>

           
                <div class="card category-form card-primary card-outline">
                    <div class="card-header">
                         <div class="col-md-12">
                             <h3 class="card-title">Add New Product</h3>
                        </div>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <div class="col-md-12">
                            @if ($errors->any())
                                <div class="alert alert-danger" role="alert">
                                <h4 class="alert-heading">Error!</h4>
                                    @foreach ($errors->all() as $error)
                                        {{ $error }} <br/>
                                    @endforeach
                                </div>
                            @endif
                            @if(session('success'))
                                <div class="alert alert-success" id="msg_div">
                                     <span id="res_message">{{ session('success') }}</span>
                                </div>
                            @endif
                        </div>

                        <form class="form-horizontal" method="post" action="{{route('admin.product.update',$product->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="item form-group">
                                <label class="col-md-12 col-sm-12 col-xs-12" for="name"> Title <span class="text-danger">*</span>
                                </label>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" id="title" class="form-control col-md-12 col-xs-12" name="title" placeholder="Product title" value="{{ $product->title }}" required/>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-md-12 col-sm-12 col-xs-12" for="name">Slug <span class="text-danger">*</span>
                                </label>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" class="form-control col-md-12 col-xs-12" id="slug" name="slug" placeholder="Slug" value="{{ $product->slug }}" required  />
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="col-md-12 col-sm-12 col-xs-12" for="name">Subtitle <span class="text-danger">*</span>
                                </label>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" class="form-control col-md-12 col-xs-12" id="subtitle" name="subtitle" placeholder="Subtitle" value="{{ $product->subtitle }}" required  />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="category_id">Select Category</label>
                                <select class="form-control" name="category_id" id="category_id">
                                    <option value="">Select Category</option>
                                    @foreach($categories as $c)
                                        <option value="{{ $c->id}}" @if($product->category_id == $c->id) selected @endif>{{ $c->title }}</option>
                                    @endforeach
                                </select>
                           </div>
        

                            <div class="form-group">
                                <label class="col-md-12">Product Model</label>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input class="form-control" name="model" id="model" onkeyup="wordcount(this.value)" value="{{ $product->title }}" required/>
                                    <span style="color:red" id="w_count">With 60 Character</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">Fuel type</label>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input class="form-control" name="fuel_type" id="fuel_type" onkeyup="wordcount(this.value)" value="{{ $product->fuel_type }}" required/>
                                    <span style="color:red" id="w_count">With 60 Character</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">CC</label>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input class="form-control" name="cc" id="cc" onkeyup="wordcount(this.value)" value="{{ $product->cc }}" required/>
                                    <span style="color:red" id="w_count">With 60 Character</span>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-12">Price</label>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input class="form-control" name="price" id="price" onkeyup="wordcount(this.value)" value="{{ $product->price }}" required/>
                                    <span style="color:red" id="w_count">With 60 Character</span>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-12">Sell Price</label>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input class="form-control" name="sell_price" id="sell_price" onkeyup="wordcount(this.value)" value="{{ $product->sell_price }}" required/>
                                    <span style="color:red" id="w_count">With 60 Character</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">QTY</label>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input class="form-control" name="quantity" id="quantity" onkeyup="wordcount(this.value)" value="{{ $product->quantity }}" required/>
                                    <span style="color:red" id="w_count">With 60 Character</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">Meta Title</label>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input class="form-control" name="meta_title" id="meta_title" onkeyup="wordcount(this.value)" value="{{ $product->meta_title }} "required/>
                                    <span style="color:red" id="w_count">With 60 Character</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">Add Meta Description <span style="color:red">*</span></label>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="short_description" id="short_description" onkeyup="shortdescriptionCount(this.value)" value="{{ $product->short_description }}"></textarea>
                                    <span style="color:red" id="short_desc">With 160 Character</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">Meta keyword</label>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="meta_keyword" value="{{ $product->meta_keyword}}"></textarea>
                                    <span style="color:red">user (,) comma for separate key word </span>
                                </div>
                            </div>
                        
                            @if($product->image)
                                <div class="form-group">
                                    <img width="100px" src="{{ asset('uploads/images/products/'.$product->image)}}" alt="{{ $product->title}}">
                                </div>
                            @endif
    
                            <div class="form-group">
                                <label for="exampleInputFile">Thumbnail</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="status">Product Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option {{ $product->status == 1 ? 'selected="selected"' : '' }} value="1">Active
                                    </option>
                                    <option {{ $product->status == 0 ? 'selected="selected"' : '' }} value="0">Inactive
                                    </option>
                                </select>
                            </div>
        

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button type="submit" id="send_form" name="submit" class="btn btn-success">Save</button>
                                    <button id="send" type="reset" class="btn btn-warning">Reset</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                
          </div>
         
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection


@section('js')
    
<!-- REQUIRED SCRIPTS -->


<script>

    $(document).ready(function(){


           $.ajaxSetup({
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
           });


           token = $( "input[value='_token']" ).val();


           $('#title').on('keyup',function(){

               data = {
                   "_token": token,
                   "str": $(this).val()
               };
   
               $.ajax({
                   url: "{{route('admin.slug.store')}}",
                   type: "post",
                   data:data,
                   success: function (response) {
                       $('#slug').val(response);
                   },
                   error: function(jqXHR, textStatus, errorThrown) {
                       console.log(textStatus, errorThrown);
                   }
               });
               
           });
   
        //    $('.toggle').on('click',function() {
        //        input = $(this).find('.toggle-class');
        //        var status = input.prop('checked') == true ? 0 : 1;
        //        var id = input.attr("data-id");
        //        data = {
        //            "_token": token,
        //            "status": status,
        //            "id":id
        //        };
        //        $.ajax({
        //            url: "",
        //            type: "post",
        //            data:data,
        //            success: function (response) {
        //            },
        //            error: function(jqXHR, textStatus, errorThrown) {
        //                console.log(textStatus, errorThrown);
        //            }
        //        });
        //    });
   
        //    $('.edit').on('click',function(){
        //        var id = $(this).attr("data-id");
        //        data = {
        //            "_token": token,
        //            "id":id
        //        };
        //        $.ajax({
        //            url: "",
        //            type: "post",
        //            data:data,
        //            success: function (response) {
        //                $('.category-form').html(response);
        //            },
        //            error: function(jqXHR, textStatus, errorThrown) {
        //                console.log(textStatus, errorThrown);
        //            }
        //        });
        //    });
   
    //    $(".form-horizontal").validate({
    //    rules: {
    //      name: {
    //        required: true,
    //        maxlength: 255
    //      },
   
    //       slug: {
    //            required: true,
    //            maxlength:255,
    //        },
    //        status: {
    //                required: true,
    //            },
    //    },
    //    messages: {
   
    //      name: {
    //        required: "Please enter name",
    //        maxlength: "Your last name maxlength should be 550 characters long."
    //      },
    //      slug: {
    //        required: "Please enter slug",
    //        maxlength: "The contact number should be 255 digits",
    //      },
    //      status: {
    //          required: "Please select status"
    //        },
   
    //    },
    //    submitHandler: function(form) {
    //        $('#send_form').html('Sending..');
    //        form.submit();
    //    }
    //  });
   
   
       setTimeout(function(){
           $('#res_message').hide();
           $('#msg_div').hide();
       },10000);
   
   
    //    $('.delete').on('click',function(){
    //        var tr =  $(this).closest('tr');
    //         if (confirm('Are you sure?')) {
    //            id = $(this).attr('data-id');
    //            data = {
    //                "_token": token,
    //                "id":id
    //            };
    //            $.ajax({
    //                // url: "",
    //                type: "post",
    //                data:data,
    //                success: function (response) {
    //                    if(response.delete == 1){
    //                        tr.hide();
    //                    }
    //                    $('#msg_div').show();
    //                    $('#res_message').show();
    //                    $('#res_message').html(response.message);
    //                    $('#msg_div').removeClass('d-none');
   
    //                    setTimeout(function(){
    //                        $('#res_message').hide();
    //                        $('#msg_div').hide();
    //                    },10000);
    //                },
    //                error: function(jqXHR, textStatus, errorThrown) {
    //                    console.log(textStatus, errorThrown);
    //                }
    //            });
    //         }
    //    });
   
   });
   
   
   function wordcount(message) {
       var cnt = message.length;
       if(cnt > 60 ){
           $("#meta_title").attr('maxlength','60');
       }
       var cnt = 61 - cnt;
       var ele = document.getElementById('w_count');
       ele.innerHTML = "No More "+ cnt +" Characters";
   }
   
   function shortdescriptionCount(message){
       var cnt = message.length;
       if(cnt > 160 ){
           $("#short_description").attr('maxlength','160');
       }
       var cnt = 161 - cnt;
       var ele = document.getElementById('short_desc');
       ele.innerHTML = "No More "+ cnt +" Characters";
   }
   
   
   
   
   </script>

<!-- jQuery -->
<script src="{{asset('assets/admin/')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/admin/')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/admin/')}}/dist/js/adminlte.min.js"></script>


@endsection