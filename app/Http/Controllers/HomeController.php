<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Admin\Product;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        // session()->put('cart', null);
        $products =  Product::where('status',1)
                            ->orderBy('id','desc')
                            ->take(6)
                            ->get();

        return view('fontend.home.index', compact('products'));
    }
}
