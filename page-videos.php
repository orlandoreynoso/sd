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
            <div class="header-title">
              <div class="titulo">
                <div class="mapeo"><?php dimox_breadcrumbs(); ?></div>
              </div>
              <div class="titulos-page">
                <?php the_title(); ?>
              </div>
            </div>
            <?php
              while ( have_posts() ) : the_post();
                the_content();
              endwhile;
            ?>
          </div>
          <div class="visuales">
            <?php

              $args = array(
                  'post_type' => 'videoteca',
                  'posts_per_page'         => -1,
                  'orderby' => 'date',
                  'order' => 'DESC'
              );


            ?>
            <?php $the_query = new WP_Query($args);  ?>
            <?php while ($the_query -> have_posts()): $the_query -> the_post() ?>
              <div><?php the_post_thumbnail('slider'); ?></div>
            <?php endwhile; wp_reset_postdata(); ?>
          </div>
       </div>
    </div>
  </div>
</section>
<?php get_footer();  ?>
