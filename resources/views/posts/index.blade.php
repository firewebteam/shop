@extends('layouts.app')

@section('content')

    <h1> Produkty jakie Wam oferujemy </h1>
    @if(count($posts) > 1)
        @foreach($posts as $post)
            <div class = "card">
                <div class = "row">
                    <div class="col-md-4 col sm-4">
                        <img style ="width:100%" src = "/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <br>
                    <div class="col-md-4 col sm-4">
                        <h3><a href ="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <h6>Dodano {{$post->created_at}}</h6>
                        <h3>Cena: <b>{{$post->cena}}<b> zł</h3>
                        <a href="/posts/{{$post->id}}/buy"  class='btn btn-primary'>Kup</a>
                        <h3><a href ="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        
                    </div>
                <br>
                </div>
                
            </div>
            <br>
        @endforeach
    @else
        <p> Nie znaleziono żadnego produktu </p>
    @endif


@endsection
