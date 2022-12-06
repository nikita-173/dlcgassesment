<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CategoryProduct;

class Product extends Model
{
    use HasFactory;

    protected $table ='products';

// Fillable fields
    protected $fillable  = [
        'name',
        'price',
        'active'
    ];

// Hide fields
    protected $hidden = [
        'created_at',
        'updated_at'
    ];


public function CategoryProduct(){
    return $this->hasMany(CategoryProduct::class);
}

}
