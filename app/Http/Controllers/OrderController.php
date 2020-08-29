<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Customer;
use App\Order;
use App\OrderDetail;
use App\Billing;
use App\Shipping;



class OrderController extends Controller
{
    public function place_order(Request $request){


        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:customers',
            'phone' => 'required',
            'address1' => 'required',
            'country' => 'required',
        ]);


        $user = Session::get('user');

        $cart = session()->get( 'cart' );
        if(!$cart){
            return redirect(url('/'));
        }
       

        if(!$user){
            if($request->create_account){
                if(!$request->password){
                    return redirect()->back()->with('error','Password required');
                }

                $user = new Customer();
                $user->name         = $request->first_name.' '.$request->last_name;
                $user->email        = $request->email;
                $user->password     = $request->password;
                $user->status       = 1;
                $user->save();

                Session::put('user',$user);
            }
        }

        $order = new Order();
        $order->customer_id     = $user?$user->id:1;
        $order->total_qty       = $cart['totalQuantity'];
        $order->total_price     = $cart['totalPrice'];
        $order->payment_type    = $request->payment_type;
        $order->payment_status  = 0;
        $order->order_status    = 0;
        $order->save();


        if($cart['item']){
            foreach ($cart['item'] as $id=>$cartinfo){
                $order_details = new OrderDetail();
                $order_details->order_id     = $order->id;
                $order_details->product_id   = $id;
                $order_details->quantity     = $cartinfo['quantity'];
                $order_details->price        = $cartinfo['price'];
                $order_details->total_price  = $cartinfo['quantity'] * $cartinfo['price'];
                $order_details->save();
            }
        }


        $billing                           = new Billing();
        $billing->order_id                 = $order->id;
        $billing->customer_id              = $user?$user->id:1;
        $billing->country                  = $request->country;
        $billing->first_name               = $request->first_name;
        $billing->last_name                = $request->last_name;
        $billing->company_name             = $request->company_name;
        $billing->address1                 = $request->address1;
        $billing->address2                 = $request->address2;
        $billing->city                     = $request->city;
        $billing->state                    = $request->state;
        $billing->zip_code                 = $request->zip_code;
        $billing->email                    = $request->email;
        $billing->phone                    = $request->phone;
        $billing->note                     = $request->note;
        $billing->shipping_status          = $request->shipping_status;
        $billing->save();
        
        if($billing->shipping_status){
            $shipping                           =  new Shipping();
            $shipping->order_id                 = $order->id;
            $shipping->customer_id              = $user?$user->id:1;
            $shipping->country                  = $request->s_country;
            $shipping->first_name               = $request->s_first_name;
            $shipping->last_name                = $request->s_last_name;
            $shipping->company_name             = $request->s_company_name;
            $shipping->address1                 = $request->s_address1;
            $shipping->address2                 = $request->s_address2;
            $shipping->city                     = $request->s_city;
            $shipping->state                    = $request->s_state;
            $shipping->zip_code                 = $request->s_zip_code;
            $shipping->email                    = $request->s_email;
            $shipping->phone                    = $request->s_phone;
            $shipping->save();
        }

        session()->put('cart', null);
        
        return redirect(route('success'));

    }
}
