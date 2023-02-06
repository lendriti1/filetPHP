<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=\, initial-scale=1.0">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/web-animations/2.3.1/web-animations.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.3.1/smooth-scrollbar.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins');

@media screen and (min-width:1500px){
  .container2{
    width:100%
  }
}
.slick-next, .slick-prev {
    border-radius: 43px;
    font-size: 0px;
    line-height: 0;
    position: absolute;
    top: 50%;
    display: block;
    width: 24px;
    height: 24px;
    padding: 2px;
    -webkit-transform: translate(0,-50%);
    -ms-transform: translate(0,-50%);
    /* transform: translate(0,-50%); */
    cursor: pointer;
    color: red;
    border: none;
    outline: 0;
    background: black;
}
 .container2 {

	 padding: 2em;
	 height: 500px;
	 display: flex;
     width:100%;
     /* margin-left:40px;
     margin-right:50px; */
}
.container1{
    
    width: 100%;
    height: auto;
  

    
    
}
 .icon {
	 display: inline-block;
	 width: 1em;
	 height: 1em;
	 stroke-width: 0;
	 stroke: currentColor;
	 fill: currentColor;
}
 .blend-image, .card__background img {
	
	 mix-blend-mode: screen;
}

.card__background {
    
    height: 100%;
    width:100%;
}
.card__background img {
width: 55%;
height: 70%;
}

 .center-image {
	
	 width: 100%;
	 min-height:50%;
	 top: 50%;
	 object-fit: cover;	
}
 .slick-slide {
	 padding: 2em 0.5em;
}
 .card-slider {
	 margin: auto;
	 width: 95%;
}

 .card {
	 background: #fff;
	 display: flex;
	 padding: 2em;
	 flex-direction: column;
	 align-items: flex-start;
	 justify-content: flex-end;
	 border-radius: 20px;
	 overflow: hidden;
	 position: relative;
	 z-index: 1;
	 height: 350px;
}
 .card > * {
	 transition: opacity 350ms;
}
 .card--opened > * {
	 opacity: 0;
}
 .card__background {
	 position: absolute;
	 top: 0;
	 right: 0;
	 bottom: 0;
	 left: 0;
	 overflow: hidden;
	 z-index: -1;
	 text-align: left;
     display: flex;
     align-items: center;
     justify-content: center;
}
 .card__background::after {
	 content: '';
	 position: absolute;
	 top: 0;
	 right: 0;
	 bottom: 0;
	 left: 0;
	
}
 .card__category {
	 text-transform: uppercase;
	 color: #fff;
	 background: #2fd4dc;
	 font-size: 0.85em;
	 font-weight: 600;
	 padding: 0.2em 0.5em 0.25em;
}
 .card__title {
	 text-transform: uppercase;
	 margin: 0.5em 0;
	 color: #2e5f80;
     
}
 .card__duration {
	 color: #6f7070;
}
 .modal-wrapper, .overlay {
	 position: fixed;
	 top: 0;
	 left: 0;
	 width: 100%;
	 height: 100%;
	 z-index: 1;
}
 .modal-wrapper {
	 display: flex;
}
 .overlay {
	 background: rgba(0, 0, 0, 0.5);
	 transition: opacity 150ms ease;
}
 .modal {
	 overflow: hidden;
	 position: relative;
	 margin: auto;
	 width: 90vw;
	 height: 90vh;
	 max-width: 500px;
	 background: #fff;
	 border-radius: 20px;
}
 .modal__scroll-area {
	 height: inherit;
	 overflow: auto;
	 border-radius: inherit;
	 position: relative;
	 z-index: 1;
}
 .modal__close-button {
	 background: transparent;
	 border: none;
	 margin-bottom: auto;
	 color: #2e5f80;
	 position: absolute;
	 top: 0;
	 right: 0;
	 padding: 2em;
	 z-index: 2;
}
 .modal__header {
	 text-align: center;
	 position: relative;
	 display: flex;
	 padding: 0.5em;
	 flex-direction: column;
	 justify-content: flex-end;
	 align-items: center;
	 min-height: 300px;
	 z-index: 1;
}
 .modal__content {
	 padding: 2em;
	 color: #666;
	 line-height: 1.5;
}
.xheb1{
	 height: 90%;
	 width:70%
}
.ball1{
	height: 75%;
	width:60%;
}
@media screen and (max-width:800px) {

	.ball1 img{
	height: 75%;
	width:55%;
	
}	    
.card__background  {
width: 100%;
height: 106%;
display: flex;
justify-content: center	;
}    
.card__background img {
width: 59%;
    height: 57%;
}
.card{
	display:flex ;
	justify-content: center;
	align-items: center;
}
.xheb1{
	 height: 90%;
	 width:70%
}


}
  </style>
