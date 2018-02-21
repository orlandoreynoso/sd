$ = jQuery.noConflict();

$(document).ready(function() {

	//console.log(admin_url);

		$('#videoreal ul li.datos').on('click', function (e){
			console.log(".");
			e.preventDefault();

			var id = $(this).attr('data-id');
			var nombrecpt = $(this).attr('data-videoname');
			var videofull = $('.visuales .full#videoreal');

			function borra_div(){
				$('.visuales .full#videoreal').addClass('nuevo-full');
				$('.visuales .full ul.visual-full').remove();
				$('.visuales .full#videoreal .getajax').remove();
			}


			var id_respuestas = [];

			var datos =  {
				'action': 'resultados_visuales',
				'id': id,
				'tipo': 'mostrar',
				'namecpt': nombrecpt,
			}



			$.ajax({
				url: admin_url.ajax_url,
				type: 'post',
				data: datos,
				beforeSend: function(){
//				console.log("cargando..");
				videofull.html('Cargando ...');
				},
				success: function(data){
				videofull.html('');

				}
			}).done(function(respuesta){ // método que envía la peticion y va  a resivir la respueta de regreso.
//					console.log("--DONE--");
//					console.log(respuesta);
//					console.log("--end log--");
					var resultado = JSON.parse(respuesta);
//					console.log(typeof(resultado ));
//					console.log(resultado );
//					console.log("--end parse--");
//					console.log("Video Actual: " + resultado[0].imagen);

					var     informacion = '<div class="getajax" data-id= "<?php echo get_the_id(); ?>">';
						informacion += resultado[0].contenido;
						informacion += '</div>';
						borra_div();
						videofull.append(informacion);

			});

		});

		//console.log(parseInt(admin_url.id_video));

});
