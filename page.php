<?php
/*
  Template Name: Interiores
  Template Post Type: post, page, product
*/
 get_header();
?>
<section class="con-general">
  <div class="container">
     <div class="row">
          <div class="col-xs-12 col-md-12 con">
          <div class="interiores">
            <!--div class="header-title">
              <div class="titulo">
                <div class="mapeo"><?php // dimox_breadcrumbs(); ?></div>
              </div>
              <div class="titulos-page">
                <?php  // the_title(); ?>
              </div>
            </div -->
            <?php  // echo  'estoy en page';      ?>
            <?php
              while ( have_posts() ) : the_post();
                the_content();
              endwhile;
            ?>
          </div>
       </div>
    </div>
  </div>
</section>
<?php get_footer();  ?>
