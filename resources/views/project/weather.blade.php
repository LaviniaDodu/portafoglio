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

<script>

class Fetch {
    async getCurrent(input) {
      const myKey = "cdb91b50203dabb6954097b1c812fa6d";
  
      //make request to url
  
      const response = await fetch(
        `https://api.openweathermap.org/data/2.5/weather?q=${input}&appid=${myKey}`
      );
  
      const data = await response.json();
  
      console.log(data);
  
      return data;
    }
  }


  class UI {
    constructor() {
      this.uiContainer = document.querySelector("#content");
      this.city;
      this.defaultCity = "London";
    }
  
    populateUI(data) {
      //de-structure vars
  
      //add them to inner HTML
  
      this.uiContainer.innerHTML = `
          
          <div class="card mx-auto response-weather">
              <div class="card-body justify-content-center text-center">
                  <h4 class="card-title py-2 text-blue">${data.name}</h4>
                  <h6 class="card-subtitle text-muted py-2">{{ __('ui.massime')}} <strong class="text-yellow">${data.main.temp_max}</strong> <br>{{ __('ui.minime')}} <strong class="text-yellow">${data.main.temp_min}</strong></h6>
                  <p class="card-text pt-2">{{ __('ui.condizioni-tempo')}} : <br> <strong class="text-yellow">${data.weather[0].description}</strong></p>
                  
              </div>
          </div>
          
          
          `;
    }
  
    clearUI() {
      uiContainer.innerHTML = "";
    }
  
    saveToLS(data) {
      localStorage.setItem("city", JSON.stringify(data));
    }
  
    getFromLS() {
      if (localStorage.getItem("city" == null)) {
        return this.defaultCity;
      } else {
        this.city = JSON.parse(localStorage.getItem("city"));
      }
  
      return this.city;
    }
  
    clearLS() {
      localStorage.clear();
    }
  }


//inst classes//

const ft = new Fetch();
const ui = new UI();

//add event listeners//

const search = document.querySelector("#searchUser");
const button = document.querySelector("#submit");
button.addEventListener("click", () => {
  const currentVal = search.value;

  ft.getCurrent(currentVal).then((data) => {
    //call a UI method//
    ui.populateUI(data);
    //call saveToLS
    ui.saveToLS(data);
  });
});

//event listener for local storage

window.addEventListener("DOMContentLoaded", () => {
  const dataSaved = ui.getFromLS();
  ui.populateUI(dataSaved);
});



</script>

@endsection