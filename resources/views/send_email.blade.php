@extends('layouts.app')

@section('content')
<div class="container box">
        <h3 align="center">Wyślij nam wiadomość. Chętnie się z Tobą skontaktujemy!</h3><br />
        @if (count($errors) > 0)
         <div class="alert alert-danger">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <ul>
           @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
           @endforeach
          </ul>
         </div>
        @endif
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
         <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        @endif
        <form method="post" action="{{url('sendemail/send')}}">
         {{ csrf_field() }}
         <div class="form-group">
          <label>Twoje imię</label>
          <input type="text" name="name" class="form-control" value="" />
         </div>
         <div class="form-group">
          <label>Twój e-mail</label>
          <input type="text" name="email" class="form-control" value="" />
         </div>
         <div class="form-group">
          <label>Co chcesz nam powiedzieć</label>
          <textarea name="message" class="form-control"></textarea>
         </div>
         <div class="form-group">
          <input type="submit" name="send" class="btn btn-info" value="Ognia!" />
         </div>
        </form>
        
       </div>



@endsection
