<?php get_header(); ?>
<?php
$bistroContent1 = get_post_field('post_content', 95);
$bistroList = get_post_field('post_content', 97);
$bistroListTitle = get_the_title(97);
$bistroContent3 = get_post_field('post_content', 99);
$bistroContent4 = get_post_field('post_content', 101);
$bistroContent5 = get_post_field('post_content', 104);
$bistroContent6 = get_post_field('post_content', 106);
$bistroCafe = get_post_field('post_content', 108);
$bistroCafetTitle = get_the_title(108);
$bistroReviewsTitle = get_the_title(126);
$bistroReviews = get_post_field('post_content', 126);
?>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="<?php echo get_theme_file_uri('js/lightslider.min.js') ?>"></script>
<script src="<?php echo get_theme_file_uri('js/mousewheel.min.js') ?>"></script>
<script src="<?php echo get_theme_file_uri('js/jquery.scrollify.js') ?>"></script>
<script>
// $(function() {
//  $.scrollify({
//     section: ".scrollTest , .footer-bottom , #top",
//     setHeights: false,
//     scrollSpeed: 1000,
//     offset: -120,
//     interstitialSection: ".logotest",
//   });
// });

</script>

<div class="external-links">
  <a  class="tripadvisor-link" href="https://www.tripadvisor.fr/Restaurant_Review-g1021467-d12626736-Reviews-Mo_Vegetarian_Bistro-Aljezur_Faro_District_Algarve.html" target="_blank">
    <i class="fab fa-tripadvisor"></i>
    <p class="tripadvisor-text">Trip Advisor</p>
  </a>

</div>
<a href="#" class="svglinkCow" id="cowLink">
    <object id="happycowSvg" style="position:relative;" type="image/svg+xml" data="<?php echo get_theme_file_uri('images/logos/happycow.svg') ?>"></object>
    <p class="cow-text">Happy Cow</p>
</a>




<div class="logotest" style="position: absolute;top: 0" id="top"></div>
<section id="sectionBistro">
  <div class="bistro-picture" style="margin-bottom: 10px;">

      <div class="mo-bistro-logo-mobile">
        <object style="position:relative;" id="svgMoBistro" type="image/svg+xml" data="<?php echo get_theme_file_uri('images/logos/mobistro.svg') ?>"></object>
      </div>
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
      <div class="content-new">
        <h3><?php echo $bistroListTitle ?></h3>
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
    <a href="#top" id="toTheTop"><i class="fas fa-arrow-up"></i></a>

</section>
<script>
// ScrollReveal().reveal('.mo-bistro-logo', {
//   delay: 800,
//   duration: 1000,
//   origin: 'bottom',
//   distance: '150px'
// });
// ScrollReveal().reveal('.bistro-pic', {
//   delay: 800,
//   duration: 1000,
//   origin: 'bottom',
//   distance: '150px',
//   viewOffset: {
//     bottom: 60
//   }
// });

// ScrollReveal().reveal('.xl-left', {
//   delay: 500,
//   duration: 1000,
//   origin: 'left',
//   distance: '150px',
//   viewOffset: {
//     bottom: 60
//   }
// });
// ScrollReveal().reveal('.xl-right', {
//   delay: 500,
//   duration: 1000,
//   origin: 'left',
//   distance: '150px',
//   viewOffset: {
//     bottom: 70
//   }
// });
// ScrollReveal().reveal('.pic-tall-right', {
//   delay: 500,
//   duration: 1000,
//   origin: 'right',
//   distance: '150px',
//   viewOffset: {
//     bottom: 60
//   }
// });
// ScrollReveal().reveal('.pic-tall-left', {
//   delay: 500,
//   duration: 1000,
//   origin: 'left',
//   distance: '150px',
//   viewOffset: {
//     bottom: 60
//   }
// });

// ScrollReveal().reveal('.square-1', {
//   delay: 500,
//   duration: 1000,
//   origin: 'left',
//   distance: '150px',
//   viewOffset: {
//     bottom: 60
//   }
// });
// ScrollReveal().reveal('.square-2', {
//   delay: 500,
//   duration: 1000,
//   origin: 'right',
//   distance: '150px',
//   viewOffset: {
//     bottom: 60
//   }
// });

// ScrollReveal().reveal('.bistro-pic-xl-5', {
//   delay: 500,
//   duration: 1000,
//   origin: 'right',
//   distance: '150px',
//   viewOffset: {
//     bottom: 100
//   }
// });

$(document).ready(function() {
  $("#reviewsList").lightSlider({
    item: 1,
    pager: false,
    loop: true
  });
  $('.lSNext')[0].innerHTML = '<i class="fas fa-arrow-right"></i>'
  $('.lSPrev')[0].innerHTML = '<i class="fas fa-arrow-left"></i>'

  const svgCow = document.getElementById('happycowSvg');
  const svgCowContent = svgCow.contentDocument;
  const cowPath = svgCowContent.querySelectorAll('path');


  document.getElementById('cowLink').addEventListener('mouseover', function() {
      cowPath.forEach(function(path) {
          path.classList.add('hover-link');
    });
  });

  document.getElementById('cowLink').addEventListener('mouseout', function() {
    cowPath.forEach(function(path) {
      path.classList.remove('hover-link');
    });
  });
});


  $(document).ready(function() {
  //Add smoooth scolling to all link in navbar + footer link
  $("#toTheTop").on('click', function(event) {

    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;

      //jquery animate() method to add smooth scrollwheel
      // number 900 spec number of milliseconids it takes to scoll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
        window.location.hash = hash;
      });
      }
    });
    $(window).scroll(function() {
      $(".slideanim").each(function(){
        var pos = $(this).offset().top;

        var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
      });
    });
  })
</script>
<?php get_footer(); ?>
