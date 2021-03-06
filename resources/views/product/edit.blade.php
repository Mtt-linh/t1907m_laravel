@extends("layout")
@section("contentHeader","Category")
@section("title","Create a new category")
@section("Content")
    <!-- form start -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        {{--        update thì method sẽ là put method trong form thi phai la post @method thi la put--}}
        <form role="form" action="{{url("admin/update-product/{$product->__get("id")}")}}" method="post" enctype="multipart/form-data">
            @method("PUT")
            {{--            // method"POST" dùng để báo route--}}
            @csrf
            {{--            // dùng để tạo mã token nếu thiếu sẽ báo lỗi 419--}}
            <div class="card-body">
                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" value="{{$product->__get("product_name")}}" name="product_name" class="form-control @error("product_name") is-invalid @enderror" placeholder="New Product Name">
                    @error("product_name")
                    <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Product Image</label>
                    <p>Old Image</p><img src="{{$product->getImage()}}" width="60px"/>
                    <input type="file" name="product_image" class="form-control" placeholder="New Product Name"/>
                </div>
                <div class="form-group">
                    <label>Product Desc</label>
                    <textarea name="product_desc" value="{{$product->__get("product_desc")}}" class="form-control @error("product_desc") is-invalid @enderror" placeholder="New Product Desc"></textarea>
                    @error("product_desc")
                    <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" name="price"  value="{{$product->__get("price")}}" class="form-control @error("price") is-invalid @enderror" placeholder="New Product Price">
                    @error("price")
                    <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Qty</label>
                    <input type="text" name="qty" value="{{$product->__get("qty")}}" class="form-control @error("qty") is-invalid @enderror" placeholder="New Product Qty">
                    @error("qty")
                    <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <select name="category_id" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{$category->__get("id")}}">{{$category->__get("category_name")}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Brand</label>
                    <select name="brand_id" class="form-control">
                        @foreach($brands as $brand)
                            <option value="{{$brand->__get("id")}}">{{$brand->__get("brands_name")}}</option>
                        @endforeach
                    </select>
                </div>
                {{--                // biến error để lưu lỗi--}}
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.card -->

    <!-- Form Element sizes -->

@endsection
