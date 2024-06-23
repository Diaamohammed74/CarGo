
@php
    use Illuminate\Support\Str;
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CarGo | Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('assets-front/css/style_home.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{asset('assets-front/css/footer.css')}}" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

</head>

<body>

    @include('front.partials.front.nav')

    <section class="cargo">
        <div class="row m-0">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <img src="{{ asset('assets-front/images/whiteCar 1 (1).png') }}" alt="" class="w-100 object-fit-cover" />
            </div>
            <div
                class="col-lg-6 col-md-12 col-sm-12 p-5 bg-light d-flex flex-column justify-content-center align-items-start">
                <p class="fw-bold my-4 fs-1">
                    Car<span class="main_text my-3">GO</span>
                </p>
                <p class="my-4">Your services, everywhere.</p>
                <p class="my-4">
                    Enjoy your car services from the rest of your home, on the road, at
                    your work, everywhere,
                    <span class="main_text">literally everywhere.</span>
                </p>
                <button class="main_button" onclick="window.location.href='{{route('order.create')}}'">Book A Service</button>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container my-5">
            <h1 class="head mb-5">Our Services</h1>
            <div class="row g-4 justify-content-between">
                @foreach ($services as $service)
                    <div class="col-lg-3 col-md-6 col-sm-12 rounded mb-5">
                        <div class="service_image w-100">
                            <img src="{{$service->image}}" alt="" class="w-100" />
                            <div class="service_description d-flex justify-content-end flex-column p-3">
                                <div>
                                    <h3 class="main_text" style="color: white">{{ Str::limit($service->title, 20) }}</h3>
                                    <p class="main_text mb-0" style="color: white">{{ $service->price }} EGP</p>
                                </div>
                                <div class="book_btn d-flex justify-content-center mt-3 px-4 py-2 border mx-auto rounded-2" style="width: fit-content;">
                                    <a href="{{route('order.create')}}" class="main_text d-flex gap-2 align-items-center text-decoration-none" style="color: white">
                                        Book Now
                                        <!-- <i class="fa-solid fa-arrow-right-long"></i> -->
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <p class="text-center">
                <a href="{{route('services.index')}}" class="main_text see-more">See More <i class="fa-solid fa-arrow-right"></i></a>
            </p>
        </div>
    </section>


    <section class="popular py-5">
        <div class="container my-5">
            <h1 class="head text-center mb-5">Our POPULAR REELS</h1>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="image" style="height: 220px; overflow: hidden">
                            <img src="{{ asset('assets-front/images/headlight.jpg') }}" class="card-img-top" alt="..."
                                class="w-100" />
                        </div>
                        <div class="card-body p-4 d-flex flex-column gap-2">
                            <h5 class="fw-bold main_text mb-0">How to Fix Headlights</h5>
                            <p class="card-text description_text my-3 w-75">
                                Learn to fix the car’s headlights at the rest of your home
                            </p>
                            <a href="#" class="main_button text-decoration-none text-light text-center">Watch
                                Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="image" style="height: 220px; overflow: hidden">
                            <img src="{{ asset('assets-front/images/headlight.jpg') }}" class="card-img-top" alt="..."
                                class="w-100" />
                        </div>
                        <div class="card-body p-4 d-flex flex-column gap-2">
                            <h5 class="fw-bold main_text mb-0">How to Fix Headlights</h5>
                            <p class="card-text description_text my-3 w-75">
                                Learn to fix the car’s headlights at the rest of your home
                            </p>
                            <a href="#" class="main_button text-decoration-none text-light text-center">Watch
                                Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="image" style="height: 220px; overflow: hidden">
                            <img src="{{ asset('assets-front/images/headlight.jpg') }}" class="card-img-top" alt="..."
                                class="w-100" />
                        </div>
                        <div class="card-body p-4 d-flex flex-column gap-2">
                            <h5 class="fw-bold main_text mb-0">How to Fix Headlights</h5>
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
                <a href="#" class="main-text text-center see-more">See More <i class="fa-solid fa-arrow-right"></i></a>
            </p>
        </div>
    </section>

    <section class="machiens py-5">
        <div class="container my-5">
            <div class="head mb-5">
                <h1 class="fw-bold">Our Best mechanics</h1>
            </div>
            <div class="swiper swiper_machiens">
                <div class="swiper-wrapper py-1">
                    @foreach ($mechanicals as $mechanical)
                    <div class="swiper-slide mt-4">
                        <div class="card h-100 justify-content-between">
                            <img src="{{$mechanical->image}}" class="card-img-top h-100" alt="..." />
                            <div class="card-body flex-shrink-0">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3 class="card-title fw-bold">{{$mechanical->first_name}}</h3>
                                    <div>
                                        <span>4.5</span>
                                        <span>
                                            <i class="fa-solid fa-star text-warning"></i>
                                        </span>
                                    </div>
                                </div>
                                <p class="card-text description_text">{{$mechanical?->mechanicalUser->specialization?->title??'Tech'}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>

    <section class="machiens problems py-5">
        <div class="container my-5">
            <div class="head mb-5">
                <h1 class="fw-bold">POPULAR CAR PROBLEMS</h1>
            </div>
            <div class="swiper swiper_problems">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    @foreach ($tags as $tag)
                    <div class="swiper-slide">
                        <div class="main_button d-flex justify-content-center align-items-center">
                            <a href="{{ route('services.index', ['search' => $tag->title]) }}" style="color: white" class="text-decoration-none">
                                <span class="mx-auto">#{{$tag->title}}</span>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>
    {{-- <section class="testimonials py-4">
        <div class="head bg-light p-5">
            <h1 class="fw-bold mb-5">Testimonials</h1>
        </div>
        <div class="container">
            <div class="row g-4 mt-4">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="testimonials_card bg-light p-4 rounded text-center position-relative">
                        <div class="image_testimonails position-absolute">
                            <img src="./images/testimonialsP1.jpeg" alt="testimonials"
                                class="w-100 object-fit-cover" />
                        </div>
                        <div class="testimonails_name mt-4">
                            <h2 class="main_text fw-bold fs-4">Name Here</h2>
                        </div>
                        <div class="testimonails_rate">
                            <i class="fa-solid fa-star text-warning fs-5"></i>
                            <i class="fa-solid fa-star text-warning fs-5"></i>
                            <i class="fa-solid fa-star text-warning fs-5"></i>
                            <i class="fa-solid fa-star text-warning fs-5"></i>
                            <i class="fa-solid fa-star text-warning fs-5"></i>
                        </div>
                        <div class="testimonails_description">
                            <p class="main_text text-center p-0 m-0">
                                “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. “
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="testimonials_card bg-light p-4 rounded text-center position-relative">
                        <div class="image_testimonails position-absolute">
                            <img src="./images/testimonialsP1.jpeg" alt="testimonials"
                                class="w-100 object-fit-cover" />
                        </div>
                        <div class="testimonails_name mt-4">
                            <h2 class="main_text fw-bold fs-4">Name Here</h2>
                        </div>
                        <div class="testimonails_rate">
                            <i class="fa-solid fa-star text-warning fs-5"></i>
                            <i class="fa-solid fa-star text-warning fs-5"></i>
                            <i class="fa-solid fa-star text-warning fs-5"></i>
                            <i class="fa-solid fa-star text-warning fs-5"></i>
                            <i class="fa-solid fa-star text-warning fs-5"></i>
                        </div>
                        <div class="testimonails_description">
                            <p class="main_text text-center p-0 m-0">
                                “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. “
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="testimonials_card bg-light p-4 rounded text-center position-relative">
                        <div class="image_testimonails position-absolute">
                            <img src="./images/testimonialsP1.jpeg" alt="testimonials"
                                class="w-100 object-fit-cover" />
                        </div>
                        <div class="testimonails_name mt-4">
                            <h2 class="main_text fw-bold fs-4">Name Here</h2>
                        </div>
                        <div class="testimonails_rate">
                            <i class="fa-solid fa-star text-warning fs-5"></i>
                            <i class="fa-solid fa-star text-warning fs-5"></i>
                            <i class="fa-solid fa-star text-warning fs-5"></i>
                            <i class="fa-solid fa-star text-warning fs-5"></i>
                            <i class="fa-solid fa-star text-warning fs-5"></i>
                        </div>
                        <div class="testimonails_description">
                            <p class="main_text text-center p-0 m-0">
                                “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. “
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="testimonials_card bg-light p-4 rounded text-center position-relative">
                        <div class="image_testimonails position-absolute">
                            <img src="./images/testimonialsP1.jpeg" alt="testimonials"
                                class="w-100 object-fit-cover" />
                        </div>
                        <div class="testimonails_name mt-4">
                            <h2 class="main_text fw-bold fs-4">Name Here</h2>
                        </div>
                        <div class="testimonails_rate">
                            <i class="fa-solid fa-star text-warning fs-5"></i>
                            <i class="fa-solid fa-star text-warning fs-5"></i>
                            <i class="fa-solid fa-star text-warning fs-5"></i>
                            <i class="fa-solid fa-star text-warning fs-5"></i>
                            <i class="fa-solid fa-star text-warning fs-5"></i>
                        </div>
                        <div class="testimonails_description">
                            <p class="main_text text-center p-0 m-0">
                                “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. “
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


<footer class="foot">
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
                <a class="logo" href="#">Car<span>Go</span></a>
            </div>
            <div class="footer-links">
                <ul class="footer-menu">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Sessions</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom d-flex justify-content-spacebetween">
            <p>&copy; 2024 CarGo,Inc. All rights reserved.</p>
            <div class="footer-social">
                <ul class="social-icons">
                    <li>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

@include('sweetalert::alert')

<!-- js script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<script src="{{asset('assets-front/js/popper.min.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js">
    </script>
<script src="{{asset('assets-front/js/main.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
    // document.addEventListener('DOMContentLoaded', function () {
    //     var swiperProblems = new Swiper('.swiper_problems', {
    //         slidesPerView: 'auto',
    //         spaceBetween: 30,
    //         loop: true,
    //         autoplay: {
    //             delay: 3000,
    //             disableOnInteraction: false,
    //         },
    //         navigation: {
    //             nextEl: '.swiper-button-next',
    //             prevEl: '.swiper-button-prev',
    //         },
    //     });
    // });
</script>

</script>
</body>
</html>
