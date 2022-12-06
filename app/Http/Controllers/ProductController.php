<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\CategoryProduct;

class ProductController extends Controller
{
    public function productCategories(){
        $productCategories = [];
        $productCategories = Category::distinct()->where('active', '=', 1)->orderBy('name', 'asc')->get();
        return view('product_categories',compact('productCategories'));
    }

    public function productsByCategory(){
        $productsByCategory = [];
        $productsByCategory = Category::distinct()->where('active', '=', 1)->orderBy('name', 'asc')->with('CategoryProduct.Product')->get();
        return view('products_by_category',compact('productsByCategory'));
    }


    
}
