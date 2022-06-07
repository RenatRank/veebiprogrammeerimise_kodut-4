<div class="container">
<?php
    get_header();?>

<h2><?php the_title();?></h2>
<?php 
    the_content();
    
?>
<?php
while ( have_posts() ) : the_post();
?>

<?php
    if( has_post_thumbnail() ):
        echo get_the_post_thumbnail();
    endif;

    endwhile;

    get_footer();
?></div>