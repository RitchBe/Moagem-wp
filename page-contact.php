<?php get_header();
      $contactContent = get_post_field('post_content', 110)
?>

<section id="contactSection">

  <div class="google-maps">
<iframe class="google-iframe"  frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Rua%20Jo%C3%A3o%20Dias%20Mendes%2C%2013-14&key=AIzaSyC4zMZjz7-aBnf7o7hIxgeGdEVZ5mfG_io" allowfullscreen></iframe>
</div>

<div class="contact-content">
    <?php echo $contactContent ?>
</div>
</section>




<?php get_footer(); ?>
