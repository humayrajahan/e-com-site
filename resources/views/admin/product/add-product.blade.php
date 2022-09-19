@extends('admin.master')

@section('title')
    <title>Add New Product</title>
@endsection

@section('body')


    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Add Product</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Add Product</li>
                        </ul>
                    </div>

                    <div class="col-auto float-right ml-auto">
                        <a href="{{ route('manage-product') }}" class="btn add-btn" ><i class="fa fa-eye"></i>View All Products</a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            @include('admin.includes.massage')
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-body">
                            <form action="{{ route('new-product') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="text-center">
                                    <img src="" alt="" width="200px" id="one" style="margin-top: 15px; margin-bottom: 10px">
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="category_id">Category</label>
                                            <select name="category_id" id="category_id" class="form-control">
                                                <option value="" disabled="" selected >Select a Category</option>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="category_name">Post Image</label>
                                            <input class="form-control " type="file" name="image" accept="image/*" onchange="readURL(this)">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="sub_category_id">Sub-Category</label>
                                            <select name="sub_category_id" id="sub_category_id" class="form-control">
                                                <option value="" disabled="" selected >Select a Sub-Category</option>
                                                @foreach($subCategories as $subCategory)
                                                    <option value="{{ $subCategory->id }}">{{ $subCategory->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Product Name</label>
                                            <input name="name" id="name"  class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Regular Price</label>
                                            <input class="form-control "  type="text" name="regular_price" >
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Selling Price</label>
                                            <input class="form-control "  type="text" name="selling_price" >
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="product_content_short">Short Description</label>
                                            <textarea name="short_description" id="product_content_short" cols="30" rows="3" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="product_content_long">Long Description</label>
                                            <textarea name="long_description" id="product_content_long" cols="30" rows="6" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-check" data-children-count="1">
                                                <input class="form-check-input" type="checkbox" value="1" name="status" id="status" checked>
                                                <label class="form-check-label" for="invalidCheck">
                                                    Mark as Published
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <hr>
                                <div class="text-left">
                                    <button type="submit" class="btn btn-primary">Add Product</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
    <!-- /Page Wrapper -->

@endsection

@section('js')

    <script>
        function readURL(input){
            if(input.files && input.files[0]){
                var reader = new FileReader();
                reader.onload = function (e){
                    $("#one").attr('src', e.target.result).width(300)
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

@endsection
