@extends('front.partials.master')
@section('title')
    Home
@endsection

@section('style-sheets')
    <link rel="stylesheet" href="{{ asset('assets-front/css/style_home.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-front/css/bootstrap.min.css') }}">
@endsection
@section('home-page-logo-info')
                           @include('front.partials.front.logo-info')
@endsection
@section('home-page-logo')
@include('front.partials.front.logo')
@endsection

@section('content')

<section class="problem">
    <div class="container">
        <h4 class="text-6">POPULAR CAR PROBLEMS</h4>
        <div id="probleCarousel" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        @each('front.pages.home.sections.tags', $tags, 'tag')
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="row justify-content-center">
                        <div class="col-md-2">
                            <div class="card">
                                <button class="btn popular">#Car Tires</button>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card">
                                <button class="btn popular">#Car Tires</button>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card">
                                <button class="btn popular">#Car Tires</button>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card">
                                <button class="btn popular">#Car Tires</button>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card">
                                <button class="btn popular">#Car Tires</button>
                            </div>
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#mechanicCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-icon" aria-hidden="true"><i class="fa-solid fa-angles-left"
                                style="color: #0094ee;"></i></span>

                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#mechanicCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-icon" aria-hidden="true"><i
                                class="fa-solid fa-angles-right" style="color: #0094ee;"></i></span>

                    </button>
                </div>
            </div>
        </div>

    </div>
    </div>
</section>


<section class="services">
    <div class="container">
        <h4 class="text-6">Our Services</h4>
        <div class="row justify-content-between">
            @each('front.pages.home.sections.services', $services, 'service')
        </div>
        <div class="see text-center">
            <a class="text-8" href="index_services.html">See More ....</a>
        </div>
    </div>
