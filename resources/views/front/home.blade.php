@extends('front.partials.master')


@section('content')


<section class="problem">
    <div class="container">
        <h4 class="text-6">POPULAR CAR PROBLEMS</h4>
        <div id="probleCarousel" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        @foreach ($tags as $tag)
                        <div class="col-md-2">
                            <div class="card">
                                <button class="btn popular">#{{$tag->title}}</button>
                            </div>
                        </div>
                        @endforeach
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
    <!-- End header -->

    <!-- start section Services -->
    <section class="services">
        <div class="container">
            <h4 class="text-6">Services</h4>
            <div class="row justify-content-between">
                @foreach ($services as $service)
                <div class="col-md-3 mb-4">
                    <div class="serv d-flex flex-column justify-content-between">
                        <p class="text-7">{{$service->title}}</p>
                        <p class="text-7">{{$service->price}}</p>
                        <a class="book" href="index_services.html">Book Service
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="see text-center">
                <a class="text-8" href="index_services.html">See More....</a>
            </div>
        </div>
    </section>


    <section class="products">
        <div class="container">
            <h4 class="text-6">Products</h4>
            <div id="productCarousel" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            @forelse ($products as $product)
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="{{ $product->image }}"
                                        class="card-img-top" alt="Product 1">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $product->title }}</h5>
                                        <p class="card-text">{{ $product->price }} $</p>
                                        <div class="add">
                                            <button class="btn btn-info">Add to Cart</button>
                                            <button class="btn btn-light"><i class="fa-solid fa-heart"
                                                    style="color: #007bee;"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="col-12">
                                <div class="alert alert-warning" role="alert">
                                    No products available at the moment. Please check back later.
                                </div>
                            </div>
                        @endforelse
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
                @forelse ($videos as $video )
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('assets-front/images/Rectangle 97.png') }}" alt="fix HeadLights"
                            class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title text-9">{{$video->title}}</h6>
                            <p class="card-text text-10">{{$video->description}}</p>
                            <div class="d-flex justify-content-between now">
                                <button class="btn btn-info enroll">Enroll Now</button>
                                <button class="btn btn-light">{{$video->price}}</button>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12">
                    <div class="alert alert-warning" role="alert">
                        No Clips available at the moment. Please check back later.
                    </div>
                </div>
                @endforelse
            </div>
            <br /> <br />
            <div class="see text-center">
                <a class="text-8" href="index_cousrses.html">See More ....</a>
            </div>
        </div>
    </section>


    <section class="Mechanic">
        <div class="container">
            <h4 class="text-6">Mechanicals</h4>
            <div id="mechanicCarousel" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="{{ asset('assets-front/images/Rectangle 166.png') }}"
                                        class="card-img-top" alt="Mechanic 1">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between tech">
                                            <h5 class="card-title">Youssef Amir</h5>
                                            <p class="card-text mb-0">4.5<i class="fa-solid fa-star" style="color: #ffd43b;"></i></p>
                                        </div>
                                        <p class="text-10">Technician</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="{{ asset('assets-front/images/Rectangle 166.png') }}"
                                        class="card-img-top" alt="Mechanic 2">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between tech">
                                            <h5 class="card-title">Youssef Amir</h5>
                                            <p class="card-text mb-0">4.5<i class="fa-solid fa-star" style="color: #ffd43b;"></i></p>
                                        </div>
                                        <p class="text-10">Technician</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="{{ asset('assets-front/images/Rectangle 166.png') }}"
                                        class="card-img-top" alt="Mechanic 3">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between tech">
                                            <h5 class="card-title">Youssef Amir</h5>
                                            <p class="card-text mb-0">4.5<i class="fa-solid fa-star" style="color: #ffd43b;"></i></p>
                                        </div>
                                        <p class="text-10">Technician</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="{{ asset('assets-front/images/Rectangle 166.png') }}"
                                        class="card-img-top" alt="Mechanic 4">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between tech">
                                            <h5 class="card-title">Youssef Amir</h5>
                                            <p class="card-text mb-0">4.5<i class="fa-solid fa-star" style="color: #ffd43b;"></i></p>
                                        </div>
                                        <p class="text-10">Technician</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more carousel-items here for additional mechanics if needed -->
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
                                        <p class="card-text "><i class="fa-solid fa-star"
                                                style="color: #ffd43b;"></i>
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
                                        <p class="card-text "><i class="fa-solid fa-star"
                                                style="color: #ffd43b;"></i>
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
                                        <p class="card-text "><i class="fa-solid fa-star"
                                                style="color: #ffd43b;"></i>
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
                                        <p class="card-text "><i class="fa-solid fa-star"
                                                style="color: #ffd43b;"></i>
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


