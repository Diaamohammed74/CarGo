<!DOCTYPE html>
<html lang="en">
@section('title')
    {{ env('APP_NAME') }} | Register
@endsection
@include('front.partials.auth.head')

<body>
    <!-- section register -->
    <section class="h-100 bg-dark">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row g-0">


                            @include('front.partials.auth.logo')


                            <div class="col-xl-6">
                                <form action="{{ route('auth.registerStore') }}" method="POST">
                                    @csrf
                                    <div class="card-body p-md-5 text">
                                        <h3 class="mb-5 text-1">Car<span class="text-2">GO</span></h3>
                                        <!-- Form -->
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="firstName" name="first_name"
                                                        class="form-control form-control-lg @error('first_name') is-invalid @enderror"
                                                        placeholder="First Name" value="{{ old('first_name') }}" />
                                                    @error('first_name')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-4">
                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="lastName" name="last_name"
                                                        class="form-control form-control-lg @error('last_name') is-invalid @enderror"
                                                        placeholder="Last Name" value="{{ old('last_name') }}" />
                                                    @error('last_name')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="email" id="email" name="email"
                                                class="form-control form-control-lg @error('email') is-invalid @enderror"
                                                placeholder="Your email" value="{{ old('email') }}" />
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="text" id="nationId" name="national_id"
                                                class="form-control form-control-lg @error('national_id') is-invalid @enderror"
                                                placeholder="National ID" value="{{ old('national_id') }}" />
                                            @error('national_id')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="password" id="password" name="password"
                                                class="form-control form-control-lg @error('password') is-invalid @enderror"
                                                placeholder="Password" />
                                            @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="password" id="conPassword" name="password_confirmation"
                                                class="form-control form-control-lg @error('password_confirmation') is-invalid @enderror"
                                                placeholder="Confirm Password" />
                                            @error('password_confirmation')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>



                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="text" id="phone" name="phone"
                                                class="form-control form-control-lg @error('phone') is-invalid @enderror"
                                                placeholder="Phone" value="{{ old('phone') }}" />
                                            @error('phone')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <select id="gender" name="gender"
                                                class="form-select form-select-lg @error('gender') is-invalid @enderror">
                                                <option value="" disabled selected>Select Gender</option>
                                                <option value="male"
                                                    @if (old('gender') == 'male') selected @endif>Male</option>
                                                <option value="female"
                                                    @if (old('gender') == 'female') selected @endif>Female</option>
                                            </select>
                                            @error('gender')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>


                                        <div class="field button-field">
                                            <button id="send" type="submit">Register</button>
                                        </div>
                                    </div>
                                </form>

                                <!-- End form -->


                                <!-- br for or -->
                                <div class="line"></div>

                                <!-- GroupButton -->
                                {{-- @include('front.partials.auth.social') --}}


                                <div class="row justify-content-center">
                                    <div class="col-md-4">
                                        <div class="mb-4 d-flex justify-content-center">
                                            <a href="{{ route('auth.socialite.login', ['provider' => 'facebook']) }}"data-mdb-button-init data-mdb-ripple-init
                                                class="btn btn-lg face-btn">
                                                <i class="fa-brands fa-facebook-f" style="color: #1968f0;"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-4 d-flex justify-content-center">
                                            <a href="{{ route('auth.socialite.login', ['provider' => 'google']) }}"
                                                data-mdb-button-init data-mdb-ripple-init
                                                class="btn btn-light btn-lg google-btn">
                                                <img src="{{ asset('assets-front/images/Google.png') }}">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-4 d-flex justify-content-center">
                                            <button type="button" data-mdb-button-init data-mdb-ripple-init
                                                class="btn btn-dark btn-lg ios-btn">
                                                <i class="fa-brands fa-apple" style="color: #ffffff;"></i>
                                            </button>
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
    <!--End Section  -->

    <!-- js script -->
    @include('front.partials.auth.scripts')

</body>

</html>
