@extends('layouts.app1')
@section('content')
<div class="container mt-4" style="color: black;">
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
                    <div class="card-header">
                    {{isset($category)? 'Edit Category': "Create category"}}
                    </div>
                    <div class="card-body">
                    @include("partials.errors")
                        <form action="{{isset($category)?route('categories.update', $category->id):route('categories.store')}}" method = "POST">
                        @csrf
                        @if(isset($category))
                            @method('PUT')
                        @endif
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id='name' class="form-control" name='name'value='{{isset($category)?$category->name:""}}'>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success">
                                {{isset($category)?'Update category':'Add category'}}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</div>
@stop