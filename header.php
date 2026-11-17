<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <header id="masthead" class="site-header">
        <div class="container">
            <div class="site-branding">
                <?php
                if ( has_custom_logo() ) {
                    the_custom_logo();
                } else {
                    printf(
                        '<a href="%1$s" class="custom-logo-link" rel="home"><span class="site-title">MDI</span></a>',
                        esc_url( home_url( '/' ) )
                    );
                }
                ?>
            </div><!-- .site-branding -->

            <button class="menu-toggle" aria-controls="site-navigation" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle menu', 'milliondollar-ideas' ); ?>">
                <span class="material-symbols-rounded">menu</span>
            </button>

            <nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Primary', 'milliondollar-ideas' ); ?>">
                <?php
                if ( has_nav_menu( 'primary' ) ) {
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                        'container'      => false,
                    ) );
                } else {
                    echo '<ul id="primary-menu">';
                    echo '<li><a href="#services">Services</a></li>';
                    echo '<li><a href="#artists">Artists</a></li>';
                    echo '<li><a href="#about">Insights</a></li>';
                    echo '<li><a href="#about">About</a></li>';
                    echo '</ul>';
                }
                ?>
                <a href="#contact" class="button-primary header-cta">Work With Us <span class="material-symbols-rounded">arrow_outward</span></a>
            </nav><!-- #site-navigation -->
        </div>
    </header><!-- #masthead -->

    <div id="content" class="site-content">
