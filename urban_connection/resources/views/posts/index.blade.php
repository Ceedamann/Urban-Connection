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

                    <div class="d-flex justify-content-end mb-2">
                        <a href="{{route('posts.create')}}" class="btn btn-success">Add Post</a>
                    </div>

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
                                                <td><img src="{{ asset('storage/'.$post->image)}}" width="120px" height='120px' alt="{{$post->title}}"></td>
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

            </div>
        </div>
    </div>
        @else
           @yield('content1')
        @endauth
    </main>


@stop