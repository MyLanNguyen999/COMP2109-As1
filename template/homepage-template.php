<?php
/*
Template Name: Assignment 1 - Homepage
Template Post Type: Page
*/
get_header();
?>
<main>
    
    <div>
        <section class="homepage-tab overlay" style="background-image: url('<?php echo esc_url(wp_kses_post(get_field('tab_image'))); ?>');">
        <h1 class="overlay">
            <?php echo wp_kses_post(get_field('tab_title')); ?>
        </h1> 
    </div>
    </section>
        <p>
            <?php echo wp_kses_post(get_field('tab_description')); ?>
        </p>
    
    
</main>

<?php get_footer(); ?>