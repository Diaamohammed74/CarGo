@extends('front.partials.master')

@section('title', 'About us')

@section('style-sheets')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="{{ asset('assets-front/css/style_about.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-front/css/bootstrap.min.css') }}">
@endsection

@section('content')

    <section class="info">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0">
                <div class="col-12 col-lg-6">
                    <div class="about">
                        <h3 class="text-1">Car<span class="text-2">GO</span></h3>
                        <p class="text-3">Lorem ipsum dolor sit abet, connecter advising elit, sed do
                            <br />eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                            <br /> enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            <br />nisi ut aliquip ex ea commodo consequat. Duis .
                        </p>
                    </div>
                </div>

                <div class="col-12 col-lg-6  im">
                    <div class="d-flex mech">
                        <div class="images d-flex">
                            <div class="img-1">
                                <img src="{{ asset('assets-front/images/Rectangle 243 (2).png') }}" alt=""
                                    srcset="">
                            </div>
                            <div class="img-2">
                                <img src="{{ asset('assets-front/images/Rectangle 241 (1).png') }}" alt=""
                                    srcset="">
                            </div>

                            <div class="img-3">
                                <img src="{{ asset('aseets-front/images/Rectangle 240 (1).png') }}" alt=""
                                    srcset="">
                            </div>
                            <div class="img-4">
                                <img src="{{ asset('assets-front/images/Rectangle 242.png') }}" alt=""
                                    srcset="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 ">
                    <div class="count">
                        <div class="row counters d-flex " data-aos="fade-up" data-aos-delay="100">
                            <div class="col-md-2">
                                <span data-purecounter-start="1700" data-purecounter-end="1,791"
                                    data-purecounter-duration="0" class="purecounter">1,791</span>
                                <p>Customer</p>
                            </div>
                            <div class="col-md-2">
                                <span data-purecounter-start="0" data-purecounter-end="17" data-purecounter-duration="0"
                                    class="purecounter">17</span>
                                <p>Projects</p>
                            </div>
                            <div class="col-md-2">
                                <span data-purecounter-start="2,100" data-purecounter-end="2,345"
                                    data-purecounter-duration="0" class="purecounter">2,345</span>
                                <p>Complete</p>
                            </div>
                            <div class="col-md-2">
                                <span data-purecounter-start="100" data-purecounter-end="345" data-purecounter-duration="0"
                                    class="purecounter">345</span>
                                <p>Purchases</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end section info -->

    <!-- =========================================== -->

    <!-- Start section mission -->
    <section class="mission animate__animated animate__backInUp">
        <div class="container">
            <div class="row">
                <h4 class="our">Our Mission</h4>
                <div class="col-md-6">
                    <div class="miss">
                        <div class="num-1 d-flex">
                            <p class="text-4">1. </p>
                            <p class="text-5">Mission Num1</p>
                        </div>
                        <p class="text-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            <br>eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <div class="num-1 d-flex">
                            <p class="text-4">2. </p>
                            <p class="text-5">Mission Num2</p>
                        </div>
                        <p class="text-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            <br>eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <div class="num-1 d-flex">
                            <p class="text-4">3. </p>
                            <p class="text-5">Mission Num3</p>
                        </div>
                        <p class="text-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            <br>eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="images/20943958 1 (1).png" alt="" srcset="">
                </div>
            </div>
        </div>
    </section>
    <!-- end section mission-->

    <section class="feature">
        <div class="container">
            <div class="circle">
                <h5 class="fet">Features</h5>
                <div class="circ"></div>
                <div class="line"></div>
            </div>
            <div class="row d-flex">
                <div class="fet-1">
                    <h6 class="fett">FeatureNumber1</h6>
                    <p class="text-fet text-center">Lorem ipsum dolor sit amet, consectetur
                        <br>adipiscing elit, sed do, consectetur
                        <br>adipiscing elit, sed
                    </p>
                </div>
                <div class="line-left"></div>
            </div>
            <div class="row d-flex justify-content-end">
                <div class="line-right"></div>
                <div class="fet-2">
                    <h6 class="fett">FeatureNumber2</h6>
                    <p class="text-fet text-center">Lorem ipsum dolor sit amet, consectetur
                        <br>adipiscing elit, sed do, consectetur
                        <br>adipiscing elit, sed
                    </p>
                </div>
            </div>
            <div class="row d-flex">
                <div class="fet-1">
                    <h6 class="fett">FeatureNumber3</h6>
                    <p class="text-fet text-center">Lorem ipsum dolor sit amet, consectetur
                        <br>adipiscing elit, sed do, consectetur
                        <br>adipiscing elit, sed
                    </p>
                </div>
                <div class="line-left"></div>
            </div>
            <div class="row d-flex justify-content-end">
                <div class="line-right"></div>
                <div class="fet-2">
                    <h6 class="fett">Feature Number4</h6>
                    <p class="text-fet text-center">Lorem ipsum dolor sit amet, consectetur
                        <br>adipiscing elit, sed do, consectetur
                        <br>adipiscing elit, sed
                    </p>
                </div>
            </div>
            <div class="row d-flex">
                <div class="fet-1">
                    <h6 class="fett">Feature Number5</h6>
                    <p class="text-fet text-center">Lorem ipsum dolor sit amet, consectetur
                        <br>adipiscing elit, sed do, consectetur
                        <br>adipiscing elit, sed
                    </p>
                </div>
                <div class="line-left"></div>
            </div>
            <div class="row d-flex justify-content-end">
                <div class="line-right"></div>
                <div class="fet-2">
                    <h6 class="fett">Feature Number6</h6>
                    <p class="text-fet text-center">Lorem ipsum dolor sit amet, consectetur
                        <br>adipiscing elit, sed do, consectetur
                        <br>adipiscing elit, sed
                    </p>
                </div>
            </div>
            <div class="circle-2">
                <div class="circ"></div>
            </div>
        </div>
    </section>
    <!-- ================End section feature اللهم لك الحمد حتي ترضي ولك الحمد ان رضيت الحمدلله الذي وفقنا لهذا من غير حول لنا ولا قوة================ -->

    <!-- ===================================================== -->
    <!-- Start Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <div id="testimonialsCarousel" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <h4 class="text-11">Testimonials</h4>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="{{ asset('assets-front/images/testimonialsP1.jpeg') }}" class="card-img-top"
                                        alt="review 1">
                                    <div class="card-body">
                                        <div class="d-flex  tech">
                                            <h5 class="card-title">Mariam Khairy</h5>
                                        </div>
                                        <p class="card-text "><i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                                            <i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                                            <i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                                            <i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                                        </p>
                                        <p class="text-10">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                            veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. “</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="{{ asset('assets-front/images/testimonialsP1.jpeg') }}" class="card-img-top"
                                        alt="review 2">
                                    <div class="card-body">
                                        <div class="d-flex  tech">
                                            <h5 class="card-title">Mariam Khairy</h5>
                                        </div>
                                        <p class="card-text "><i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                                            <i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                                            <i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                                            <i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                                        </p>
                                        <p class="text-10">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                            veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. “</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="{{ asset('assets-front/images/testimonialsP1.jpeg') }}" class="card-img-top"
                                        alt="review 3">
                                    <div class="card-body">
                                        <div class="d-flex  tech">
                                            <h5 class="card-title">Mariam Khairy</h5>
                                        </div>
                                        <p class="card-text "><i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                                            <i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                                            <i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                                            <i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                                        </p>
                                        <p class="text-10">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                            veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. “</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="{{ asset('assets-front/images/testimonialsP1.jpeg') }}" class="card-img-top"
                                        alt="review 3">
                                    <div class="card-body">
                                        <div class="d-flex  tech">
                                            <h5 class="card-title">Mariam Khairy</h5>
                                        </div>
                                        <p class="card-text "><i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                                            <i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                                            <i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                                            <i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                                        </p>
                                        <p class="text-10">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                            veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. “</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </section>

@endsection
