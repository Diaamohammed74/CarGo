@extends('front.partials.master')

@section('title', 'About us')

@section('style-sheet')
    <link rel="stylesheet" href="{{ asset('assets-front/css/style_about.css') }}">
@endsection

@section('content')
    <section class="info">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 mt-3 d-flex flex-column justify-content-between align-items-center">
                    <div class="about">
                        <h3 class="text-1">Car<span class="text-2">GO</span></h3>
                        <p class="text-3">
                            Lorem ipsum dolor sit abet, connecter advising elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                            enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat. Duis .
                        </p>
                    </div>
                    <div class="count row w-100 bg-light p-4 rounded my-4">
                        <div class="row counters d-flex " data-aos="fade-up" data-aos-delay="100">
                            <div class="col-lg-3 col-md-6 col-sm-6 text-center">
                                <span data-purecounter-start="1700" data-purecounter-end="1,791"
                                    data-purecounter-duration="0" class="purecounter text-center w-100">1,791</span>
                                <p class="text-center w-100">Customer</p>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 text-center">
                                <span data-purecounter-start="0" data-purecounter-end="17" data-purecounter-duration="0"
                                    class="purecounter">17</span>
                                <p>Projects</p>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 text-center">
                                <span data-purecounter-start="2,100" data-purecounter-end="2,345"
                                    data-purecounter-duration="0" class="purecounter">2,345</span>
                                <p>Complete</p>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 text-center">
                                <span data-purecounter-start="100" data-purecounter-end="345" data-purecounter-duration="0"
                                    class="purecounter">345</span>
                                <p>Purchases</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="d-flex flex-wrap p-3 justify-content-between align-items-center">
                        <div class="col-6 pt-4">
                            <img src="{{ asset('assets-front/images/Rectangle 243 (2).png') }}" alt=""
                                srcset="" class="w-75" />
                        </div>
                        <div class="col-6 pt-3 mt-3">
                            <img src="{{ asset('assets-front/images/Rectangle 241 (1).png') }}" alt=""
                                srcset="" class="w-75" />
                        </div>

                        <div class="col-6 pt-5">
                            <img src="{{ asset('assets-front/images/Rectangle 240 (1).png') }}" alt=""
                                srcset="" class="w-75" />
                        </div>
                        <div class="col-6 mt-3">
                            <img src="{{ asset('assets-front/images/Rectangle 242.png"') }}" alt="" srcset=""
                                class="w-75" />
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
                <div class="col-md-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="miss">
                        <div class="num-1 d-flex">
                            <p class="text-4">1.</p>
                            <p class="text-5">Mission Num1</p>
                        </div>
                        <p class="text-6">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            <br />eiusmod tempor incididunt ut labore et dolore magna
                            aliqua.
                        </p>
                        <div class="num-1 d-flex">
                            <p class="text-4">2.</p>
                            <p class="text-5">Mission Num2</p>
                        </div>
                        <p class="text-6">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            <br />eiusmod tempor incididunt ut labore et dolore magna
                            aliqua.
                        </p>
                        <div class="num-1 d-flex">
                            <p class="text-4">3.</p>
                            <p class="text-5">Mission Num3</p>
                        </div>
                        <p class="text-6">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            <br />eiusmod tempor incididunt ut labore et dolore magna
                            aliqua.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets-front/images/20943958 1 (1).png') }}" alt="" srcset=""
                        class="w-100" />
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <div id="testimonialsCarousel" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item active py-4">
                        <div class="row g-3">
                            <h4 class="text-11 mb-5">Testimonials</h4>
                            <div class="col-lg-3 col-md-6 col-sm-12 mt-5">
                                <div class="card">
                                    <div class="image" style="height: 70px; width: 70px; border-radius: 50%">
                                        <img src="{{ asset('assets-front/images/testimonialsP1.jpeg') }}"
                                            class="w-100 h-100" alt="review 1" style="border-radius: 50%" />
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex tech">
                                            <h5 class="card-title text-center text-center w-100 m-0 my-2">
                                                Mariam Khairy
                                            </h5>
                                        </div>
                                        <p class="card-text text-center w-100 m-0 mb-2">
                                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                        </p>
                                        <p class="text-10">
                                            “Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip ex
                                            ea commodo consequat. “
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 mt-5">
                                <div class="card">
                                    <div class="image" style="height: 70px; width: 70px; border-radius: 50%">
                                        <img src="{{ asset('assets-front/images/testimonialsP1.jpeg') }}"
                                            class="w-100 h-100" alt="review 1" style="border-radius: 50%" />
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex tech">
                                            <h5 class="card-title text-center text-center w-100 m-0 my-2">
                                                Mariam Khairy
                                            </h5>
                                        </div>
                                        <p class="card-text text-center w-100 m-0 mb-2">
                                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                        </p>
                                        <p class="text-10">
                                            “Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip ex
                                            ea commodo consequat. “
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 mt-5">
                                <div class="card">
                                    <div class="image" style="height: 70px; width: 70px; border-radius: 50%">
                                        <img src="{{ asset('assets-front/images/testimonialsP1.jpeg') }}"
                                            class="w-100 h-100" alt="review 1" style="border-radius: 50%" />
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex tech">
                                            <h5 class="card-title text-center text-center w-100 m-0 my-2">
                                                Mariam Khairy
                                            </h5>
                                        </div>
                                        <p class="card-text text-center w-100 m-0 mb-2">
                                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                        </p>
                                        <p class="text-10">
                                            “Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip ex
                                            ea commodo consequat. “
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 mt-5">
                                <div class="card">
                                    <div class="image" style="height: 70px; width: 70px; border-radius: 50%">
                                        <img src="{{ asset('assets-front/images/testimonialsP1.jpeg') }}"
                                            class="w-100 h-100" alt="review 1" style="border-radius: 50%" />
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex tech">
                                            <h5 class="card-title text-center text-center w-100 m-0 my-2">
                                                Mariam Khairy
                                            </h5>
                                        </div>
                                        <p class="card-text text-center w-100 m-0 mb-2">
                                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                        </p>
                                        <p class="text-10">
                                            “Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip ex
                                            ea commodo consequat. “
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

@endsection
