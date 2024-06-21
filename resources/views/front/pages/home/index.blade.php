<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Car_Go</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style_home.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg"
        style="
        background-color: rgba(0, 124, 238, 1);
        border-bottom: 1px solid #fff;
      ">
        <div class="container">
            <a class="navbar-brand" href="index_home.html">Car Go</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 z-1">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="index_home.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="index_services.html">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="index_session.html">Sessions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="index_about.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="index_contact.html">Contact</a>
                    </li>
                </ul>
                <div class="profile d-flex align-items-center gap-3">
                    <div class="name_profile">
                        <p class="fs-6 mb-0 text-light fw-bold overflow-hidden">
                            Ahmed ..
                        </p>
                    </div>
                    <div class="image_profile"
                        style="
                height: 50px;
                width: 50px;
                border-radius: 50%;
                overflow: hidden;
              ">
                        <img src="{{ asset('assets-front/images/ellipse51.jpeg') }}" alt="your image which you uploaded on site"
                            class="w-100 h-100" />
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <section class="cargo">
        <div class="row m-0">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <img src="{{ asset('assets-front/images/white-car-1.png') }}" alt="White Car" class="w-100 object-fit-cover">
            </div>
            <div
                class="col-lg-6 col-md-12 col-sm-12 p-5 bg-light d-flex flex-column justify-content-center align-items-start">
                <h1 class="fw-bold my-4">
                    Car<span class="main_text my-3">GO</span>
                </h1>
                <p class="my-4">Your services, everywhere.</p>
                <p class="my-4">
                    Enjoy your car services from the rest of your home, on the road, at
                    your work, everywhere,
                    <span class="main_text">literally everywhere.</span>
                </p>
                <button class="main_button">Book A Service</button>
            </div>
        </div>
    </section>
    <section class="my-5">
        <div class="container">
            <h1 class="head mb-3">Our Services</h1>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 col-sm-12 rounded">
                    <div class="service_image w-100">
                        <img src="{{ asset('assets-front/images/rectangle185.jpeg') }}" alt="" class="w-100" />
                        <div class="service_description d-flex justify-content-between flex-column p-3">
                            <div>
                                <h2 class="main_text">Car Wash</h2>
                                <p class="main_text mb-0">$80–$240</p>
                            </div>
                            <a href="#" class="main_text d-flex gap-2 align-items-center text-decoration-none">
                                Book Now
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 rounded mb-5">
                    <div class="service_image w-100">
                        <img src="{{ asset('assets-front/images/rectangle185.jpeg') }}" alt="" class="w-100" />
                        <div class="service_description d-flex justify-content-between flex-column p-3">
                            <div>
                                <h2 class="main_text">Car Wash</h2>
                                <p class="main_text mb-0">$80–$240</p>
                            </div>
                            <a href="#" class="main_text d-flex gap-2 align-items-center text-decoration-none">
                                Book Now
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 rounded mb-5">
                    <div class="service_image w-100">
                        <img src="{{ asset('assets-front/images/rectangle185.jpeg') }}" alt="" class="w-100" />
                        <div class="service_description d-flex justify-content-between flex-column p-3">
                            <div>
                                <h2 class="main_text">Car Wash</h2>
                                <p class="main_text mb-0">$80–$240</p>
                            </div>
                            <a href="#" class="main_text d-flex gap-2 align-items-center text-decoration-none">
                                Book Now
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 rounded mb-5">
                    <div class="service_image w-100">
                        <img src="{{ asset('assets-front/images/rectangle185.jpeg') }}" alt="" class="w-100" />
                        <div class="service_description d-flex justify-content-between flex-column p-3">
                            <div>
                                <h2 class="main_text">Car Wash</h2>
                                <p class="main_text mb-0">$80–$240</p>
                            </div>
                            <a href="#" class="main_text d-flex gap-2 align-items-center text-decoration-none">
                                Book Now
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 rounded mb-5">
                    <div class="service_image w-100">
                        <img src="{{ asset('assets-front/images/rectangle185.jpeg') }}" alt="" class="w-100" />
                        <div class="service_description d-flex justify-content-between flex-column p-3">
                            <div>
                                <h2 class="main_text">Car Wash</h2>
                                <p class="main_text mb-0">$80–$240</p>
                            </div>
                            <a href="#" class="main_text d-flex gap-2 align-items-center text-decoration-none">
                                Book Now
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 rounded mb-5">
                    <div class="service_image w-100">
                        <img src="{{ asset('assets-front/images/rectangle185.jpeg') }}" alt="" class="w-100" />
                        <div class="service_description d-flex justify-content-between flex-column p-3">
                            <div>
                                <h2 class="main_text">Car Wash</h2>
                                <p class="main_text mb-0">$80–$240</p>
                            </div>
                            <a href="#" class="main_text d-flex gap-2 align-items-center text-decoration-none">
                                Book Now
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 rounded mb-5">
                    <div class="service_image w-100">
                        <img src="{{ asset('assets-front/images/rectangle185.jpeg') }}" alt="" class="w-100" />
                        <div class="service_description d-flex justify-content-between flex-column p-3">
                            <div>
                                <h2 class="main_text">Car Wash</h2>
                                <p class="main_text mb-0">$80–$240</p>
                            </div>
                            <a href="#" class="main_text d-flex gap-2 align-items-center text-decoration-none">
                                Book Now
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 rounded mb-5">
                    <div class="service_image w-100">
                        <img src="{{ asset('assets-front/images/rectangle185.jpeg') }}" alt="" class="w-100" />
                        <div class="service_description d-flex justify-content-between flex-column p-3">
                            <div>
                                <h2 class="main_text">Car Wash</h2>
                                <p class="main_text mb-0">$80–$240</p>
                            </div>
                            <a href="#" class="main_text d-flex gap-2 align-items-center text-decoration-none">
                                Book Now
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-center">
                <a href="#" class="main_text">See More ...</a>
            </p>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="swiper swiper_products">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="card p-3 border-0">
                            <img src="./images/rectangle181.jpeg" class="card-img-top" alt="..."
                                class="w-100" />
                            <div class="card-body">
                                <h5 class="fw-bold main_text">Car Tires</h5>
                                <p class="card-text main_text my-3">$800–$1,000</p>
                                <div class="d-flex justify-content-between gap-2">
                                    <a href="#"
                                        class="main_button text-decoration-none text-light w-100 text-center">Add to
                                        Cart</a>
                                    <span class="wish_list rounded">
                                        <i class="fa-solid fa-heart"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card p-3 border-0">
                            <img src="./images/rectangle181.jpeg" class="card-img-top" alt="..."
                                class="w-100" />
                            <div class="card-body">
                                <h5 class="fw-bold main_text">Car Tires</h5>
                                <p class="card-text main_text my-3">$800–$1,000</p>
                                <div class="d-flex justify-content-between gap-2">
                                    <a href="#"
                                        class="main_button text-decoration-none text-light w-100 text-center">Add to
                                        Cart</a>
                                    <span class="wish_list rounded">
                                        <i class="fa-solid fa-heart"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card p-3 border-0">
                            <img src="./images/rectangle181.jpeg" class="card-img-top" alt="..."
                                class="w-100" />
                            <div class="card-body">
                                <h5 class="fw-bold main_text">Car Tires</h5>
                                <p class="card-text main_text my-3">$800–$1,000</p>
                                <div class="d-flex justify-content-between gap-2">
                                    <a href="#"
                                        class="main_button text-decoration-none text-light w-100 text-center">Add to
                                        Cart</a>
                                    <span class="wish_list rounded">
                                        <i class="fa-solid fa-heart"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card p-3 border-0">
                            <img src="./images/rectangle181.jpeg" class="card-img-top" alt="..."
                                class="w-100" />
                            <div class="card-body">
                                <h5 class="fw-bold main_text">Car Tires</h5>
                                <p class="card-text main_text my-3">$800–$1,000</p>
                                <div class="d-flex justify-content-between gap-2">
                                    <a href="#"
                                        class="main_button text-decoration-none text-light w-100 text-center">Add to
                                        Cart</a>
                                    <span class="wish_list rounded">
                                        <i class="fa-solid fa-heart"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card p-3 border-0">
                            <img src="./images/rectangle181.jpeg" class="card-img-top" alt="..."
                                class="w-100" />
                            <div class="card-body">
                                <h5 class="fw-bold main_text">Car Tires</h5>
                                <p class="card-text main_text my-3">$800–$1,000</p>
                                <div class="d-flex justify-content-between gap-2">
                                    <a href="#"
                                        class="main_button text-decoration-none text-light w-100 text-center">Add to
                                        Cart</a>
                                    <span class="wish_list rounded">
                                        <i class="fa-solid fa-heart"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>
    <section class="popular my-5 py-4">
        <div class="container">
            <h1 class="head text-center mb-4">
                Our POPULAR REELS
            </h1>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
                    <div class="card">
                        <div class="image" style="height: 220px; overflow: hidden">
                            <img src="./images/rectangle85.jpeg" class="card-img-top" alt="..."
                                class="w-100" />
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold main_text">How to Fix Headlights</h5>
                            <p class="card-text description_text my-3 w-75">
                                Learn to fix the car’s headlights at the rest of your home
                            </p>
                            <a href="#" class="main_button text-decoration-none text-light text-center">Watch
                                Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
                    <div class="card">
                        <div class="image" style="height: 220px; overflow: hidden">
                            <img src="./images/rectangle97.jpeg" class="card-img-top" alt="..."
                                class="w-100" />
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold main_text">How to Fix Headlights</h5>
                            <p class="card-text description_text my-3 w-75">
                                Learn to fix the car’s headlights at the rest of your home
                            </p>
                            <a href="#" class="main_button text-decoration-none text-light text-center">Watch
                                Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
                    <div class="card">
                        <div class="image" style="height: 220px; overflow: hidden">
                            <img src="./images/rectangle234.jpeg" class="card-img-top" alt="..."
                                class="w-100" />
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold main_text">How to Fix Headlights</h5>
                            <p class="card-text description_text my-3 w-75">
                                Learn to fix the car’s headlights at the rest of your home
                            </p>
                            <a href="#" class="main_button text-decoration-none text-light text-center">Watch
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-center my-4">
                <a href="#" class="main-text  text-center">See More ...</a>
            </p>
        </div>
    </section>
    <section class="my-5 machiens py-5">
        <div class="container">
            <div class="head">
                <h1 class="fw-bold">Our Best mechanics</h1>
            </div>
            <div class="swiper swiper_machiens">
                <div class="swiper-wrapper">
                    <div class="swiper-slide mt-4">
                        <div class="card">
                            <img src="./images/amr.jpeg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3 class="card-title fw-bold">John Doe</h3>
                                    <div>
                                        <span>4.5</span>
                                        <span>
                                            <i class="fa-solid fa-star text-warning"></i>
                                        </span>
                                    </div>
                                </div>
                                <p class="card-text description_text">Technician</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide mt-4">
                        <div class="card">
                            <img src="./images/1.jpeg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3 class="card-title fw-bold">John Doe</h3>
                                    <div>
                                        <span>4.5</span>
                                        <span>
                                            <i class="fa-solid fa-star text-warning"></i>
                                        </span>
                                    </div>
                                </div>
                                <p class="card-text description_text">Technician</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide mt-4">
                        <div class="card">
                            <img src="./images/amr.jpeg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3 class="card-title fw-bold">John Doe</h3>
                                    <div>
                                        <span>4.5</span>
                                        <span>
                                            <i class="fa-solid fa-star text-warning"></i>
                                        </span>
                                    </div>
                                </div>
                                <p class="card-text description_text">Technician</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide mt-4">
                        <div class="card">
                            <img src="./images/1.jpeg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3 class="card-title fw-bold">John Doe</h3>
                                    <div>
                                        <span>4.5</span>
                                        <span>
                                            <i class="fa-solid fa-star text-warning"></i>
                                        </span>
                                    </div>
                                </div>
                                <p class="card-text description_text">Technician</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide mt-4">
                        <div class="card">
                            <img src="./images/1.jpeg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3 class="card-title fw-bold">John Doe</h3>
                                    <div>
                                        <span>4.5</span>
                                        <span>
                                            <i class="fa-solid fa-star text-warning"></i>
                                        </span>
                                    </div>
                                </div>
                                <p class="card-text description_text">Technician</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>
    <section class="my-5 machiens py-5">
        <div class="container">
            <div class="head">
                <!--
          swiper-wrapper
          swiper-slide
          -->
                <h1 class="fw-bold">POPULAR CAR PROBLEMS</h1>
            </div>
            <div class="swiper swiper_problems">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <div class="swiper-slide mt-4">
                        <div class="main_button">#Car Wash</div>
                    </div>
                    <div class="swiper-slide mt-4">
                        <div class="main_button">#Car Wash</div>
                    </div>
                    <div class="swiper-slide mt-4">
                        <div class="main_button">#Car Wash</div>
                    </div>
                    <div class="swiper-slide mt-4">
                        <div class="main_button">#Car Wash</div>
                    </div>
                    <div class="swiper-slide mt-4">
                        <div class="main_button">#Car Wash</div>
                    </div>
                    <div class="swiper-slide mt-4">
                        <div class="main_button">#Car Wash</div>
                    </div>
                </div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>

    <!-- start section testimony -->
    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
                    <span class="subheading">Testimonies</span>
                    <h2>Happy Clients &amp; Feedbacks</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-quote-left"></span>
                                </div>
                                <div class="text">
                                    <p class="mb-4">
                                        Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind
                                        texts.
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-quote-left"></span>
                                </div>
                                <div class="text">
                                    <p class="mb-4">
                                        Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind
                                        texts.
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-quote-left"></span>
                                </div>
                                <div class="text">
                                    <p class="mb-4">
                                        Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind
                                        texts.
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_3.jpg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-quote-left"></span>
                                </div>
                                <div class="text">
                                    <p class="mb-4">
                                        Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind
                                        texts.
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-quote-left"></span>
                                </div>
                                <div class="text">
                                    <p class="mb-4">
                                        Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind
                                        texts.
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section testimony -->
</body>
<!-- js script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="js/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
        $(".carousel-testimony").owlCarousel({
            center: true,
            loop: true,
            items: 1,
            margin: 30,
            stagePadding: 0,
            nav: false,
            navText: [
                '<span class="ion-ios-arrow-back">',
                '<span class="ion-ios-arrow-forward">',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                1000: {
                    items: 3,
                },
            },
        });
    });
</script>

</html>
