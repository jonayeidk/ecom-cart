<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- Mirrored from preview.hasthemes.com/oswan/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jul 2020 05:08:26 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Oswan - eCommerce HTML5 Template</title>
        <meta name="description" content="Live Preview Of Oswan eCommerce HTML5 Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/fontend/')}}/assets/img/favicon.png">
        
          <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

		<!-- all css here -->
        <link rel="stylesheet" href="{{asset('assets/fontend/')}}/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('assets/fontend/')}}/assets/css/animate.css">
        <link rel="stylesheet" href="{{asset('assets/fontend/')}}/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="{{asset('assets/fontend/')}}/assets/css/chosen.min.css">
        <link rel="stylesheet" href="{{asset('assets/fontend/')}}/assets/css/icofont.css">
        <link rel="stylesheet" href="{{asset('assets/fontend/')}}/assets/css/themify-icons.css">
        <link rel="stylesheet" href="{{asset('assets/fontend/')}}/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('assets/fontend/')}}/assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="{{asset('assets/fontend/')}}/assets/css/bundle.css">
        <link rel="stylesheet" href="{{asset('assets/fontend/')}}/assets/css/style.css">
        <link rel="stylesheet" href="{{asset('assets/fontend/')}}/assets/css/responsive.css">
        <script src="{{asset('assets/fontend/')}}/assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <div class="wrapper">
            <!-- header start -->

            @include('fontend.layouts.header')
          
            @yield('content')
          
            @include('fontend.layouts.footer')
            <!-- modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="icofont icofont-close" aria-hidden="true"></span>
                </button>
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="qwick-view-left">
                                <div class="quick-view-learg-img">
                                    <div class="quick-view-tab-content tab-content">
                                        <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                            <img src="{{asset('assets/fontend/')}}/assets/img/quick-view/l1.jpg" alt="">
                                        </div>
                                        <div class="tab-pane fade" id="modal2" role="tabpanel">
                                            <img src="{{asset('assets/fontend/')}}/assets/img/quick-view/l2.jpg" alt="">
                                        </div>
                                        <div class="tab-pane fade" id="modal3" role="tabpanel">
                                            <img src="{{asset('assets/fontend/')}}/assets/img/quick-view/l3.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="quick-view-list nav" role="tablist">
                                    <a class="active" href="#modal1" data-toggle="tab" role="tab">
                                        <img src="{{asset('assets/fontend/')}}/assets/img/quick-view/s1.jpg" alt="">
                                    </a>
                                    <a href="#modal2" data-toggle="tab" role="tab">
                                        <img src="{{asset('assets/fontend/')}}/assets/img/quick-view/s2.jpg" alt="">
                                    </a>
                                    <a href="#modal3" data-toggle="tab" role="tab">
                                        <img src="{{asset('assets/fontend/')}}/assets/img/quick-view/s3.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="qwick-view-right">
                                <div class="qwick-view-content">
                                    <h3>Aerion Carbon Helmet</h3>
                                    <div class="price">
                                        <span class="new">$90.00</span>
                                        <span class="old">$120.00  </span>
                                    </div>
                                    <div class="rating-number">
                                        <div class="quick-view-rating">
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do tempor incididun ut labore et dolore magna aliqua. Ut enim ad mi , quis nostrud veniam exercitation .</p>
                                    <div class="quick-view-select">
                                        <div class="select-option-part">
                                            <label>Size*</label>
                                            <select class="select">
                                                <option value="">- Please Select -</option>
                                                <option value="">900</option>
                                                <option value="">700</option>
                                            </select>
                                        </div>
                                        <div class="select-option-part">
                                            <label>Color*</label>
                                            <select class="select">
                                                <option value="">- Please Select -</option>
                                                <option value="">orange</option>
                                                <option value="">pink</option>
                                                <option value="">yellow</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="quickview-plus-minus">
                                        <div class="cart-plus-minus">
											<input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
										</div>
                                        <div class="quickview-btn-cart">
                                            <a class="btn-style" href="#">add to cart</a>
                                        </div>
                                        <div class="quickview-btn-wishlist">
                                            <a class="btn-hover" href="#"><i class="icofont icofont-heart-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
		<!-- all js here -->
        <script src="{{asset('assets/fontend/')}}/assets/js/vendor/jquery-1.12.0.min.js"></script>

        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
        
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script> --}}

        <script src="{{asset('assets/fontend/')}}/assets/js/popper.js"></script>
        <script src="{{asset('assets/fontend/')}}/assets/js/bootstrap.min.js"></script>
        <script src="{{asset('assets/fontend/')}}/assets/js/isotope.pkgd.min.js"></script>
        <script src="{{asset('assets/fontend/')}}/assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="{{asset('assets/fontend/')}}/assets/js/jquery.counterup.min.js"></script>
        <script src="{{asset('assets/fontend/')}}/assets/js/waypoints.min.js"></script>
        <script src="{{asset('assets/fontend/')}}/assets/js/ajax-mail.js"></script>
        <script src="{{asset('assets/fontend/')}}/assets/js/owl.carousel.min.js"></script>
        <script src="{{asset('assets/fontend/')}}/assets/js/plugins.js"></script>
        <script src="{{asset('assets/fontend/')}}/assets/js/main.js"></script>




        <script type="text/javascript">

$(document).ready(function(){

    console.log('document working')

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });  
            // var addtocart = document.getElementById("add_to_cart").value;

            $('.add_to_cart').on('click',function(){

                var product_id = $(this).val();
                // console.log(product_id)
                token = $( "input[value='_token']" ).val();
                data = {
                   "_token": token,
                   "product_id": product_id
               };

               $.ajax({
                   url: "{{route('add-to-cart-js')}}",
                   type: "post",
                   data:data,
                   success: function (data) {
                    console.log(data)

                    $('.cart_total_quantity').html(data.cart['totalQuantity']);
                    $('.cart_total_price').html(data.cart['totalPrice']);

                    if(data.type == 'update'){
                        $('.'+data.id+'_quantity').html(data.item.quantity)
                    }
                  
                    if(data.type == 'new'){

                        var html = '';
                        console.log(data.item);
                        console.log(data.item.name);
                        i = data.id;

                        html +='<li class="single-shopping-cart">';
                        html +='<div class="shopping-cart-img">';
                        html +=' <a href="#"><img alt="" src="{{asset('assets/fontend/')}}/assets/img/cart/cart-1.jpg"></a>';
                        html +=' </div>';
                        html +='  <div class="shopping-cart-title">';
                        html +=' <h3><a href="#">'+data.item.name+'</a></h3>';
                        html +='<span>Price:'+data.item.price+'</span>';
                        html +=' <span>Qty:<span class="'+data.id+'_quantity">'+data.item.quantity+'</span></span>';
                        html +='</div>';
                        html +='<div class="shopping-cart-delete">';
                        html +='<a href="{{route('remove-to-cart','+data.id+')}}"><i class="icofont icofont-ui-delete"></i></a>';
                        html +='  </div>';
                        html +=' </li>';
                
                        $('.mini_cart_content').append(html)
                    }

                    


                   },
                   error: function(jqXHR, textStatus, errorThrown) {
                       console.log(textStatus, errorThrown);
                   }
               });



            })

        //  onclick method
        
        // function AddtoCart(id){
        //     alert(id);
        // } 
});

        </script>

    </body>

<!-- Mirrored from preview.hasthemes.com/oswan/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jul 2020 05:13:09 GMT -->
</html>
