<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/logo.jpg">
    <title>MILLPRO</title>
    <!-- fontawesome css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/aos.css') }}">
    <!-- swiper css-->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/metismenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnifying-popup.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <!-- custom css here -->
   <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> 
<!-- custom scss here -->
    <link rel="stylesheet" href="{{ asset('assets/scss/style.scss') }}"> 
    @stack('styles')

   

</head>
<body dir="rtl">
@vite(['resources/css/app.css'])
@vite(['resources/assets/scss/style.scss'])

    @include('layouts.header')
    
    <main>
        @yield('content') 
    </main>
    
    @include('layouts.footer')

    <!-- scripts -->
<script src="assets/js/plugins/jquery.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>

<script src="assets/js/plugins/odometer.js"></script>
<script src="assets/js/plugins/jquery-appear.js"></script>

<script src="assets/js/plugins/metismenu.js"></script>
<script src="assets/js/plugins/swiper.js"></script>
<script src="assets/js/plugins/aos.js"></script>
<script src="assets/js/plugins/nice-select.js"></script>
<script src="assets/js/plugins/smooth-scroll.js"></script>
<script src="assets/js/vendor/waw.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAuSiPhoDaOJ7aqtJVtQhYhLzwwJ7rQlmA"></script>
<script src="assets/js/vendor/marker.js"></script>
<script src="assets/js/vendor/map-content.js"></script>
<script src="assets/js/vendor/info-box.js"></script>
<script src="https://html.themewant.com/golfy/assets/js/plugins/magnific-popup.js"></script>

<script src="assets/js/plugins/contact.form.js"></script>

<script src="assets/js/main.js"></script>
</body>
</html>