@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/about.css') }}" rel="stylesheet">
    
@endpush

@section('content')
    <section>
        <div class="leftBox">
            <div class="content">
                <h1>Category: {{$category->name}}</h1>
              
            </div>
           
        </div>

        <div class="events">
            <ul>
                @foreach($posts as $post)
                <li>
                <div class="time">
                        <h2>
                            <span>{{$post->event_date}}</span>
                        </h2>
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

    @foreach($categories as $category)
                  <div class="">
                    <a href="{{route('details.category', $category->id)}}">
                      {{$category->name}}
                    </a>
                  </div>
                  @endforeach

                  @foreach($tags as $tag)
                  <a class="badge badge-secondary" href="{{route('details.tag', $tag->id)}}">
                    {{$tag->name}}
                  </a>
                  @endforeach

@endsection