<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Admin\Product;

class HomeController extends Controller {
    public function home() {
        $products = Product::where( 'status', 1 )->orderBy( 'id', 'DESC' )->take( 6 )->get();
        return view( 'frontend.home.index', compact( 'products' ) );
    }
}
