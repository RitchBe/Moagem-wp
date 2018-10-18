<?php get_header(); ?>
<?php
$bistroContent1 = get_post_field('post_content', 165);
$bistroList = get_post_field('post_content', 167);
$bistroListTitle = get_the_title(167);
$bistroContent3 = get_post_field('post_content', 169);
$bistroContent4 = get_post_field('post_content', 171);
$bistroContent5 = get_post_field('post_content', 174);
$bistroContent6 = get_post_field('post_content', 176);
$bistroCafe = get_post_field('post_content', 178);
$bistroCafetTitle = get_the_title(178);
$bistroReviewsTitle = get_the_title(126);
$bistroReviews = get_post_field('post_content', 126);
?>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="<?php echo get_theme_file_uri('js/lightslider.min.js') ?>"></script>
<script src="<?php echo get_theme_file_uri('js/mousewheel.min.js') ?>"></script>
<script src="<?php echo get_theme_file_uri('js/jquery.scrollify.js') ?>"></script>
<script>
$(function() {
  $.scrollify({
    section: ".scrollTest , .footer-bottom",
    setHeights: false,
    scrollSpeed: 1000,
    offset: -120,
    interstitialSection: ".logotest",
  });
});
</script>
<div class="logotest" style="position: absolute;top: 0"></div>
<section id="sectionBistro">
  <div class="bistro-picture" style="margin-bottom: 10px;">


    <div class=" bistro-pic-xl-0  " style="background-image: url(<?php echo get_theme_file_uri('images/bistro/venue-6-large.jpg') ?>)">
      <div class="mo-bistro-logo">
        <object style="position:relative;" id="svgMoBistro" type="image/svg+xml" data="<?php echo get_theme_file_uri('images/logos/mobistro.svg') ?>"></object>
      </div>
    </div>


    <div class="bistro-pic bistro-pic-tall-1 scrollTest content-light content-flex pic-tall-left" >
      <div class="content-new">
        <?php echo $bistroContent1 ?>
      </div>
    </div>


    <div class="bistro-pic bistro-pic-tall-2 pic-tall-right" style="background-image: url(<?php echo get_theme_file_uri('images/bistro/granola-1-tall.jpg') ?>);background-position: bottom;"></div>


    <div class="bistro-pic bistro-pic-xl bistro-pic-content-1 scrollTest xl-left" style="background-image: url(<?php echo get_theme_file_uri('images/bistro/soup-1-large.jpg') ?>);">
<!--       <div class="first-content content">
        <?php// echo $bistroContent1 ?>
      </div> -->
    </div>


    <div class="bistro-pic bistro-pic-tall-3 bistro-list scrollTest pic-tall-left" style="background-image: url(<?php echo get_theme_file_uri('images/bistro/meal-5-tall.jpg') ?>);background-position: bottom;">
    </div>


    <div class="bistro-pic bistro-pic-tall-3 content-dark content-flex pic-tall-right">
      <div class="content-new list-pt">
        <h3 style="margin:0 !important"><?php echo $bistroListTitle ?></h3>
        <?php echo $bistroList ?>
      </div>
    </div>


    <div class="bistro-pic bistro-pic-xl-2 bistro-pic-content-1 scrollTest xl-right" style="background-image: url(<?php echo get_theme_file_uri('images/bistro/venue-5-large.jpg') ?>);">
<!--       <div class="content second-content">
        <?php// echo $bistroContent3 ?>
        <?php// echo $bistroContent4 ?>
      </div> -->
    </div>

<!--
    <div class="bistro-pic bistro-pic-tall-4 bistro-list scrollTest" style="background-image: url(<?php //echo get_theme_file_uri('images/bistro/meal-12-tall.jpg') ?>);background-position: bottom;">
      <div class="list content">
        <?php //echo $bistroContent5  ?>
      </div>
    </div>
 -->
 <div class="bistro-pic bistro-pic-tall-4 bistro-list scrollTest content-light content-flex pic-tall-left">
  <div class="content-new">
      <?php echo $bistroContent3 ?>
      <?php echo $bistroContent4 ?>

  </div>
 </div>

    <div class="bistro-pic bistro-pic-tall-5 pic-tall-right" style="background-image: url(<?php echo get_theme_file_uri('images/bistro/meal-13-tall.jpg') ?>);background-position: bottom;">
    </div>


    <div class="bistro-pic bistro-pic-xl-3 bistro-pic-content-1 scrollTest xl-left" style="background-image: url(<?php echo get_theme_file_uri('images/bistro/burger-1-large.jpg') ?>);">
<!--       <div class="content second-content">
        <h3> <?php// echo $bistroCafetTitle ?> </h3>
        <?php //echo $bistroCafe ?>
      </div> -->
    </div>


    <div class="bistro-pic bistro-pic-tall-6 bistro-list scrollTest pic-tall-left" style="background-image: url(<?php echo get_theme_file_uri('images/bistro/meal-12-tall.jpg') ?>);background-position: bottom;">
    </div>

    <div class="bistro-pic bistro-pic-tall-6 content-dark content-flex pic-tall-right">
      <div class="content-new">
        <?php echo $bistroContent5  ?>
        </div>
      </div>


