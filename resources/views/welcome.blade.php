<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--font awesome-->
        <script src="https://kit.fontawesome.com/8b808e29d0.js" crossorigin="anonymous"></script>

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!--styles-->
        <link rel="stylesheet" href="css/destacados.css">
        
    </head>
    <body>
        
        
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

           
        </div>
        
        <div id="app">
            <example-component></example-component>
            @{{mensaje}}
        </div>
        @include('destacados')
        



        <script src="{{ mix('js/app.js') }}"></script>




    </body>
</html>
