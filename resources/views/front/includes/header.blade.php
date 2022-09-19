<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/front-assets/img/logo.png') }}">

    <title>Home | Page</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
          rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('/')}}/front-assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('/')}}/front-assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('/')}}/front-assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{asset('/')}}/front-assets/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="{{asset('/')}}/front-assets/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="{{asset('/')}}/front-assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('/')}}/front-assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('/')}}/front-assets/css/style.css" type="text/css">
</head>

<body>
<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7">
                    <div class="header__top__left">
                        <p>Welcome to the site.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <div class="header__top__right">
                        <div class="header__top__links">
                            @if (Auth::guest())
                                <a href="{{route('member-login')}}">Sign in</a>
                                <a href="{{route('member-register')}}">Register</a>
                            @else
                                {{ Auth::user()->name }}
                                <a href="" onclick="event.preventDefault();document.getElementById('logoutMember').submit();"><span> Logout {{ Auth::user()->name }}</span></a>
                                <form action="{{ route('logout') }}" method="POST" id="logoutMember">
                                    @csrf
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2">
                <div class="header__logo">
                    <a href="{{route('/')}}"><img src="{{asset('/')}}/front-assets/img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-7 col-md-7">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li class="active"><a href="{{route('/')}}">Home</a></li>
                        <li><a href="{{route('course')}}">Course</a></li>
                        <li><a href="{{route('goods')}}">Goods</a></li>
{{--                        <li><a href="{{route('product')}}">Product</a>--}}
{{--                            <ul class="dropdown">--}}
{{--                                <li><a href="{{route('course')}}">Courses</a></li>--}}
{{--                                <li><a href="{{route('goods')}}">Goods</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
                        <li><a href="{{route('blog')}}">Blog</a></li>
                        <li><a href="{{route('blog')}}">Career Guide</a></li>
                        <li><a href="{{route('about')}}">About Us</a></li>
                        <li><a href="{{route('contact')}}">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="header__nav__option">
                    <a href="#" class="search-switch"><img src="{{asset('/')}}/front-assets/img/icon/search.png" alt=""></a>
                    <a href="{{route('cart')}}"><img src="{{asset('/')}}/front-assets/img/icon/cart.png" alt=""><span>{{ Cart::getTotalQuantity()}}</span></a>
                </div>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>
<!-- Header Section End -->
