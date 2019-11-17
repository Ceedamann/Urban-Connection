<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Urban Connection') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    @stack('scripts')
    @yield("css")
    </head>

    <body>
        <div id="app">
            @include('inc.navbar')
        <main class="py-4">
            @auth
            <div class="container">
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{session()->get('success')}}
                 </div>
            @endif
            <div class="row">
                <div class="col-md-4">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="{{route('categories.index')}}">Categories</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{route('tags.index')}}">Tags</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{route('posts.index')}}">Posts</a>
                        </li>
                        @if(auth()->user()->isAdmin())
                        <li class="list-group-item">
                            <a href="{{route('users.index')}}">Users</a>
                        </li>
                    </ul>
                    <ul class="list-group mt-5">
                        <li class="list-group-item">
                            <a href="{{route('trashed-posts.index')}}">Trashed posts</a>
                        </li>
                    </ul>
                        @endif
                 </div>
                <div class="col-md-8">
                    @yield('content')
                </div>
            </div>
        </div>
        @else
            @yield('content')
        @endauth
        </main>
        {{-- @include('inc.footer') --}}
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
@yield('scripts')
</body>
</html>
