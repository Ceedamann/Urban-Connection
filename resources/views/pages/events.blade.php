@extends('layouts.app')
@push('styles')
    <link href="{{asset('css/index.css')}}" rel="stylesheet">
@endpush

@section('content')

<div class="tags">
@foreach($categories as $category)
<a class='badge badge-secondary' href="{{route('details.category', $category->id)}}">{{$category->name}}</a>
@endforeach||
@foreach($tags as $tag)
<a class='badge badge-secondary' href="{{route('details.tag', $tag->id)}}">{{$tag->name}}</a>
@endforeach
</div>
<section>

    <div style="background-image: linear-gradient(rgba(0, 0, 0, 0.39), rgba(0, 0, 0, 0.699)),
    url('https://ak0.picdn.net/shutterstock/videos/1025207180/thumb/4.jpg');">

        <div class="leftBox">
            <div class="content">
                <h1>Community</h1>
                <p>
                    There's nothing more important than keeping in touch with your community. Use this spot to checkout an upcoming event, and business. Post a new event or business you would to like others to know about and be sure to share it with a couple of friends.
                </p>
            </div>
            <a href="/posts">Create a Post</a>
    </div>

        <div class="events">
            <ul>
                @foreach($posts as $post)
                    <li>
                    <div class="time">
                            <a href="{{route('details.show', $post->id)}}"><img src="{{$post->image}}" alt=""></a>
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

    </div>

    </section>
@endsection
