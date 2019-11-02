<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                color: white;
                background-color: black;
                /* background-image: url("http://urbanbarbershoplocator.com/wp-content/uploads/2015/06/ublvid1.mp4") */
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {

            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            /* Style the video: 100% width and height to cover the entire window */
            #myVideo {
                position: fixed;
                right: 0;
                bottom: 0;
                min-width: 100%;
                min-height: 100%;
                /* background: rgba(0, 0, 0, 0.9); */
            }

            /* Add some content at the bottom of the video/page */
            .content {
                /* position: fixed; */
                /* bottom: 0; */
                color: #f1f1f1;
                width: 100%;
                padding: 20px;
                min-width: 100%;
                text-align: center;
            }

            /* Style the button used to pause/play the video */
            #myBtn {
                width: 200px;
                font-size: 18px;
                padding: 10px;
                border: none;
                background: #000;
                color: #fff;
                cursor: pointer;
            }

            #myBtn:hover {
                background: #ddd;
                color: black;
            }
        </style>
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
                    <a href="">Markets</a>
                    <a href="">Barbor Shops</a>
                    <a href="">Events</a>
                    <a href="">Businesses</a>
                </div>
            </div>
        </div>
    </body>
</html>
