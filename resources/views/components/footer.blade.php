
    <footer>
        <div class="container-fluid">
            <div class="row justify-content-evenly">
                <div class="col-12 col-md-3 text-center mt-2">
                    <h3 class="my-3">{{ __('ui.posto') }}</h3>
                        <address><i class="fas fa-map-marked-alt fa-2x"></i> Olbia, Ss, Sardegna</address>
                </div>
                <div class="col-12 col-md-3 text-center mt-2">
                    <h3 class="my-3">{{ __('ui.detali-sito') }}</h3>
                    <div class="mx-auto">
                        
                        <i class="fab fa-html5 fa-2x mx-3"></i>
                      
                        <i class="fab fa-css3 fa-2x mx-3"></i>
                   
                        <i class="fab fa-js fa-2x mx-3"></i>
                 
                        <i class="fab fa-php fa-2x mx-3"></i>
                    

                        <i class="fab fa-laravel fa-2x mx-3"></i>
                    </div>
                
                </div>
                <div class="col-12 col-md-3 text-center mt-2">
                    <h3 class="my-3">{{ __('ui.contattami') }}</h3>
                    <ul class="fa-ul">
                        <li>
                            <i class="fas fa-envelope fa-2x"></i>
                            laviniadodu01@gmail.com
                        </li>
                        <li>
                            <i class="fas fa-phone fa-2x"></i>
                            (+39) 347 921 7666
                        </li>
                        <li>
                            <i class="fab fa-linkedin fa-2x"></i>
                            <a class="text-decoration-none" href="https://www.linkedin.com/in/lavinia-dodu">
                                www.linkedin.com/in/lavinia-dodu
                            </a>
                        </li>
                        <li>
                            <i class="fas fa-location-arrow fa-2x"></i>
                            <a class="text-decoration-none" href="{{ route('mail.contact') }}">{{ __('ui.pagina-contatto') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center text-md-start">
            <img src="/media/logo_small.png" class="shadow-lg mx-3 bg-white" width="180px" alt="logo">
        </div>
        <hr>
        <div class="text-center py-1">
            <p>©Copiright 2021 | {{ __('ui.fatto-con') }} <i class="fas fa-heart"></i> {{ __('ui.e-tanto') }} <i class="fas fa-mug-hot"></i></p>
        </div>
    </footer>
