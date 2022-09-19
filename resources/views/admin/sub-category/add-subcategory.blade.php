@extends('admin.master')

@section('title')
    <title>Add New Category</title>
@endsection

@section('body')


    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Add Category</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Add Category</li>
                        </ul>
                    </div>

                    <div class="col-auto float-right ml-auto">
                        <a href="{{ route('manage-subcategory') }}" class="btn add-btn" ><i class="fa fa-eye"></i> View All  Sub-Category</a>
                    </div>
                </div>
            </div>

        @include('admin.includes.massage')
        <!-- /Page Header -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-body">
                            <form action="{{ route('new-subcategory') }}" method="post">
                                @csrf
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
                                            <label for="sub_category_name">Sub Category Name</label>
                                            <input type="text" class="form-control" name="name" id="sub_category_name">
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

                                <div class="text-left">
                                    <button type="submit" class="btn btn-primary">Add Category</button>
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
