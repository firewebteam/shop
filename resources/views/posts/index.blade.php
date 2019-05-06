@extends('layouts.app')

@section('content')

    <h1> Posts </h1>
    @if(count($posts) > 1)
        @foreach($posts as $post)
            <div class = "card">
                <div class = "row">
                    <div class="col-md-4 col sm-4">
                        <img style ="width:100%" src = "/storage/cover_images/{{$post->cover_image}}">
                    </div>

                    <div class="col-md-4 col sm-4">
                        <h3><a href ="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <h2>Written on {{$post->created_at}}</h2>
                    </div>
                </div>
                
                
            </div>
        @endforeach
    @else
        <p> no posts found </p>
    @endif


@endsection
