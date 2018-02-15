
$ = jQuery.noConflict();
/*
var waypoint = new Waypoint({
	element: document.getElementById('px-offset-waypoint'),
	handler: function(direction) {
		notify('I am 20px from the top of the window')
	},
	offset: 20
})
*/

$(document).ready(function() {

  $('.bxslider').bxSlider({
    auto: true,
    mode: 'fade',
    captions: true,
    slideWidth: 600
  });


/*Tamaños de las pantallas*/

  var div_ancho = $("#masthead").width();
  var div_alto = $("#masthead").height();
  console.log("ancho masthead: "+div_ancho+" alto masthead: "+div_alto);

/*==== ver ancho de la pagina*/

var ventana_ancho = $(window).width();
var ventana_alto = $(window).height();

var ancho = (document.body.clientWidth);
var alto = (document.body.clientHeight);

var valor = ventana_alto - div_alto;
console.log("valor: "+valor);
var slider = $("#pre-slider").height();
/*
$('.c-slider').css('height',valor+'px');
$('body .metaslider .flexslider .slides img').css('height',valor+'px');

*/

console.log("jugo: "+slider);

console.log("el ancho es: "+ ancho +  " Y el alto " + alto);


});  /* finaliza document */
