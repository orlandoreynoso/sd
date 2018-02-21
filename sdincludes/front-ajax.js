$ = jQuery.noConflict();

$(document).ready(function() {

	//console.log(admin_url);

		$('#videoreal ul li.datos').on('click', function (e){
			console.log(".");
			e.preventDefault();

			var id = $(this).attr('data-id');

//			console.log(id);
/* luego lo veo
			$(this).removeClass('seleccionada');
			$(this).removeAttr('data-videosloads');
			$(this).addClass('seleccionada');
			$(this).attr('data-videosloads', true); */


		//$('.visuales .full .visual-full li.datos').html("Hola");

			var id_respuestas = [];

			var datos =  {
				'action': 'resultados_visuales',
				'id': id,
				'tipo': 'mostrar'
			}



			$.ajax({
				url: admin_url.ajax_url,
				type: 'post',
				data: datos,
				success: function(data){
						console.log(data);
						// console.log(typeof(data));
						// eval('var resultado='+ data);
						// alert(resultado.idvideo);
						//var resultado = JSON.parse(data);
						//var resultado = json.decoder(data);
						//var resultado = data;
//						console.log(resultado.idvideo);
						//console.log(typeof(resultado));
						console.log("susss");
				}
			}).done(function(respuesta){ // método que envía la peticion y va  a resivir la respueta de regreso.
					console.log("-----");
					console.log(respuesta);
					console.log(typeof(respuesta));
// 					var resultado = id_respuestas.push(respuesta);
// 					var resultado = JSON.parse(id_respuestas);
// //					var resultado = JSON.parse(resultado);
// 					console.log(typeof(resultado));
					// var temp = http.responseText;
				// console.log(resultado);
					// $.each(respuesta, function (index) {
					//       console.log(index.id);
					//       $.each(this.children, function (children) {
					//          console.log(children.id);
					//       });
					// });


			});

		});

		//console.log(parseInt(admin_url.id_video));

});
