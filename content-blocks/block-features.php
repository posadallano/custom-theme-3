<?php
/**
 * The template used for displaying a Features block.
 *
 * @package US Law Shield
 */

// Set up fields.
$title_h2 = get_sub_field( 'title_h2' );
$text_align_h2 = get_sub_field( 'text_align_h2' );
$title_h3 = get_sub_field( 'title_h3' );
$text_align_h3 = get_sub_field( 'text_align_h3' );
$main_paragraph = get_sub_field( 'main_paragraph' );

// Start a <container> with possible block options.
usls_ins_display_block_options(
	array(
		'container' => 'section', // Any HTML5 container: section, div, etc...
		'class'     => 'content-block row features', // Container class.
	)
);
?>

<div class="cont-features">
	<div class="cont-title">
		<?php if ($title_h2): ?>
			<h2 class="<?php if ($text_align_h2) { echo "align-" . $text_align_h2['value']; } ?>"> <?php echo esc_html( $title_h2 ); ?> </h2>	
		<?php endif ?>
		<?php if ($title_h3): ?>
			<h3 class="<?php if ($text_align_h3) { echo "align-" . $text_align_h3['value']; } ?>"> <?php echo esc_html( $title_h3 ); ?> </h3>	
		<?php endif ?>
	</div>
	
	<?php if ($main_paragraph): ?>
		<div class="paragraph">
			<?php echo $main_paragraph; ?>
		</div>
	<?php endif ?>
	
	<div class="features-list">
		
		<?php
		if( have_rows('features') ):
		    while ( have_rows('features') ) : the_row();
				// sub_fields
				$image = get_sub_field('image');
				$title = get_sub_field('title');
				$subtitle = get_sub_field('subtitle');
				$paragraph = get_sub_field('paragraph');
			    ?>
		    	
		    	<div class="feature row">
		    		<?php if ($image): ?>  
			    		<div class="feature-image">
			    			<img src="<?php echo $image; ?>">
			    		</div>	
		    		<?php endif; ?>	
		    		<?php if ( ($title) || ($subtitle) || ($paragraph) ): ?>  
			    		<div class="feature-text">
			    			<?php if ($title): ?>  
			    				<h3> <?php echo $title; ?> </h3>
			    			<?php endif; ?>	
			    			<?php if ($subtitle): ?>  
			    				<h4> <?php echo $subtitle; ?> </h4>
			    			<?php endif; ?>	
			    			<?php if ($paragraph): ?>  
			    				<div class="description"> <?php echo $paragraph; ?> </div> 
			    			<?php endif; ?>	
			    		</div>
		    		<?php endif; ?>	
		    		
					<?php 
					if( have_rows('list_block') ): ?>
						<div class="list-block">
						<?php 
					    while ( have_rows('list_block') ) : the_row();
					        if( get_row_layout() == 'list' ): ?>
					        <?php if ( get_sub_field('list_title') ) { ?>
					        	<h3> <?php the_sub_field('list_title'); ?> </h3>
					        <?php } ?>
					        <?php if ( get_sub_field('list_content') ) { ?>
					        	<div class="content"> <?php the_sub_field('list_content'); ?> </div>
					        <?php }
					        endif;
					    endwhile; ?>
						</div>
					<?php endif; ?>
		    	</div>
		    <?php 
		    endwhile;
		endif;
		?>
	</div>

</div>
</section><!-- .generic-content -->