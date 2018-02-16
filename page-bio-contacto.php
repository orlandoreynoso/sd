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
            <div class="content-how">
              <?php
              while ( have_posts() ) : the_post();
              the_content();
            endwhile;
            ?>
            <div class="cpt-Audivisual">
              <?php
              $args = array(
                  'post_type'=> 'bio',
                  'post_per_page' => 1
                  );
              ?>
              <?php $the_query = new WP_Query($args); ?>
              <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                <div class="content-cpt">
                  <?php the_content(); ?>
                </div>
                <div class="left">
                  <?php echo get_post_meta( get_the_ID(), 'content_left', true ); ?>
                </div>
                <div class="right">
                  <?php echo get_post_meta( get_the_ID(), 'content_right', true ); ?>
                </div>
              <?php endwhile; wp_reset_postdata();?>
            </div>
            </div>
          </div>
       </div>
    </div>
  </div>
</section>
<?php get_footer();  ?>
