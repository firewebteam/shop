@extends('layouts.app')

@section('content')
    <a href="/posts" class= "btn btn-default"> Powrót <a>
    <h1> {{$post->title}} muj  {{$post->id}} </h1>
   
    <div>
        {!!$post->body!!}
    </div>

    <hr>
    <small>written on {{$post->created_at}}</small>
    <hr>
    <a href = "/posts/{{$post->id}}/edit" class ="btn btn-default"> Edit </a>

@endsection
