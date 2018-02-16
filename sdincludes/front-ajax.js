$ = jQuery.noConflict();

$(document).ready(function() {

	//console.log(admin_url);

		$('#videoreal').on('click', function (){
			$(this).siblings().removeClass('seleccionada');
			$(this).siblings().removeAttr('data-seleccionada');
			$(this).addClass('seleccionada');
			$(this).attr('data-seleccionada', true);

			var id_respuestas = [];

			var datos =  {
				action: 'quizbooK_resultados',
				data: id_respuestas
			}


			$.ajax({
				url: admin_url.ajax_url,
				type: 'post',
				data: datos
			}).done(function(respuesta){ // método que envía la peticion y va  a resivir la respueta de regreso.

			});

		});	

});