</section>

    <div class="our-prod">
        <h4 class="text-6">Our Products</h4>
    </div>
    <section class="products">
        <div class="container">
            <div id="productCarousel" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            @each('front.pages.home.sections.products', $products, 'product')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="course">
        <div class="container">
            <h4 class="text-6">CarGo Clips</h4>
            <div class="row justify-content-between">
                @each('front.pages.home.sections.cargo-clips', $videos, 'video')
            </div>
            <br /> <br />
            <div class="see text-center">
                <a class="text-8" href="index_cousrses.html">See More ....</a>
            </div>
        </div>
    </section>

    <div class="our">
        <h4 class="text-6">Our Mechanics</h4>
    </div>
    <section class="Mechanic">
        <div class="container">
            <div id="mechanicCarousel" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="{{ asset('assets-front/images/Rectangle 166.png') }}" class="card-img-top"
                                        alt="Product 1">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between tech">
                                            <h5 class="card-title">Youssef Amir</h5>
                                            <p class="card-text mb-0">4.5<i class="fa-solid fa-star"
                                                    style="color: #ffd43b;"></i></p>
                                        </div>
                                        <p class="text-10">Techanic</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="{{ asset('assets-front/images/Rectangle 166.png') }}" class="card-img-top"
                                        alt="Product 1">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between tech">
                                            <h5 class="card-title">Youssef Amir</h5>
                                            <p class="card-text mb-0">4.5<i class="fa-solid fa-star"
                                                    style="color: #ffd43b;"></i></p>
                                        </div>
                                        <p class="text-10">Techanic</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="{{ asset('assets-front/images/Rectangle 166.png') }}" class="card-img-top"
                                        alt="technician2">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between tech">
                                            <h5 class="card-title">Youssef Amir</h5>
                                            <p class="card-text mb-0">4.5<i class="fa-solid fa-star"
                                                    style="color: #ffd43b;"></i></p>
                                        </div>
                                        <p class="text-10">Techanic</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="{{ asset('assets-front/images/Rectangle 166.png') }}" class="card-img-top"
                                        alt="technician1">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between tech">
                                            <h5 class="card-title">Youssef Amir</h5>
                                            <p class="card-text mb-0">4.5<i class="fa-solid fa-star"
                                                    style="color: #ffd43b;"></i></p>
                                        </div>
                                        <p class="text-10">Techanic</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="{{ asset('assets-front/images/Rectangle 181.png') }}" class="card-img-top"
                                        alt="Product 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Car Tires</h5>
                                        <p class="card-text">80$-240$</p>
                                        <div class="add">
                                            <button class="btn btn-info">Add to Cart</button>
                                            <button class="btn btn-light"><i class="fa-solid fa-heart"
                                                    style="color: #007bee;"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="{{ asset('assets-front/images/Rectangle 181.png') }}" class="card-img-top"
                                        alt="Product 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Car Tires</h5>
                                        <p class="card-text">80$-240$</p>
                                        <div class="add">
                                            <button class="btn btn-info">Add to Cart</button>
                                            <button class="btn btn-light"><i class="fa-solid fa-heart"
                                                    style="color: #007bee;"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="{{ asset('assets-front/images/Rectangle 181.png') }}" class="card-img-top"
                                        alt="Product 3">
                                    <div class="card-body">
                                        <h5 class="card-title">Car Tires</h5>
                                        <p class="card-text">80$-240$</p>
                                        <div class="add">
                                            <button class="btn btn-info">Add to Cart</button>
                                            <button class="btn btn-light"><i class="fa-solid fa-heart"
                                                    style="color: #007bee;"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="{{ asset('assets-front/images/Rectangle 181.png') }}" class="card-img-top"
                                        alt="Product 3">
                                    <div class="card-body">
                                        <h5 class="card-title">Car Tires</h5>
                                        <p class="card-text">80$-240$</p>
                                        <div class="add">
                                            <button class="btn btn-info">Add to Cart</button>
                                            <button class="btn btn-light"><i class="fa-solid fa-heart"
                                                    style="color: #007bee;"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card">
                                        <img src="{{ asset('assets-front/images/Rectangle 181.png') }}"
                                            class="card-img-top" alt="Product 1">
                                        <div class="card-body">
                                            <h5 class="card-title">Car Tires</h5>
                                            <p class="card-text">80$-240$</p>
                                            <div class="add">
                                                <button class="btn btn-info">Add to Cart</button>
                                                <button class="btn btn-light"><i class="fa-solid fa-heart"
                                                        style="color: #007bee;"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <img src="{{ asset('assets-front/images/Rectangle 181.png') }}"
                                            class="card-img-top" alt="Product 2">
                                        <div class="card-body">
                                            <h5 class="card-title">Car Tires</h5>
                                            <p class="card-text">80$-240$</p>
                                            <div class="add">
                                                <button class="btn btn-info">Add to Cart</button>
                                                <button class="btn btn-light"><i class="fa-solid fa-heart"
                                                        style="color: #007bee;"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <img src="{{ asset('assets-front/images/Rectangle 181.png') }}"
                                            class="card-img-top" alt="Product 3">
                                        <div class="card-body">
                                            <h5 class="card-title">Car Tires</h5>
                                            <p class="card-text">80$-240$</p>
                                            <div class="add">
                                                <button class="btn btn-info">Add to Cart</button>
                                                <button class="btn btn-light"><i class="fa-solid fa-heart"
                                                        style="color: #007bee;"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <img src="{{ asset('assets-front/images/Rectangle 181.png') }}"
                                            class="card-img-top" alt="Product 3">
                                        <div class="card-body">
                                            <h5 class="card-title">Car Tires</h5>
                                            <p class="card-text">80$-240$</p>
                                            <div class="add">
                                                <button class="btn btn-info">Add to Cart</button>
                                                <button class="btn btn-light"><i class="fa-solid fa-heart"
                                                        style="color: #007bee;"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#mechanicCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-icon" aria-hidden="true"><i class="fa-solid fa-angles-left"
                                    style="color: #0094ee;"></i></span>

                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#mechanicCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-icon" aria-hidden="true"><i class="fa-solid fa-angles-right"
                                    style="color: #0094ee;"></i></span>

                        </button>
                    </div>
                </div>
            </div>
    </section>


    <section class="testimonials">
        <h4 class="text-11">Testimonials</h4>
        <div class="container">
            <div id="testimonialsCarousel" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">

                            <div class="col-md-3">
                                <div class="card">
                                    <img src="{{ asset('assets-front/images/testimonialsP1.jpeg') }}"
                                        class="card-img-top" alt="review 1">
                                    <div class="card-body">
                                        <div class="d-flex  tech">
                                            <h5 class="card-title">Mariam Khairy</h5>
                                        </div>
                                        <p class="card-text "><i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                                            <i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                                            <i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                                            <i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                                        </p>
                                        <p class="text-10">“Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. “</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="{{ asset('assets-front/images/testimonialsP1.jpeg') }}"
                                        class="card-img-top" alt="review 2">
                                    <div class="card-body">
                                        <div class="d-flex  tech">
                                            <h5 class="card-title">Mariam Khairy</h5>
                                        </div>
                                        <p class="card-text "><i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                                            <i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                                            <i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                                            <i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                                        </p>
                                        <p class="text-10">“Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. “</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="{{ asset('assets-front/images/testimonialsP1.jpeg') }}"
                                        class="card-img-top" alt="review 3">
                                    <div class="card-body">
                                        <div class="d-flex  tech">
                                            <h5 class="card-title">Mariam Khairy</h5>
                                        </div>
                                        <p class="card-text "><i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                                            <i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                                            <i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                                            <i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                                        </p>
                                        <p class="text-10">“Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. “</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="{{ asset('assets-front/images/testimonialsP1.jpeg') }}"
                                        class="card-img-top" alt="review 3">
                                    <div class="card-body">
                                        <div class="d-flex  tech">
                                            <h5 class="card-title">Mariam Khairy</h5>
                                        </div>
                                        <p class="card-text "><i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                                            <i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                                            <i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                                            <i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                                        </p>
                                        <p class="text-10">“Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. “</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </section>
@endsection
