@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/events.css') }}" rel="stylesheet">
@endpush


@section('content')


<section>
    <div class="header">
        @foreach($categories as $category)
        <a class="badge badge-secondary" href="{{route('details.category', $category->id)}}">{{$category->name}}</a>
        @endforeach||
        @foreach($tags as $tag)
        <a class="badge badge-secondary" href="{{route('details.tag', $tag->id)}}">{{$tag->name}}</a>
        @endforeach
    </div>

    <div class="leftBox">
        <div class="content">
            <h1>Events</h1>
            <p>
                There's nothing more important than keeping in touch with your community. Use this spot to checkout an upcoming event. Post a new event if you like and be sure to share it with a couple of friends.
            </p>
        </div>
            <a href="/posts">Post Event</a>
    </div>

    <div class="events">
        <ul>
            @foreach($posts as $post)
                <li>
                    <div class="time">
                        <img src="{{ asset('storage/'.$post->image)}}" alt="{{$post->title}}">
                    </div>
                    <div class="details">
                        <h3>{{$post->title}}</h3>
                        <p>
                            {{$post->description}}
                        <br/>
                            {{$post->event_date}}
                        <p/>
                        <a href="{{route('details.show', $post->id)}}">View Details</a>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</section>
@endsection
