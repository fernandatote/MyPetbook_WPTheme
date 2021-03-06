<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mypetbook
 */
get_header();
?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
        <?php
        while ( have_posts() ) :
                         
            the_post();
                        
            get_template_part( 'template-parts/content', 'article' );
            // If comments are open or we have at least one comment, load up the comment template.
            
        endwhile; // End of the loop.
        ?>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php
get_sidebar();
get_footer();