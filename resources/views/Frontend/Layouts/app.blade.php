<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Stylesheet, Meta Tag, Title -->
     @include('Frontend.Includes.Partials.head')
     @yield('css')
</head>
<body class="{{ $bodyClass ?? '' }}">
    <!-- Start Contenet Area-->
        @yield('content')
    <!-- End Contenet Area -->

    <!-- Start Script Area -->
        @include('Frontend.Includes.Partials.scripts')
        @yield('script')
    <!-- End Script Area -->
</body>

</html>
