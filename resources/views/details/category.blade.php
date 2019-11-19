@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
@endpush
@section('content')
    <section>

        <div style="background-image: linear-gradient(rgba(0, 0, 0, 0.39), rgba(0, 0, 0, 0.699)),
        url('https://ak0.picdn.net/shutterstock/videos/1025207180/thumb/4.jpg');">

        <div class="leftBox">
            <div class="content">
                <h1>Category: {{$category->name}}</h1>
            </div>
            <a href="/posts">Create a Post</a>
        </div>
        <div class="events">
            <ul>
                @foreach($posts as $post)
                <li>
                <div class="time">
                        <img src="{{$post->image}}" alt="{{$post->title}}">
                    </div>
                    <div class="details">
                        <h3>{{$post->title}}</h3>
                        <p>
                            {{$post->description}}
                        </p>
                        <a href="{{route('details.show', $post->id)}}">View Details</a>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </section>
    <div class="tags-cat">
        @foreach($categories as $category)
        <a class='badge badge-secondary' href="{{route('details.category', $category->id)}}">{{$category->name}}</a>
        @endforeach||
        @foreach($tags as $tag)
        <a class='badge badge-secondary' href="{{route('details.tag', $tag->id)}}">{{$tag->name}}</a>
        @endforeach
    </div>
@endsection