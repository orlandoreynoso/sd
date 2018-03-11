
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

console.log("en scriptjs");

  $('.bxslider').bxSlider({
    auto: true,
    mode: 'fade',
    captions: true,
    slideWidth: 600,
    pager: false
  });


/*Tamaños del div donde estan el video full*/

  var div_ancho = $(".full#videoreal ").width();
  var div_alto = $(".full#videoreal ").height();
  console.log("carga v. w: "+div_ancho+" h: "+div_alto);

  var lanzar = $('.interiores');
/*
  jQuery(document).ready(function($){
  $(window).scroll(function () {
  if ( $(this).scrollTop() > 500 )
  $("#totop").fadeIn();
  else
  $("#totop").fadeOut();
  });
  $("#totop").click(function () {
  $("body,html").animate({ scrollTop: 0 }, 500 );
  return false;
  });
  });
*/

    var clicc = ('#videoreal ul li.datos');

		$('#videoreal ul li.datos').on('click', function (a){
			a.preventDefault();
        console.log("01");
            //$(window).scrollTop(0);
        $('html, body').animate({
              scrollTop: $(lanzar).offset().top
            }, 800);
      console.log("03");

      //document.body.scrollTop = 0; // For Safari
     //document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    });

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


});
