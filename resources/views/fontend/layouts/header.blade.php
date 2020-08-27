<header>
    <div class="header-area transparent-bar ptb-55">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-4">
                    <div class="logo-small-device">
                        <a href="index.html"><img alt="" src="{{asset('assets/fontend/')}}/assets/img/logo/logo.png"></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-8">
                    <div class="header-contact-menu-wrapper pl-45">
                        <div class="header-contact">
                            <p>WANT TO TALK WITH US  +01254 265 987</p>
                        </div>
                        <div class="menu-wrapper text-center">
                            <button class="menu-toggle">
                                <img class="s-open" alt="" src="{{asset('assets/fontend/')}}/assets/img/icon-img/menu.png">
                                <img class="s-close" alt="" src="{{asset('assets/fontend/')}}/assets/img/icon-img/menu-close.png">
                            </button>
                            <div class="main-menu">
                                <nav>
                                    <ul>
                                        <li><a href="index.html">home</a></li>
                                        <li class="active"><a href="about-us.html">about us </a></li>
                                        <li><a href="shop.html">shop</a>
                                            <ul class="mega-menu">
                                                <li>
                                                    <ul>
                                                        <li class="mega-menu-title">shop grid</li>
                                                        <li><a href="shop-grid-2-col.html"> grid 2 column</a></li>
                                                        <li><a href="shop.html"> grid 3 column</a></li>
                                                        <li><a href="shop-grid-4-col.html"> grid 4 column</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <ul>
                                                        <li class="mega-menu-title">shop list</li>
                                                        <li><a href="shop-list.html"> list 1 column</a></li>
                                                        <li><a href="shop-list-2-col.html"> list 2 column</a></li>
                                                        <li><a href="shop-list-box.html"> list box style</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <ul>
                                                        <li class="mega-menu-title">product details</li>
                                                        <li><a href="product-details.html">tab style</a></li>
                                                        <li><a href="product-details-sticky.html">sticky style</a></li>
                                                        <li><a href="product-details-gallery.html">gallery style</a></li>
                                                        <li><a href="product-details-fixed-img.html">fixed image style</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-img">
                                                    <ul>
                                                        <li><a class="dot-none" href="shop.html"><img alt="" src="{{asset('assets/fontend/')}}/assets/img/banner/17.jpg"></a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">pages</a>
                                            <ul>
                                                <li><a href="about-us.html">about us</a></li>
                                                <li><a href="cart.html">cart page</a></li>
                                                <li><a href="checkout.html">checkout</a></li>
                                                <li><a href="wishlist.html">wishlist</a></li>
                                                <li><a href="login-register.html">login</a></li>
                                                <li><a href="contact.html">contact</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog.html">blog</a>
                                            <ul>
                                                <li><a href="blog.html">blog page</a></li>
                                                <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                                <li><a href="blog-sidebar-2.html">blog sidebar 2</a></li>
                                                <li><a href="blog-details.html">blog details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">contact us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="header-cart cart-small-device">
                        <?php 
                        $total = 0;
                        $cart = session()->get('cart');  
                    ?>
     
                
                    <button class="icon-cart">
                        <i class="ti-shopping-cart"></i>
                        <div class="count-style cart_total_quantity" id="cart_total_quantity" >{{$cart?$cart['totalQuantity']:0}}</div>
                        <span class="count-price-add cart_total_price" id="cart_total_price">${{$cart?$cart['totalPrice']:0}}</span>
                    </button>
                    @if($cart)
    
                    <div class="shopping-cart-content">
                        <ul class="mini_cart_content">
    
                            @if($cart['item'])
                                @foreach ($cart['item'] as $id=>$cartinfo)
                                <li class="single-shopping-cart {{$id}}_parent_el" id="{{$id}}_parent_el">
                                    <div class="shopping-cart-img">
                                        <a href="#"><img alt="" src="{{asset('assets/fontend/')}}/assets/img/cart/cart-1.jpg"></a>
                                    </div>
    
                                    <div class="shopping-cart-title">
                                        <h3><a href="#">{{$cartinfo['name']}} </a></h3>
                                        <span>Price: $ {{$cartinfo['price']}}</span>
                                        <span>Qty: <span class="{{$id}}_quantity">{{$cartinfo['quantity']}}</span></span>
                                    </div>
                                    <div class="shopping-cart-delete">
                                        <a href="#" class="remove-to-cart" data-id="{{$id}}" onclick="RemoveToCart({{$id}})"><i class="icofont icofont-ui-delete"></i></a>
                                    </div>
                                </li>
    
                                <?php $total += $cartinfo['price'] * $cartinfo['quantity'] ?>
                              
                                @endforeach
                            @endif
    
                        </ul>
                        <div class="shopping-cart-total">
                            <h4>total: <span class="cart_total_price">$ {{$total}}</span></h4>
                        </div>
                        <div class="shopping-cart-btn">
                            <a class="btn-style cr-btn" href="#">checkout</a>
                        </div>
                    </div>
    
                    @endif
                    </div>
                </div>
                <div class="mobile-menu-area col-12">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
                            <ul class="menu-overflow">
                                <li><a href="index.html">HOME</a></li>
                                <li><a href="#">pages</a>
                                    <ul>
                                        <li><a href="about-us.html">about us</a></li>
                                        <li><a href="cart.html">cart page</a></li>
                                        <li><a href="checkout.html">checkout</a></li>
                                        <li><a href="wishlist.html">wishlist</a></li>
                                        <li><a href="login-register.html">login</a></li>
                                        <li><a href="contact.html">contact</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">shop</a>
                                    <ul>
                                        <li><a href="#">shop grid</a>
                                            <ul>
                                                <li><a href="shop-grid-2-col.html"> grid 2 column</a></li>
                                                <li><a href="shop.html"> grid 3 column</a></li>
                                                <li><a href="shop-grid-4-col.html"> grid 4 column</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">shop list</a>
                                            <ul>
                                                <li><a href="shop-list.html"> list 1 column</a></li>
                                                <li><a href="shop-list-2-col.html"> list 2 column</a></li>
                                                <li><a href="shop-list-box.html"> list box style</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">product details</a>
                                            <ul>
                                                <li><a href="product-details.html">tab style</a></li>
                                                <li><a href="product-details-sticky.html">sticky style</a></li>
                                                <li><a href="product-details-gallery.html">gallery style</a></li>
                                                <li><a href="product-details-fixed-img.html">fixed image style</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">BLOG</a>
                                    <ul>
                                        <li><a href="blog.html">blog page</a></li>
                                        <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                        <li><a href="blog-sidebar-2.html">blog sidebar 2</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html"> Contact us</a></li>
                            </ul>
                        </nav>							
                    </div>
                </div>
            </div>
        </div>
        <div class="header-cart-wrapper">
            <div class="header-cart">

                <?php 
                    $total = 0;
                    $cart = session()->get('cart');  
                ?>
 
            
                <button class="icon-cart">
                    <i class="ti-shopping-cart"></i>
                    <span class="count-style cart_total_quantity" id="cart_total_quantity" >{{$cart?$cart['totalQuantity']:0}}</span>
                    <span class="count-price-add cart_total_price" id="cart_total_price">${{$cart?$cart['totalPrice']:0}}</span>
                </button>
              

                <div class="shopping-cart-content">
                    <ul class="mini_cart_content">
                    @if($cart)
                        @if($cart['item'])
                            @foreach ($cart['item'] as $id=>$cartinfo)
                            <li class="single-shopping-cart {{$id}}_parent_el"  id="{{$id}}_parent_el">
                                <div class="shopping-cart-img">
                                    <a href="#"><img alt="" src="{{$cartinfo['image']}}" width="100px"></a>
                                </div>

                                <div class="shopping-cart-title">
                                    <h3><a href="#">{{$cartinfo['name']}} </a></h3>
                                    <span>Price: $ {{$cartinfo['price']}}</span>
                                    <span>Qty: <span  class="{{$id}}_quantity">{{$cartinfo['quantity']}}</span></span>
                                </div>
                                <div class="shopping-cart-delete">
                                    <a href="#" class="remove-to-cart" data-id="{{$id}}" onclick="RemoveToCart({{$id}})">
                                        <i class="icofont icofont-ui-delete"></i>
                                    </a>
                                </div>
                            </li>

                            <?php $total += $cartinfo['price'] * $cartinfo['quantity'] ?>
                          
                            @endforeach
                        @endif
                        @endif
                    </ul>
                    <div class="shopping-cart-total">
                        <h4>total: <span class="cart_total_price">$ {{$total}}</span></h4>
                    </div>
                    <div class="shopping-cart-btn">
                        <a class="btn-style cr-btn" href="#">checkout</a>
                    </div>
                </div>

              
            </div>
        </div>
    </div>
</header>
