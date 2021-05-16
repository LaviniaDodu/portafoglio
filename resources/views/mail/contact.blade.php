@extends('layouts.app')

@section('content')

<x-nav/>

<section class="contatti mb-5">
    <div class="container">
        <div class="row text-center H1">
            <div class="col-12">
                <h1 class="display-4">{{ __('ui.contatti')}}</h1>
            </div>
        </div>
    </div>
    <div class="container my-4">
        <div class="row text-center testo">
            <div class="col-12">
                <h3>{{ __('ui.parlare-con-te')}} <i class="fas fa-heart"></i></h3>
            <p class="lead fw-bold">{{ __('ui.contattami-tramite')}}</p>
            </div>
        </div>
    </div>
    @if (session('status'))
    <div class="alert alert-success text-danger text-center fw-bold">
        {{ session('status') }}
    </div>
    @endif
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-5">
                <form action="{{ route('mail.send') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control" id="name" placeholder="Il tuo nome e cognome">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" id="email" placeholder="La tua e-mail">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" name="message" id="message" name="message" cols="30" rows="10" placeholder="Il tuo messaggio"></textarea>
                    </div>
                    <div class="text-md-center">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane fa-2x"></i></button>
                    </div>
                </form>
            </div>
            <div class="col-12 col-md-6 ms-auto text-center text-md-start mt-5">
                <ul class="fa-ul">
                    <li>
                        <address class="display-6">
                            <i class="fas fa-home"></i>
                            {{ __('ui.luogo')}}</address>
                        </li>
                        <li>
                            <p class="display-6">
                                <i class="fas fa-phone"></i>
                                (+39) 347 921 7666
                            </p>
                        </li>
                        <li>
                            <p class="display-6">
                                <i class="fas fa-envelope"></i>
                                laviniadodu01@gmail.com
                            </p>
                        </li>
                        <li>
                            <div class="display-6">
                                <i class="fab fa-linkedin"></i>
                                <a class="text-decoration-none text-white" href="https://www.linkedin.com/in/lavinia-dodu">www.linkedin.com/in/lavinia-dodu</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <x-footer />
    
    @endsection