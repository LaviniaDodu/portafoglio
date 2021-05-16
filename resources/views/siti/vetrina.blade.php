@extends('layouts.app')

@section('content')

<x-nav/>

<x-scroll-up/>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 text-center my-5">
            <h1 class="fw-bold text-accent-color display-5">{{ __('ui.miei-progetti') }}</h1>
            <p class="lead fw-bold">~ {{ __('ui.visualizza-lavori') }} ~</p>
        </div>
    </div>
</div>
<div class="container-fluid projects bg-second-color p-5 my-5 rounded shadow-lg">
    <div class="row">
        <div class="col-12 col-md-5 text-center my-4">
            <h3>{{ __('ui.vista-generale') }}</h3>
            <ul class="fa-ul my-4 text-start">
                <li>
                    <i class="fas fa-shopping-basket text-accent-color"></i>
                    <span class="fw-bold text-dark">eCommerce</span>
                </li>
                <li>
                    <i class="fas fa-gamepad text-accent-color"></i>
                    <span class="fw-bold text-dark">Blog Video games</span>
                </li>
                <li>
                    <i class="fas fa-utensils text-accent-color"></i>
                    <span class="fw-bold text-dark">Blog {{ __('ui.cucina') }}
                    </li></span>
                <li>
                    <i class="fas fa-eye text-accent-color"></i>
                    <span class="fw-bold text-dark">{{ __('ui.pagine') }} Frontend</span>
                </li>
            </ul>
            <p class="fw-bold text-dark">{{ __('ui.seleziona-visualizza') }}</p>
        </div>
        <div class="col-12 col-md-6 me-auto order-md-first">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="#blackProject" class="text-decoration-none">
                            <img src="/media/project_black.png" class="img-fluid" alt="proggetto1">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#warGame" class="text-decoration-none">
                            <img src="/media/project_war_game.png" class="img-fluid" alt="proggetto2">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#progetto-finale" class="text-decoration-none">
                            <img src="/media/project_presto.png" class="img-fluid" alt="proggetto3">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#gogo" class="text-decoration-none">
                            <img src="/media/project_games.png" class="img-fluid" alt="proggetto4">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#cucina" class="text-decoration-none">
                            <img src="/media/project_food.png" class="img-fluid" alt="proggetto5">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#presto1" class="text-decoration-none">
                            <img src="/media/project_firstPresto.png" class="img-fluid" alt="proggetto6">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#redProject" class="text-decoration-none">
                            <img src="/media/project_red.png" class="img-fluid" alt="proggetto7">
                        </a>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
</div>
    </div>
</div>

<div id="blackProject" class="container primo-presto">
    <div class="row mt-5">
        <div class="col-12 col-md-6 px-4 py-3 bg-second-color descrizione">
            <h3>Black project</h3>
            <p class=" lead fst-italic">{{ __('ui.pagina') }} frontend</p>
            <p>{{ __('ui.uno-dei-primi-progetti') }}</p>
            <p class="fw-bold tags">#HTML5 | #CSS3 | #Bootstrap</p>
        </div>
        <div class="col-12 col-md-6 order-md-first">
            <video width="500" height="300" autoplay loop controls class="shadow-lg">
                <source src="/media/black_project.webm" type="video/webm">
                <source src="test.ogg" type="video/ogg">
                    {{ __('ui.browser-non-carica') }}
            </video>
        </div>
    </div>
</div>

<div id="redProject" class="container primo-presto">
    <div class="row mt-5">
        <div class="col-12 col-md-6 px-4 py-3 bg-second-color descrizione">
            <h3>Red project</h3>
            <p class=" lead fst-italic">{{ __('ui.pagina') }} frontend</p>
            <p>{{ __('ui.uno-dei-primi-progetti') }}</p>
            <p class="fw-bold tags">#HTML5 | #CSS3 | #Bootstrap</p>
        </div>
        <div class="col-12 col-md-6 text-end">
            <video width="500" height="300" autoplay loop controls class="shadow-lg">
                <source src="/media/project_red.webm" type="video/webm">
                <source src="test.ogg" type="video/ogg">
                    {{ __('ui.browser-non-carica') }} 
            </video>
        </div>
    </div>
</div>