<!--     <div class="bistro-pic bistro-pic-square square-1 scrollTest" style="background-image: url(<?php// echo get_theme_file_uri('images/bistro/meal-7-square.jpg') ?>);">
    </div>


    <div class="bistro-pic bistro-pic-square square-2" style="background-image: url(<?php// echo get_theme_file_uri('images/bistro/meal-8-square.jpg') ?>);">
    </div> -->


    <div class="scrollTest bistro-pic bistro-pic-xl-4 bistro-list  xl-right" style="background-image: url(<?php echo get_theme_file_uri('images/bistro/cake1.jpg') ?>); background-position: center">
<!--       <div class="review-slider-container list content">
        <h3><?php //echo  $bistroReviewsTitle ?></h3>
        <?php //  echo $bistroReviews ?>
      </div> -->
    </div>


    <div class="bistro-pic bistro-pic-tall-7 scrollTest content-light content-flex pic-tall-left">
      <div class="content-new">
          <?php echo $bistroContent6 ?>
        </div>
      </div>

    <div class="bistro-pic bistro-pic-tall-7 bistro-list pic-tall-right" style="background-image: url(<?php echo get_theme_file_uri('images/bistro/cake-4-tall.jpg') ?>);background-position: left bottom;">
    </div>

    <div class="bistro-pic bistro-pic-square square-1 scrollTest" style="background-image: url(<?php echo get_theme_file_uri('images/bistro/meal-7-square.jpg') ?>);">
    </div>

    <div class="bistro-bic bistro-pic-square square-1 content-dark">
      <div class="content-new review-slider-container">
        <h3><?php echo  $bistroReviewsTitle ?></h3>
        <?php echo $bistroReviews ?>
      </div>
    </div>



  <div class="bistro-pic bistro-pic-xl-5 scrollTest xl-left" style="background-image: url(<?php echo get_theme_file_uri('images/bistro/salad-1-large.jpg') ?>);background-position: right">
    </div>

    <div class="bistro-pic bistro-pic-tall-8 bistro-list scrollTest pic-tall-left" style="background-image: url(<?php echo get_theme_file_uri('images/bistro/toast-tall.jpg') ?>);background-position: bottom;">
    </div>

    <div class="bistro-pic bistro-pic-tall-8  content-dark content-flex pic-tall-right">
      <div class="content-new">
        <h3> <?php echo $bistroCafetTitle ?> </h3>
        <?php echo $bistroCafe ?>
        </div>
      </div>



  </div>
</section>
<script>
ScrollReveal().reveal('.mo-bistro-logo', {
  delay: 800,
  duration: 1000,
  origin: 'bottom',
  distance: '150px'
});
ScrollReveal().reveal('.bistro-pic', {
  delay: 800,
  duration: 1000,
  origin: 'bottom',
  distance: '150px',
  viewOffset: {
    bottom: 60
  }
});

ScrollReveal().reveal('.xl-left', {
  delay: 500,
  duration: 1000,
  origin: 'left',
  distance: '150px',
  viewOffset: {
    bottom: 60
  }
});
ScrollReveal().reveal('.xl-right', {
  delay: 500,
  duration: 1000,
  origin: 'left',
  distance: '150px',
  viewOffset: {
    bottom: 70
  }
});
ScrollReveal().reveal('.pic-tall-right', {
  delay: 500,
  duration: 1000,
  origin: 'right',
  distance: '150px',
  viewOffset: {
    bottom: 60
  }
});
ScrollReveal().reveal('.pic-tall-left', {
  delay: 500,
  duration: 1000,
  origin: 'left',
  distance: '150px',
  viewOffset: {
    bottom: 60
  }
});

ScrollReveal().reveal('.square-1', {
  delay: 500,
  duration: 1000,
  origin: 'left',
  distance: '150px',
  viewOffset: {
    bottom: 60
  }
});
ScrollReveal().reveal('.square-2', {
  delay: 500,
  duration: 1000,
  origin: 'right',
  distance: '150px',
  viewOffset: {
    bottom: 60
  }
});

ScrollReveal().reveal('.bistro-pic-xl-5', {
  delay: 500,
  duration: 1000,
  origin: 'right',
  distance: '150px',
  viewOffset: {
    bottom: 300
  }
});

$(document).ready(function() {
  $("#reviewsList").lightSlider({
    item: 1,
    pager: false,
    loop: true
  });
  $('.lSNext')[0].innerHTML = '<i class="fas fa-arrow-right"></i>'
  $('.lSPrev')[0].innerHTML = '<i class="fas fa-arrow-left"></i>'
});
</script>
<?php get_footer(); ?>

