<?php
/**
 * Template part: Services ("Our Services").
 *
 * @package MillionDollarIdeasTheme
 */

$services = array(
    array( 'icon' => 'graphic_eq',  'title' => 'Radio Promotion',     'desc' => 'Strategic radio campaigns that build awareness, secure spins, and drive real audience reach.' ),
    array( 'icon' => 'trending_up', 'title' => 'Streaming Growth',     'desc' => 'Data-driven strategies that increase streams, build listeners, and boost long-term traction.' ),
    array( 'icon' => 'mic',         'title' => 'Artist Development',   'desc' => 'High-impact content and guidance that bring your story to life across every platform.' ),
    array( 'icon' => 'rocket_launch','title' => 'Marketing & Growth',  'desc' => 'Data-driven campaigns and strategies that grow your audience and amplify your reach.' ),
);
?>

<section class="services-section" id="services">
    <div class="container">
        <div class="section-head reveal">
            <h2 class="section-title">Our Services</h2>
            <p class="section-lead">End-to-end creative solutions that elevate your sound, shape your vision, and connect you to the world.</p>
            <a href="#contact" class="text-link">View All Services <span class="material-symbols-rounded">arrow_forward</span></a>
        </div>

        <div class="services-grid">
            <?php $n = 1; foreach ( $services as $service ) : ?>
                <article class="glass-card service-item reveal">
                    <span class="service-number"><?php printf( '%02d', $n ); ?></span>
                    <span class="material-symbols-rounded service-icon"><?php echo esc_html( $service['icon'] ); ?></span>
                    <h3><?php echo esc_html( $service['title'] ); ?></h3>
                    <p><?php echo esc_html( $service['desc'] ); ?></p>
                    <a href="#contact" class="icon-button" aria-label="<?php echo esc_attr( $service['title'] ); ?>"><span class="material-symbols-rounded">arrow_forward</span></a>
                </article>
            <?php $n++; endforeach; ?>
        </div>
    </div>
</section>
