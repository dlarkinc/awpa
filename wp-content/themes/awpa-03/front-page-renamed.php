<?php get_header(); ?>
<div id="main">
	<div id="content-home">
	<h2>This is my custom Home Page</h2>
  
<?php 
  $args = array(
    'post_type' =>'slides',
    'numberposts' => -1,
    'orderby' => 'rand'
    );
  $slider_posts = get_posts($args);
  $counter = 1;
  // Could use this in a JQuery slideshow
  if($slider_posts) {
    foreach($slider_posts as $post) { 
          echo 'Slide ' . $counter . ' - ';
          echo the_title() . '<br/>'. the_content() . '<br/>'; ?>
    <?php
	    $counter++; } ?>
  <?php
     } ?>
     </div>
</div>
<?php get_footer(); ?>