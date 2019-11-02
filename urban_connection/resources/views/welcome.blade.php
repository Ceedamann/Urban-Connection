<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Urban Connection</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>


        <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    </head>
    <body>
        <video autoplay muted loop id="myVideo">
            <source src="http://urbanbarbershoplocator.com/wp-content/uploads/2015/06/ublvid1.mp4" type="video/mp4">
        </video>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Urban Connection
                </div>

                <div class="links">
                    <a class='btn-link' href="/about">About us</a>
                    <a class='btn-link' href="/business">Barbor Shops</a>
                    <a class='btn-link' href="/events">Events</a>
                    <a class='btn-link' href="/business">Businesses</a>
                </div>
            </div>
        </div>
    </body>
</html>
