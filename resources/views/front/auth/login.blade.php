<!DOCTYPE html>
<html lang="en">
@section('title')
    {{ env('APP_NAME') }} | Login
@endsection
@include('front.partials.auth.head')

<body>
    <section class="h-100 bg-dark">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row g-0">


                            @include('front.partials.auth.logo')


                            <div class="col-xl-6">
                                <div class="card-body p-md-5 text">
                                    <h3 class="mb-5 text-1">Car<span class="text-2">GO</span></h3>
                                    <!-- Form -->
                                    <form action="">
                                        <div class="row">
                                            <div class="col mb-4">
                                                <div class="field input-field">
                                                    <input type="email" placeholder="Email" class="input">
                                                </div>
                                                <div class="field input-field">
                                                    <input type="password" placeholder="Password" class="password">
                                                    <i class='bx bx-hide eye-icon'></i>
                                                </div>
                                                <div class="form-link">
                                                    <a href="#" class="forgot-pass">Forgot password?</a>
                                                </div>
                                                <div class="field button-field">
                                                    <button><a href="index_home.html">Login</a></button>
                                                </div>
                                                <div class="form-link">
                                                    <span>Don't have an account? <a href="{{route('auth.register')}}"
                                                            class="link signup-link">Signup</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- End form -->
                                    <!-- br for or -->


                                    <div class="line"></div>
                                    <!-- SocialGroupButton -->

                                    @include('front.partials.auth.social')



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!--End Section  -->

    <!-- js script -->

    @include('front.partials.auth.scripts')
</body>

</html>
