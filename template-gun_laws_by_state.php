<?php
/**
 * Template Name: Gun Laws by State
 *
 * The template for displaying Home page with ACF components.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package US Law Institute
 */
	get_header();

	// fields
	$background_image = get_field( 'background_image' );
	$title_h2 = get_field( 'title_h2' );
	$text_align_h2 = get_field( 'text_align_h2' );
	$title_h3 = get_field( 'title_h3' );
	$text_align_h3 = get_field( 'text_align_h3' );
	?>
	<div class="content-area gun-laws">
		<main id="main" class="site-main">
			<?php usls_ins_display_content_blocks(); ?>
				<section class="choose-state" style="background: url('<?php echo $background_image; ?>') no-repeat left center;">
					<div class="cont-title">
						<?php if ($title_h2): ?>
							<h2 class="fade <?php if ($text_align_h2) { echo "align-" . $text_align_h2['value']; } ?>"> <?php echo esc_html( $title_h2 ); ?> </h2>	
						<?php endif ?>
						<?php if ($title_h3): ?>
							<h3 class="fade <?php if ($text_align_h3) { echo "align-" . $text_align_h3['value']; } ?>"> <?php echo esc_html( $title_h3 ); ?> </h3>	
						<?php endif ?>
					</div>
					<?php 
						$args = array('post_type' => 'gun_laws_states', 'posts_per_page' => -1, 'orderby' => 'title', 'post_status' => 'publish', 'order' => 'ASC'); 
						$query = new WP_Query( $args );  							
							
						if ( $query->have_posts() ) :  
							$i = 1; ?>
							<form>
								<div class="select-wrapper">
									<select id="dropdown-states" name="dropdown">
										<option value="0">Choose Your State</option>
									<?php while ( $query->have_posts() ) : $query->the_post(); ?>
										<?php $state_abr = get_field("state_abbreviation"); ?>
										<option value="<?php the_ID(); ?>"> <?php the_title(); ?> </option>
										<?php $i = $i + 1; ?>
									<?php endwhile; ?>
									<?php wp_reset_postdata(); ?>
									</select>
								</div>
							</form>		
				</section>
							<?php while ( $query->have_posts() ) : $query->the_post(); ?>		
								<div id="post-selected-container">
									
								</div>
							<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
			        <?php endif; ?>
		</main>
	</div>

<?php get_footer(); ?>