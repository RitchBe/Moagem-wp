<?php get_header();
      $contactContent = get_post_field('post_content', 110)
?>

<section id="contactSection">

  <div class="google-maps">

<iframe class="google-iframe" src="https://maps.google.com/maps?width=100%&amp;height=NaN&amp;hl=en&amp;q=Rua%20Jo%C3%A3o%20Dias%20Mendes%2C%2013-14+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/">Embed Google Map</a></iframe>
</div>
<div class="contact-content">
    <?php echo $contactContent ?>
</div>
</section>




<?php get_footer(); ?>
