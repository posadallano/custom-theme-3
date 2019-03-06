<?php
/**
 * The template used for displaying a Chapter block.
 *
 * @package US Law Shield
 */

// Set up fields.
$title_h2 = get_sub_field( 'title_h2' );
$text_align_h2 = get_sub_field( 'text_align_h2' );
$title_h3 = get_sub_field( 'title_h3' );
$text_align_h3 = get_sub_field( 'text_align_h3' );
$paragraph = get_sub_field( 'paragraph' );

// Start a <container> with possible block options.
usls_ins_display_block_options(
	array(
		'container' => 'section', // Any HTML5 container: section, div, etc...
		'class'     => 'content-block row chapters', // Container class.
	)
);
?>

<div class="cont-chapter">
	<div class="cont-title">
		<?php if ($title_h2): ?>
			<h2 class="aos-item <?php if ($text_align_h2) { echo "align-" . $text_align_h2['value']; } ?>" data-aos="fade-up" data-aos-delay="100"> <?php echo esc_html( $title_h2 ); ?> </h2>	
		<?php endif ?>
		<?php if ($title_h3): ?>
			<h3 class="aos-item <?php if ($text_align_h3) { echo "align-" . $text_align_h3['value']; } ?>" data-aos="fade-up" data-aos-delay="300"> <?php echo esc_html( $title_h3 ); ?> </h3>	
		<?php endif ?>
	</div>
	
	<div class="chapter-list">
		
		<?php
		if( have_rows('chapter') ):
			$i = 0;
			$delay_aos = 100;
		    while ( have_rows('chapter') ) : the_row();
				// sub_fields
				$background_image = get_sub_field('background_image');
				$title = get_sub_field('title');
				$subtitle = get_sub_field('subtitle');
				$number = get_sub_field('number');
				$title_chapter = get_sub_field('title_chapter');
				$lightbox_image = get_sub_field('lightbox_image');
				$pdf_file = get_sub_field('pdf_file');
			    ?>
		    	
		    	<div class="chapter row aos-item" data-fancybox="chapter" data-src="#hidden-content-<?php echo $i; ?>" data-aos="fade-up" data-aos-delay="<?php echo $delay_aos; ?>" href="javascript:;">
		    		<div class="leftside">
		    			<?php if ($number): ?>  
		    				<div class="number"> <?php echo $number; ?> </div> 
		    			<?php endif; ?>	
		    			<?php if ($title_chapter): ?>  
		    				<div class="title-chapter"> <?php echo $title_chapter; ?> </div>
		    			<?php endif; ?>	
		    		</div>
					<?php if ($background_image): ?>  
						<div class="chapt-container">
				    		<div class="chapter-image" style="background-image: url('<?php echo $background_image; ?>');">
								<div class="overlay">
									<div class="title">
								    	<?php if ($title): ?>  
						    				<h3> <?php echo $title; ?> </h3>
						    			<?php endif; ?>	
						    			<?php if ($subtitle): ?>  
						    				<h4> <?php echo $subtitle; ?> </h4>
						    			<?php endif; ?>	
					    			</div>
							  	</div>				    			
			    		</div>
			    		</div>	
		    		<?php endif; ?>
		    		<div class="hide-chapter" id="hidden-content-<?php echo $i; ?>"> 
		    			<img src="<?php echo $lightbox_image; ?>">
						<div class="cont-btn">
							<button type="button" class="transition button-usls" onclick="window.open('<?php echo esc_url( $pdf_file ); ?>','_blank')"> DOWNLOAD </button>
						</div>
		    		</div>	
		    	</div>
		    <?php 
		    $i ++; 
		    $delay_aos = $delay_aos + 400;
		    endwhile;
		endif;
		?>
	</div>

</div>
</section><!-- .generic-content -->