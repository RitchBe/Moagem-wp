<?php get_header(); ?>
 <?php
 $bistroContent1 = get_post_field('post_content', 95);
 $bistroList = get_post_field('post_content', 97);
 $bistroListTitle = get_the_title(97);
 $bistroContent3 = get_post_field('post_content', 99);
 $bistroContent4 = get_post_field('post_content', 101);
 $bistroContent5 = get_post_field('post_content', 104);
 $bistroContent5 = get_post_field('post_content', 106);

 $bistroCafe = get_post_field('post_content', 108);
 $bistroCafetTitle = get_the_title(108);




   ?>
   <script src="https://unpkg.com/scrollreveal"></script>


<section id="sectionBistro">

  <div class="bistro-picture " style="margin-bottom: 10px;">
    <div class=" bistro-pic-xl-0 " style="background-image: url(<?php echo get_theme_file_uri('images/bistro/venue-6-large.jpg') ?>)">
      <div class="mo-bistro-logo">
  <object style="position:relative;" id="svgMoBistro" type="image/svg+xml" data="<?php echo get_theme_file_uri('images/logos/mobistro.svg') ?>"></object>
</div>

    </div>

    <div class="bistro-pic bistro-pic-tall-1" style="background-image: url(<?php echo get_theme_file_uri('images/bistro/toast-3-tall.jpg') ?>);background-position: bottom;" >
    </div>

    <div class="bistro-pic bistro-pic-tall-2" style="background-image: url(<?php echo get_theme_file_uri('images/bistro/granola-1-tall.jpg') ?>);background-position: bottom;"></div>

    <div class="bistro-pic bistro-pic-xl bistro-pic-content-1" style="background-image: url(<?php echo get_theme_file_uri('images/bistro/soup-1-large.jpg') ?>);">
      <div class="first-content content">
        <?php echo $bistroContent1 ?>
      </div>
    </div>


    <div class="bistro-pic bistro-pic-tall-3 bistro-list" style="background-image: url(<?php echo get_theme_file_uri('images/bistro/venue-4-tall.jpg') ?>);background-position: bottom;">
      <div class="list">
        <h3><?php echo $bistroListTitle ?></h3>
        <?php echo $bistroList ?>

      </div>
    </div>

        <div class="bistro-pic bistro-pic-tall-3" style="background-image: url(<?php echo get_theme_file_uri('images/bistro/meal-5-tall.jpg') ?>);background-position: bottom;">
    </div>
        <div class="bistro-pic bistro-pic-xl-2 bistro-pic-content-1" style="background-image: url(<?php echo get_theme_file_uri('images/bistro/venue-5-large.jpg') ?>);">
          <div class="content second-content">
              <?php echo $bistroContent3 ?>
              <?php echo $bistroContent4 ?>
          </div>
        </div>

            <div class="bistro-pic bistro-pic-tall-4 bistro-list" style="background-image: url(<?php echo get_theme_file_uri('images/bistro/meal-12-tall.jpg') ?>);background-position: bottom;">
      <div class="list content">
        <?php echo $bistroContent5  ?>
      </div>
    </div>
    <div class="bistro-pic bistro-pic-tall-5" style="background-image: url(<?php echo get_theme_file_uri('images/bistro/meal-13-tall.jpg') ?>);background-position: bottom;">
    </div>


      <div class="bistro-pic bistro-pic-xl-3 bistro-pic-content-1" style="background-image: url(<?php echo get_theme_file_uri('images/bistro/burger-1-large.jpg') ?>);">
    <div class="content second-content">
       <h3> <?php echo $bistroCafetTitle ?> </h3>
       <?php echo $bistroCafe ?>
    </div>
        </div>

        <div class="bistro-pic bistro-pic-square square-1" style="background-image: url(<?php echo get_theme_file_uri('images/bistro/meal-7-square.jpg') ?>);">
        </div>

      <div class="bistro-pic bistro-pic-square square-2" style="background-image: url(<?php echo get_theme_file_uri('images/bistro/meal-8-square.jpg') ?>);">
        </div>

      <div class="bistro-pic bistro-pic-xl-4" style="background-image: url(<?php echo get_theme_file_uri('images/bistro/cake1.jpg') ?>); background-position: center">
        </div>

      <div class="bistro-pic bistro-pic-xl-5" style="background-image: url(<?php echo get_theme_file_uri('images/bistro/salad-1-large.jpg') ?>);background-position: right">
        </div>

  </div>
</section>

<script>
  ScrollReveal().reveal('.mo-bistro-logo', {delay: 800, duration: 1200, origin: 'bottom', distance: '150px'});


  ScrollReveal().reveal('.bistro-pic', {delay: 800, duration: 1200, origin: 'bottom', distance: '150px'});

  ScrollReveal().reveal('.bistro-pic-xl', {delay: 800, duration: 1200, origin: 'left', distance: '150px'});

  ScrollReveal().reveal('.bistro-pic-tall-1', {delay: 700, duration: 1200, origin: 'left', distance: '150px',    viewOffset: {
        bottom: 80,
    }});
  ScrollReveal().reveal('.bistro-pic-tall-2', {delay: 900, duration: 1200, origin: 'right', distance: '150px',viewOffset: {
        bottom: 80,
    }});
  ScrollReveal().reveal('.bistro-pic-tall-3', {delay: 1300, duration: 1200, origin: 'right', distance: '150px'});

  ScrollReveal().reveal('.bistro-pic-tall-4', {delay: 1300, duration: 1200, origin: 'left', distance: '150px'});

  ScrollReveal().reveal('.bistro-pic-tall-5', {delay: 1300, duration: 1200, origin: 'right', distance: '150px'});


  ScrollReveal().reveal('.square-1', {delay: 1300, duration: 1200, origin: 'left', distance: '150px'});

  ScrollReveal().reveal('.square-2', {delay: 1300, duration: 1200, origin: 'right', distance: '150px'});

  ScrollReveal().reveal('.bistro-pic-xl-4', {delay: 1300, duration: 1200, origin: 'left', distance: '150px'});
  ScrollReveal().reveal('.bistro-pic-xl-5', {delay: 500, duration: 1200, origin: 'right', distance: '150px', viewOffset: {bottom: 60}});


  ScrollReveal().reveal('.first-content', {delay: 1300, duration: 1200, origin: 'bottom', distance: '150px', viewOffset: {bottom: 40}});

  ScrollReveal().reveal('.second-content', {delay: 1300, duration: 1200, origin: 'bottom', distance: '150px', viewOffset: {bottom: 40}});


  ScrollReveal().reveal('.list', {delay: 1300, duration: 1300, origin: 'left', distance: '150px', viewOffset: {bottom: 40}});



</script>
<?php get_footer(); ?>
