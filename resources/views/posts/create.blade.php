@extends('layouts.app')

@section('content')

    <h1> Stwórz post </h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
        <div class = "form-group">
            {{Form::label('title', 'Tytuł')}}
            {{Form::text('title', '', ['class'=> 'form-control', 'placeholder'=>'Title'])}}
        </div>
        <div class = "form-group">
                {{Form::label('cena', 'Cena')}}
                {{Form::number('cena', '', ['class'=> 'form-control', 'placeholder'=>'cena'])}}
            </div>
        <div class = "form-group">
                {{Form::label('body', 'Zawartość')}}
                {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class'=> 'form-control', 'placeholder'=>'Body Text'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::submit('Dodaj produkt', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}


@endsection