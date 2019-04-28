@extends('layouts.app')

@section('content')
    <a href="/posts" class= "btn btn-default"> Powrót <a>
    <h1> {{$post->title}} muj  {{$post->id}} </h1>
    <small>written on {{$post->created_at}}</small>
    <div>
        {{$post->body}}
    </div>

@endsection
