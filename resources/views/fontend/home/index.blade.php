@extends('fontend.layouts.master')

@section('content')

{{-- 
<div class="slider-area">
    <div class="slider-active owl-carousel">
        <div class="single-slider slider-1" style="background-image: url({{asset('assets/fontend/')}}/assets/img/slider/slider-bg.jpg)">
            <div class="container">
                <div class="slider-content slider-animated-1">
                    <div class="slider-img text-center">
                        <img class="animated" src="{{asset('assets/fontend/')}}/assets/img/slider/bike-1.png" alt="slider images">
                    </div>
                    <div class="slider-text-img">
                        <h6 class="animated">BOOK YOUR BIKE INSTANTLY AND ENJOY DISCOUNT</h6>
                        <img class="animated" src="{{asset('assets/fontend/')}}/assets/img/icon-img/bike.png" alt="slider images">
                    </div>
                    <h2 class="animated">MOTORCYCLE</h2>
                </div>
            </div>
        </div>
        <div class="single-slider slider-1" style="background-image: url({{asset('assets/fontend/')}}/assets/img/slider/slider-bg.jpg)">
            <div class="container">
                <div class="slider-content slider-animated-1">
                    <div class="slider-img text-center">
                        <img class="animated" src="{{asset('assets/fontend/')}}/assets/img/slider/bike-2.png" alt="slider images">
                    </div>
                    <div class="slider-text-img">
                        <h6 class="animated">BOOK YOUR BIKE INSTANTLY AND ENJOY DISCOUNT</h6>
                        <img class="animated" src="{{asset('assets/fontend/')}}/assets/img/icon-img/bike.png" alt="slider images">
                    </div>
                    <h2 class="animated">MOTORCYCLE</h2>
                </div>
            </div>
        </div>
        <div class="single-slider slider-1" style="background-image: url({{asset('assets/fontend/')}}/assets/img/slider/slider-bg.jpg)">
            <div class="container">
                <div class="slider-content slider-animated-1">
                    <div class="slider-img text-center">
                        <img class="animated" src="{{asset('assets/fontend/')}}/assets/img/slider/bike-1.png" alt="slider images">
                    </div>
                    <div class="slider-text-img">
                        <h6 class="animated">BOOK YOUR BIKE INSTANTLY AND ENJOY DISCOUNT</h6>
                        <img class="animated" src="{{asset('assets/fontend/')}}/assets/img/icon-img/bike.png" alt="slider images">
                    </div>
                    <h2 class="animated">MOTORCYCLE</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-social">
        <ul>
            <li class="facebook"><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
            <li class="twitter"><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
            <li class="pinterest"><a href="#"><i class="icofont icofont-social-pinterest"></i></a></li>
        </ul>
    </div>
    <div class="language-currency-wrapper">
        <div class="language-currency">
            <div class="language">
                <select class="select-header orderby">
                    <option value="">ENG</option>
                    <option value="">BANGLA </option>
                    <option value="">HINDI</option>
                </select>
            </div>
            <div class="currency">
                <select class="select-header orderby">
                    <option value="">$USD</option>
                    <option value="">US </option>
                    <option value="">EURO</option>
                </select>
            </div>
        </div>
    </div>
</div> --}}

 {{-- 2 dive  --}}

