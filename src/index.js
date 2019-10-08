// Setting up the Variables with js and jquery
import $ from 'jquery';
import { route } from './app/route';

// const animationDone = localStorage.getItem('animationDone');
const animationDone = sessionStorage.getItem('animationDone');
if (animationDone) {
  $('#div-index').remove();
  $('.hide').css('display', 'block');
} else {
  const logoIndex = $('#index-logo');
  console.log(logoIndex);
  $('#div-index').show();
  logoIndex.animate({
    opacity: 1,
  }, 2000, () => {
    $('.hide').css('display', 'block');
    $('#div-index').remove();
    sessionStorage.setItem('animationDone', true);
  });
}


const bars = document.getElementById('bar-action');
const nav = document.getElementById('nav');
const myspans = $('.spans');

// Setting up the clicked Effect
function barClicked() {
  bars.classList.toggle('active');
  nav.classList.toggle('visible');
  myspans.each(function () {
    this.classList.toggle('anime');
  });
}
// Setting up the listener
bars.addEventListener('click', barClicked);


// Page questions:Slide
const slidesize = $('#div-form').width();
let slideCount = 1;
$('#arrow').on('click', () => {
  const currentMarginLeft = parseInt($('#div-container').css('margin-left'), 10);
  // console.log(currentMarginLeft);

  $('#div-container').animate({
    'margin-left': `${currentMarginLeft - slidesize}px`,
  }, () => {
    slideCount++;
    if (slideCount === $('.div-question').length) {
      $('#div-arrow').attr('href', 'route.html');
    }
  });
});

// circle
if ($('.page-route').length > 0) {
  route();
}
