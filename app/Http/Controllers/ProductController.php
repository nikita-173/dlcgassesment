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


    public function addProductPage($message = null){
        $categories = Category::distinct()->where('active', '=', 1)->orderBy('name', 'asc')->get();
        return view('add_product',compact('categories', 'message'));
    }


    public function addProduct(Request $request){
        $message = "Product not added";
        if(empty($request->name) || empty($request->category) || empty($request->price)){
            $message =  "Please provide all the details.";
            return $this->addProductPage($message );
        }
        $product = Product::where('name', '=', $request->name)->first();
        if(empty($product)){
            $product = Product::create(['name' => $request->name, 'price' => $request->price, 'active' => 1]);
        }
   
        $productCategory = Category::where('id', '=', $request->category)->first();
        if(!empty($productCategory)){
            $assignCategory = CategoryProduct::firstOrCreate(['category_id'=> $productCategory->id, 'product_id'=> $product->id]);
            $assignCategory->category_id = $productCategory->id;
            $assignCategory->product_id = $product->id;
            $assignCategory->active = 1;
            $assignCategory->save();
            
        }
        $message = "Product added successfully!";
      
        return $this->addProductPage($message );
    }
}
