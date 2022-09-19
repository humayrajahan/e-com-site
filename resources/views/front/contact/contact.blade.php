@extends('front.master')

@section('title')
    <title>Contact</title>
@endsection

@section('body')
    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.6953961985437!2d90.39794081445535!3d23.722569295757026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8e468252ba5%3A0x9733a402a1f4d1b8!2sShaikh%20Burhanuddin%20Post%20Graduate%20College!5e0!3m2!1sen!2sbd!4v1634824499068!5m2!1sen!2sbd" style="border:0; height: 300px; width: 100%;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__form">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Email">
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Message"></textarea>
                                    <button type="submit" class="site-btn">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

@endsection
