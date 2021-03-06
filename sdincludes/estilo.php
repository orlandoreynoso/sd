<?php

function godoy_estilos(){

	// Registrar los estilos
  wp_register_style('fjalla', 'https://fonts.googleapis.com/css?family=Fjalla+One', array(), '1.0.0');
  wp_register_style('froboto', 'https://fonts.googleapis.com/css?family=Roboto:300,300i,400,700,700i', array(), '1.0.0');
  wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '4.0.0');
  wp_register_style('bxslider', get_stylesheet_directory_uri().'/css/jquery.bxslider.min.css', array(), '4.4.2');
	wp_register_style('style', get_template_directory_uri().'/style.css', array('bootstrap'), '1.0');
	wp_register_style('estilo', get_template_directory_uri().'/css/estilo.css', array('bootstrap'), '7.0');
	wp_register_style('fontawesome', get_template_directory_uri().'/css/font-awesome.min.css', array('bootstrap'), '4.7.0');
	wp_register_style('animate', get_template_directory_uri().'/css/animate.css', array('bootstrap'), '4.7.0');
  wp_register_style('lightbox', get_template_directory_uri().'/css/lightbox.css', array(), '2.9.0');


	//Llamar a los estilos
	wp_enqueue_style('style');
	wp_enqueue_style('bootstrap');
	wp_enqueue_style('estilo');
	wp_enqueue_style('fjalla' );
  wp_enqueue_style('froboto' );
	wp_enqueue_style('fontawesome');
	wp_enqueue_style('animate');
  wp_enqueue_style('lightbox');
    wp_enqueue_style('bxslider');

	//registrar Js, agregamos al final true para que nuestros Js se cargen en el footer.
	//wp_register_script('analitics', get_template_directory_uri().'/js/analitycs.js', array(), '1.0.0', true );
  wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js', array('jquery'),'1.12.5', true);
	wp_register_script('bootstrapjs', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js', array('jquery'),'4.0.0', true);
  wp_register_script('bxslider', get_stylesheet_directory_uri().'/js/jquery.bxslider.min.js', array('jquery'),'4.0.0', true);
  wp_register_script('scripts', get_template_directory_uri().'/js/scripts.js', array('jquery'),'1.0.0', true);
  wp_register_script('lightbox', get_template_directory_uri().'/js/lightbox.js', array('jquery'),'2.9.0', true);

	wp_register_script('scriptslider', get_stylesheet_directory_uri().'/sdincludes/scripts.js', array('jquery'),'1.0.0', true);
  wp_register_script('frontajax', get_stylesheet_directory_uri().'/sdincludes/front-ajax.js', array('jquery'),'1.0.0', true);

  wp_enqueue_script('jquery');
	//wp_enqueue_script('analitics');
  wp_enqueue_script('popper');
	wp_enqueue_script('bootstrapjs');
  wp_enqueue_script('bxslider');
  wp_enqueue_script('lightbox');
	wp_enqueue_script('scriptslider');
  wp_enqueue_script('frontajax');

  /*cargando archivo para usar ajax*/
  wp_localize_script(
    'frontajax',
    'admin_url',
    array(
       // datos que vamos a enviar
      'id_video' => 25,
      'ajax_url' => admin_url('admin-ajax.php'),
    ));

}

add_action('wp_enqueue_scripts','godoy_estilos');

function mqw_scripts_paginas(){
		if(is_page('fotografia')){
          wp_register_style('magnific', get_template_directory_uri().'/css/magnific.css', array('bootstrap'), '4.7.0');
          wp_enqueue_style('magnific');

          wp_register_script('instafeed', get_template_directory_uri().'/js/instafeed.min.js', array('jquery'),'2.9.0', true);
          wp_register_script('magnific', get_template_directory_uri().'/js/magnific.min.js', array('jquery'),'2.9.0', true);
          wp_register_script('senderfeed', get_template_directory_uri().'/js/senderfeed.js', array('jquery'),'2.9.0', true);
          wp_enqueue_script('instafeed');
          wp_enqueue_script('magnific');
          wp_enqueue_script('senderfeed');          

      }
}
add_action('template_redirect','mqw_scripts_paginas');


?>
