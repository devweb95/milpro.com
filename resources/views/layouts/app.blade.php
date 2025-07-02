<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logo/logo.jpg') }}">
    <title>MILLPRO</title>
    
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/metismenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnifying-popup.css') }}">

    <!-- Swiper CSS via CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    
    <!-- Custom CSS compilé -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Assets Vite uniquement pour vos fichiers de développement -->
    

    @stack('styles')
</head>
<body dir="rtl">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @include('layouts.header')
    
    <main>
        @yield('content') 
    </main>
    
    @include('layouts.footer')

    <!-- Scripts -->
    <script src="{{ asset('assets/js/plugins/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/odometer.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery-appear.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/metismenu.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/swiper.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/aos.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/nice-select.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/smooth-scroll.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/waw.js') }}"></script>

    <!-- Swiper JS via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAuSiPhoDaOJ7aqtJVtQhYhLzwwJ7rQlmA"></script>
    <script src="{{ asset('assets/js/vendor/marker.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/map-content.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/info-box.js') }}"></script>
    <script src="https://html.themewant.com/golfy/assets/js/plugins/magnific-popup.js"></script>

    <script src="{{ asset('assets/js/plugins/contact.form.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    
    @stack('scripts')
</body>
</html>