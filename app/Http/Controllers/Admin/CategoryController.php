<?php

namespace App\Http\Controllers\Admin;


use Auth;
use Image;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Model\Admin\Category;
use App\Http\Controllers\Controller;

class CategoryController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $p_categories = Category::orderBy( 'created_at', 'desc' )->paginate( 10 );
        return view( 'admin.category.index', compact( 'p_categories' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        $categories = Category::where( 'status', 1 )->get();

        return view( 'admin.category.create', compact( 'categories' ) );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $r ) {

        $orignal_image = '';
        if ( $r->hasFile( 'image' ) ) {

            $image      = $r->image;
            $filename   = $image->getClientOriginalName();
            $image_name = explode( ".", $filename );
            $filename   = Str::slug( $image_name[0], '-' );
            $extention  = $image->getClientOriginalExtension();
            $folder     = 'category/' . date( 'Y' ) . '/' . date( 'm' );
            if ( !file_exists( $folder ) ) {
                mkdir( $folder, 0777, true );
            }
            $orignal_image = $folder . '/' . $filename . '-' . time() . '.' . $extention;
            Image::make( $image )->save( $orignal_image );

        }

        $data                   = new Category();
        $data->title            = $r->title;
        $data->slug             = $r->slug;
        $data->parent_id        = $r->parent;
        $data->user_id          = Auth::user()->id;
        $data->meta_title       = $r->meta_title;
        $data->meta_keyword     = $r->meta_keyword;
        $data->meta_description = $r->short_description;
        $data->image            = $orignal_image;
        $data->status           = $r->status;
        $data->save();
        $data->url = 'category/' . $data->id . '/' . $r->slug;
        $data->save();

        return redirect()->back()->with( 'success', 'Data has been added' );

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
    public function edit( $id ) {
        //
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
