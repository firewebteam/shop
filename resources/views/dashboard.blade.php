@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Panel Sterowania</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href ="/posts/create" class = "btn btn-primary"> Dodaj Post</a>
                  
                    <h3> Twoje Posty </h3>
                        @if(count($posts)>0)
                    <table class ="table table-striped">
                        <tr>
                            <th>Tytuł</th>
                            <th></th>
                            <th></th>
                        </tr>
                    @foreach($posts as $post)
                    <tr>
                            <td>{{$post->title}}</td>
                            <td><a href="/posts/{{$post->id}}/edit" class='btn btn-default'>Edytuj</a></td>
                            <td>
                                {!!Form::open(['action' => ['PostsController@destroy',$post->id], 'method'=>'POST', 'class'=> 'float-right'])!!}
                                    {{Form::hidden('_method' , 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!}
                            </td>
                        </tr>
                    @endforeach
                   </table>
                   @else
                        <p>Nie masz postów</p>
                   @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
