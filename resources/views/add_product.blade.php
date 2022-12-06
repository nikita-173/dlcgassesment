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
        <div style="margin-top:100px;">
            @if($message)
            <h5>{{$message}} </h5>
            @endif
            <form method="post" action="/api/add-product" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group row" style="margin-bottom: 20px">
                <label for="name" class="col-sm-3 col-form-label">Product Name</label>
                <div class="col-sm-9">
                    <input name="name" type="text" class="form-control" id="name" placeholder="Product Name">
                </div>
            </div>
            <div class="form-group row" style="margin-bottom: 20px">
                <label for="category" class="col-sm-3 col-form-label">Category</label>
                <div class="col-sm-9">
                <select name="category" id="category">
                    <option value="" :disabled>Select a category</option> 
                    @foreach($categories as $category) 
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                </div>
            </div>
            <div class="form-group row" style="margin-bottom: 20px;">
                <label for="price" class="col-sm-3 col-form-label">Price</label>
                <div class="col-sm-9">
                    <input name="price" type="text" class="form-control" id="price"
                        placeholder="Price">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-sm-3 col-sm-9">
                    <button type="submit" class="btn btn-primary">Add Product</button>
                </div>
            </div>
        </form>
        </div>
    </body>
</html>
