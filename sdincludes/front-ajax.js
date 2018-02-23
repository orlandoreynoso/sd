$ = jQuery.noConflict();

$(document).ready(function() {

	//console.log(admin_url);

		$('#videoreal ul li.datos').on('click', function (e){

			e.preventDefault();

			var id = $(this).attr('data-id');
			var nombrecpt = $(this).attr('data-videoname');
			var videofull = $('.visuales .full#videoreal');
			var cargaimg = $('.visuales #cargavisual').attr('data-imgcarga');

//			var div_alto = $('.visuales .full#videoreal').height();
			var div_alto = $('.visuales .full#videoreal').scrollTop;


			//console.log("div alto: "+div_alto+"");
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
					var cargando  = '<img class="loadingnow" src="';
					cargando += cargaimg;
					cargando += '" alt="Sender Godoy" height="42" width="42">';
					videofull.html(cargando);
				},
				success: function(data){
					videofull.html('');

				}
			}).done(function(respuesta){
					var resultado = JSON.parse(respuesta);
					var informacion = '<div class="datos ok" data-id= "'+resultado[0].id+'">';
						informacion += resultado[0].contenido;
						informacion += '</div>';
						borra_div();
						videofull.append(informacion).div_alto;
			});

		});

		//console.log(parseInt(admin_url.id_video));

});
