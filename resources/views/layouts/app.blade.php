<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{config('app.name', 'JANROBI')}}</title>

        <style>
  
                .center {
                text-align: center;
                padding-top: 100px;
                }
                  </style>
        
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
        @include('inc.messages')
            @yield('content')
        
        </div>
        @include('inc.footer')
    </body>
</html>