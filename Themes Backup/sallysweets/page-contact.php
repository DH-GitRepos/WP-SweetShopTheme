<?php
/**
 * SallySweets contact page.
 *
 * Used to display the contact page.
 *
 * @package SallySweets
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<main id="main">

    <section id="contact-page-content">
        
        <?php // start the loop	
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

            <?php endwhile; // end the loop 
        ?>

    </section>

</main><!-- #main -->

<?php get_footer(); ?>  
