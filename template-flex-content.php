<?php
/**
 * Template Name: Flex Content
 *
 * The template for displaying pages with ACF components.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package US Law Institute
 */

get_header(); ?>

<div class="content-area">
	<main id="main" class="site-main">
	<?php usls_ins_display_content_blocks(); ?>
	</main><!-- #main -->
</div><!-- .primary -->
<?php get_footer(); ?>
