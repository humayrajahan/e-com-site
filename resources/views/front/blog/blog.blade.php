@extends('front.master')

@section('title')
    <title>Blogs</title>
@endsection

@section('body')
    <!-- Latest Blog Section Begin -->
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Latest Blogs</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($blogs as $blog)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="{{ asset( $blog->image ) }}"></div>
                        <div class="blog__item__text">
                            <span><img src="{{asset('/')}}/front-assets/img/icon/calendar.png" alt="">{{ $blog->updated_at->diffForHumans() }}</span>
                            <h5>{{ $blog->blog_title }}</h5>
                            <a href="{{ route('blog-details',['id'=> $blog->id]) }}">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->

@endsection
