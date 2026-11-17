<?php
/**
 * Template part: About ("Our Impact" + Founders).
 *
 * @package MillionDollarIdeasTheme
 */

$img = trailingslashit( get_template_directory_uri() ) . 'assets/images/';

$stats = array(
    array( 'icon' => 'bar_chart',     'num' => '350+', 'title' => 'Projects Delivered', 'desc' => 'Across music, brand, and experience design.' ),
    array( 'icon' => 'groups',        'num' => '100+', 'title' => 'Global Clients',     'desc' => 'Trusted by emerging talents and established brands.' ),
    array( 'icon' => 'workspace_premium', 'num' => '80+', 'title' => 'Awards & Features', 'desc' => 'Recognized by industry leaders and creative platforms.' ),
);

$founders = array(
    array( 'name' => 'Omobosola Alaka', 'role' => 'Co-Founder & Creative Director', 'img' => 'founder-1.jpg' ),
    array( 'name' => 'Abolaji Alaka',   'role' => 'Co-Founder & Strategy Director', 'img' => 'founder-2.jpg' ),
);
?>

<section class="about-section" id="about">
    <div class="container">
        <span class="eyebrow reveal">Our Impact</span>
        <div class="impact-list reveal">
            <?php foreach ( $stats as $stat ) : ?>
                <div class="impact-row">
                    <span class="impact-icon"><span class="material-symbols-rounded"><?php echo esc_html( $stat['icon'] ); ?></span></span>
                    <span class="impact-number"><?php echo esc_html( $stat['num'] ); ?></span>
                    <div class="impact-copy">
                        <h4><?php echo esc_html( $stat['title'] ); ?></h4>
                        <p><?php echo esc_html( $stat['desc'] ); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <span class="eyebrow reveal">Meet the Founders</span>
        <div class="founders-grid">
            <?php foreach ( $founders as $founder ) : ?>
                <div class="founder reveal">
                    <img src="<?php echo esc_url( $img . $founder['img'] ); ?>" alt="<?php echo esc_attr( $founder['name'] ); ?>" class="founder-photo" onerror="this.style.visibility='hidden'">
                    <h4><?php echo esc_html( $founder['name'] ); ?></h4>
                    <p class="founder-role"><?php echo esc_html( $founder['role'] ); ?></p>
                    <div class="founder-social">
                        <a href="#" aria-label="LinkedIn"><span class="material-symbols-rounded">work</span></a>
                        <a href="#" aria-label="Instagram"><span class="material-symbols-rounded">photo_camera</span></a>
                        <a href="#" aria-label="Email"><span class="material-symbols-rounded">mail</span></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
