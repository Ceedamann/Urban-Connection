 @section('content')
    {{-- <div class="container">
        <main class="py-4">
        @auth
            <div class="container">
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{session()->get('success')}}
                </div>
            @endif
            <div class="row">
                <div class="col-md-4 mt-5">
                    <ul class="list-group">
                            <li class="list-group-item">
                                <a href="{{route('posts.index')}}">Posts</a>

                            </li>
                            <li class="list-group-item">
                                <a href="{{route('categories.index')}}">Categories</a>

                            </li>
                    </ul>
                    <ul class="list-group mt-5">
                        <li class="list-group-item">
                            <a href="{{route('trashed-posts.index')}}">Trashed posts</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8 mt-5">
                </div>
            </div>
        @else
        @yield('content')
        </div>
        </main>
                    @endauth
    </div> --}}
@endsection
