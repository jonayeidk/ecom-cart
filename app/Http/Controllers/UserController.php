<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Session;


class UserController extends Controller
{
    public function user_login(Request $request){

        $user = Customer::where('email',$request->email)->where('password',$request->password)->where('status',1)->first();
        if($user){
            Session::put('user',$user);
            return redirect()->back()->with('success','Login Success');
        }else{
            
            return redirect()->back()->with('error','Invalid login');
        }
    }
}
