
<?php get_header(); ?>

<script src='<?php echo get_theme_file_uri( "js/tooltipster.bundle.min.js" ); ?>'></script>
<?php while(have_posts()) {
  the_post();

the_content();
} ?>


<h2>pp</h2>

<?php get_footer(); ?>
