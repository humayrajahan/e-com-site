@extends('front.master')

@section('title')
    <title>About Us</title>
@endsection

@section('body')
    <!-- Latest Blog Section Begin -->
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 about__pic">
                    <img src="{{asset('/')}}/front-assets/img/about-us.png">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body about-text">
                            <div class="card-header">
                                <h4 class="text-center text-bold">Vision</h4>
                            </div>
                            <h5>Building society through economic empowerment.</h5><hr>
                            <div class="card-header">
                                <h4 class="text-center text-bold">Mission</h4>
                            </div><hr>
                            <h5>a) Development of nationwide marketing network for entrepreneurs;</h5>
                            <h5>b) Marketing network centers vary from village to city, from production to marketing;</h5>
                            <h5>c) By developing the supply chain and empowering men to economically engage them at various stages of the chain.</h5>
                            <hr>
                            <div class="card-header">
                                <h4 class="text-center text-bold">Strategic Objectives</h4>
                            </div>
                            <h5>a) Capacity building of specialized institution in economic empowerment;</h5>
                            <h5>b) Increasing the business-friendly institutional capacity of grassroots entrepreneurs associations working under the platform;</h5>
                            <h5>c) Development of physical market structure with provision of all necessary support services and creation of business-friendly environment;</h5>
                            <h5>d) To equip person with the necessary capabilities and skills for multifaceted business ventures.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->

@endsection
