const navbar = document.querySelector('#navbar'); 
// const header = document.querySelector('#header'); 
const logoNav = document.querySelector('#logo-nav');
const UL = document.querySelector('#ul-nav'); 


window.addEventListener('scroll', () => {
  let scrolled = window.pageYOffset 
  if(scrolled > 150) {
    navbar.classList.add('modified-nav', 'a-modified', 'i-modified')
    navbar.classList.remove('navbar-border')
    logoNav.classList.remove('bg-white', 'logo-nav1')
    logoNav.classList.add('logo-nav2')
    UL.classList.remove('mx-auto')
  } else {
    navbar.classList.remove('modified-nav', 'a-modified', 'i-modified')
    navbar.classList.add('navbar-border')
    logoNav.classList.remove('logo-nav2')
    logoNav.classList.add('bg-white', 'logo-nav1')
    UL.classList.add('mx-auto')
  }
})

 

const swiper = new Swiper('.swiper-container', {
  slidesPerView: 1,
  spaceBetween: 10,
  // init: false,
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 50,
    },
  }
});


// Arrow scroll up 

const arrow = document.querySelector('#btnScrollToTop'); 
arrow.addEventListener('click', function() {
  window.scrollTo({
    top: 0,
    left: 0,
    behavior: 'smooth'
  });
});

window.addEventListener('scroll', ()=>{
  let scrolled= pageYOffset
  
  
  
  if(scrolled > 10 && scrolled<70){
    // if(scrollFlag!=true){
    //     navbar.classList.add('navbar-hidden','nav_border')
    
    // }else{
    
    //     if(scrolled <42){
    //         navbar.classList.add('navbar-hidden')
    //     }
    
    // }
    
  }else if(scrolled>90){
    
    
    //  navbar.classList.remove('navbar-hidden','w-90', 'mt-5')
    
    //  scrollFlag=true;
    
    
    
    
    
    arrow.classList.remove('d-none')
    
  }else{
    //     if(scrolled<40){
    //    navbar.classList.remove('navbar-hidden','nav_border')
    //    navbar.classList.add('w-90','mt-5')
    //         scrollFlag=false;
    //     }
    arrow.classList.add('d-none')
    
  }
})

// See more / See less 

const btnMore = document.querySelector('#myBtn');

function seeMoreSeeLess() {
  let dots = document.getElementById("dots");
  let moreText = document.getElementById("more");
  let btnText = document.getElementById("myBtn");
  
  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}

btnMore.addEventListener('click', () =>seeMoreSeeLess());


const btnMore2 = document.querySelector('#myBtn2');

function seeMoreOrSeeLess() {
  let dots2 = document.getElementById("dots2");
  let moreText2 = document.getElementById("more2");
  let btnText2 = document.getElementById("myBtn2");
  
  if (dots2.style.display === "none") {
    dots2.style.display = "inline";
    btnText2.innerHTML = "Read more";
    moreText2.style.display = "none";
  } else {
    dots2.style.display = "none";
    btnText2.innerHTML = "Read less";
    moreText2.style.display = "inline";
  }
}

btnMore2.addEventListener('click', () =>seeMoreOrSeeLess());



