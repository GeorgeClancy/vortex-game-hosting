
    <div id="anywhere-home" class=""></div>
    <!-- Mobile menu area start -->
        @include('Frontend.Includes.Partials.mobileMenu')
    <!-- Mobile menu area end -->

    <!-- THEME PRELOADER START -->
        @include('Frontend.Includes.Partials.preloader')
    <!-- THEME PRELOADER END -->
    <!-- BACK TO TOP AREA START -->
        @include('Frontend.Includes.Partials.backToTop')
    <!-- BACK TO TOP AREA EDN -->

    <!-- All Plugin -->
    <script defer src="{{asset('assets/js/plugins.min.js')}}"></script>
    <!-- currency js -->
    <script defer src="{{asset('assets/js/currency/app.js')}}"> </script>
    <!-- main js -->
    <script defer src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>