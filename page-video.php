<?php
/*
  Template Name: Video
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
            <?php
              while ( have_posts() ) : the_post();
                the_content();
              endwhile;
            ?>
          <div class="visuales">
            <?php

              global $post;

              $args = array(
                  'post_type' => 'videoteca',
                  'posts_per_page' => -1,
                  'orderby'   => 'menu_order',
                  'order'     => 'ASC'
              );

	    $argslast = array(
	                  'post_type' => 'videoteca',
	                  'posts_per_page' => 1,
	                  'orderby'   => 'menu_order',
	                  'order'     => 'ASC'
	              );



            ?>
            <?php $the_query = new WP_Query($args); ?>
            <?php $ultima = new WP_Query($argslast); ?>
            <?php $todos = new WP_Query($args);  ?>

             <?php

              $total_last = $ultima ->post_count;
              $total= $todos ->post_count;

            ?>


            <?php // echo $the_query->posts(); ?>



            <?php /*
            <pre>
              <?php var_dump($the_query); ?>
            </pre>
            */ ?>
            <?php ?>
              <?php while ($ultima-> have_posts()): $ultima-> the_post() ?>
                  <div class="videosd full" id="videoreal">
                    <ul class="visual-full">
                      <li class="datos ok" data-id= "<?php echo get_the_id(); ?>" data-videoname="<?php /* echo $post->post_name; */ echo get_the_title(); ?>">
                      <?php // the_post_thumbnail('slider'); ?>
                      <?php // the_post_thumbnail('slider'); ?>
                      <?php the_content();  ?>
                      </li>
                    </ul>
                  </div>
                <?php endwhile; wp_reset_postdata(); ?>


              <?php while ($todos-> have_posts()): $todos-> the_post() ?>
	            <div class="videosd small" id="videoreal">
                  <ul class="visual-small">
                    <li class="datos ok" data-id= "<?php echo get_the_id(); ?>" data-videoname="<?php /* echo $post->post_name; */ echo get_the_title(); ?>">
                      <?php /* the_content(); */ ?>
                      <?php the_post_thumbnail('video'); ?>
                    </li>
                  </ul>
              </div>
              <?php endwhile; wp_reset_postdata(); ?>

          </div><!-- FIN class VISUALES -->
          </div><!-- class INTERIORES -->
       </div>
    </div>
  </div>
</section>
<?php get_footer();  ?>
