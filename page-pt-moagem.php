
<?php get_header('pt'); ?>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="<?php echo get_theme_file_uri('js/mousewheel.min.js') ?>"></script>
<script src="<?php echo get_theme_file_uri('js/jquery.scrollify.js') ?>"></script>
<?php while (have_posts()) {
  the_post();
}
// Moagem ENG content
 $higherMissionTitle = get_the_title(71);
 $higherMissionContent = get_post_field('post_content', 71);

 $beliefTitle = get_the_title(73);
 $beliefContent = get_post_field('post_content', 73);

 $whoTitle = get_the_title(75);
 $whoContent = get_post_field('post_content', 75);

 $peopleTitle = get_the_title(78);
 $peopleContent = get_post_field('post_content', 78);

?>

<script>
    $(function() {
        $.scrollify({
            section : ".scrollTest, .footer-bottom",
            setHeights: false,
            scrollSpeed: 1500,
            interstitialSection : "",

          });
        });
</script>


<section id="sectionBanner" class="banner scrollTest" style="background-image: url(<?php echo get_theme_file_uri('images/moagem/inside.jpg') ?>)">
  <div class="gradient"></div>
  <div class="banner-moagem-content">
    <div class="banner-moagem-logo">
  <object style="position:relative;" id="svgBannerLogo" type="image/svg+xml" data="<?php echo get_theme_file_uri('images/logos/banner-moagem-logo-2.svg') ?>"></object>
</div>
  <div class="banner-p">
  <p>Onde antes se transformavam cereais em farinha,
hoje transformam-se ideias criativas em produções colaborativas</p>
<div class="banner-moagem-info">
  <p>Espaço Cultural</p>
  <p>Bistro Vegetariano</p>
</div>
</div>
</div>

</section>

<section id="sectionMission" class="section-moagem scrollTest">

  <div class="mission-content">
  <h2><?php echo $higherMissionTitle ?></h2>
  <?php echo $higherMissionContent ?>
</div>

  <div class="mission-picture">
    <div class="pic pic-tall" style="background-image: url(<?php echo get_theme_file_uri('images/moagem/moaempic6.jpg') ?>)"></div>
    <div class="pic pic-large-1" style="background-image: url(<?php echo get_theme_file_uri('images/moagem/large1.jpg') ?>)"></div>
    <div class="pic pic-large-2" style="background-image: url(<?php echo get_theme_file_uri('images/moagem/inside2.jpg') ?>)"></div>
  </div>
</section>




<section id="sectionBelief" class="section-moagem scrollTest">
  <div class="belief-content section-moagem-content">
    <h2 id="beliefTitle"><?php echo $beliefTitle ?></h2>
    <p><?php echo $beliefContent ?></p>
  </div>

  <div class="belief-logo section-moagem-logo">
    <object style="position:relative;" id="svgBelief" type="image/svg+xml" data="<?php echo get_theme_file_uri('images/logos/logoBelief.svg') ?>"></object>
  </div>
</section>




<section id="sectionWho" class="section-moagem scrollTest">
  <div class="who-logo section-moagem-logo">
    <object style="position:relative;" id="svgWho" type="image/svg+xml" data="<?php echo get_theme_file_uri('images/logos/logoWho.svg') ?>"></object>

  </div>

  <div class="who-content section-moagem-content">
    <h2 id="whoTitle"><?php echo $whoTitle ?></h2>
    <p><?php echo $whoContent ?></p>
  </div>
</section>

<section id="sectionPeople" class="scrollTest">
  <h2>this is the people section</h2>
</section>


<script>

  ScrollReveal().reveal('.pic-tall', { duration: 1000, origin: 'left', distance: '150px', viewOffset: {
        bottom: 300,
    }});
  ScrollReveal().reveal('.pic-large-1', {duration: 1000, origin: 'right', distance: '150px',    viewOffset: {
        bottom: 300,
    }});
  ScrollReveal().reveal('.pic-large-2', {duration: 1000, origin: 'right', distance: '150px',    viewOffset: {
        bottom: 150,
    }});



//BELIEF ANIM
  const svgBeliefAnim =  new Vivus('svgBelief', {type: 'delayed', duration: 250},
    function() {
        const svgBelief = document.getElementById('svgBelief');
        const svgBeliefContent = svgBelief.contentDocument;

        const outterCircle = svgBeliefContent.getElementById('outterCircle');
        const innerCircle = svgBeliefContent.getElementById('innerCircle');
        const beliefPathElements = svgBeliefContent.querySelectorAll('path');



        beliefPathElements.forEach(function(path) {
          path.classList.add('finished', 'nostroke');

        });

        innerCircle.classList.add('innerCircleFill');
        outterCircle.classList.add('outterCircleFill');

        $('#beliefTitle').addClass("belief-title-finished");
        $(".belief-content").find("p").each(function() {
          $(this).addClass("belief-p-finished");
        });
      }
    );

//WHO ANIM
    const svgWhoAnim =  new Vivus('svgWho', {type: 'delayed', duration: 250},
    function() {
        const svgWho = document.getElementById('svgWho');
        const svgWhoContent = svgWho.contentDocument;

        const outterCircleWho = svgWhoContent.getElementById('outterCircleWho');
        const innerCircleWho = svgWhoContent.getElementById('innerCircleWho');
        const whoPathElements = svgWhoContent.querySelectorAll('path');



        whoPathElements.forEach(function(path) {
          path.classList.add('finished', 'nostroke');

        });

        innerCircleWho.classList.add('innerCircleWhoFill');
        outterCircleWho.classList.add('outterCircleWhoFill');

        $('#whoTitle').addClass("who-title-finished");
        $(".who-content").find("p").each(function() {
          $(this).addClass("who-p-finished");
        });
      }
    );

</script>

<?php get_footer(); ?>
