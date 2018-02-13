<?php

function marca_sd(){ ?>
  <a class="sd_who" href="<?php echo esc_url( home_url( '/' ) ); ?>">
    <h2 class="sd_logo">Sender <span>Audiovisual</span></h2>
    <h3 class="sd_slogan">Video & Fotografía</h3>
  </a>
  <?php
}

function logo_sd(){
$logo = IMAGES.'/logomsc.png'; ?>
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

?>
