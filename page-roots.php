
<?php get_header(); ?>

<script src="<?php echo get_theme_file_uri('js/scrollStartStop.js') ?>"></script>
<script src="<?php echo get_theme_file_uri('js/mousewheel.min.js') ?>"></script>
<script src="<?php echo get_theme_file_uri('js/scrollSections.js') ?>"></script>




<?php while (have_posts()) {
  the_post();
}

// Roots ENG contant
 $rootsPart1 = get_post_field('post_content', 61);
 $rootsPart2 = get_post_field('post_content', 63);
 $rootsPart3 = get_post_field('post_content', 65);
 $rootsPart4 = get_post_field('post_content', 67);

?>

<div class="main-container-roots">

<section id="sectionRoots1" class="scrollsections">
  <div class="section-roots-container section-pair">

    <div class="section-pictures"></div>
    <div class="title">
      <h2 class="roots-title">The Aljezur Flour Mill</h2>
      <div class="title-content"><?php echo $rootsPart1 ?></div>
      </div>

  </div>
</section>

<section id="sectionRoots2" class="scrollsections">
      <div class="section-roots-container ">

    <div class="section-pictures"></div>
    <div class="title">
      <div class="title-content"><?php echo $rootsPart2 ?></div>
      </div>

  </div>

</section>

<section id="sectionRoots3" class="scrollsections">
      <div class="section-roots-container section-pair">

    <div class="section-pictures"></div>
    <div class="title">
      <div class="title-content"><?php echo $rootsPart3 ?></div>
      </div>

  </div>
</section>

<section id="sectionRoots4" class="scrollsections">
      <div class="section-roots-container">

    <div class="section-pictures"></div>
    <div class="title">
      <div class="title-content">
        <?php echo $rootsPart4 ?></div>
      <object style="position:relative;" id="svgRui" type="image/svg+xml" data="<?php echo get_theme_file_uri('images/ruipaths.svg') ?>"></object>
        <p id="ruiJob"><i> Portuguese Association of Industrial Archaeology</i></p>
  </div>

</section>



<script>
  $(function() {

    $('section.scrollsections .title').hide(); // Hide all titles
    $('section.scrollsections .section-roots-container').hide(); // Hide all titles


    $('section.scrollsections')
      .scrollSections({
        alwaysStartWithFirstSection : true, // force to load the page on the first section (prevent broswer caching)
        navigation: false,
        scrollbar: true,

        before: function($currentSection, $nextSection){

          _initFuturSection($nextSection);
        },

        after: function($currentSection, $previousSection){

          _initNewSection($currentSection, $previousSection);
        }

      });

    function _initNewSection($section, $prevSection){

      // Do some stuff each time this new section ends animating

      // Only if there is a previous section (its null on first scroll)
      if($prevSection){
        $('.title', $prevSection).hide(); // Hide old section title
        $('.section-roots-container', $prevSection).hide(); // Hide old section title

      }
      $('.title', $section).fadeIn(500); // Fade in current section title
      $('.section-roots-container', $section).slideDown('slow');
      $('#ruiJob').css("display", "block");
      $("#ruiJob").css("opacity", "0");




      // Do some stuffs only on first init
      if( !$section.data('isInit') ){
        // Create slider for example
        // $('.selector', $section).slider();

        // Singleton
        $section.data('isInit', true);
      }
    }

    function _initFuturSection($section){

      // Do some stuff each time before this section appears
      $('.section-roots-container', $section).hide();


    }
  });
</script>

<script>
      const ruiSignatur =  new Vivus('svgRui', {type: 'oneByOne', duration: 700, animTimingFunction: Vivus.EASE});
      $("#ruiJob").css("opacity", "0");

  window.onscroll = function(ev) {

    if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
        // you're at the bottom of the page
        ruiSignatur
          .stop()
          .reset()
          .play();
         // $('#ruiJob').delay(8500).fadeIn(2000);
         $('#ruiJob').delay(9700).animate({opacity: 1}, 2000);

    }
};

</script>
</div>

<?php get_footer(); ?>