<?php
/**
 * The template used for displaying a CTA Books block.
 *
 * @package US Law Shield
 */

// Set up fields.
$title_h2 = get_sub_field( 'title_h2' );
$text_align_h2 = get_sub_field( 'text_align_h2' );
$title_h3 = get_sub_field( 'title_h3' );
$text_align_h3 = get_sub_field( 'text_align_h3' );
$paragraph = get_sub_field( 'paragraph' );
$button_text = get_sub_field( 'button_text' );
$button_url = get_sub_field( 'button_url' );
$quote = get_sub_field( 'quote' );
$quote_author = get_sub_field( 'quote_author' );
$mobile_image = get_sub_field( 'mobile_image' );

// Start a <container> with possible block options.
usls_ins_display_block_options(
	array(
		'container' => 'section', // Any HTML5 container: section, div, etc...
		'class'     => 'content-block row cta-books', // Container class.
	)
);
?>
<?php if ($mobile_image) : ?>
	<div class="mobile-image">
		<img src="<?php echo $mobile_image; ?>">
	</div>
<?php endif ?>
<?php if (($title_h2) || ($title_h3) || ($paragraph) || ($button_url) || ($quote)) : ?>
	<div class="cont-cta-books">
		<?php if (($title_h2) || ($title_h3)) : ?>
			<div class="cont-title">
				<?php if ($title_h2): ?>
					<h2 data-aos="fade-up" data-aos-delay="0" class="aos-item <?php if ($text_align_h2) { echo "align-" . $text_align_h2['value']; } ?>"> <?php echo esc_html( $title_h2 ); ?> </h2>	
				<?php endif ?>
				<?php if ($title_h3): ?>
					<h3 data-aos="fade-up" data-aos-delay="200" class="aos-item <?php if ($text_align_h3) { echo "align-" . $text_align_h3['value']; } ?>"> <?php echo esc_html( $title_h3 ); ?> </h3>	
				<?php endif ?>
			</div>
		<?php endif ?>

		<?php if (($paragraph) || ($button_url) || ($quote)): ?>
			<div class="content-bookscta">
				<?php if ($paragraph): ?>
					<div data-aos="fade-up" data-aos-delay="400" class="paragraph aos-item">
							<?php echo $paragraph; ?> 
					</div>
				<?php endif ?>
				
				<?php if ( $button_url ) : ?>
					<div class="cont-btn">
						<button data-aos="fade" data-aos-delay="700" type="button" class="aos-item transition button-usls" onclick="location.href='<?php echo esc_url( $button_url ); ?>'"><?php echo esc_html( $button_text ); ?></button>
					</div>
				<?php endif; ?>

				<?php if ($quote): ?>
					<div data-aos="fade" data-aos-delay="100" class="quote aos-item">
						<?php echo $quote; ?> 
					</div>
					<?php if ($quote_author): ?>
						<div data-aos="fade" data-aos-delay="200" class="quote_author aos-item">
							<?php echo $quote_author; ?> 
						</div>
					<?php endif ?>
				<?php endif ?>
			</div>
		<?php endif; ?>
	</div>
<?php endif; ?>
</section><!-- .generic-content -->