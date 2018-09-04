<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name','Blog')}}</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('css/app.css')}}"></link>
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet"></link>
        <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    </head>
    <body lass="landing">
        @include('inc.navbar')
        <div class="container">
            @yield('front')
        </div>

        {{--  script  --}}
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
    </body>
        
</html>