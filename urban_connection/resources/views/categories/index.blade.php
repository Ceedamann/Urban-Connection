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

                <div class="card card-default">
                    <div class="card-header">
                        Categories
                    </div>
                        <div class="card-body">
                        @if($categories->count()>0)
                        <table class="table">
                                <thead>
                                    <th>Name</th>
                                    <th>Posts count</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    @foreach($categories as $category)
                                        <tr>
                                            <td>
                                                {{$category->name}}
                                            </td>
                                            <td>
                                            {{$category->posts->count()}}
                                            </td>
                                            <td>
                                                <a href="{{route('categories.edit', $category-> id)}}" class="btn btn-info btn-sm">Edit</a>
                                                <button class="btn btn-danger btn-sm" onclick="handleDelete({{$category->id}})">Delete</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <form action="" method="POST" id="deleteCategoryForm">
                                                @csrf
                                                    @method('DELETE')
                                                <h5 class="modal-title" id="deleteModalLabel">Delete Category</h5>

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
                        <h3 class="text-center">No Categories Yet</h3>
                        @endif


                        @yield('content')
                    </div>
                </div>
                <div class="d-flex justify-content-end mb-2">
                        <a href="{{route('categories.create')}}" class="btn btn-success">Add Category</a>
                </div>
            </div>
        @else
           @yield('content1')
        @endauth
    </main>


@stop

@section('scripts')
    <script>
    function handleDelete(id){
        var form = document.getElementById('deleteCategoryForm')
        form.action = '/categories/'+ id
        $("#deleteModal").modal('show')

    }
    </script>
@stop