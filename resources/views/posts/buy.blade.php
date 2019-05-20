@extends('layouts.app')

@section('content')
    <a href="/posts" class= "btn btn-default"> Powrót <a>
    <h1> {{$post->title}} o id: {{$post->id}} </h1>
    <img style ="width:100%" src = "/storage/cover_images/{{$post->cover_image}}">
    <div>
        {!!$post->body!!}
    </div>

    <hr>
    <small>Dodane: {{$post->created_at}}</small>
    <hr>

    <a href = "/posts/{{$post->id}}/buy" class ="btn btn-default"> Kup </a>
    {{-- @if(!Auth::guest()) --}}
    @if(Auth::guest('admin'))
        <a href = "/posts/{{$post->id}}/edit" class ="btn btn-default"> Edit </a>

        {!!Form::open(['action' => ['PostsController@destroy',$post->id], 'method'=>'POST', 'class'=> 'float-right'])!!}
            {{Form::hidden('_method' , 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}

    @endif
@endsection
