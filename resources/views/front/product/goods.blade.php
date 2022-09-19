@extends('front.master')

@section('title')
    <title>Goods</title>
@endsection

@section('body')
    <!-- Latest Blog Section Begin -->
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop__product__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__left">
                                    <p>Showing all Goods</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{asset($product->image)}}">
                                        <span class="label text-white" style="background-color: red;"><a href="{{ route('product-details',['id'=> $product->id]) }}">Details</a></span>
                                        <ul class="product__hover">
                                            <li><a href="#"><img src="{{asset('/')}}/front-assets/img/icon/heart.png" alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('/')}}/front-assets/img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                                            <li><a href="#"><img src="{{asset('/')}}/front-assets/img/icon/search.png" alt=""></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h5>{{ $product->name }}</h5>
                                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" value="{{ $product->id }}" name="id">
                                            <input type="hidden" value="{{ $product->name }}" name="name">
                                            <input type="hidden" value="{{ $product->selling_price }}" name="price">
                                            <input type="hidden" value="{{ $product->image }}"  name="image">
                                            <input type="hidden" value="1" name="quantity">
                                            <button class="bg-danger rounded">Add To Cart</button>
                                        </form>
                                        <h5>{{$product->selling_price}} ৳</h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
