<?php
/**
 * SallySweets events page.
 *
 * Used to display the events page and associated events.
 *
 * @package SallySweets
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<main id="main">

    <section id="events-page-content">
        
        <?php //start the loop	
                while ( have_posts() ) : the_post();
            ?>

                <!-- INSERT HERO IMAGE -->
                <?php 
                    if ( has_post_thumbnail() ) { 
                ?>
                        
                    <div id="page-hero-image">
                    
                        <?php 
                        the_post_thumbnail('full', ['class' => 'featured-image']); // Display the featured image with the 'full' size and add a class for potential styling.
                        ?>                 
                    
                    </div>

                <?php 
                    } // End if statement
                ?>

                <!-- INSERT PAGE CONTENT -->
                <div class="page-content">
                    <h2 id="page-content-heading"><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                </div>

            <?php endwhile; //end the loop 
        ?>

    </section>

    <section id="events-page-events">
        
        <h2 class="wp-block-heading">Upcoming events</h2>
        
        <?php $items = new WP_Query( array( 'post_type' => 'event' ) );
        
        while ( $items -> have_posts() ) : $items -> the_post(); ?> 
                
            <article class="event">            
                <h3 class="event_title"><?php the_title(); ?></h2>
                <p class="event_date"><strong><?php the_field('event_date'); ?></strong></p>
                <p class="event_time"><strong><?php the_field('start_time'); ?> - <?php the_field('end_time'); ?></strong></p>
                <p class="event_desc"><?php the_field('description'); ?></p>
                
                <?php $taxonomies = the_taxonomies('before=<ul><li>&after=</li></ul>&sep=</li><li>'); ?>
            </article>
            
        <?php endwhile; ?>

    </section>

</main><!-- #main -->

<?php get_footer(); ?>
