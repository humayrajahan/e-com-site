@extends('admin.master')

@section('title')
    <title>All Products</title>
@endsection

@section('body')


    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">View All Products</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">All Products</li>
                        </ul>
                    </div>

                    <div class="col-auto float-right ml-auto">
                        <a href="{{ route('add-product') }}" class="btn add-btn" ><i class="fa fa-plus"></i> Add Product</a>
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
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Regular_price</th>
                                        <th>Status</th>
                                        <th>Updated At</th>
                                        <th>Created At</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>
                                                <img src="{{ asset($product->image) }}" alt="" width="150px">
                                            </td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->category->name }}</td>
                                            <td>{{ $product->regular_price }}</td>
                                            <td>
                                                @if($product->status == 1)
                                                    <span class="badge badge-success">Published</span>
                                                @else
                                                    <span class="badge badge-danger">Draft</span>
                                                @endif
                                            </td>
                                            <td>{{ $product->updated_at->diffForHumans() }}</td>
                                            <td>{{ $product->created_at->diffForHumans() }}</td>
                                            <td>
                                                <a href="{{ route('edit-product', $product->id) }}" class="btn btn-info btn-sm">
                                                    <i class="la la-edit"></i>
                                                </a>

                                                <a href="{{ route('delete-product', ['id' => $product->id]) }}" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm deleteRecord">
                                                    <i class="la la-trash"></i>
                                                </a>
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
