<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>@yield('title')</title>
    </head>

    <body class="main-layout inner_page">
        <div class="loader_bg">
            <div class="loader"><img src="{{ asset('images/loading.gif') }}" alt="" /></div>
        </div>
        <div id="mySidepanel" class="sidepanel">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <a href="{{ route('home') }}">Accueil</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('services') }}">Services</a>
            <a href="{{ route('contact') }}">Contact</a>
        </div>

        <!-- Header  -->
        @include('frontend.inc.nav')



        @yield('content')


        <!-- Footer  -->
        @include('frontend.inc.footer')

        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
        <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>

        <script>
            // This example adds a marker to indicate the position of Bondi Beach in Sydney,
            // Australia.
            function initMap() {
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 11,
                    center: {
                        lat: 40.645037,
                        lng: -73.880224
                    },
                });

                var image = 'images/maps-and-flags.png';
                var beachMarker = new google.maps.Marker({
                    position: {
                        lat: 40.645037,
                        lng: -73.880224
                    },
                    map: map,
                    icon: image
                });
            }
         </script>
         <!-- google map js -->
         <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
         <!-- end google map js -->
    </body>

</html>
