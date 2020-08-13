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
        
   <!-- Slider main container -->
<div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide" >
            <div class="product-grid">
                <div class="product-image">
                    <a href=""><img class="pic-1" src="img/celular.jpg" ></a>
                    <span class="product-sale-label">Nuevo</span>
                    <ul class="product-links">
                        <li><a href=""><i class="fas fa-shopping-cart"></i></a></li>
                        <li><a href=""><i class="fas fa-heart"></i></a></li>
                        <li><a href=""><i class="fas fa-user"></i></a></li>
                       
                    </ul>
                </div>
                <div class="product-content">
                    <h3><small><a href="" class="name-card">Samsung Galaxy Note 10</a></small></h3>
                    <div class="price">
                        <p><s><small>$1.000.000</small></s><span class="offert">-10%</span></p>
                        <h4>$900.000</h4>

                    </div>
                    
                   
                    
                </div>
                
             
            </div>
           
        </div>
        <div class="swiper-slide">Slide 2</div>
        <div class="swiper-slide">Slide 3</div>
        <div class="swiper-slide">Slide 4</div>
        <div class="swiper-slide">Slide 5</div>
        <div class="swiper-slide">Slide 6</div>
        <div class="swiper-slide">Slide 7</div>
        <div class="swiper-slide">Slide 8</div>
        <div class="swiper-slide">Slide 9</div>
        ...
    </div>
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
</div>


        <script src="{{ mix('js/app.js') }}"></script>




    </body>
</html>
