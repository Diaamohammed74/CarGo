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
                                <div class="line"></div>
                                <div class="row justify-content-center">
                                    <div class="col-md-4">
                                        <div class="mb-4 d-flex justify-content-center">
                                            <a href="{{ route('auth.socialite.login', ['provider' => 'google']) }}"
                                                data-mdb-button-init data-mdb-ripple-init
                                                class="btn btn-light btn-lg google-btn">
                                                <img src="{{ asset('assets-front/images/Google.png') }}">
                                            </a>
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
    @include('front.partials.auth.scripts')
</body>
</html>
