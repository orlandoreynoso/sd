<?php
/*
* Funcion para ajax
*/
function resultados_visuales(){

  $idVideoSelect = $_POST['id'];
  $cptname = $_POST['namecpt'];

  $envio = array(
    'post_type' => 'videoteca',
    'posts_per_page' => 1,
    'page_id'       => ''.$idVideoSelect.'',
    //'pagename' => $cptname
  );


  $posts = get_posts($envio);
  $listado = array();

  foreach($posts as $post){

    setup_postdata($post);

    $listado[] = array(
      'objeto' => $post,
      'id' => $post->ID,
      'nombre' => $post->post_title,
      'contenido'=>$post->post_content,
      'imagen'=>get_the_post_thumbnail($post->ID),
      'url'=>get_permalink($post->ID)
    );

}

//header("Content-type: application/json");
  echo json_encode($listado);
  die;
}

add_action('wp_ajax_nopriv_resultados_visuales','resultados_visuales' );
add_action('wp_ajax_resultados_visuales','resultados_visuales' );



function marca_sd(){ ?>
  <a class="sd_who" href="<?php echo esc_url( home_url( '/' ) ); ?>">
    <h2 class="sd_logo">Sender <span>Audiovisual</span></h2>
    <h3 class="sd_slogan">Video & Fotografía</h3>
  </a>
  <?php
}

function logo_sd(){
$logo = IMAGES.'/logo_SenderAudiovisual.png'; ?>
<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $logo; ?>" alt="Sender Audiovisual"></a>
<?php
}


function menu_sd(){
    $args = array(
        'menu'=> '',
        'menu_id' => 'menu-principal', /*Lo que tienen el Ul primero*/
        'menu_class' => 'menu nav navbar-nav', /* tambien lo que contiene el  Ul primero*/
        'container'=> false,  /*ESto es lo que contiene al menu por ejemplo nav, pero lo quito ya que en el header incluyo el nav para controlarlo.*/
        'container_id' =>'azucar',
        'container_class' =>'oro',
        'before' =>'', //Esto envuelve el a
        'after' =>'', // Esto va despues de cada a
    );
    wp_nav_menu($args);
}

function menus_generales(){
  register_nav_menus(array(
    'menu-redes'=>__('Menu Redes','godoy')
  ));
}

add_action('init','menus_generales');

?>
