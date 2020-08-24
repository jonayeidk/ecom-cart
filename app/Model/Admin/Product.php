<?php

namespace App\Model\Admin;

use App\Model\Admin\Category;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    protected $guarded = [];

    public function product_category() {
        return $this->belongsTo( Category::class );
    }
}
