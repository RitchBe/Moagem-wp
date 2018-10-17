<?php
function twentyfifteen_javascript_detection() {
  echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'twentyfifteen_javascript_detection', 0 );

  function Moagem_files() {

    wp_enqueue_style("font-awesome", "//use.fontawesome.com/releases/v5.3.1/css/all.css");
    wp_enqueue_style('custom-font-1', 'Aleo-Light.otf');
    wp_enqueue_style('custom-font-2', 'Arimo-Regular.otf');
    wp_enqueue_style( 'Moagem_main_styles', get_stylesheet_uri('style.css') );

    wp_enqueue_style('Yoga_style', get_theme_file_uri('styles/yoga.css'));
    wp_enqueue_style('Roots_style', get_theme_file_uri('styles/roots.css'));
    wp_enqueue_style('Header_style', get_theme_file_uri('styles/header.css'));
    wp_enqueue_style('Moagem_style', get_theme_file_uri('styles/moagem.css'));
    wp_enqueue_style('Bistro_style', get_theme_file_uri('styles/bistro.css'));
    wp_enqueue_style('Contact_style', get_theme_file_uri('styles/contact.css'));
    wp_enqueue_style('Footer_style', get_theme_file_uri('styles/footer.css'));



    wp_enqueue_style("font-awesome", "//use.fontawesome.com/releases/v5.3.1/css/all.css");



  }
  add_action('wp_enqueue_scripts', 'Moagem_files');

  function arphabet_widgets_init() {

  register_sidebar( array(
    'name'          => 'Home right sidebar',
    'id'            => 'home_right_1',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="rounded">',
    'after_title'   => '</h2>',
  ) );
    register_sidebar( array(
    'name'          => 'Mobil nav widget',
    'id'            => 'mobil_widget',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="rounded">',
    'after_title'   => '</h2>',
  ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

function Moagem_features() {
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'Moagem_features');


 ?>
