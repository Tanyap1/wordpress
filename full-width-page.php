<?php
/*Template Name: custom full width page*/
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content/content-page' );


endwhile; // End of the loop.

get_footer();
?>

<main id="main" class="site-main full-width" role="main">
    <div class="container bg-main-container-color">
        <div class="static-page clearfix">

      <h1>Testing</h1>
        </div>