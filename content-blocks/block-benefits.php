<?php
/**
 * The template used for displaying a Benefits block.
 *
 * @package US Law Shield
 */

// Set up fields.
$title_h2 = get_sub_field( 'title_h2' );
$text_align_h2 = get_sub_field( 'text_align_h2' );
$title_color_h2 = get_sub_field( 'title_color_h2' );
$title_h3 = get_sub_field( 'title_h3' );
$text_align_h3 = get_sub_field( 'text_align_h3' );
$title_color_h3 = get_sub_field( 'title_color_h3' );
$paragraph = get_sub_field( 'paragraph' );

// Start a <container> with possible block options.
usls_ins_display_block_options(
	array(
		'container' => 'section', // Any HTML5 container: section, div, etc...
		'class'     => 'content-block row benefits', // Container class.
	)
);
?>

<div class="cont-benefits">
	<div class="cont-title">
		<?php if ($title_h2): ?>
			<h2 class="aos-item <?php if ($text_align_h2) { echo "align-" . $text_align_h2['value']; } ?>" data-aos="fade-up" data-aos-delay="100" style="color: <?php echo $title_color_h2; ?>;"> <?php echo esc_html( $title_h2 ); ?> </h2>	
		<?php endif ?>
		<?php if ($title_h3): ?>
			<h3 class="aos-item <?php if ($text_align_h3) { echo "align-" . $text_align_h3['value']; } ?>" data-aos="fade-up" data-aos-delay="300" style="color: <?php echo $title_color_h3; ?>;"> <?php echo esc_html( $title_h3 ); ?> </h3>	
		<?php endif ?>
	</div>
	
	<?php if ($paragraph): ?>
		<div class="paragraph aos-item" data-aos="fade-up" data-aos-delay="500">
			<?php echo $paragraph; ?>
		</div>
	<?php endif ?>
	
	<div class="benefits-list">
		
		<?php
		if( have_rows('benefits') ):
			$delay_aos = 100;
			$delay_aos_t = 400;
			$delay_aos_p = 700;
		    while ( have_rows('benefits') ) : the_row();
				// sub_fields
				$image = get_sub_field('image');
				$title = get_sub_field('title');
				$paragraph = get_sub_field('paragraph');
			    ?>
		    	
		    	<div class="benefit row aos-item" data-aos="fade-up" data-aos-delay="<?php echo $delay_aos; ?>">
		    		<?php if ($image): ?>  
			    		<div class="benefit-image col-lg-5 col-md-4 col-sm-12">
			    			<img data-aos="fade-in" class="aos-item" src="<?php echo $image; ?>">
			    		</div>	
		    		<?php endif; ?>	
		    		<?php if ( ($title) || ($paragraph) ): ?>  
			    		<div class="benefit-text col-lg-7 col-md-8 col-sm-12">
			    			<?php if ($title): ?>  
			    				<h3 data-aos="fade-up" data-aos-delay="<?php echo $delay_aos_t; ?>" class="aos-item"> <?php echo $title; ?> </h3>
			    			<?php endif; ?>	
			    			<?php if ($paragraph): ?>  
			    				<div data-aos="fade-up" data-aos-delay="<?php echo $delay_aos_p; ?>" class="description aos-item"> <?php echo $paragraph; ?> </div> 
			    			<?php endif; ?>	
			    		</div>
		    		<?php endif; ?>	
		    	</div>
	    		
		    <?php 
		    $delay_aos = $delay_aos + 700;
		    $delay_aos_t = $delay_aos_t + 300;
		    $delay_aos_p = $delay_aos_p + 400;
		    endwhile;
		endif;
		?>
	</div>

</div>
</section><!-- .generic-content -->