@extends('layouts.app')

@section('content')



<header id="header" class="masthead">
  
  {{-- <nav id="navbar" class="navbar navbar-expand-lg navbar-dark nav" aria-label="Fifth navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="/media/logo_small.png" class="img-fluid" width="60px" alt="logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarsExample05">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">Info</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#info" tabindex="-1" aria-disabled="false">Riasunto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#skills" tabindex="-1" aria-disabled="false">Competenze</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-bs-toggle="dropdown" aria-expanded="false">Proggetti</a>
            <ul class="dropdown-menu dropdown-menu-end text-center" aria-labelledby="dropdown05">
              <li><a class="dropdown-item" href="{{ route('siti.vetrina') }}">Siti vetrina</a></li>
              <li><a class="dropdown-item" href="#">eCommerce</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact" tabindex="-1" aria-disabled="false">Contatti</a>
          </li>
          @if (Auth::user() && Auth::user()->isAdmin())
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.profile') }}" tabindex="-1" aria-disabled="false">Boss</a>
          </li>
          
          @endif
        </ul>
      </div>
    </div>
  </nav> --}}
  <div class="container">
    <div class="row align-items-center justify-content-center mb-5">
      <div class="col-12 text-center animated-title">
        <div class="text-top">
          <div>
            <h1 class="display-5">
              <span class="fw-bold">{{ __('ui.benvenuto')}}</span>
              <span class="fw-bold">{{ __('ui.sono')}}</span>
            </h1>
          </div>
        </div>
        <div class="text-bottom">
          <div class="fs-1">{{ __('ui.jr-web-dev')}}</div>
        </div>
      </div>
    </div>  
  </div>
  <div class="container">
    <div class="row mx-auto cards justify-content-between">
      
      <div class="content">
        <!-- card -->
        <div class="card">
          <a class="text-decoration-none" href="{{ route('me.profilo') }}">
            <div class="icon"><i class="material-icons md-36">face</i></div>
            <p class="title">{{ __('ui.profilo')}}</p>
            <p class="text">{{ __('ui.il-mio-cv')}}</p>
          </a>
        </div>
        
        <!-- end card -->
        <!-- card -->
        <div class="card">
          <a class="text-decoration-none" href="{{ route('siti.vetrina') }}">
            
            <div class="icon"><i class="material-icons md-36">favorite_border</i></div>
            <p class="title">{{ __('ui.progetti')}}</p>
            <p class="text">{{ __('ui.sfoglia-lavori')}}</p>
          </a>
          
        </div>
        <!-- end card -->
        <!-- card -->
        <div class="card">
          <a class="text-decoration-none" href="{{ route('mail.contact') }}">
            <div class="icon"><i class="material-icons md-36">alternate_email</i></div>
            <p class="title">{{ __('ui.contatti')}}</p>
            <p class="text">{{ __('ui.click-contattarmi')}}</p>
          </a>
        </div>
        
        <!-- end card -->
        
      </div>
     
    </div>
    <div class="row py-2 justify-content-around text-center nav-home margin">
        <div class="col-3 dropdown text-start">
          <button class="dropdown-toggle btn-language-home" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-globe-europe fa-3x text-accent icon-home"></i>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li class="dropdown-item">@include('layouts._locale', ['lang' => 'it', 'nation'=>'italiano'])</li>
            <li class="dropdown-item">@include('layouts._locale', ['lang' => 'en', 'nation'=>'english'])</li>
            <li class="dropdown-item">@include('layouts._locale', ['lang' => 'fr', 'nation'=>'francaise'])</li>
            <li class="dropdown-item">@include('layouts._locale', ['lang' => 'ro', 'nation'=>'rumeno'])</li>
          </ul>
        </div>
        <div class="col-3">
          <a href="{{ route('project.weather') }}"><i class="fas fa-cloud-sun fa-3x icon-weather"></i></a>
        </div>
        <div class="col-3">
          <a class="text-decoration-none" href="https://www.linkedin.com/in/lavinia-dodu">
            <i class="fab fa-linkedin fa-3x text-accent icon-home"></i>
          </a>
        </div>
    </div>
  </div>
</div>      


