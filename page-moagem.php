
<?php get_header(); ?>

<?php while (have_posts()) {
  the_post();
}
// Moagem ENG content
 $higherMissionTitle = get_the_title(17);
 $higherMissionContent = get_post_field('post_content', 17);

 $beliefTitle = get_the_title(21);
 $beliefContent = get_post_field('post_content', 21);

 $whoTitle = get_the_title(23);
 $whoContent = get_post_field('post_content', 23);

 $peopleTitle = get_the_title(25);
 $peopleContent = get_post_field('post_content', 25);


?>


<section id="sectionBanner" class="banner">
  <h2>this is the banner</h2>
</section>

<section id="sectionMission">
  <h2>this is the mission section</h2>
</section>

<section id="sectionBelief">
  <div class="belief-content">
    <h2 id="beliefTitle"><?php echo $beliefTitle ?></h2>
    <p><?php echo $beliefContent ?></p>
  </div>

  <div class="belief-logo">
    <object style="position:relative;" id="svgBelief" type="image/svg+xml" data="<?php echo get_theme_file_uri('images/logoBelief.svg') ?>"></object>
  </div>
</section>


<section id="sectionWho">
  <h2>this is the who section</h2>
</section>

<section id="sectionPeople">
  <h2>this is the people section</h2>
</section>


<script>


  const svgBeliefAnim =  new Vivus('svgBelief', {type: 'delayed', duration: 200},
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

</script>

<?php get_footer(); ?>
