<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>

    <!-- //* add script -->

    <!-- //* add stylesheet -->
    <link href="<?php echo esc_url(  home_url('wp-content/themes/assignment1/style.css')); ?>" rel="stylesheet">

    <!-- //* add custom font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap" rel="stylesheet">

</head>
<body <?php body_class(); ?>>
    <header>
        <div class="logo-section">
            <a href="<?php echo esc_url( home_url() ); ?>">
                <img src="<?php echo esc_url( home_url('wp-content/uploads/2024/02/logo.png') ); ?>" alt = "header logo" class="header-logo">
            </a>
        </div>

        <nav>
        <?php
          wp_nav_menu( array(
            'menu'           => 'main',
            'theme_location' => '',
            'depth'          => 2,
            'fallback_cb'    => false
          ));
        ?>
      </nav>
    </header>
    