<?php
/**
 * The main template file.
 * 
 * Set up to receive taxonomy qeuries and display the results.
 *
 * @package SallySweets
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

    <div id="main">
    
        <?php 
            // GET THE CATEGORY INFO AND DISPLAY AS PAGE HEADING
            // Get the current URL path without the base URL
            $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

            // Given the structure is always '/event-type/{category-slug}/'
            // Explode the path into segments
            $segments = explode('/', trim($path, '/'));

            // Look for the 'event-type' segment and get the next segment as the category slug
            $key = array_search('event-type', $segments);
            if ($key !== false && isset($segments[$key + 1])) {
                $category_slug = $segments[$key + 1];

                // Get the term by its slug and taxonomy
                $term = get_term_by('slug', $category_slug, 'event-type');
                if ($term) {
                    $category_name = $term->name;
                    
                    echo '<div class="wp-block-group"><h2>Event type > ' . esc_html( $category_name ) . '</div></h2>';
                } else {
                    echo 'Category not found.';
                }
            } else {
                echo 'No category specified.';
            } 
        ?>
        
        <?php //start the loop	
            if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <div class="post-content">
                    
                    <article class="event">            
                        <h3 class="event_title"><?php the_title(); ?></h2>
                        <p class="event_date"><strong><?php the_field('event_date'); ?></strong></p>
                        <p class="event_time"><strong><?php the_field('start_time'); ?> - <?php the_field('end_time'); ?></strong></p>
                        <p class="event_desc"><?php the_field('description'); ?></p>
                        
                        <?php $taxonomies = the_taxonomies('before=<ul><li>&after=</li></ul>&sep=</li><li>'); ?>
                    </article>

                </div>

            <?php endwhile; //end the loop
            ?>
        
        <?php else : ?>
            <h2>No posts matching this criteria</h2>
        <?php endif; ?>

    </div><!-- main -->

<?php get_sidebar(); ?>

<?php get_footer(); ?> 
