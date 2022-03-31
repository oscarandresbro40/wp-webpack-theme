<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage wp-webpack-theme
 */

get_header();
?>
<main role="main" class="main-template">
    <h1><?php the_title(); ?></h1>
    
    <?php
    /* Start the Loop */
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_content();
        endwhile;
    endif; // End of the loop.
    ?>

</main>
<?php
get_footer();
?>