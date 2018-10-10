<?php get_header(); ?>

<?php while(have_posts()) {
  the_post();

the_content();
} ?>


<h2>pp</h2>

<?php get_footer(); ?>
