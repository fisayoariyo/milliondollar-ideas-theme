<?php
/**
 * The front page template file
 *
 * @package MillionDollarIdeasTheme
 */

get_header();

$img = trailingslashit( get_template_directory_uri() ) . 'assets/images/';
?>

<main id="primary" class="site-main">

    <!-- ============ HERO ============ -->
    <section class="hero-section" id="home">
        <div class="hero-background">
            <img src="<?php echo esc_url( $img . 'hero-bg.jpg' ); ?>" alt="" class="hero-bg-image" onerror="this.style.display='none'">
        </div>
        <div class="container hero-inner">
            <h1 class="hero-title reveal">Africa's Creative Growth Partner</h1>
            <p class="hero-subtitle reveal">We partner with African creatives and brands to build iconic stories, global influence, and sustainable impact.</p>
            <div class="hero-buttons reveal">
                <a href="#contact" class="button-primary">Work With Us <span class="material-symbols-rounded">arrow_outward</span></a>
                <a href="#services" class="button-secondary">Explore the Ecosystem</a>
            </div>
        </div>

        <div class="container">
            <div class="trusted-by-section reveal">
                <div class="trusted-by-heading">
                    <p class="trusted-by-text">Trusted By</p>
                    <p>We're proud to collaborate with industry leaders who share our vision.</p>
                </div>
                <div class="trusted-by-logos">
                    <span class="trusted-logo-text">MTV Base</span>
                    <span class="trusted-logo-text">Soundcity</span>
                    <span class="trusted-logo-text">Boomplay</span>
                </div>
            </div>
        </div>

        <div class="scroll-indicator">
            <span class="material-symbols-rounded">mouse</span>
            <span>Scroll to Explore</span>
        </div>
    </section>

    <!-- ============ WHAT WE DO ============ -->
    <section class="what-we-do-section" id="what-we-do">
        <div class="container">
            <div class="what-we-do-layout">
                <div class="what-we-do-intro reveal">
                    <span class="eyebrow">What We Do</span>
                    <h2>We build movements that matter.</h2>
                    <p>We partner with visionary artists and brands to craft bold strategies, amplify their voice, and expand their reach across culture.</p>
                    <a href="#services" class="text-link">Explore Services <span class="material-symbols-rounded">arrow_forward</span></a>
                </div>

                <div class="service-cards">
                    <article class="glass-card service-card reveal">
                        <div class="service-card-top">
                            <span class="service-card-icon"><span class="material-symbols-rounded">campaign</span></span>
                            <span class="service-card-number">01</span>
                        </div>
                        <h3>Promotion</h3>
                        <span class="accent-line"></span>
                        <p>We design data-driven campaigns that cut through the noise and connect with the right audience.</p>
                        <div class="service-card-foot">
                            <a href="#services" class="text-link">Learn More</a>
                            <a href="#services" class="icon-button"><span class="material-symbols-rounded">arrow_forward</span></a>
                        </div>
                    </article>

                    <article class="glass-card service-card reveal">
                        <div class="service-card-top">
                            <span class="service-card-icon"><span class="material-symbols-rounded">target</span></span>
                            <span class="service-card-number">02</span>
                        </div>
                        <h3>Strategy</h3>
                        <span class="accent-line"></span>
                        <p>From positioning to planning, we create strategies that align with your vision and drive real impact.</p>
                        <div class="service-card-foot">
                            <a href="#services" class="text-link">Learn More</a>
                            <a href="#services" class="icon-button"><span class="material-symbols-rounded">arrow_forward</span></a>
                        </div>
                    </article>

                    <article class="glass-card service-card reveal">
                        <div class="service-card-top">
                            <span class="service-card-icon"><span class="material-symbols-rounded">north_east</span></span>
                            <span class="service-card-number">03</span>
                        </div>
                        <h3>Expansion</h3>
                        <span class="accent-line"></span>
                        <p>We help artists and brands scale into new markets and media without losing their identity.</p>
                        <div class="service-card-foot">
                            <a href="#services" class="text-link">Learn More</a>
                            <a href="#services" class="icon-button"><span class="material-symbols-rounded">arrow_forward</span></a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ FEATURED ARTISTS ============ -->
    <section class="featured-artists-section" id="featured">
        <div class="container">
            <div class="featured-head reveal">
                <span class="eyebrow">Featured Artists</span>
                <div class="carousel-controls">
                    <button class="icon-button" data-carousel-prev="featured-track" aria-label="Previous"><span class="material-symbols-rounded">arrow_back</span></button>
                    <button class="icon-button" data-carousel-next="featured-track" aria-label="Next"><span class="material-symbols-rounded">arrow_forward</span></button>
                    <a href="#artists" class="text-link">View All Artists <span class="material-symbols-rounded">arrow_forward</span></a>
                </div>
            </div>

            <div class="artist-track" id="featured-track">
                <?php
                $featured = array(
                    array( 'title' => 'Echoes In Motion', 'artist' => 'Jayvon',  'now' => '1:24', 'len' => '3:47', 'img' => 'artist-1.jpg' ),
                    array( 'title' => 'Midnight Drive',   'artist' => 'Lorelei', 'now' => '0:58', 'len' => '3:15', 'img' => 'artist-2.jpg' ),
                    array( 'title' => 'Signal Fire',      'artist' => 'Kayo',    'now' => '1:10', 'len' => '3:02', 'img' => 'artist-3.jpg' ),
                    array( 'title' => 'Golden Hour',      'artist' => 'Aurora',  'now' => '1:36', 'len' => '3:28', 'img' => 'artist-4.jpg' ),
                );
                foreach ( $featured as $track ) : ?>
                    <article class="audio-card">
                        <img src="<?php echo esc_url( $img . $track['img'] ); ?>" alt="<?php echo esc_attr( $track['artist'] ); ?>" onerror="this.style.display='none'">
                        <div class="audio-card-body">
                            <div class="audio-card-row">
                                <span class="audio-play"><span class="material-symbols-rounded">play_arrow</span></span>
                                <div class="audio-meta">
                                    <h4><?php echo esc_html( $track['title'] ); ?></h4>
                                    <span><?php echo esc_html( $track['artist'] ); ?></span>
                                </div>
                            </div>
                            <div class="audio-progress"><span></span></div>
                            <div class="audio-time">
                                <span><?php echo esc_html( $track['now'] ); ?></span>
                                <span><?php echo esc_html( $track['len'] ); ?></span>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="partner-strip">
            <div class="container">
                <span class="partner-label">Trusted by visionaries</span>
                <div class="partner-logos">
                    <span>Def Jam</span>
                    <span>Atlantic</span>
                    <span>Warner</span>
                    <span>Universal</span>
                    <span>Spotify</span>
                    <span>YouTube</span>
                    <span>Meta</span>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part( 'content', 'services' ); ?>
    <?php get_template_part( 'content', 'artists' ); ?>
    <?php get_template_part( 'content', 'about' ); ?>
    <?php get_template_part( 'content', 'contact' ); ?>

</main>

<?php
get_footer();
