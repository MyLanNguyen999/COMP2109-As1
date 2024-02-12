<?php
/**
 * COMP 2109 - Assignment 1
 * Main file of Assignment 1 Theme
 * MyLan Nguyen
 */

 get_header();
?>
<section class="homepage-wrapper">
<h1> COMP 2109 - Assignment 1 </h1>
<h2> Georgian College </h2>
<img src="<?php echo esc_url( home_url('/wp-content/uploads/2024/02/screenshot.png') ); ?>" alt="screenshot" class="homepage-image">
<p> This is the brief introduction about me and my  goals after graduating from Georgian College in Interactive Media Design - Web. Enjoy!</p>
</section>
<?php get_footer(); ?>