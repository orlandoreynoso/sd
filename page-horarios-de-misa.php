<?php
/*
  Template Name: Pagina Horarios de Misa
  Template Post Type: post, page, product
*/
 get_header();
?>
<section class="con-general">
  <div class="container">
    <div class="interior-horarios-misa">
    <div class="row">
      <div class="col-xs-12 col-md-8 con">
          <div class="header-title">
            <div class="titulo">
              <div class="mapeo"><?php dimox_breadcrumbs(); ?></div>
            </div>
            <div class="titulos-page">
              <?php the_title(); ?>
            </div>
          </div>
            <div class="molino-contenido">
              <div class="horarios">
                <?php get_template_part( 'template/horarios','misa') ?>
              </div>
            </div><!-- Fin molino-contenido-->
        </div><!-- fin con y col-md-8 -->
        <div class="col-xs-12 col-md-4 side">
              <div class="entradas">
                <div class="titulo_entradas">
                  <h3>Entradas recientes</h3>
                </div>
                <div class="recientes">
                 <?php get_sidebar( 'horarios' ); ?>
                </div>
              </div>
        </div>

      <div class="col-xs-12 col-md-12">
        <div class="contenidos">
          <?php get_template_part( 'template/horarios','contenidos') ?>
        </div>
      </div><!-- fin side y col-md-4 -->

    </div><!-- fin row -->  
    </div><!-- Fin interior-horarios-misa -->
  </div><!-- fin container -->
</section><!-- fin section -->
<?php get_footer();  ?>