</head>
<body>
  
<div class="container1">

<div class="page" data-modal-state="closed">
  <div class="container2">
    <div class="card-slider">
      <div class="card-wrapper">
        <article class="card">
        <a href="https://www.google.com">
        <picture class="card__background">

            <img src="../images/ballkani1.png"
           class="ball1">
          </picture>
        </a>
      
        </article>
      </div>
    <div class="card-wrapper">
        <article class="card">
        <a href="https://www.google.com">
        <picture class="card__background">

            <img src="../images/ylli1.png" >
          </picture>
        </a>
      
        </article>
      </div>
     <div class="card-wrapper">
        <article class="card">
        <a href="https://www.google.com">
        <picture class="card__background">

            <img src="../images/xhebrailat1.png"
            class="xheb1">
          
          </picture>
        </a>
      
        </article>
      </div>
     <div class="car  d-wrapper">
        <article class="card">
        <a href="https://www.google.com">
        <picture class="card__background">

            <img src="../images/futsal.png" >
          </picture>
        </a>
      
        </article>
      </div>
        <div class="card-wrapper">
        <article class="card">
        <a href="https://www.google.com">
        <picture class="card__background">

            <img src="../images/suhareka1.jpg" 
            >
          </picture>
        </a>
      
        </article>
      </div>  
    </div>
  </div>
</div>
</div>
  <script>
    jQuery('.card-slider').slick({
  slidesToShow:3,
  autoplay: true,
  slidesToScroll:1,
  dots: false,
  responsive:[
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1
      }
    }
  ]
});

let cards = document.querySelectorAll('.card');
let card;
let modal = document.querySelector('.modal');
let closeButton = document.querySelector('.modal__close-button');
let page = document.querySelector('.page');
const cardBorderRadius = 20;
const openingDuration = 600; //ms
const closingDuration = 600; //ms
const timingFunction = 'cubic-bezier(.76,.01,.65,1.38)';

var Scrollbar = window.Scrollbar;
Scrollbar.init(document.querySelector('.modal__scroll-area'));


function flipAnimation(first, last, options) {
  let firstRect = first.getBoundingClientRect();
  let lastRect = last.getBoundingClientRect();
  
  let deltas = {
    top: firstRect.top - lastRect.top,
    left: firstRect.left - lastRect.left,
    width: firstRect.width / lastRect.width,
    height: firstRect.height / lastRect.height
  };
  
  return last.animate([{
    transformOrigin: 'top left',
    borderRadius:`
    ${cardBorderRadius/deltas.width}px / ${cardBorderRadius/deltas.height}px`,
    transform: `
      translate(${deltas.left}px, ${deltas.top}px) 
      scale(${deltas.width}, ${deltas.height})
    `
  },{
    transformOrigin: 'top left',
    transform: 'none',
    borderRadius: `${cardBorderRadius}px`
  }],options);
}

cards.forEach((item)=>{
  item.addEventListener('click',(e)=>{
    jQuery('.card-slider').slick('slickPause');
    card = e.currentTarget;
    page.dataset.modalState = 'opening';
    card.classList.add('card--opened');
    card.style.opacity = 0;
    document.querySelector('body').classList.add('no-scroll');

    let animation = flipAnimation(card,modal,{
      duration: openingDuration,
      easing: timingFunction,
      fill:'both'
    });

    animation.onfinish = ()=>{
      page.dataset.modalState = 'open';
      animation.cancel();
    };
  });
});

closeButton.addEventListener('click',(e)=>{
  page.dataset.modalState = 'closing';
  document.querySelector('body').classList.remove('no-scroll');
  
  let animation = flipAnimation(card,modal,{
    duration: closingDuration,
    easing: timingFunction,
    direction: 'reverse',
    fill:'both'
  });

  animation.onfinish = ()=>{
    page.dataset.modalState = 'closed';
    card.style.opacity = 1;
    card.classList.remove('card--opened');
    jQuery('.card-slider').slick('slickPlay');
    animation.cancel();
  };
});
  </script>
</body>
</html> 