<?php
/**
 * The template for displaying all single posts
 * 
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * 
 * @link https://developer.wordpress.org/themes/basic/template-hierarchy/#single-post
 * 
 * @package bootstrap2wordpress
 * @since 2.0
 */

    get_header();
    get_template_part('template-parts/banner', 'title'); 
?>

<div class="content-area">
      <div class="container">
        <div class="row">
            <?php
                // are there any posts in the DB?
                if ( have_posts() ) {
                    while( have_posts() ) {
                        the_post();

                        if( has_post_thumbnail() ) {
                            the_post_thumbnail(
                                'large',
                                array(
                                    'class' =>  'img-fluid'
                                )
                            );
                        }
            ?>
            <div class="col-md-8 offset-md-2 overflow-hidden">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php 
                    the_content();
                ?>
            </article>
        </div>
            <?php
                    }
                } else {
                    get_template_part( 'template-parts/content', 'none' );
                }
            ?>

        </div>
      </div>
    </div>

    <?php
    get_footer();