<header class="p-0">
    <div class="container-fluid">
        <div class="row no-gutters">
            <!-- Navbar -->
            <div class="col-md-6 d-flex align-items-center">
                <div class="home-1">
                    @include('front.partials.front.navbar')
                    @yield('home-page-logo')
                </div>
            </div>
            <!-- User Profile -->
            <div class="col-md-6">
                @if (auth()->check())
                    @include('front.partials.front.user-profile')
                    @if (!auth()->user()->hasVerifiedEmail())
                    @include('front.partials.front.verification-alert')
                    @endif  
                @else
                    @include('front.partials.front.login-register-buttons')
                @endif
            </div>
            <!-- Site Information -->
            <div class="col-md-6">
                <div class="home-3">
                    @yield('home-page-logo-info')
                </div>
            </div>
        </div>
    </div>
</header>
