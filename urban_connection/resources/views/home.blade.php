@extends('layouts.app')

@section('content')
<main class="py-4" style="color: black;">
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
                         <a href="{{route('posts.index')}}">Posts</a>
                     </li>
                     <li class="list-group-item">
                         <a href="{{route('categories.index')}}">Categories</a>
                     </li>
                     <li class="list-group-item">
                         <a href="{{route('tags.index')}}">Tags</a>
                     </li>
                </ul>
                <ul class="list-group mt-5">
                     <li class="list-group-item">
                         <a href="{{route('trashed-posts.index')}}">Trashed posts</a>
                     </li>
                </ul>
             </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        You are logged in!
                    </div>
                </div>
                @yield('content1')
            </div>
        </div>
    </div>
        @else
           @yield('content1')
        @endauth
    </main>
@endsection