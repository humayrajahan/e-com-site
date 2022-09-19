@extends('admin.master')

@section('title')
    <title>All Categories</title>
@endsection


@section('body')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">View All Sub-Categories</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">All Categories</li>
                        </ul>
                    </div>

                    <div class="col-auto float-right ml-auto">
                        <a href="{{ route('add-subcategory') }}" class="btn add-btn" ><i class="fa fa-plus"></i> Add Sub-Category</a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            @include('admin.includes.massage')
            <div class="row">
                <div class="col-sm-12">
                    <div class="card mb-0">

                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="datatable table table-stripped mb-0">
                                    <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Category Name</th>
                                        <th>Sub-Category Name</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($subCategories as $subCategory)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $subCategory->category->name }}</td>
                                            <td>{{ $subCategory->name }}</td>
                                            <td>
                                                @if($subCategory->status == 1)
                                                    <p><a href="#" class="text-success">Active</a></p>
                                                @else
                                                    <p><a href="#" class="text-danger">In Active</a></p>
                                                @endif
                                            <td>
                                                <a href="{{ route('delete-subcategory', ['id' => $subCategory->id]) }}" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /Page Wrapper -->

@endsection
