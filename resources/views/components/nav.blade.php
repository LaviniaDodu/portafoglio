<nav class="navbar navbar-expand-md navbar-border" id="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('home') }}">
      <img src="/media/logo_small.png" id="logo-nav" class="bg-white logo-nav1"alt="logo">
    </a>
    <button class="navbar-toggler button-collapse" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="fas fa-ellipsis-v"></i></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarsExample04">
      <ul id="ul-nav" class="navbar-nav mx-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('home') }}">{{ __('ui.home')}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('me.profilo') }}">{{ __('ui.profilo')}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('siti.vetrina') }}">{{ __('ui.progetti')}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('mail.contact') }}" tabindex="-1">{{ __('ui.contatti')}}</a>
        </li>
        {{-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
          <ul class="dropdown-menu" aria-labelledby="dropdown04">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> --}}
      </ul>
      <ul class="navbar-nav ms-auto mb-2 mb-md-0">
        <li>
          <a class="nav-link" href="{{ route('project.weather') }}" tabindex="-1"><i class="fas fa-cloud-sun fa-2x weather-a"></i></a>
        </li>
        {{-- <li>
          <a class="nav-link" href="{{ route('project.weather') }}" tabindex="-1"><i class="fas fa-globe fa-2x"></i></a>
        </li> --}}
        {{--  Seleziona lingue --}}
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle btn text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-globe fa-2x"></i>
          </a>
          
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown04">
            
            
            <li class="dropdown-item">
              
              @include('layouts._locale', ['lang' => 'it', 'nation'=>'italiano'])
              
              
            </li>
            
            <li class="dropdown-item">
              @include('layouts._locale', ['lang' => 'en', 'nation'=>'english'])
              
              
            </li>
            
            <li class="dropdown-item">
              @include('layouts._locale', ['lang' => 'fr', 'nation'=>'francaise'])
              
            </li>
            
            <li class="dropdown-item">
              @include('layouts._locale', ['lang' => 'ro', 'nation'=>'rumeno'])
              
            </li>
            
            <li class="dropdown-item">
              @include('layouts._locale', ['lang' => 'sardo', 'nation'=>'sardo'])
              
            </li>
            
            
            
          </ul>
          
          
        </li>
        
        
      </ul>
      
      
      
    </div>
  </div>
</nav>