<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'products', function ( Blueprint $table ) {
            $table->id();
            $table->string( 'title' );
            $table->string( 'slug' );
            $table->string( 'subtitle' );
            $table->integer( 'category_id' )->defaut( 0 );
            $table->string( 'model' )->nullable();
            $table->string( 'fuel_type' )->nullable();
            $table->string( 'cc' )->nullable();
            $table->string( 'price' );
            $table->string( 'quantity' );
            $table->string( 'sell_price' )->nullable();
            $table->integer( 'user_id' );
            $table->string( 'meta_title' )->nullable();
            $table->string( 'meta_keyword' )->nullable();
            $table->text( 'meta_description' )->nullable();
            $table->text( 'url' )->nullable();
            $table->text( 'image' )->nullable();
            $table->tinyInteger( 'status' );
            $table->softDeletes();
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists( 'products' );
    }
}
