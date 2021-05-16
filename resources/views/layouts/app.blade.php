<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Slides --> 
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    
</head>
<body>
    
    <div id="app">
        
        <main class="">
            @yield('content')
        </main>
    </div>
    
    {{-- <footer>
        
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-12 col-md-4 text-center text-md-start my-3">
                    <h3>Info Lavinia</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor laudantium, repudiandae, animi corporis sed impedit voluptates in labore adipisci obcaecati fugit excepturi quas officiis voluptatem magni suscipit eligendi ratione natus.</p>
                </div>
                <div class="col-12 col-md-2 text-center text-md-start ml-auto my-3">
                    <h3>Web site</h3>
                    <ul class="fa-ul">
                        <li>HTML5</li>
                        <li>CSS3</li>
                        <li>Bootstrap</li>
                        <li>Javascript</li>
                        <li>PHP</li>
                        <li>Laravel</li>
                        <li>MySQL</li>
                    </ul>   
                </div>
                <div class="col-12 col-md-2 text-center text-md-start my-3">
                    <h3>Competenze</h3>
                    <ul class="fa-ul">
                        <li>Frontend</li>
                        <li>Backend</li>
                    </ul>
                </div>
                <div class="col-12 col-md-3 text-center text-md-start my-3">
                    <h3>Contatto</h3>
                    <address>Via Muzio clementi, Olbia, Ss, Sardegna, Italia</address>
                    <ul class="fa-ul">
                        <li><i class="fas fa-phone"></i> Telefono : +(39) 347 921 7666</li>
                        <li><i class="fas fa-envelope"></i> E-mail : laviniadodu01@gmail.com</li>
                    </ul>
                    <div id="social" class="d-flex justify-content-center mt-4">
                        <div class="social">
                            <div class="links">
                                <a href="#" class="btn-social">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#" class="btn-social">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="btn-social">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#" class="btn-social">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </div>
                            <span>social</span>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row mt-4">
                <div class="col-12 text-center">
                    <p>
                        <img src="/media/logo_white.png" class="img-fluid" width="50px" alt="logo">
                        Copyright ©2021 | Questo layout e fatto con il <i class="fas fa-heart cuore"></i></p>
                    </div>
                </div>
            </div>
            
        </footer> --}}
        
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
          </script>
        <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
        
    </body>
    </html>
    