<div class="product-area pb-190">
    <div class="container">
        <div class="section-title text-center mb-50">
            <h2>CHOOSE YOUR BIKE</h2>
            <p><span>OSWAN</span> the most latgest bike store in the wold can serve you latest            qulity of motorcycle also you can sell here your motorcycle</p>
        </div>
        <div class="product-tab-list text-center mb-80 nav product-menu-mrg" role="tablist">
            <a class="active" href="#home1" data-toggle="tab" >
                <h4>NEW BIKES </h4>
            </a>
            <a href="#home2" data-toggle="tab">
                <h4> USED BIKES </h4>
            </a>
        </div>
        <div class="tab-content jump">
            <div class="tab-pane active" id="home1">
                <div class="product-slider-active owl-carousel">
                    @php 
            
                    $i=1;
                    $j=1;

                    @endphp

                    @if (count($products)>0)
                        
                        @foreach ($products as $item)

                        @if($i == $j)
                        <div class="product-wrapper-bundle">
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="{{$item->image}}" alt="">
                                    </a>
                                    <div class="product-item-dec">
                                        <ul>
                                            <li>2018</li>
                                            <li>MANUAL</li>
                                            <li>PETROL</li>
                                            <li>250 CC</li>
                                        </ul>
                                    </div>
                                    <div class="product-action">
                                        <button class="action-plus-2 add_to_cart" title="Add To Cart" value="{{$item->id}}" style="cursor:pointer" id="add_to_cart" >
                                            <i class=" ti-shopping-cart"></i>
                                        </button>
                                        <a class="action-cart-2" title="Wishlist" href="#">
                                            <i class=" ti-heart"></i>
                                        </a>
                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class=" ti-zoom-in"></i>
                                        </a>
                                    </div>
                                    <div class="product-content-wrapper">
                                        <div class="product-title-spreed">
                                            <h4><a href="product-details.html">{{$item->title}}</a></h4>
                                            <span>6600 RPM</span>
                                        </div>
                                        <div class="product-price">
                                        <span>$ {{$item->sell_price}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php $j++;  @endphp
                         
                        @else
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="{{$item->image}}" alt="">
                                    </a>
                                    <div class="product-item-dec">
                                        <ul>
                                            <li>2018</li>
                                            <li>MANUAL</li>
                                            <li>PETROL</li>
                                            <li>480 CC</li>
                                        </ul>
                                    </div>
                                    <div class="product-action">
                                        <button class="action-plus-2 add_to_cart" title="Add To Cart" value="{{$item->id}}"  style="cursor:pointer" id="add_to_cart" >
                                            <i class=" ti-shopping-cart"></i>
                                        </button>

                                        <a class="action-cart-2" title="Wishlist" href="#">
                                            <i class=" ti-heart"></i>
                                        </a>
                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class=" ti-zoom-in"></i>
                                        </a>
                                    </div>
                                    <div class="product-content-wrapper">
                                        <div class="product-title-spreed">
                                            <h4><a href="product-details.html">{{$item->title}}</a></h4>
                                            <span>6700 RPM</span>
                                        </div>
                                        <div class="product-price">
                                            <span>$ {{$item->sell_price}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php $i++;  @endphp
                           
                                </div>
                         @endif
                        @endforeach

                    @endif

                   



                </div>
            </div>
            <div class="tab-pane" id="home2">
                <div class="product-slider-active owl-carousel">
                    <div class="product-wrapper-bundle">
                        <div class="product-wrapper mb-30">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="{{asset('assets/fontend/')}}/assets/img/product/product-6.jpg" alt="">
                                </a>
                                <div class="product-item-dec">
                                    <ul>
                                        <li>2018</li>
                                        <li>MANUAL</li>
                                        <li>PETROL</li>
                                        <li>250 CC</li>
                                    </ul>
                                </div>
                                <div class="product-action">
                                    <a class="action-plus-2" title="Add To Cart" href="#">
                                        <i class=" ti-shopping-cart"></i>
                                    </a>
                                    <a class="action-cart-2" title="Wishlist" href="#">
                                        <i class=" ti-heart"></i>
                                    </a>
                                    <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class=" ti-zoom-in"></i>
                                    </a>
                                </div>
                                <div class="product-content-wrapper">
                                    <div class="product-title-spreed">
                                        <h4><a href="product-details.html">Gloriori GSX 250 R</a></h4>
                                        <span>6600 RPM</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$2549</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrapper mb-30">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="{{asset('assets/fontend/')}}/assets/img/product/product-5.jpg" alt="">
                                </a>
                                <div class="product-item-dec">
                                    <ul>
                                        <li>2018</li>
                                        <li>MANUAL</li>
                                        <li>PETROL</li>
                                        <li>480 CC</li>
                                    </ul>
                                </div>
                                <div class="product-action">
                                    <a class="action-plus-2" title="Add To Cart" href="#">
                                        <i class=" ti-shopping-cart"></i>
                                    </a>
                                    <a class="action-cart-2" title="Wishlist" href="#">
                                        <i class=" ti-heart"></i>
                                    </a>
                                    <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class=" ti-zoom-in"></i>
                                    </a>
                                </div>
                                <div class="product-content-wrapper">
                                    <div class="product-title-spreed">
                                        <h4><a href="product-details.html">Demonissi Gori</a></h4>
                                        <span>6700 RPM</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$2549</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper-bundle">
                        <div class="product-wrapper mb-30">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="{{asset('assets/fontend/')}}/assets/img/product/product-4.jpg" alt="">
                                </a>
                                <div class="product-item-dec">
                                    <ul>
                                        <li>2018</li>
                                        <li>MANUAL</li>
                                        <li>PETROL</li>
                                        <li>200 CC</li>
                                    </ul>
                                </div>
                                <div class="product-action">
                                    <a class="action-plus-2" title="Add To Cart" href="#">
                                        <i class=" ti-shopping-cart"></i>
                                    </a>
                                    <a class="action-cart-2" title="Wishlist" href="#">
                                        <i class=" ti-heart"></i>
                                    </a>
                                    <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class=" ti-zoom-in"></i>
                                    </a>
                                </div>
                                <div class="product-content-wrapper">
                                    <div class="product-title-spreed">
                                        <h4><a href="product-details.html">Klager GSX 250 R</a></h4>
                                        <span>5500 RPM</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$2549</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrapper mb-30">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="{{asset('assets/fontend/')}}/assets/img/product/product-3.jpg" alt="">
                                </a>
                                <div class="product-item-dec">
                                    <ul>
                                        <li>2018</li>
                                        <li>MANUAL</li>
                                        <li>PETROL</li>
                                        <li>150 CC</li>
                                    </ul>
                                </div>
                                <div class="product-action">
                                    <a class="action-plus-2" title="Add To Cart" href="#">
                                        <i class=" ti-shopping-cart"></i>
                                    </a>
                                    <a class="action-cart-2" title="Wishlist" href="#">
                                        <i class=" ti-heart"></i>
                                    </a>
                                    <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class=" ti-zoom-in"></i>
                                    </a>
                                </div>
                                <div class="product-content-wrapper">
                                    <div class="product-title-spreed">
                                        <h4><a href="product-details.html">Maxclon ZPE 54</a></h4>
                                        <span>3300 RPM</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$2549</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper-bundle">
                        <div class="product-wrapper mb-30">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="{{asset('assets/fontend/')}}/assets/img/product/product-2.jpg" alt="">
                                </a>
                                <div class="product-item-dec">
                                    <ul>
                                        <li>2018</li>
                                        <li>MANUAL</li>
                                        <li>PETROL</li>
                                        <li>150 CC</li>
                                    </ul>
                                </div>
                                <div class="product-action">
                                    <a class="action-plus-2" title="Add To Cart" href="#">
                                        <i class=" ti-shopping-cart"></i>
                                    </a>
                                    <a class="action-cart-2" title="Wishlist" href="#">
                                        <i class=" ti-heart"></i>
                                    </a>
                                    <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class=" ti-zoom-in"></i>
                                    </a>
                                </div>
                                <div class="product-content-wrapper">
                                    <div class="product-title-spreed">
                                        <h4><a href="product-details.html">Matrio Max</a></h4>
                                        <span>4600 RPM</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$2549</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrapper mb-30">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="{{asset('assets/fontend/')}}/assets/img/product/product-1.jpg" alt="">
                                </a>
                                <div class="product-item-dec">
                                    <ul>
                                        <li>2018</li>
                                        <li>MANUAL</li>
                                        <li>PETROL</li>
                                        <li>250 CC</li>
                                    </ul>
                                </div>
                                <div class="product-action">
                                    <a class="action-plus-2" title="Add To Cart" href="#">
                                        <i class=" ti-shopping-cart"></i>
                                    </a>
                                    <a class="action-cart-2" title="Wishlist" href="#">
                                        <i class=" ti-heart"></i>
                                    </a>
                                    <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class=" ti-zoom-in"></i>
                                    </a>
                                </div>
                                <div class="product-content-wrapper">
                                    <div class="product-title-spreed">
                                        <h4><a href="product-details.html">Rigoniss Z 1000</a></h4>
                                        <span>8000 RPM</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$2549</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper-bundle">
                        <div class="product-wrapper mb-30">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="{{asset('assets/fontend/')}}/assets/img/product/product-2.jpg" alt="">
                                </a>
                                <div class="product-item-dec">
                                    <ul>
                                        <li>2018</li>
                                        <li>MANUAL</li>
                                        <li>PETROL</li>
                                        <li>250 CC</li>
                                    </ul>
                                </div>
                                <div class="product-action">
                                    <a class="action-plus-2" title="Add To Cart" href="#">
                                        <i class=" ti-shopping-cart"></i>
                                    </a>
                                    <a class="action-cart-2" title="Wishlist" href="#">
                                        <i class=" ti-heart"></i>
                                    </a>
                                    <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class=" ti-zoom-in"></i>
                                    </a>
                                </div>
                                <div class="product-content-wrapper">
                                    <div class="product-title-spreed">
                                        <h4><a href="product-details.html">Klager GSX 250 R</a></h4>
                                        <span>5500 RPM</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$2549</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrapper mb-30">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="{{asset('assets/fontend/')}}/assets/img/product/product-5.jpg" alt="">
                                </a>
                                <div class="product-item-dec">
                                    <ul>
                                        <li>2018</li>
                                        <li>MANUAL</li>
                                        <li>PETROL</li>
                                        <li>350 CC</li>
                                    </ul>
                                </div>
                                <div class="product-action">
                                    <a class="action-plus-2" title="Add To Cart" href="#">
                                        <i class=" ti-shopping-cart"></i>
                                    </a>
                                    <a class="action-cart-2" title="Wishlist" href="#">
                                        <i class=" ti-heart"></i>
                                    </a>
                                    <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class=" ti-zoom-in"></i>
                                    </a>
                                </div>
                                <div class="product-content-wrapper">
                                    <div class="product-title-spreed">
                                        <h4><a href="product-details.html">Maxclon ZPE 54</a></h4>
                                        <span>3300 RPM</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$2549</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    {{-- 2/3 div --}}


@endsection 