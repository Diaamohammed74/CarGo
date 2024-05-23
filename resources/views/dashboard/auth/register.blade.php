@extends('dashboard.layouts.fullwidth3')
@section('title')
{{env('APP_NAME')}} | Register
@endsection
@section('content')
<div class="col-md-6">
    <div class="authincation-content">
        <div class="row no-gutters">
            <div class="col-xl-12">
                <div class="auth-form">
                    <div class="text-center mb-3">
                        <a href="{{route('home')}}"><img src="{{ asset('images/logo/logo-full.png')}}" alt=""></a>
                    </div>
                    <h4 class="text-center mb-4">Sign up your account</h4>
                    <form action="{{ route('register')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label class="mb-1"><strong>Username</strong></label>
                            <input type="text" class="form-control" placeholder="username" name="username">
                        </div>
                        <div class="mb-3">
                            <label class="mb-1"><strong>Name</strong></label>
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="mb-3">
                            <label class="mb-1"><strong>Email</strong></label>
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label class="mb-1"><strong>Password</strong></label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="mb-3">
                            <label class="mb-1"><strong>Confirm Password</strong></label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign up</button>
                        </div>
                    </form>
                    <div class="new-account mt-3">
                        <p>Already have an account? <a class="text-primary" href="{{ route('login')}}">Sign in</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
