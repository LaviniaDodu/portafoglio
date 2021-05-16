@extends('layouts.app')

@section('content')

<x-nav/>

<x-scroll-up/>

<section class="cv">
    <div class="container head">
        <div class="row justify-content-center text-center mx-auto">
            <div class="col-12 col-md-6 mt-5">
                <div class="div text-end">
                    <img src="/media/me.png" class="my-img px-3 pt-2" alt="me">
                </div> 
            </div>
            <div class="col-12 col-md-6 btn-space">
                <div id="btnCategorie" class="shadow">
                    <i class="fas fa-question fa-2x"></i> 
                </div>
                <div class="leCategorie shadow">
                    <a class="text-decoration-none" href="#descrizione">
                        <i class="fas fa-user fa-2x"></i>
                    </a>
                </div>
                <div class="leCategorie shadow">
                    <a class="text-decoration-none" href="#esperienza">
                        <i class="fas fa-briefcase fa-2x"></i>
                    </a>
                </div>
                <div class="leCategorie shadow">
                    <a class="text-decoration-none" href="#formazione">
                        <i class="fas fa-graduation-cap fa-2x"></i>
                    </a>
                </div>
                <div class="leCategorie shadow">
                    <a class="text-decoration-none" href="#competenze">
                        <i class="fas fa-tools fa-2x"></i>
                    </a>
                </div>
            </div>        
            {{-- <div class="col-12 bg-accent col-md-8 banner mb-5 text-center mx-auto shadow-lg">
                <h1>{{ __('ui.conosciamoci')}}</h1>
                
                <div class="row mx-auto justify-content-space-between categorie-pagina">
                    <div class="col-2">
                        <a class="text-decoration-none mx-3 px-3 py-1" href="#descrizione">
                        <span>{{ __('ui.descrizione')}}</span>
                    </a>
                </div>
                    <div class="col-6">

                        <a class="text-decoration-none mx-3 px-4 py-1" href="#esperienza">
                            <span>{{ __('ui.exp-form')}}</span>
                        </a>
                    </div>
                <div class="col-2">
                    <a class="text-decoration-none mx-3 px-4 py-1" href="#competenze">
                        <span>{{ __('ui.competenze')}}</span>
                    </a>
                </div>
                </div>
                <br>
                
            </div> --}}
        
        </div>
    </div>
    <div  id="descrizione" class="container my-5">
        <div class="row justify-content-center">
            
                <div class="col-12 col-md-10 descrizione px-4 py-3">
                    <h3>{{ __('ui.di-piu-su-di-me')}}</h3>
            
                
                    <p class="fw-bold mt-2">{{ __('ui.chi-sono') }} <br>
                        {{ __('ui.chi-sono2') }} <i class="fas fa-heart text-accent"></i>. <br>
                        {{ __('ui.chi-sono3') }} <br>
                        {{ __('ui.chi-sono4') }} 
                    </p>
                    <p class="fst-italic">{{ __('ui.chi-sono5') }}</p>
                </div>
            </div>
        </div>
    </div>
    <section class="bg-white">
    <div class="container my-5 py-5" id="esperienza">
        <div class="row text-center my-4">
            <h3 class="riassunto">{{ __('ui.riassunto') }}</h3>
        </div>
        <div class="row">
            <div class="col-12 col-md-5 mb-4">
                <h3>{{ __('ui.esperienze') }}</h3>
                <div class="mt-3">
                    <span class="fw-bold esperienze-formazioni">{{ __('ui.progetto-presto') }}</span>
                    <p>{{ __('ui.aulab') }}</p>
                    <p class="fst-italic">{{ __('ui.esperienza-presto') }} </p>
                </div>
                <hr>
                <div class="">
                    <span class="fw-bold esperienze-formazioni">{{ __('ui.barista') }}</span>
                    <p>Botanic Golf Sacuba & Resort, Olbia</p>
                    <p class="fst-italic">{{ __('ui.esperienza2') }}</p>
                </div>
                <hr>
                <div class="">
                    <span class="fw-bold esperienze-formazioni">{{ __('ui.barista') }}</span>
                    <p>Aeroporto Costa Smeralda, Cortesa S.R.L., Olbia</p>
                    <p class="fst-italic">{{ __('ui.esperienza3') }}</p>
                </div>    
            </div>
            <div id="formazione" class="col-12 col-md-5 text-end ms-auto">
                <h3>{{ __('ui.formazione') }}</h3>
                
                
                <div class="mt-3">
                    <span class="fw-bold esperienze-formazioni">{{ __('ui.certificato1') }}</span>
                    <p class="fst-italic">{{ __('ui.aulab') }}</p>
                    <time datetime="2021-2021">2021-2021</time>
                </div>
                <hr>
                <div class="mt-3">
                    <span class="fw-bold esperienze-formazioni">{{ __('ui.certificato2') }}</span>
                    <p class="fst-italic">Udemy</p>
                    <time datetime="2021-2021">2021-2021</time>
                </div>
                <hr>
                <div class="mt-3">
                    <span class="fw-bold esperienze-formazioni">{{ __('ui.diploma') }}</span>
                    <p class="fst-italic">{{ __('ui.liceo') }}</p>
                    <time datetime="2012-2016">2012-2016</time>
                </div>
            </div>        
        </div>
    </div>
    <div class="container mt-5 pb-5" id="competenze">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5 text-center">
                <h3>{{ __('ui.competenze') }}</h3>
                    <div class="progress my-4">
                        <div class="progress-bar text-start" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"><span class="px-5 fw-bold">90% HTML</span></div>
                      </div>
                  <div class="progress my-4">
                    <div class="progress-bar text-start" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="px-5 fw-bold">85% CSS</span></div>
                  </div>
                  <div class="progress my-4">
                    <div class="progress-bar text-start" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span class="px-5 fw-bold">75% Javascript</span></div>
                  </div>
                  <div class="progress my-4">
                    <div class="progress-bar text-start" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"><span class="px-5 fw-bold">80% PHP</span></div>
                  </div>
                  <div class="progress my-4">
                    <div class="progress-bar text-start" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"><span class="px-5 fw-bold">80% Laravel</span></div>
                  </div>
            </div>
        </div>
    </div>
</section>
</section>
<x-footer />
<script>

    // Btn categories profile 

const opener = document.querySelector('#btnCategorie');
const circles = document.querySelectorAll('.leCategorie');
let opened = false;

opener.addEventListener('click', () => {
  if(opened == false) {
    circles.forEach( (circle, i) => {
      circle.style.transform = `rotate(-${i*360/circles.length}deg) translate(100px) rotate(${i*360/circles.length}deg)`
    }) 
    opened = true
  } else {
    circles.forEach( (circle, i) => {
      circle.style.transform = `rotate(${i*360/circles.length}deg) translate(0px) rotate(${i*360/circles.length}deg)`
    }) 
    opened = false 
  }
  
})



</script>

@endsection