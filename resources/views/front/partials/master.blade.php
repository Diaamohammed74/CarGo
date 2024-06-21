
    @include('front.partials.front.head')
    @include('front.partials.front.nav')

    {{-- <main> --}}
        @yield('content')
    {{-- </main> --}}

    @include('front.partials.front.scripts')
    @include('front.partials.front.footer')
    @yield('extra-scripts')
    @include('sweetalert::alert')
</body> 
</html>
