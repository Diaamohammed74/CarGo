
    @include('front.partials.front.head')
    @include('front.partials.front.nav')
    {{-- <main> --}}
        @yield('content')
    {{-- </main> --}}
    @include('front.partials.front.scripts')
    @yield('extra-scripts')
    @include('front.partials.front.footer')
    @include('sweetalert::alert')
</body> 
</html>