<div id="presto1" class="container primo-presto">
    <div class="row mt-5">
        <div class="col-12 col-md-6 px-4 py-3 bg-second-color descrizione">
            <h3>Presto!</h3>
            <p class=" lead fst-italic">{{ __('ui.pagina') }} frontend</p>
            <p>{{ __('ui.presto1') }}</p>
            <p class="fw-bold tags">#HTML5 | #CSS3 | #Javascript</p>
        </div>
        <div class="col-12 col-md-6 order-md-first">
            <video width="500" height="300" autoplay loop controls class="shadow-lg">
                <source src="/media/primo-presto.mp4" type="video/mp4">
                <source src="test.ogg" type="video/ogg">
                    {{ __('ui.browser-non-carica') }}
            </video>
        </div>
    </div>
</div>

<div id="cucina" class="container primo-presto">
    <div class="row mt-5">
        <div class="col-12 col-md-6 px-4 py-3 bg-second-color descrizione">
            <h3>{{ __('ui.ricette') }}</h3>
            <p class=" lead fst-italic">Blog {{ __('ui.cucina') }}</p>
            <p>{{ __('ui.blog-cucina') }}</p>
            <p class="fw-bold tags">#HTML5 | #CSS3 | #Javascript | #PHP | #Laravel</p>
        </div>
        <div class="col-12 col-md-6 text-end">
            <video width="500" height="300" autoplay loop controls class="shadow-lg">
                <source src="/media/blog_cucina.mp4" type="video/mp4">
                <source src="test.ogg" type="video/ogg">
                    {{ __('ui.browser-non-carica') }}
            </video>
        </div>
    </div>
</div>

<div id="warGame" class="container primo-presto">
    <div class="row mt-5">
        <div class="col-12 col-md-6 px-4 py-3 bg-second-color descrizione">
            <h3>War game</h3>
            <p class=" lead fst-italic">Blog video games</p>
            <p>{{ __('ui.war-games') }}</p>
            <p class="fw-bold tags">#HTML5 | #CSS3 | #Javascript | #PHP | #Laravel | #MySQL</p>
        </div>
        <div class="col-12 col-md-6 order-md-first">
            <video width="500" height="300" autoplay loop controls class="shadow-lg">
                <source src="/media/war_game.webm" type="video/webm">
                <source src="test.ogg" type="video/ogg">
                    {{ __('ui.browser-non-carica') }}
            </video>
        </div>
    </div>
</div>

<div id="gogo" class="container primo-presto">
    <div class="row mt-5">
        <div class="col-12 col-md-6 px-4 py-3 bg-second-color descrizione">
            <h3>GOGO.com</h3>
            <p class=" lead fst-italic">Blog video games</p>
            <p>{{ __('ui.gogo') }} <span id="dots">...</span><span id="more"> {{ __('ui.gogo2') }} <br>
                 {{ __('ui.gogo3') }} <i class="fas fa-table-tennis"></i>
            </span> 
            <button class="mx-2" id="myBtn">{{ __('ui.leggi-piu') }}</button>
        </p>
            <p class="fw-bold tags">
            #HTML5 | #CSS3 | #Javascript | #PHP | #Laravel | #MySQL</p>
        </div>
        <div class="col-12 col-md-6 text-end">
            <video width="500" height="300" autoplay loop controls class="shadow-lg">
                <source src="/media/gogo-project.webm" type="video/webm">
                <source src="test.ogg" type="video/ogg">
                    {{ __('ui.browser-non-carica') }}
            </video>
        </div>
    </div>
</div>

<div id="progetto-finale" class="container primo-presto mb-5">
    <div class="row mt-5">
        <div class="col-12 col-md-6 px-4 py-3 bg-second-color descrizione">
            <h3>Presto.it</h3>
            <p class=" lead fst-italic">eCommerce</p>
            <p>{{ __('ui.Presto-progetto-finale') }} <span id="dots2">...</span><span id="more2"> {{ __('ui.progetto-finale2') }}<br>
                {{ __('ui.progetto-finale3') }}<br>
                {{ __('ui.progetto-finale4') }}<br>
                {{ __('ui.progetto-finale5') }}<br>
                {{ __('ui.progetto-finale6') }}<br>
                {{ __('ui.progetto-finale7') }}<br>
                {{ __('ui.progetto-finale8') }} </span> 
                <button class="mx-2" id="myBtn2">{{ __('ui.leggi-piu') }}</button>
            </p>
            <p class="fw-bold tags">#HTML5 | #CSS3 | #Javascript | #PHP | #Laravel | #MySQL</p>
        </div>
        <div class="col-12 col-md-6 order-md-first">
            <video width="500" height="300" autoplay loop controls class="shadow-lg">
                <source src="/media/presto.mp4" type="video/mp4">
                <source src="test.ogg" type="video/ogg">
                    {{ __('ui.browser-non-carica') }}
            </video>
        </div>
    </div>
</div>

<x-footer />

@endsection