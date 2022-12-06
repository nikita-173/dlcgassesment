<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">
        <title>DLCG Assessment</title>
    </head>
    <body class="antialiased">
        <h1> DLCG Assessment </h1>
        <div style="float:right;">
            <a href="/api/product-categories" style="padding-right:30px;"> Product Categories</a>  
            <a href="/products-by-category" style="padding-right:30px;"> Show Products By Categories</a> 
        </div>
        <div style="margin-top:100px;">
            <h2>Product Categories</h2>
            @foreach($productCategories as $productCategory)
            <li> {{ $productCategory->name}}</li>
            @endforeach
        </div>
    
    </body>
</html>
