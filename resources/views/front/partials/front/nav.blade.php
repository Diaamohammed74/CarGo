<nav class="navbar navbar-expand-lg" style="
background-color: rgba(0, 124, 238, 1);
border-bottom: 1px solid #fff;">
    <div class="container">
        {{-- <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('assets-front/images/logo-text.PNG') }}" class="w-100" alt="CarGo Logo">
        </a> --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 z-1">
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{route('services.index')}}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="index_session.html">Sessions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{route('about-us')}}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{route('contact-us')}}">Contact</a>
                </li>
            </ul>
            @auth
            <div class="profile d-flex align-items-center gap-3">
                <div class="name_profile">
                    <p class="fs-6 mb-0 text-light fw-bold overflow-hidden">
                        {{auth()->user()->first_name}}
                    </p>
                </div>
                <div class="image_profile"
                    style="
        height: 50px;
        width: 50px;
        border-radius: 50%;
        overflow: hidden;">
                    <img src="{{ auth()->user()->image }}"
                        alt="your image which you uploaded on site" class="w-100 h-100" onclick="{{route('user.profile')}}" />
                </div>
            </div>
            @endauth
        </div>
    </div>
</nav>
