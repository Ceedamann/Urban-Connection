@extends('layouts.app')

@section('content')

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
                    <div class="">
                        @yield('content')
                    </div>
        @else
            @yield('content')
        @endauth
        @auth
                <div class="card card-default">
                    <div class="card-header">Posts</div>
                        <div class="card-body">
                            @if($posts->count()>0)
                            <table class="table">
                                <thead>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th></th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    @foreach($posts as $post)
                                        <tr>
                                            <td><img id="post-image"src="{{$post->image}}" alt="{{$post->title}}"></td>
                                            <td>{{$post->title}}</td>
                                            <td>
                                            <a href="{{route('categories.edit', $post->category->id)}}">
                                            {{$post->category->name}}</a>
                                            </td>
                                            @if($post->trashed())
                                            <td>
                                                <form action="{{route('restore-posts', $post->id)}}" method="POST">
                                                @csrf
                                                @method("PUT")
                                                <button type="submit" class="btn btn-info btn-sm" style= "color:white">Restore</button>
                                                </form>
                                            </td>
                                            @else
                                            <td>
                                            <a href="{{route('posts.edit', $post->id)}}" class="btn btn-info btn-sm">Edit</a>
                                            </td>
                                            @endif
                                            <td><form action="{{route('posts.destroy', $post->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">
                                                    {{$post->trashed()?"Delete":"Trash"}}
                                                    </button>
                                            </form></td>
                                        </tr>

                                    @endforeach
                                </tbody>
                            </table>
                            @else
                            <h3 class="text-center">No Posts Yet</h3>
                            @endif
                        </div>
                </div>
                </div>
                    <div class="d-flex justify-content-end mt-2 mb-2 mr-4">
                        <a href="{{route('posts.create')}}" class="btn btn-success">Add Post</a>
                    </div>
                </div>
        @else
            @yield('content1')
        @endauth
    </main>
@stop