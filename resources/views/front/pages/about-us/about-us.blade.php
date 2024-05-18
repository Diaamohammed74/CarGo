@extends('front.partials.master')
@section('style-sheets')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<link rel="stylesheet" href="{{asset('assets-front/css/style_about.css')}}">
<link rel="stylesheet" href="{{asset('assets-front/css/bootstrap.min.css')}}">
@endsection
@section('content')
     <section class="info">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0">
                <div class="col-12 col-lg-6">
                    <div class="about">
                        <h3 class="text-1">Car<span class="text-2">GO</span></h3>
                        <p class="text-3">Lorem ipsum dolor sit abet, connecter advising elit, sed do 
                            <br/>eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                            <br/> enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                            <br/>nisi ut aliquip ex ea commodo consequat. Duis .</p>
                    </div>
                </div>
                 
                <div class="col-12 col-lg-6  im">
                    <div class="d-flex mech">
                        <div class="images d-flex">
                            <div class="img-1">
                                <img src="{{asset('assets-front/images/Rectangle 243 (2).png')}}" alt="" srcset="">
                            </div>
                            <div class="img-2">
                                <img src="{{asset('assets-front/images/Rectangle 241 (1).png')}}" alt="" srcset="">
                            </div>
                            
                            <div class="img-3">
                                <img src="{{asset('aseets-front/images/Rectangle 240 (1).png')}}" alt="" srcset="">
                            </div>
                            <div class="img-4">
                                <img src="{{asset('assets-front/images/Rectangle 242.png')}}" alt="" srcset="">
                            </div>
                    </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 ">
                    <div class="count">
                        <div class="row counters d-flex " data-aos="fade-up" data-aos-delay="100" >
                            <div class="col-md-2">
                                <span data-purecounter-start="1700" data-purecounter-end="1,791" data-purecounter-duration="0" class="purecounter">1,791</span>
                                <p>Customer</p>
                            </div>
                            <div class="col-md-2">
                                <span data-purecounter-start="0" data-purecounter-end="17" data-purecounter-duration="0" class="purecounter">17</span>
                                <p>Projects</p>
                            </div>
                            <div class="col-md-2">
                                <span data-purecounter-start="2,100" data-purecounter-end="2,345" data-purecounter-duration="0" class="purecounter">2,345</span>
                                <p>Complete</p>
                            </div>
                            <div class="col-md-2">
                                <span data-purecounter-start="100" data-purecounter-end="345" data-purecounter-duration="0" class="purecounter">345</span>
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
                        <br>eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                       <div class="num-1 d-flex">
                        <p class="text-4">2. </p>
                        <p class="text-5">Mission Num2</p>
                       </div>
                       <p class="text-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do 
                        <br>eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                       <div class="num-1 d-flex">
                        <p class="text-4">3. </p>
                        <p class="text-5">Mission Num3</p>
                       </div>
                       <p class="text-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do 
                        <br>eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                   </div>
                </div>
                <div class="col-md-6">
                    <img src="images/20943958 1 (1).png" alt="" srcset="">
                </div>
            </div>
        </div>
    </section>
    <!-- end section mission-->

   <!-- ===================================================== -->
   <!-- =================Start section Feature============================= -->
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
                <br>adipiscing elit, sed </p>
            </div>
            <div class="line-left"></div>
          </div>
          <div class="row d-flex justify-content-end">
            <div class="line-right"></div>
            <div class="fet-2">
                <h6 class="fett">FeatureNumber2</h6>
                <p class="text-fet text-center">Lorem ipsum dolor sit amet, consectetur 
                  <br>adipiscing elit, sed do, consectetur
                  <br>adipiscing elit, sed </p>
            </div>
        </div>
        <div class="row d-flex">
          <div class="fet-1">
            <h6 class="fett">FeatureNumber3</h6>
            <p class="text-fet text-center">Lorem ipsum dolor sit amet, consectetur 
              <br>adipiscing elit, sed do, consectetur
              <br>adipiscing elit, sed </p>
          </div>
          <div class="line-left"></div>
        </div>
        <div class="row d-flex justify-content-end">
          <div class="line-right"></div>
          <div class="fet-2">
              <h6 class="fett">Feature Number4</h6>
              <p class="text-fet text-center">Lorem ipsum dolor sit amet, consectetur 
                <br>adipiscing elit, sed do, consectetur
                <br>adipiscing elit, sed </p>
          </div>
      </div>
        <div class="row d-flex">
          <div class="fet-1">
            <h6 class="fett">Feature Number5</h6>
            <p class="text-fet text-center">Lorem ipsum dolor sit amet, consectetur 
              <br>adipiscing elit, sed do, consectetur
              <br>adipiscing elit, sed </p>
          </div>
          <div class="line-left"></div>
        </div>
        <div class="row d-flex justify-content-end">
          <div class="line-right"></div>
          <div class="fet-2">
              <h6 class="fett">Feature Number6</h6>
              <p class="text-fet text-center">Lorem ipsum dolor sit amet, consectetur 
                <br>adipiscing elit, sed do, consectetur
                <br>adipiscing elit, sed </p>
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
                        <img src="{{asset('assets-front/images/testimonialsP1.jpeg')}}" class="card-img-top" alt="review 1">
                      <div class="card-body">
                        <div class="d-flex  tech">
                          <h5 class="card-title">Mariam Khairy</h5>
                        </div>
                        <p class="card-text "><i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                            <i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                            <i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                            <i class="fa-solid fa-star" style="color: #ffd43b;"></i></p>
                        <p class="text-10">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. “</p>
    
                      </div>
                    </div>
                  </div>
              <div class="col-md-3">
                <div class="card">
                    <img src="{{asset('assets-front/images/testimonialsP1.jpeg')}}" class="card-img-top" alt="review 2">
                  <div class="card-body">
                    <div class="d-flex  tech">
                      <h5 class="card-title">Mariam Khairy</h5>
                    </div>
                    <p class="card-text "><i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                        <i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                        <i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                        <i class="fa-solid fa-star" style="color: #ffd43b;"></i></p>
                    <p class="text-10">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. “</p>

                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                    <img src="{{asset('assets-front/images/testimonialsP1.jpeg')}}" class="card-img-top" alt="review 3">
                  <div class="card-body">
                    <div class="d-flex  tech">
                      <h5 class="card-title">Mariam Khairy</h5>
                    </div>
                    <p class="card-text "><i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                        <i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                        <i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                        <i class="fa-solid fa-star" style="color: #ffd43b;"></i></p>
                    <p class="text-10">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. “</p>

                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                    <img src="{{asset('assets-front/images/testimonialsP1.jpeg')}}" class="card-img-top" alt="review 3">
                  <div class="card-body">
                    <div class="d-flex  tech">
                      <h5 class="card-title">Mariam Khairy</h5>
                    </div>
                    <p class="card-text "><i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                        <i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                        <i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                        <i class="fa-solid fa-star" style="color: #ffd43b;"></i></p>
                    <p class="text-10">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. “</p>

                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      </section>
    <!-- End Testimonials Section -->

    <!-- ============================================================= -->
    
    <!-- start section test -->
    <!-- <section class="test">
        <div class="our">
          <h4 class="testi">Testimonials</h4>
        </div>
        <div class="container">
          <div class="card">
            <div class="card-header">
              <img alt="img" />
            </div>
            <div class="card-body rev">
              <h5 class="card-title review"></h5>
              <p class="comment"></p>
            </div>
            <div class="card-footer">
              <button id="prevButton">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48" style="
                      -ms-transform: rotate(360deg);
                      -webkit-transform: rotate(360deg);
                      transform: rotate(360deg);
                    ">
                  <path fill="#2196F3" d="m30.9 43l3.1-3.1L18.1 24L34 8.1L30.9 5L12 24z" />
                </svg>
              </button>
              <button id="nextButton">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48" style="
                      -ms-transform: rotate(360deg);
                      -webkit-transform: rotate(360deg);
                      transform: rotate(360deg);
                    ">
                  <path fill="#2196F3" d="M17.1 5L14 8.1L29.9 24L14 39.9l3.1 3.1L36 24z" />
                </svg>
              </button>
            </div>
          </div>

        </div>
      </section> -->
      <!-- End Section Test -->
    <!-- ============================================================= -->
       
    <!-- Start footer -->
@include('front.partials.front.footer')
      <!-- end footer -->

     <!-- js script -->
     <script src="{{asset('assets-front/js/main.js')}}"></script>
     <script src="{{asset('assets-front/js/bootstrap.bundle.min.js')}}"></script>
     <script src="{{asset('assets-front/js/bootstrap.min.js')}}"></script>
     <script src="{{asset('assets-front/js/popper.min.js')}}"></script>
     <script src="https://kit.fontawesome.com/46b7ceee20.js" crossorigin="anonymous"></script>

</body>
</html>