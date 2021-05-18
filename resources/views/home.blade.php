@extends('layouts.app')

@section('content')



<header id="header" class="masthead">

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
    
    @endsection
    