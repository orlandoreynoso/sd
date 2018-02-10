<?php
/*
  Template Name: Page Conozca guatemala
  Template Post Type: post, page, product
*/
 get_header();
?>
<section class="con-general">
  <div class="container">
     <div class="row">
          <div class="col-xs-12 col-md-8 con">
          <div class="interiores">
            <div class="header-title">
              <div class="titulo">
                <div class="mapeo"><?php dimox_breadcrumbs(); ?></div>
              </div>
              <div class="titulos-page">
                <?php the_title(); ?>
              </div>
            </div>
      <?php 

          $tipo = 'page';
          $idPagina =  get_the_id();
          $cantidad = '-1';

      ?>            

    <div class="contenido-wpq">

        <?php $the_query = new WP_Query(contenidosPorId($tipo,$idPagina,$cantidad));   ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        <div class="list">
          <a class="ir-agrupacion" href="<?php the_permalink(); ?>">
            <div class="thumb" >
              <?php
              if(has_post_thumbnail()){
                the_post_thumbnail('full');
              }
              else{ ?>
                <img class="attachment-full size-full wp-post-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/pluma.jpg" alt="">
              <?php }       ?>
            </div>
            <h3><?php the_title(); ?></h3>
          </a>
          <!--div class="exe"><?php // excerpt('15'); ?> </div -->
        </div>
        <?php endwhile; wp_reset_postdata();?> 
</div>


          </div>
       </div>
        <div class="col-xs-12 col-md-4 side">
          <div class="entradas">
            <div class="titulo_entradas">
              <h3>Entradas recientes</h3>
            </div>
            <div class="recientes">
              <?php get_sidebar(); ?>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>
<?php get_footer();  ?>
