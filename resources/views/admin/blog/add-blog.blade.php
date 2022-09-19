@extends('admin.master')

@section('title')
    <title>Add New Blog</title>
@endsection

@section('body')


    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Add Blog</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Add Blog</li>
                        </ul>
                    </div>

                    <div class="col-auto float-right ml-auto">
                        <a href="{{ route('manage-blog') }}" class="btn add-btn" ><i class="fa fa-eye"></i>View All Blogs</a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            @include('admin.includes.massage')
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-body">
                            <form action="{{ route('new-blog') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="text-center">
                                    <img src="" alt="" width="200px" id="one" style="margin-top: 15px; margin-bottom: 10px">
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Blog Title</label>
                                            <input class="form-control "  type="text" name="blog_title" >
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="category_name">Post Image</label>
                                            <input class="form-control " type="file" name="image" accept="image/*" onchange="readURL(this)">
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="author">Author Name</label>
                                            <input name="author" id="author"  class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="blog_content_short">Short Description</label>
                                            <textarea name="short_description" id="blog_content_short" cols="30" rows="3" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="blog_content_long">Long Description</label>
                                            <textarea name="long_description" id="blog_content_long" cols="30" rows="6" class="form-control"></textarea>
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
                                    <button type="submit" class="btn btn-primary">Add Blog</button>
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
