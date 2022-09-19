@extends('admin.master')

@section('title')
    <title>Admin | Dashboard</title>
@endsection

@section('body')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <div class="card">
                            <div class="card-header text-center text-white bg-danger">
                                <h3>Manage Dashboard</h3>
                            </div>
                            <div class="card-body">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="nav">
                                                <li class="nav-item btn btn-primary">
                                                    <a href="#" class="nav-link text-white">Category</a>
                                                    <ul class="bg-gradient-warning">
                                                        <li class="nav-item">
                                                            <a href="{{route('add-category')}}" class="nav-link">Add Category</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="{{route('manage-category')}}" class="nav-link">View Category</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="nav">
                                                <li class="nav-item btn btn-primary">
                                                    <a href="#" class="nav-link text-white">Product</a>
                                                    <ul class="bg-gradient-warning">
                                                        <li class="nav-item">
                                                            <a href="{{route('add-product')}}" class="nav-link">Add Product</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="{{route('manage-product')}}" class="nav-link">Manage Product</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="nav">
                                                <li class="nav-item btn btn-primary">
                                                    <a href="#" class="nav-link text-white">Blog</a>
                                                    <ul class="bg-gradient-warning">
                                                        <li class="nav-item">
                                                            <a href="{{route('add-blog')}}" class="nav-link">Add Blog</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="{{route('manage-blog')}}" class="nav-link">Manage Blog</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

        </div>
    </div>
@endsection
