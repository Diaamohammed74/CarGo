<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarGo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js">
    <link rel="stylesheet" href="{{ asset('assets-front/css/style_home.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-front/css/bootstrap.min.css') }}">
</head>

<body>
    <header class="p-0">
        <div class="container-fluid">
            <div class="row no-gutters">
                <!-- Navbar -->
                <div class="col-md-6 d-flex align-items-center">
                    <div class="home-1">
                        @include('front.partials.front.navbar')
                        @include('front.partials.front.logo')
                    </div>
                </div>
                <!-- User Profile -->
                <div class="col-md-6">
                    {{-- @if (auth()->check()) --}}
                        @include('front.partials.front.user-profile')
                    {{-- @else --}}
                        {{-- @include('front.partials.front.login-register-buttons') --}}
                    {{-- @endif --}}
                </div>

                <!-- Site Information -->
                <div class="col-md-6">
                    <div class="home-3">
                        @include('front.partials.front.logo-info')
                    </div>
                </div>
            </div>
    </header>
