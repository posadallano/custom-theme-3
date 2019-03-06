<?php
/**
 * Template Name: Home
 *
 * The template for Home page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package US Law Institute
 */

get_header('home'); ?>

<div class="content-area">
	<main id="main" class="site-main home">
		
		<div class="cont-home">
			<div class="menu-extra-wraper">
				<nav id="extra-site-navigation" class="extra-navigation">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'extra',
							'menu_id'        => 'extra-menu',
							'menu_class'     => 'menu',
						) );
					?>
				</nav>
			</div>
			<div class="social-wrapper">
				<?php usls_ins_display_social_network_links(); ?>
			</div>				
			<div id="slide-hm" class="slide-home">
				
				<?php
				if( have_rows('slider') ):
					while ( have_rows('slider') ) : the_row();
					// sub_fields
					$background_image = get_sub_field('background_image');
					$red_box = get_sub_field('red_box');
					$bar_text = get_sub_field('bar_text');
					$button_text = get_sub_field('button_text');
					$button_url = get_sub_field('button_url');
					$logo = get_sub_field('logo');
					?>
						
					<div class="back-slider" style="background-image: url('<?php echo $background_image; ?>' );">
						<div class="content-slider">
							<div class="cont-content">
								<?php if ($red_box) { ?> 
									<div class="redbox">
										<img src="<?php echo $red_box; ?>">
										</div>
								<?php } ?>
								<?php if ( $button_url ) : ?>
									<div class="cont-btn-slide">
										<button type="button" class="transition button-slide" onclick="location.href='<?php echo esc_url( $button_url ); ?>'"><?php echo esc_html( $button_text ); ?></button>
									</div>
								<?php endif; ?>
								
								<?php if ($logo) { ?> 
									<div class="cont-logo">
										<img src="<?php echo $logo; ?>">
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
						
					<?php 
					endwhile;
				endif;
				?>
			</div>
			<div id="btns-hm" class="buttons-cta">
				<?php 
				$online_courses = get_pages( array( 'parent' => 2, 'sort_column' => 'post_date','sort_order' => 'ASC' ) );
				foreach( $online_courses as $page ) { ?>
					<?php 
						$button_rest_state = get_field( 'button_rest_state', $page->ID ); 
						$button_hover_state = get_field( 'button_hover_state', $page->ID ); 
						$back_btn = get_field( 'background_image', $page->ID ); 
					?>
						<a class="btn-cta oc-link" id="btn-home" style="background-image: url('<?php echo $back_btn ?>');" rel="<?php echo $page->ID; ?>" href="<?php echo get_permalink( $page->ID ); ?>">
							<img class="rest" src="<?php echo $button_rest_state; ?>">
							<img class="hover" src="<?php echo $button_hover_state; ?>">
						</a>
				<?php } ?> 
			</div>
		</div>
	</main><!-- #main -->
	<div id="single-oc-container">
		
	</div>
	<div class="contgif">
		<img id="gif" style="display:none;" src="<?php echo get_template_directory_uri() . '/assets/images/loading-ui.gif'; 
	?>">
	</div>
</div><!-- .primary -->
<?php get_footer(); ?>