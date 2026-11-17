<?php
/**
 * Template part: Artist Roster.
 *
 * @package MillionDollarIdeasTheme
 */

$img = trailingslashit( get_template_directory_uri() ) . 'assets/images/';

$roster = array(
    array( 'name' => 'Zara Chase', 'genre' => 'Pop',         'stat' => '12M+ Streams', 'img' => 'roster-1.jpg' ),
    array( 'name' => 'Jevan Cole', 'genre' => 'Hip-Hop',     'stat' => '18M+ Streams', 'img' => 'roster-2.jpg' ),
    array( 'name' => 'Mina Park',  'genre' => 'Electronic',  'stat' => '9M+ Streams',  'img' => 'roster-3.jpg' ),
    array( 'name' => 'Lucas',      'genre' => 'R&B',          'stat' => '15M+ Streams', 'img' => 'roster-4.jpg' ),
    array( 'name' => 'Aria Knox',  'genre' => 'Alternative',  'stat' => '7M+ Streams',  'img' => 'roster-5.jpg' ),
);
?>

<section class="artists-roster-section" id="artists">
    <div class="container">
        <div class="section-head reveal">
            <h2 class="section-title">Artist Roster</h2>
            <p class="section-lead">A curated collective of visionaries pushing culture forward. Explore the talent. Hear the difference.</p>
            <a href="#contact" class="text-link">View All Artists <span class="material-symbols-rounded">arrow_forward</span></a>
        </div>

        <div class="roster-grid">
            <?php foreach ( $roster as $artist ) : ?>
                <article class="roster-card reveal">
                    <img src="<?php echo esc_url( $img . $artist['img'] ); ?>" alt="<?php echo esc_attr( $artist['name'] ); ?>" onerror="this.style.display='none'">
                    <div class="roster-card-info">
                        <div>
                            <h4><?php echo esc_html( $artist['name'] ); ?></h4>
                            <p class="roster-genre"><?php echo esc_html( $artist['genre'] ); ?></p>
                            <p class="artist-stat"><span class="material-symbols-rounded">trending_up</span><?php echo esc_html( $artist['stat'] ); ?></p>
                        </div>
                        <span class="roster-play"><span class="material-symbols-rounded">play_arrow</span></span>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
