@extends('layouts.app')
@section('content')
    <section>
        <div class="header">
            @foreach($tags as $tag)
            <a class="badge badge-secondary" href="{{route('details.tag', $tag->id)}}">
                {{$tag->name}}
            </a>
            @endforeach
        </div>
        <div class="leftBox">
            <div class="content">
                <h1>Tag: {{$tag->name}}</h1>
            </div>
        </div>
        <div class="events">
            <ul>
                @foreach($posts as $post)
                <li>
                <div class="time">
                    <a href="{{route('details.show', $post->id)}}"><img src="{{ asset('storage/'.$post->image)}}" alt=""></a>
                    </div>
                    <div class="details">
                        <h3>{{$post->title}}</h3>
                        <p>
                            {{$post->description}}
                            <br/>
                            {{$post->event_date}}
                        </p>
                        <a href="{{route('details.show', $post->id)}}">View Details</a>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
        @foreach($categories as $category)
            <div class="">
                <a href="{{route('details.category', $category->id)}}">
                    {{$category->name}}
                </a>
            </div>
        @endforeach
    </section>

    @foreach($categories as $category)
        <div class="badge badge-secondary">
        <a href="{{route('details.category', $category->id)}}">
            {{$category->name}}
        </a>
        </div>
        @endforeach
        ||
        @foreach($tags as $tag)
        <a class="badge badge-secondary" href="{{route('details.tag', $tag->id)}}">
        {{$tag->name}}
        </a>
    @endforeach


@endsection