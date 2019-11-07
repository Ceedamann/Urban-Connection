@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/events.css') }}" rel="stylesheet">
@endpush
@section('content')

{{-- <div class="tags">
        @foreach($categories as $category)
        <a class='badge badge-secondary' href="{{route('details.category', $category->id)}}">{{$category->name}}</a>
        @endforeach
        ||
        @foreach($tags as $tag)
        <a class='badge badge-secondary' href="{{route('details.tag', $tag->id)}}">{{$tag->name}}</a>
        @endforeach
    </div> --}}
    <section>
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
    </section>
    <div class="tags">
            @foreach($categories as $category)
            <a class='badge badge-secondary' href="{{route('details.category', $category->id)}}">{{$category->name}}</a>
            @endforeach
            ||
            @foreach($tags as $tag)
            <a class='badge badge-secondary' href="{{route('details.tag', $tag->id)}}">{{$tag->name}}</a>
            @endforeach
        </div>

    @endsection