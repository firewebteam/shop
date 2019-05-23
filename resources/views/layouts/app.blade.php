<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <style>
    body {
        margin:0;
        padding:0;
        height:90%;
        width: 100%;
    }
    

    #con {
        min-height:100%;
        position:relative;
    }

    #footer {
       position:absolute;
       bottom:0;
       width:100%;
       height: 0px;
       padding: 0;
    }
    </style>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="con">
            @include('inc.navbar')

            <div class="col-md-8 offset-sm-2" style="padding-top:50px; padding-bottom:60px">
                @yield('content')
            </div>

        <div id="footer"> 
        @include('inc.footer')
        </div>
    </div>



       <!-- Scripts -->
   <script src="{{asset('js/app.js') }}"></script>
   <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
   <script>
       CKEDITOR.replace( 'article-ckeditor' );
   </script>

</body>
</html>

