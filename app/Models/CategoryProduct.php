<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Product;

class CategoryProduct extends Model
{
    use HasFactory;

    protected $table ='category_product';

    // Fillable fields
        protected $fillable   = [
            'category_id',
            'product_id',
            'active'
        ];
    
    // Hide fields
        protected $hidden = [
            'created_at',
            'updated_at'
        ];
    
    
    public function Category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function Product(){
        return $this->belongsTo(Product::class, 'product_id');
    }
}
