/**
 * Folder animation script
 *
 * @link        https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package     US Law Shield
 * @subpackage  JS
 * @author      Andres Posada
 * @link        https://github.com/posadallano
 * @since       1.0.0
 */

jQuery(document).ready(function () {

	if (jQuery(window).width() > 991) {
		jQuery.when(
		    jQuery("#slide-hm").fadeIn(1400).promise(),
		    jQuery("#logo-hm").delay(650).fadeIn("slow"),
			jQuery("#hdr-hm").show('slide', {direction: 'left'}, 1200).promise(),
			jQuery(".menu-extra-wraper, .site-main.home .social-wrapper").delay(650).fadeIn("slow").promise()
		).done(function() {
        	jQuery(".buttons-cta").fadeIn(50)
        	jQuery("#btns-hm .btn-cta:first-of-type").fadeIn(300).promise()
        	.done(function() {
        		jQuery("#btns-hm .btn-cta:nth-of-type(2)").fadeIn(300).promise()
        		.done(function() {
        			jQuery("#btns-hm .btn-cta:last-of-type").fadeIn(300).promise()
        		})
        	})		
		})
	}

});
