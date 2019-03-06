<?php
/**
 * The template used for displaying a Buy Books block.
 *
 * @package US Law Shield
 */

// Set up fields.
$title_h2 = get_sub_field( 'title_h2' );
$text_align_h2 = get_sub_field( 'text_align_h2' );
$title_h3 = get_sub_field( 'title_h3' );
$text_align_h3 = get_sub_field( 'text_align_h3' );

// Start a <container> with possible block options.
usls_ins_display_block_options(
	array(
		'container' => 'section', // Any HTML5 container: section, div, etc...
		'class'     => 'content-block row buy-courses', // Container class.
	)
);
?>

<div class="cont-buy-courses">
	<div class="cont-title">
		<?php if ($title_h2): ?>
			<h2 class="<?php if ($text_align_h2) { echo "align-" . $text_align_h2['value']; } ?>"> <?php echo( $title_h2 ); ?> </h2>	
		<?php endif ?>
		<?php if ($title_h3): ?>
			<h3 class="<?php if ($text_align_h3) { echo "align-" . $text_align_h3['value']; } ?>"> <?php echo( $title_h3 ); ?> </h3>	
		<?php endif ?>
	</div>

			
	<div class="courses-to-buy">	
		<?php if ( $products = get_sub_field('courses') ): ?>
			<?php foreach( $products as $p ): ?>
				<?php $product = new WC_Product($p->ID); ?>
				<div class="course">
					<div class="product-col col-lg-6 col-md-6 col-sm-12">
						<a href="<?php the_permalink( $p->ID ); ?>" title="<?php the_title_attribute( array( 'post' => $p->ID ) ); ?>" >
							<?php 
							$attachment_ids = $product->get_gallery_attachment_ids();
							if ( $attachment_ids ) : 
								foreach( $attachment_ids as $attachment_id ) {
								    echo wp_get_attachment_image($attachment_id, 'full');
								}
							endif; ?>
							<span class="course-title"><h3><?php echo get_the_title( $p->ID ); ?></h3></span>
							<span class="course-price">
								<?php echo "$" . ($product->price); ?>
							</span>
						</a>
					</div>
					<div class="features-col col-lg-6 col-md-6 col-sm-12">
						<div class="feature-course">
							<?php the_field('features', $p->ID); ?>
						</div>
						<div class="cont-btn">
							<?php $slug_prod = $product->slug; ?>
							<button type="button" class="transition button-usls" onclick="location.href='<?php echo "product/" . ($product->slug);?>'"> BUY THE COURSE </button>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		<?php endif; ?>
	</div>

</div>
</section><!-- .generic-content -->