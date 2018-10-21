
<?php get_header('pt'); ?>

<?php $yogaPrice = get_post_field('post_content', 136); ?>

<section id="yogaSection">

<script src='<?php echo get_theme_file_uri( "js/tooltipster.bundle.min.js" ); ?>'></script>
<?php while(have_posts()) {
  the_post();

the_content();
} ?>

<div class="price">
  <?php echo $yogaPrice ?>
</div>
</section>


<?php get_footer(); ?>
