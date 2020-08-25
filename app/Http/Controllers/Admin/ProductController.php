<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Admin\Category;
use App\Model\Admin\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProductController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $products = Product::orderBy( 'created_at', 'DESC' )->paginate( 10 );
        return view( 'admin.product.index', compact( 'products' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $product_categories = Category::all();
        return view( 'admin.product.create', compact( 'product_categories' ) );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request ) {
<<<<<<< HEAD

        $this->validate( $request, [
            'title'       => 'required',
            'price'       => 'required',
            'sell_price'  => 'required',
            'category_id' => 'required',
            'quantity'    => 'required',
        ] );

        $product        = new Product();
        $product->title = $request->input( 'title' );

        $uniqueSlug = Str::slug( $request->input( 'title' ) );
        $next       = 2;

        while ( Product::where( 'slug', $uniqueSlug )->first() ) {
            $uniqueSlug = Str::slug( $request->input( 'title' ) ) . '-' . $next;
            $next++;
        }

        $product->slug             = $uniqueSlug;
        $product->category_id      = $request->input( 'category_id' );
        $product->subtitle         = $request->input( 'subtitle' );
        $product->subtitle         = $request->input( 'subtitle' );
        $product->model            = $request->input( 'model' );
        $product->fuel_type        = $request->input( 'fuel_type' );
        $product->cc               = $request->input( 'cc' );
        $product->price            = $request->input( 'price' );
        $product->sell_price       = $request->input( 'sell_price' );
        $product->quantity         = $request->input( 'quantity' );
        $product->user_id          = Auth::user()->id;
        $product->meta_title       = $request->input( 'meta_title' );
        $product->meta_keyword     = $request->input( 'meta_keyword' );
        $product->meta_description = $request->input( 'meta_description' );
        $product->url              = 'product/' . $product->id . '/' . $request->slug;
        $product->status           = $request->input( 'status' );
        $product->save();

        if ( $request->has( 'image' ) ) {
            $image         = $request->file( 'image' );
            $path          = 'uploads/images/products';
            $thumbnailName = time() . '_' . rand( 100, 999 ) . '_' . $image->getClientOriginalName();
            $image->move( public_path( $path ), $thumbnailName );
            $product->image = $thumbnailName;
        }

        if ( $product->save() ) {

            return redirect()->route( 'admin.product.index', $product->id )->with( 'success', __( 'Product' ) );
        }
        return redirect()->back()->with( 'error', __( 'Please try again.' ) );
=======
        dd( $request->all() );

        // input 
        
        // home 
>>>>>>> aec6d4f7bf0583d7ff6992836dc654152729e421

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id ) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( Product $product ) {
        $categories = Category::all();
        return view( 'admin.product.edit', compact( 'product', 'categories' ) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id ) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id ) {
        //
    }
}
