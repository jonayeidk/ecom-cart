@extends('fontend.layouts.master')

@section('content')

<div class="breadcrumb-area pt-255 pb-170" style="background-image: url({{asset('assets/fontend/')}}/assets/img/banner/banner-4.jpg)">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <h2>Cart page</h2>
            <ul>
                <li>
                    <a href="#">home</a>
                </li>
                <li>Cart page</li>
            </ul>
        </div>
    </div>
</div>
<div class="product-cart-area pt-120 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="table-content table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th class="product-name">products</th>
                                <th class="product-price">products name</th>
                                <th class="product-name">price</th>
                                <th class="product-price">quantity</th>
                                <th class="product-quantity">total</th>
                                <th class="product-subtotal">delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($cart['item'])
                                @foreach ($cart['item'] as $id=>$cartinfo)

                                <tr class="{{$id}}_parent_el">
                                    <td class="product-thumbnail">
                                        <a href="#"><img src="{{$cartinfo['image']}}" alt="" width="100px"></a>
                                    </td>
                                    <td class="product-name">
                                        <a href="#">{{$cartinfo['name']}}</a>
                                    </td>
                                    <td class="product-price"><span class="amount">${{$cartinfo['price']}}</span></td>
                                    <td class="product-quantity">
                                        <div class="quantity-range">
                                            <input class="input-text qty text" type="number" data-id="{{$id}}" data-price="{{$cartinfo['price']}}" step="1" min="1" value="{{$cartinfo['quantity']}}" title="Qty" size="4">
                                        </div>
                                    </td>
                                    <td class="product-subtotal">$ {{$cartinfo['price']*$cartinfo['quantity']}}</td>
                                    <td class="product-cart-icon"><a href="#" onclick="RemoveToCart({{$id}})"><i class="ti-trash"></i></a></td>
                                </tr>
                                
                            @endforeach
                            @endif
                          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="cart-shiping-update">
                    <div class="cart-shipping">
                        <a class="btn-style cr-btn" href="/">
                            <span>continue shopping</span>
                        </a>
                    </div>
                    <div class="update-checkout-cart">
                        <div class="update-cart">
                            {{-- <button class="btn-style cr-btn"><span>update</span></button> --}}
                        </div>
                        <div class="update-cart">
                            <a class="btn-style cr-btn" href="{{ route('checkout')}}">
                                <span>checkout</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 col-sm-6">
                <div class="discount-code">
                    <h4>enter your discount code</h4>
                    <div class="coupon">
                        <input type="text">
                        <input class="cart-submit" type="submit" value="enter">
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-sm-6">
                <div class="shop-total">
                    <h3>cart total</h3>
                    <ul>
                        <li>
                            sub total
                        <span class="cart_total_price">$ {{$cart['totalPrice']}}</span>
                        </li>
                        <li>
                            tax 
                            <span>$ 9.00 </span>
                        </li>
                        <li class="order-total">
                            shipping
                            <span> 0 </span>
                        </li>
                        <li>
                            order total
                            <span class="cart_total_price">$ {{$cart['totalPrice']}}</span>
                        </li>
                    </ul>
                </div>
                <div class="cart-btn text-center mb-15">
                    <a href="#">payment</a>
                </div>
                <div class="continue-shopping-btn text-center">
                    <a href="#">continue shopping</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="newsletter-area">
    <div class="container">
        <div class="newsletter-wrapper-all theme-bg-2">
            <div class="row">
                <div class="col-lg-5 col-12 col-md-12">
                    <div class="newsletter-img bg-img" style="background-image: url(assets/img/banner/newsletter-bg.png)">
                        <img alt="image" src="assets/img/team/newsletter-img.png">
                    </div>
                </div>
                <div class="col-lg-7 col-12 col-md-12">
                    <div class="newsletter-wrapper text-center">
                        <div class="newsletter-title">
                            <h3>Subscribe our newsletter</h3>
                        </div>
                        <div id="mc_embed_signup" class="subscribe-form">
                            <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll" class="mc-form">
                                    <input type="email" value="" name="EMAIL" class="email" placeholder="Enter your email here..." required>
                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection