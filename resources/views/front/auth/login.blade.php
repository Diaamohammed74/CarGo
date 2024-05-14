<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ env('APP_NAME') }} | Login</title>
    @include('front.partials.auth.head')
</head>

<body>
    <section class="h-100 bg-dark">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row g-0">

                            @include('front.partials.auth.logo')

                            <div class="col-xl-6">
                                <form action="{{ route('auth.loginStore') }}" method="POST">
                                    @csrf
                                    <div class="card-body p-md-5 text">
                                        <h3 class="mb-5 text-1">Car<span class="text-2">GO</span></h3>
                                        <!-- Form -->
                                        <div class="row">
                                            <div class="col mb-4">
                                                <div class="field input-field">
                                                    <input type="email" name="email" placeholder="Email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        value="{{ old('email') }}" required autofocus>
                                                    @error('email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="field input-field">
                                                    <input type="password" name="password" placeholder="Password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        required>
                                                    <i class='bx bx-hide eye-icon'></i>
                                                    @error('password')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-link">
                                                    <a href="#" class="forgot-pass">Forgot password?</a>
                                                </div>
                                                <div class="field button-field">
                                                    <button type="submit" class="btn btn-primary">Login</button>
                                                </div>
                                                <div class="form-link">
                                                    <span>Don't have an account? <a href="{{ route('auth.register') }}"
                                                            class="link signup-link">Signup</a></span>
                                                </div>
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
