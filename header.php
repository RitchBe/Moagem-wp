<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <?php wp_head(); ?>
  <link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vivus/0.4.4/vivus.min.js"></script>

</head>
<body>

<div class="topnav" id="myTopnav">
  <h2 style="color: #0FABF1;margin:0">Logo</h2>
  <div class="nav-links">


  <a href="<?php echo site_url('/') ?>" class="<?php if (is_page('moagem')) echo 'active' ?> nav-link">Home</a>

  <a href="<?php echo site_url('/index.php/mo-bistro') ?>" class="<?php if (is_page('mo-bistro')) echo 'active' ?> nav-link">Mo Bistro</a>

  <a href="<?php echo site_url('/index.php/events') ?>" class="<?php if (is_page('events')) echo 'active' ?> nav-link">Events</a>

  <a href="<?php echo site_url('/index.php/roots') ?>" class="<?php if (is_page('roots')) echo 'active' ?> nav-link">Roots</a>

  <a href="<?php echo site_url('/index.php/yoga') ?>" class="<?php if (is_page('yoga')) echo 'active' ?> nav-link">Yoga</a>

  <a href="<?php echo site_url('/index.php/contact') ?>" class="<?php if (is_page('contact')) echo 'active' ?> nav-link">Contact</a>

  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
</div>


<script>
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>


