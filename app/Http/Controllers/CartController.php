<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Admin\Product;
use App\Model\Admin\Cart;

class CartController extends Controller
{

    public function addToCart(Request $request)
    {
        $id = $request->product_id;

        // return $request->product_id;

        $product = Product::where('status',1)->find($id);
        if(!$product) {
            abort(404);
        }   
        //  product 
        // cart management 
        $cart = session()->get('cart');   // not created ; null // array index/key = index/key 
        // if cart is empty then this the first product
        // 2nd time 
        if(!$cart) {
            // entry block
           // cart (single array) -> 
           // total quantity (index) ,  total price (index) ,  product list (index + multidimentional array) 
            // ( 1 / more )(array) [1(single array),2,3,4 ]
            // last  level]
            $cart = [
                   'item' =>[
                       $id => [
                        "name" => $product->title,
                        "quantity" => 1, // quantity increment  2nd
                        "price" => $product->sell_price,
                        "image" => $product->image
                    ]
                ]
            ];
            $cart['totalQuantity'] = 1; // quantity increment  2nd
            $cart['totalPrice'] = $product->sell_price; // quantity increment  2nd
            // cart complete 
            session()->put('cart', $cart); 

            return response()->json($cart);
        }
        //  cart data exist 
        //  same product 2nd
        // if cart not empty then check if this product exist then increment quantity

        if(isset($cart['item'][$id])) {
            // entry 
            $cart['item'][$id]['quantity']++; // ++ = 1 , +=1 , 
            $cart['totalQuantity']++; // ++ = 1 , +=1 , 
            $cart['totalPrice'] += $product->sell_price;
            session()->put('cart', $cart);
            return response()->json($cart);
        }

        // cart data exist 
        // different product 
        // if item not exist in cart then add to cart with quantity = 1

        $cart['item'][$id] = [
            "name" => $product->title,
            "quantity" => 1,
            "price" => $product->sell_price,
            "image" => $product->image
        ];
        $cart['totalQuantity']++;
        $cart['totalPrice'] += $product->sell_price;
        // dd($cart);
        session()->put('cart', $cart);
        return response()->json($cart);
    }


    public function removeToCart($id){
        $product = Product::where('status',1)->find($id);
        if(!$product) {
            abort(404);
        }  
        $cart = session()->get('cart');
        if($cart){
            if($cart['item']){
                if(array_key_exists($id, $cart['item'])){
               
                    // cart item exist -> delete 
                    // totalQuantity , totalPrice 

                    $item = $cart['item'][$id];
                    if($item){
                        $cart['totalQuantity'] -= $item['quantity']; // 3
                        $cart['totalPrice'] -= $item['price'] * $item['quantity'];    // 12000 * 3 
                    }

                    unset($cart['item'][$id]);
                        
                    // current cart

                    session()->put('cart', $cart);
                }
            }
        }
        return redirect()->back()->with('remove-from-cart', 'Product Remove from cart successfully!');
    }
    

   // update cart 



    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $product = Product::find($request->id);
    
            if(!$product) {
                abort(404);
            }

            $cart = session()->get('cart');
 
            $cart['item'][$request->id]["quantity"] += $request->quantity;
            if($product){
                $cart['totalQuantity'] += $request->quantity;
                $cart['totalPrice'] += $product->sell_price;   
            }
            session()->put('cart', $cart);
 
            session()->flash('success', 'Cart updated successfully');
        }
    }
 
    

    // cart with custom model class

    public function getAddToCart($id){
        $product = Product::find($id);
 
        if(!$product) {
 
            abort(404);
 
        }
        $oldcart = session()->get('cart');
        $cart  = new Cart($oldcart);
        $cart->add($product,$id);
    }





}
