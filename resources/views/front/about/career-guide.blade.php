@extends('front.master')

@section('title')
    <title>Career Guide</title>
@endsection

@section('body')
    <section class="latest spad">
        <img class="col-md-12 career" src="{{asset('/')}}/front-assets/img/2.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Career Guideer</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="career-wrapper">
                        <div class="career-image float-left">
                            <img src="{{asset('/')}}/front-assets/img/selim.jpg" alt="" class="" />
                        </div>
                        <div class="career-content float-left">
                            <div class="inner-content">
                                <h5> Mohammad Selim</h5>
                                <div class="inner-line"></div>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt, commodi porro.
                                    Nostrum officiis at dicta?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="career-wrapper">
                        <div class="career-image float-left">
                            <img src="{{asset('/')}}/front-assets/img/pro.png" alt="" class="" />
                        </div>
                        <div class="career-content float-left">
                            <div class="inner-content">
                                <h5> Zannat Afroz</h5>
                                <div class="inner-line"></div>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt, commodi porro.
                                    Nostrum officiis at dicta?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="career-wrapper">
                        <div class="career-image float-left">
                            <img src="{{asset('/')}}/front-assets/img/daisy.png" alt="" class="" />
                        </div>
                        <div class="career-content float-left">
                            <div class="inner-content">
                                <h5> Shamima Nasrin</h5>
                                <div class="inner-line"></div>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt, commodi porro.
                                    Nostrum officiis at dicta?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="career-wrapper">
                        <div class="career-image float-left">
                            <img src="{{asset('/')}}/front-assets/img/nishat.jpg" alt="" class="" />
                        </div>
                        <div class="career-content float-left">
                            <div class="inner-content">
                                <h5> Humayra Jahan</h5>
                                <div class="inner-line"></div>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt, commodi porro.
                                    Nostrum officiis at dicta?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
