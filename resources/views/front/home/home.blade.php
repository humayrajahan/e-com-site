@extends('front.master')

@section('title')
    <title>Home | Page</title>
@endsection

@section('body')
    <!-- Hero Section Begin -->
    <section class="hero">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('/')}}/front-assets/img/b1.jpg" alt="First slide" class="myBg">
                    <div class="carousel-caption my-caption text-white">
                        <h2>E-COMMERCE PLATFORM</h2>
                        <a href="#" class="btn btn-primary">Shopping Online</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/')}}/front-assets/img/bg1.png" alt="Second slide" class="myBg">
                    <div class="carousel-caption my-caption text-white">
                        <h2>CAREER COUNSELLING</h2>
                        <a href="#" class="btn btn-primary">Details</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/')}}/front-assets/img/bg2.png" alt="Third slide" class="myBg">
                    <div class="carousel-caption my-caption text-white">
                        <h2>ENTREPRENEURSHIP SERVICES</h2>
                        <a href="#" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>

    </section>
    <!-- Hero Section End -->

    <section class="counter spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item">
                        <div class="counter__item__number">
                            <img width="50" src="{{asset('/')}}/front-assets/img/icon/roket.png">
                        </div>
                        <span>Delivery <br />Across the country</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item">
                        <div class="counter__item__number">
                            <img width="50" src="{{asset('/')}}/front-assets/img/icon/payment.png">
                        </div>
                        <span>Payment <br />100% safe payment</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item">
                        <div class="counter__item__number">
                            <img width="50" src="{{asset('/')}}/front-assets/img/icon/help.png">
                        </div>
                        <span>Support <br />Service Assurance</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item">
                        <div class="counter__item__number">
                            <img width="50" src="{{asset('/')}}/front-assets/img/icon/quality.png">
                        </div>
                        <span>Guaranteed <br />Product and quality</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section Begin -->
    <section class="categories spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="about__item">
                        <h4>Who We Are ?</h4>
                        <ul>
                            <li>Building society through economic empowerment.</li>
                            <li>We can make the network between the rural entrepreneurs.</li>
                            <li>This is an e-commerce platform.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="about__item">
                        <h4>Who We Do ?</h4>
                        <ul>
                            <li> Development of nationwide marketing network for entrepreneurs;</li>
                            <li> Marketing network centers vary from village to city, from production to marketing;</li>
                            <li> By developing the supply chain and empowering men to economically engage them at various stages of the chain.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="about__item">
                        <h4>Why Choose Us</h4>
                        <ul>
                            <li>Capacity building of specialized institution in economic empowerment;</li>
                            <li>Increasing the business-friendly institutional capacity of grassroots entrepreneurs associations working under the platform;</li>
                            <li>Development of physical market structure with provision of all necessary support services and creation of business-friendly environment;</li>
                            <li>To equip person with the necessary capabilities and skills for multifaceted business ventures.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">Courses</li>
                    </ul>
                </div>
            </div>
            <div class="row product__filter">
                @foreach($products as $product)
                <div class="col-lg-4 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                    <div class="product__item sale">
                        <div class="product__item__pic set-bg" data-setbg="{{asset($product->image)}}">
                            <span class="label text-white"><a href="{{ route('product-details',['id'=> $product->id]) }}">Details </a></span>
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
                                <button class="bg-danger rounded float-left">Add To Cart</button>
                            </form>

                            <h5>{{$product->selling_price}} ৳</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Categories Section Begin -->
    <section class="categories spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="categories__hot__deal">
                        <img src="{{asset('/')}}/front-assets/img/1.jpeg" alt="">
                        <div class="hot__deal__sticker">
                            <span>Sale Of</span>
                            <h5>5000 ৳</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="categories__deal__countdown">
                        <span>Deal Of The Week</span>
                        <h2>Web Development</h2>
                        <div class="categories__deal__countdown__timer" id="countdown">
                            <div class="cd-item">
                                <span>3</span>
                                <p>Days</p>
                            </div>
                            <div class="cd-item">
                                <span>1</span>
                                <p>Hours</p>
                            </div>
                            <div class="cd-item">
                                <span>50</span>
                                <p>Minutes</p>
                            </div>
                            <div class="cd-item">
                                <span>18</span>
                                <p>Seconds</p>
                            </div>
                        </div>
                        <a href="{{ route('product-details',['id'=>10]) }}" class="primary-btn">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

@endsection
