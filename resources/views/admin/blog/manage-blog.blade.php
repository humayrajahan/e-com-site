@extends('admin.master')

@section('title')
    <title>All Blogs</title>
@endsection

@section('body')


    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">View All Blogs</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">All Blogs</li>
                        </ul>
                    </div>

                    <div class="col-auto float-right ml-auto">
                        <a href="{{ route('add-blog') }}" class="btn add-btn" ><i class="fa fa-plus"></i> Add Blog</a>
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
                                        <th>Blogs Title</th>
                                        <th>Author</th>
                                        <th>Status</th>
                                        <th>Updated At</th>
                                        <th>Created At</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($blogs as $blog)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>
                                                <img src="{{ asset($blog->image) }}" alt="" width="150px">
                                            </td>
                                            <td>{{ $blog->blog_title }}</td>
                                            <td>{{ $blog->author }}</td>
                                            <td>
                                                @if($blog->status == 1)
                                                    <span class="badge badge-success">Published</span>
                                                @else
                                                    <span class="badge badge-danger">Draft</span>
                                                @endif
                                            </td>
                                            <td>{{ $blog->updated_at->diffForHumans() }}</td>
                                            <td>{{ $blog->created_at->diffForHumans() }}</td>
                                            <td>
                                                <a href="{{ route('edit-blog', $blog->id) }}" class="btn btn-info btn-sm">
                                                    <i class="la la-edit"></i>
                                                </a>

                                                <a href="{{ route('delete-blog', ['id' => $blog->id]) }}" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm deleteRecord">
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
