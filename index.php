
<?php
    get_header();
  if ( have_posts() ) {
      while ( have_posts() ) {
          the_post(); ?>
          <div class="flex-container">
          <div><h2><?php the_title(); ?></h2>
          <?php 
          // the_excerpt();
          ?>
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' );?></a></div></div>
          <?php
    }
  }
  get_footer();
?>
