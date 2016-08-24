/* Twitter Bootstrap Dropdown Toggle */
$(document).ready(function () {
  $('.dropdown-toggle').dropdown();
});




// DRAWER NAVIGATION
$(document).ready(function() {
  $('.drawer').drawer();
});




// SLICK CAROUSEL
$(document).ready(function(){
  $('.reviews').slick({
    arrows: false,
    dots: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    centerMode: true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
  });
});




// Selectize Multiple Select
$('.selectize').selectize({
  plugins: ['remove_button'],
  create: false,
  sortField: 'text',
  persist: false,
  createOnBlur: false,
  dropdownDirection: 'auto'
});




// DotDotDot Ellipsis
$(document).ready(function() {
  $(".ellipsis").dotdotdot({
    ellipsis: ' ...',
    wrap: 'word',
    height: 100
  });
});




// ANIMATED TYPEIT
$('#homeHeroType').typeIt({
 speed: 120,
 autoStart: false
})

.tiPause(2000)
.tiDelete()
.tiPause(1000)
.tiType('Set and Accomplish Goals.')
.tiPause(2000)
.tiDelete()
.tiPause(1000)
.tiType('Do Things the Right Way.')
.tiPause(2000)
.tiDelete()
.tiPause(1000)
.tiType('Reach Their Full Potential.')

$('#homeBlockType').typeIt({
     speed: 120,
     autoStart: false
})

.tiPause(2000)
.tiDelete()
.tiPause(1000)
.tiType('get back in the black.')
.tiPause(2000)
.tiDelete()
.tiPause(1000)
.tiType('streamline communications.')
.tiPause(2000)
.tiDelete()
.tiPause(1000)
.tiType('prosper.')











