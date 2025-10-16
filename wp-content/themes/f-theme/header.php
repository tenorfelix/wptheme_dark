<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header-container">
        <div class="my-logo">
            <?php
            if ( function_exists('the_custom_logo') && has_custom_logo() ) {
                the_custom_logo();
            } else {
                // Fallback image
                ?>
                <a href="<?php echo home_url('/'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/dummy-logo.png" alt="<?php bloginfo('name'); ?>" class="custom-logo" width="100px">
                </a>
                <?php
            }
            ?>
        </div>
        <nav>
            <?php wp_nav_menu(array(
                'theme_location' => 'header-menu',
                'menu_class' => 'header-menu'
            )); ?>
        </nav>
    </header>
