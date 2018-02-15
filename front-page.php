<?php
/*
Template Name: coverPage Audiovisual
 */
?>
<?php get_header(); ?>
<div class="c-slider" id="pre-slider">
 <div class="bxslider">
 <?php

   $args = array(
       'post_type' => 'slidefront',
       'posts_per_page'         => 4,
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

<?php get_footer(); ?>
