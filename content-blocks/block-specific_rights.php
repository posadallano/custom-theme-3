<?php
/**
 * The template used for displaying a Specific Right block.
 *
 * @package US Law Shield
 */

// Set up fields.
$image = get_sub_field( 'image' );
$title_h2 = get_sub_field( 'title_h2' );
$text_align_h2 = get_sub_field( 'text_align_h2' );
$title_h3 = get_sub_field( 'title_h3' );
$text_align_h3 = get_sub_field( 'text_align_h3' );
?>

<section class="specific-rights">
	<div class="sp-content">
		<?php if ($image): ?>
			<div class="image col-lg-6 col-md-6 col-sm-12">
				<img clas="newsletter-page" src="<?php echo $image; ?>">
			</div>
		<?php endif ?>
		<div class="cont-textform col-lg-6 col-md-6 col-sm-12">
			<div class="titles">
				<div class="cont-title">
					<?php if ($title_h2): ?>
						<h2 class="<?php if ($text_align_h2) { echo "align-" . $text_align_h2['value']; } ?>"> <?php echo esc_html( $title_h2 ); ?> </h2>	
					<?php endif ?>
					<?php if ($title_h3): ?>
						<h3 class="<?php if ($text_align_h3) { echo "align-" . $text_align_h3['value']; } ?>"> <?php echo esc_html( $title_h3 ); ?> </h3>	
					<?php endif ?>
				</div>
			</div>
			<div class="form">
				
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
			</div>
		</div>
		<?php while ( $query->have_posts() ) : $query->the_post(); ?>		
			<div id="post-selected-container">
				
			</div>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
    <?php endif; ?>		
	</div>
</section><!-- .generic-content -->