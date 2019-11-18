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
            <div class="col-md-8">
                @yield('content')
            </div>
        </div>
    </div>
    @else
        @yield('content')
    @endauth
</main>


<div class="container mt-1" style="color: black;">
    <div class="row">
        <div class="card card-default">
            <div class="card-header">
                Create Post
            </div>
            <div class="card-body">
            @include("partials.errors")
                <form action="{{isset($post)? route('posts.update', $post->id):route('posts.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($post))
                    @method("PUT")
                    @endif
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id='title' value="{{isset($post)?$post->title:''}}">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" cols="5" rows="5" class="form-control">{{isset($post)?$post->description:''}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <input id="content" type="hidden" name="content" value="{{isset($post)?$post->content:''}}">
                        <trix-editor class="trix-content" input="content"></trix-editor>
                    </div>
                    <div class="form-group">
                        <label for="event_date">Date of Event</label>
                        <input type="text" class="form-control" name="event_date" id='event_date' value="{{isset($post)?$post->event_date:''}}">
                    </div>
                    @if(isset($post))
                        <div class="form-group">
                            <img src="{{$post->image}}" alt="{{$post->title}}" style="width:100%">
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="text" class="form-control" name="image" id='image'>
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select name="category" class="form-control" id="category">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}"
                                @if(isset($post))
                                    @if($category->id === $post->category_id)
                                        selected
                                    @endif
                                @endif
                                >
                                    {{$category->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                            @if($tags->count()>0)
                            <label for="tags">Tags</label>
                            <select name="tags[]" id="tags" class="form-control tags-selector" multiple>
                            @foreach($tags as $tag)
                            <option value="{{$tag->id}}"
                            @if(isset($post))
                                @if($post->hasTag($tag->id))
                                    selected
                                @endif
                            @endif
                            >
                            {{$tag->name}}
                            </option>
                            @endforeach
                            </select>
                            @endif
                    </div>
                    <div class="form-group">
                        <button type='submit' class="btn btn-success">{{isset($post)?"Update Post":"Create Post"}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@stop
@section("scripts")
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.0/trix.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
flatpickr('#event_date',{enableTime: true, dateFormat: "M d Y"})
$(document).ready(function() {
    $('.tags-selector').select2();

});
</script>

@stop
@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/dark.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.0/trix.css">

@stop