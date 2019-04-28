@extends('layouts.app')

@section('content')

    <h1> Posts </h1>
    @if(count($posts) > 1)
        @foreach($posts as $post)
            <div class = "card">
                <h3><a href ="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <h2>Written on {{$post->created_at}}</h2>
            </div>
        @endforeach
    @else
        <p> no posts found </p>
    @endif


@endsection
