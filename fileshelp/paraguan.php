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


            ?>
            <?php $the_query = new WP_Query($args);  ?>
            <?php echo $the_query->posts(); ?>



            <?php /*
            <pre>
              <?php var_dump($the_query); ?>
            </pre>
            */ ?>
            <?php
              $i = 0;
            ?>
            <?php while ($the_query -> have_posts()): $the_query -> the_post() ?>
                <?php
                  if($i == 0){ ?>
                  <div class="videosd full" id="videoreal">
                    <ul class="visual-full">
                      <li class="datos ok" data-id= "<?php echo get_the_id(); ?>" data-videosloads="<?php echo get_the_id(); ?>">
                        <?php // the_post_thumbnail('slider'); ?>
                        <?php the_content(); ?>
                      </li>
                    </ul>
                  </div>
                    <?php
                  }
                  else{ ?>
                  <div class="videosd small" id="videoreal">
                      <ul class="visual-small">
                        <li class="datos ok" data-id= "<?php echo get_the_id(); ?>" data-videosloads="<?php echo get_the_id(); ?>">
                          <?php the_content(); ?>
                        </li>
                      </ul>
                    </div>
                    <?php
                  }
                 ?>


            <?php $i++; endwhile; wp_reset_postdata(); ?>
          </div><!-- FIN class VISUALES -->
          </div><!-- class INTERIORES -->
       </div>
    </div>
  </div>
</section>
<?php get_footer();  ?>
