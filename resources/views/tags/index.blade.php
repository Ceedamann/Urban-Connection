@extends('layouts.app1')

@section('content')

<main class="py-4" style="color: black;">
        @auth
        <div class="container">
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

                        <div class="card card-default">
                                <div class="card-header">Tags</div>
                                        <div class="card-body">
                                    @if($tags->count()>0)
                                    <table class="table">
                                            <thead>
                                                <th>Name</th>
                                                <th>Posts count</th>
                                                <th></th>
                                            </thead>
                                            <tbody>
                                                @foreach($tags as $tag)
                                                    <tr>
                                                        <td>
                                                            {{$tag->name}}
                                                        </td>
                                                        <td>
                                                        {{$tag->posts->count()}}
                                                        </td>
                                                        <td>
                                                            <a href="{{route('tags.edit', $tag-> id)}}" class="btn btn-info btn-sm">Edit</a>
                                                            <button class="btn btn-danger btn-sm" onclick="handleDelete({{$tag->id}})">Delete</button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <form action="" method="POST" id="deletetagForm">
                                                            @csrf
                                                                @method('DELETE')
                                                            <h5 class="modal-title" id="deleteModalLabel">Delete tag</h5>

                                                            <div class="modal-body">
                                                                <p class="text-center text-bold">Are you sure??</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Go back</button>
                                                                <button type="submit" class="btn btn-danger">Yes, Delete</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                    <h3 class="text-center">
                                        No tags yet
                                    </h3>
                                    @endif

                                    @yield('content')
                                </div>
                            </div>
                        <div class="d-flex justify-content-end mt-2 mb-2">
                            <a href="{{route('tags.create')}}" class="btn btn-success">Add tag</a>
                        </div>
        @else
           @yield('content1')
        @endauth
    </main>

@stop

@section('scripts')
    <script>
    function handleDelete(id){
        var form = document.getElementById('deletetagForm')
        form.action = '/tags/'+ id
        $("#deleteModal").modal('show')

    }
    </script>
@stop