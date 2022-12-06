<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DLCG Assessment</title>
    </head>
    <body class="antialiased">
        <h1> DLCG Assessment </h1>
        <div style="float:right;">
            <a href="/api/product-categories" style="padding-right:30px;"> Product Categories</a>  
            <a href="/products-by-category" style="padding-right:30px;"> Show Products By Categories</a> 
            <a href="/add-product" style="padding-right:30px;"> Add Product</a>  
        </div>
    </body>
</html>
