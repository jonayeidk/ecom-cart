<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('products')->insert([
            'title' => 'Motor Galaxy S9',
            'slug' => 'Samsung-Galaxy-S9',
            'subtitle' => 'Samsung-Galaxy-S9',
            'category_id' => 1,
            'model' => 'Samsung-Galaxy-S9',
            'fuel_type' => 'Samsung-Galaxy-S9',
            'cc' => 'Samsung-Galaxy-S9',
            'quantity' => 10000,
            'price' => 10000,
            'sell_price' => 12000,
            'user_id' => 1,
            'meta_title' => 'Samsung-Galaxy-S9',
            'meta_keyword' => 'Samsung-Galaxy-S9',
            'meta_description' => 'Samsung-Galaxy-S9',
            'url' => '/',
            'image'=>'http://127.0.0.1:8000/assets/fontend/assets/img/product/product-2.jpg',
            'status'=>1
        ]);


        DB::table('products')->insert([
            'title' => 'Hero Galaxy S9',
            'slug' => 'Samsung-Galaxy-S9',
            'subtitle' => 'Samsung-Galaxy-S9',
            'category_id' => 1,
            'model' => 'Samsung-Galaxy-S9',
            'fuel_type' => 'Samsung-Galaxy-S9',
            'cc' => 'Samsung-Galaxy-S9',
            'quantity' => 10000,
            'price' => 10000,
            'sell_price' => 12000,
            'user_id' => 1,
            'meta_title' => 'Samsung-Galaxy-S9',
            'meta_keyword' => 'Samsung-Galaxy-S9',
            'meta_description' => 'Samsung-Galaxy-S9',
            'url' => '/',
            'image'=>'http://127.0.0.1:8000/assets/fontend/assets/img/product/product-3.jpg',
            'status'=>1
        ]);
        DB::table('products')->insert([
            'title' => 'Pulsur Galaxy S9',
            'slug' => 'Samsung-Galaxy-S9',
            'subtitle' => 'Samsung-Galaxy-S9',
            'category_id' => 1,
            'model' => 'Samsung-Galaxy-S9',
            'fuel_type' => 'Samsung-Galaxy-S9',
            'cc' => 'Samsung-Galaxy-S9',
            'quantity' => 10000,
            'price' => 10000,
            'sell_price' => 12000,
            'user_id' => 1,
            'meta_title' => 'Samsung-Galaxy-S9',
            'meta_keyword' => 'Samsung-Galaxy-S9',
            'meta_description' => 'Samsung-Galaxy-S9',
            'url' => '/',
            'image'=>'http://127.0.0.1:8000/assets/fontend/assets/img/product/product-4.jpg',
            'status'=>1
        ]);
        DB::table('products')->insert([
            'title' => 'Rocky Galaxy S9',
            'slug' => 'Samsung-Galaxy-S9',
            'subtitle' => 'Samsung-Galaxy-S9',
            'category_id' => 1,
            'model' => 'Samsung-Galaxy-S9',
            'fuel_type' => 'Samsung-Galaxy-S9',
            'cc' => 'Samsung-Galaxy-S9',
            'quantity' => 10000,
            'price' => 10000,
            'sell_price' => 12000,
            'user_id' => 1,
            'meta_title' => 'Yemaha-Galaxy-S9',
            'meta_keyword' => 'Samsung-Galaxy-S9',
            'meta_description' => 'Samsung-Galaxy-S9',
            'url' => '/',
            'image'=>'http://127.0.0.1:8000/assets/fontend/assets/img/product/product-1.jpg',
            'status'=>1
        ]);
        DB::table('products')->insert([
            'title' => 'Discover Galaxy S9',
            'slug' => 'Samsung-Galaxy-S9',
            'subtitle' => 'Samsung-Galaxy-S9',
            'category_id' => 1,
            'model' => 'Samsung-Galaxy-S9',
            'fuel_type' => 'Samsung-Galaxy-S9',
            'cc' => 'Samsung-Galaxy-S9',
            'quantity' => 10000,
            'price' => 10000,
            'sell_price' => 12000,
            'user_id' => 1,
            'meta_title' => 'Samsung-Galaxy-S9',
            'meta_keyword' => 'Samsung-Galaxy-S9',
            'meta_description' => 'Samsung-Galaxy-S9',
            'url' => '/',
            'image'=>'http://127.0.0.1:8000/assets/fontend/assets/img/product/product-2.jpg',
            'status'=>1
        ]);
        DB::table('products')->insert([
            'title' => 'Hunda Galaxy S9',
            'slug' => 'Samsung-Galaxy-S9',
            'subtitle' => 'Samsung-Galaxy-S9',
            'category_id' => 1,
            'model' => 'Samsung-Galaxy-S9',
            'fuel_type' => 'Samsung-Galaxy-S9',
            'cc' => 'Samsung-Galaxy-S9',
            'quantity' => 10000,
            'price' => 10000,
            'sell_price' => 12000,
            'user_id' => 1,
            'meta_title' => 'Samsung-Galaxy-S9',
            'meta_keyword' => 'Samsung-Galaxy-S9',
            'meta_description' => 'Samsung-Galaxy-S9',
            'url' => '/',
            'image'=>'http://127.0.0.1:8000/assets/fontend/assets/img/product/product-3.jpg',
            'status'=>1
        ]);
        DB::table('products')->insert([
            'title' => 'Hunk Galaxy S9',
            'slug' => 'Samsung-Galaxy-S9',
            'subtitle' => 'Samsung-Galaxy-S9',
            'category_id' => 1,
            'model' => 'Samsung-Galaxy-S9',
            'fuel_type' => 'Samsung-Galaxy-S9',
            'cc' => 'Samsung-Galaxy-S9',
            'quantity' => 10000,
            'price' => 10000,
            'sell_price' => 12000,
            'user_id' => 1,
            'meta_title' => 'Samsung-Galaxy-S9',
            'meta_keyword' => 'Samsung-Galaxy-S9',
            'meta_description' => 'Samsung-Galaxy-S9',
            'url' => '/',
            'image'=>'http://127.0.0.1:8000/assets/fontend/assets/img/product/product-4.jpg',
            'status'=>1
        ]);
         
    }
}
