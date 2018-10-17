
<?php get_header(); ?>

<section id="yogaSection">

<script src='<?php echo get_theme_file_uri( "js/tooltipster.bundle.min.js" ); ?>'></script>
<?php while(have_posts()) {
  the_post();

the_content();
} ?>
</section>


<?php get_footer(); ?>
