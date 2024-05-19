<nav class="navbar navbar-expand-lg navbar home-nav">
    <a class="navbar-brand" href="#">Car<span>Go</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item{{ request()->is('/') ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index_services.html">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index_services.html">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index_session.html">CarGo Clips</a>
            </li>
            <li class="nav-item{{ request()->is('about-us') ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('about-us') }}">About us</a>
            </li>
            <li class="nav-item{{ request()->is('contact-us') ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('contact-us') }}">Contact us</a>
            </li>
        </ul>
    </div>
</nav>