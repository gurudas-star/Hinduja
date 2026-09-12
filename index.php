<?php require_once 'config/db.php';
require_once 'includes/track_view.php'; ?>
<?php $head_title = "Home One " ?>
<?php $body_class="custom-cursor"?>
<?php
  $home = true;
?>
<!-- Header Here -->
<?php require_once('parts/header/header-four.php'); ?>

<?php
require_once('parts/home1/main-slider.php');
require_once('parts/home1/about.php');
require_once('parts/home1/our_services.php');
require_once('parts/home1/skills.php'); 
require_once('parts/home1/welcome.php');
require_once('parts/home1/why-choose.php');
require_once('parts/home1/counter.php');
require_once('parts/home1/team.php');
require_once('parts/home1/work-process.php');
require_once('parts/home1/faq.php');
require_once('parts/home1/testimonials.php');
// require_once('parts/home1/blog.php');
require_once('parts/home1/client-carousel.php');
?>
<?php require_once('parts/footer/footer-one.php'); ?>