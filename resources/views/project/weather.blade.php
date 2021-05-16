@extends('layouts.app')

@section('content')

<x-nav/>

<section id="weather">
    <div class="container-fluid weather">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 text-center my-5">
                <div class="search">
                    <h1><i class="fas fa-cloud-sun"></i> {{ __('ui.che-tempo-fa')}}</h1>
                    <p class="lead">{{ __('ui.inserisci-citta')}}</p>
                    <input type="text" id="searchUser" class="form-control" placeholder="Città">
                </div>
            </div>
        </div>
        <br>
        <div class="container text-center mt-2">
            <button type="submit" class="btn-weather" id="submit"><i class="fas fa-search"></i> {{ __('ui.cerca')}}</button>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 py-4 response-content-weather">
                <div id="content">
            
                </div>
            </div>
        </div>
    </div>
    
    
</section>
<x-footer/>

@endsection