</header>
{{-- 
  
  <section class="projects">
    <div class="container mt-5">
      <div class="row">
        <div class="col-12 text-center">
          <h2>Proggetti</h2>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt quo alias ea molestiae, reiciendis culpa nulla temporibus quia illo est exercitationem corrupti nemo! Illo necessitatibus quia iste vitae impedit accusantium.</p>
        </div>
      </div>
      <div class="row justify-content-center mt-3">
        <div class="col-12">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <a href="#" class="text-decoration-none">
                  <img src="/media/project_black.png" class="img-fluid" alt="proggetto1">
                </a>
              </div>
              <div class="swiper-slide">
                <a href="#" class="text-decoration-none">
                  <img src="/media/project_war_game.png" class="img-fluid" alt="proggetto2">
                </a>
              </div>
              <div class="swiper-slide">
                <a href="#" class="text-decoration-none">
                  <img src="/media/project_presto.png" class="img-fluid" alt="proggetto3">
                </a>
              </div>
              <div class="swiper-slide">
                <a href="#" class="text-decoration-none">
                  <img src="/media/project_games.png" class="img-fluid" alt="proggetto4">
                </a>
              </div>
              <div class="swiper-slide">
                <a href="#" class="text-decoration-none">
                  <img src="/media/project_food.png" class="img-fluid" alt="proggetto5">
                </a>
              </div>
              <div class="swiper-slide">
                <a href="#" class="text-decoration-none">
                  <img src="/media/project_firstPresto.png" class="img-fluid" alt="proggetto6">
                </a>
              </div>
              <div class="swiper-slide">
                <a href="#" class="text-decoration-none">
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
  </div>
</section>

<section data-aos="fade-up" data-aos-duration="2000" id="about" class="about">
  <div class="container mt-5">
    <div class="row">
      <div class="col-12">
        <div class="blog-card">
          <div class="meta text-end">
            <div class="photo"></div>
            <ul class="details fa-ul">
              <li class="author">Dodu Lavinia</li>
              <li class="date">22/04/1998</li>
              <li class="tags">
                <ul class="fa-ul">
                  <li>
                    <i class="fab fa-html5"></i>
                  </li>
                  <li>
                    <i class="fab fa-css3"></i>
                  </li>
                  <li>
                    <i class="fab fa-js"></i>
                  </li>
                  <li>
                    <i class="fab fa-php"></i>
                  </li>
                  <li>
                    <i class="fab fa-laravel"></i>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="description">
            <h2>Lavinia</h2>
            <h3>Full-stack web dveloper</h3>
            <p>Sono un new entry sviluppatore web laborioso con la passione per la creazione di siti web. Questo mondo mi ha subito affascinata per la liberta alla creatività che offre allo sviluppatore e uno dei motivi per cui mi appassiona questo lavoro e per la soddisfazione che ottengo superando le sfide.</p> 
            <p class="read-more">
              <a href="#">Leggi di piu</a>
            </p>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  {{-- <div class="p-5 mb-4 bg-light rounded-3">
    <div class="container py-5">
      <div class="row align-items-center justify-content-center">
        
        <div class="col-8 shadow-lg px-4 py-3">
          <h2 class="fw-bold">Descrizione</h2>
          <p class="fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
        </div>
      </div>
    </div>
  </div> --}}
  {{-- </section>
    
    <section data-aos="fade-up" id="info" data-aos-duration="2000" class="resume">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 text-center my-3">
            <h2>
              Riasunto
            </h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 col-md-5 me-auto">
            <h3 class="my-2">Esperienza</h3>
            <div class="experience mt-3">
              <span class="fw-bold">Progetto Presto.it</span>
              <p class="fst-italic">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi consectetur doloremque dolorem libero sed impedit odio deleniti quisquam, dolores amet ipsum atque eum illo soluta obcaecati placeat voluptatem consequuntur accusamus?</p>
            </div>
            <hr>
            <div class="experience">
              <span class="fw-bold">Barista</span>
              <p class="fst-italic">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi at molestias voluptatibus sed cum aperiam iusto! Consequuntur alias laborum cum illo facere libero, facilis aut amet quae explicabo nobis et?</p>
            </div>
            <hr>
            <div class="experience">
              <span class="fw-bold">Barista</span>
              <p class="fst-italic">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi consectetur doloremque dolorem libero sed impedit odio deleniti quisquam, dolores amet ipsum atque eum illo soluta obcaecati placeat voluptatem consequuntur accusamus?</p>
            </div>
          </div>
          <div class="col-12 col-md-5">
            <h3 class="my-2">Formazione</h3>
            <div class="education mt-3">
              <span class="fw-bold">Certificato, coding e sviluppo web</span>
              <p class="fst-italic">Aulab Hackademy, Bari</p>
              <time datetime="2021-2021">2021-2021</time>
            </div>
            <hr>
            <div class="education mt-3">
              <span class="fw-bold">Certificato, accelerated ES6 JavaScript Training</span>
              <p class="fst-italic">Udemy</p>
              <time datetime="2021-2021">2021-2021</time>
            </div>
            <hr>
            <div class="education">
              <span class="fw-bold">Diploma, Elettronica e automazione</span>
              <p class="fst-italic">Itastituto tecnico "Mihai Viteazu" Vulcan</p>
              <time datetime="2012-2016">2012-2016</time>
            </div>
          </div>
          
        </div>
      </div>
    </section>
    
    <section data-aos="fade-down" id="skills" data-aos-duration="2000" class="skills">
      <div class="container">
        <div class="row mt-5 text-center">
          <div class="col-12">
            <h2>Competenze</h2>
          </div>
          <div class="row mt-3 justify-content-center">
            <div class="col-7 text-start">  
              <span class="bar">
                <span class="html"><p>HTML5</p></span>
              </span>
              <span class="bar">
                <span class="css"><p>CSS3</p></span>
              </span>
              <span class="bar">
                <span class="javascript"><p>Javascript</p></span>
              </span>
              <span class="bar">
                <span class="php"><p>PHP</p></span>
              </span>
              <span class="bar">
                <span class="laravel"><p>Laravel</p></span>
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section data-aos="fade-down" id="contact" data-aos-duration="2000" class="contact">
      <hr>
      <div class="container mt-5">
        <div class="row text-center">
          <div class="col-12">
            <h2>Contattami!</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 col-md-9">
            <form class="form-group box" action="{{ route('contact.send') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="col-12 text-start">
                <img src="/media/logo_small.png" width="65px" class="img-fluid" alt="logo">
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input name="name" type="text" class="form-control" id="name" placeholder="Inserisci il tuo nome">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Mail</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="Inserisci la tua mail">
              </div>
              <div class="mb-3">
                <label for="message" class="form-label">Messaggio</label>
                <textarea name="message" class="form-control" id="message" cols="30" rows="10"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">
                <i class="fas fa-check fa-2x"></i>
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>
    --}}
    
    @endsection
    