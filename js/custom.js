/**
 * Custom JavaScript
 *
 * @link        https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package     US Law Shield
 * @subpackage  JS
 * @author      Andres Posada
 * @link        https://github.com/posadallano
 * @since       1.0.0
 */

// Fade in on scroll
jQuery(window).on("load",function() {
  jQuery(window).scroll(function() {
    var windowBottom = jQuery(this).scrollTop() + jQuery(this).innerHeight();
    jQuery(".fade").each(function(i, element) {
        var objectBottom = jQuery(this).offset().top + jQuery(this).outerHeight();
        if (objectBottom < windowBottom) {
            if (jQuery(this).css('opacity')==0) {
                    jQuery(this).animate({
                        opacity: 1,
                        top: 0
                }, 700, function() {
                    // Animation complete.
                });
            }
        } else { 
            if (jQuery(this).css('opacity')==1) {
                jQuery(this).animate({
                    opacity: 0,
                    top: "20px"
                }, 700, function() {
                    // Animation complete.
                });
            }
        }
    });
  }).scroll(); 
});


// Hover buttons Home
function hoverButtonsHm () {
	jQuery("#btns-hm .btn-cta").show();
	jQuery(".btn-cta img").each(function(i, elem) {
		var img = jQuery(elem);
		var div = jQuery("<div />").css({
		background: "url(" + img.attr("src") + ") no-repeat"
		});
		img.replaceWith(div);
	});
}

jQuery(window).load(function() {
	hoverButtonsHm();
	if (jQuery(window).width() > 991) {
		setTimeout(function(){
			jQuery("#btns-hm .btn-cta").hide();
		}, 1);
	}

	// Add height to Chapter image
	function heightChapter () {
		var height_chap = jQuery('.chapters .chapter .leftside').outerHeight();
		jQuery('.chapters .chapter .chapter-image').css("height", height_chap);
	}
  heightChapter();

	// Certifications vertically center image
	function HeightCert () {
		var height_cert = jQuery('.cont-cert-v1 .cont-image').outerHeight();
		var middle_height = height_cert / 2;
		var neg_marg = Math.abs(middle_height) * -1
		jQuery(".cont-cert-v1 .cont-image").css("margin-top", neg_marg);
		var height_cc = jQuery('.cont-cert-v1').outerHeight();
		jQuery(".cont-cert-v1 .gradient").css("height", height_cc);
	}
	HeightCert();

	// Product image detail pages
	function heightProductImg () {
		var hgt_prodimg = jQuery('.single-product .product .images img').outerHeight();
		var mid_hgt = hgt_prodimg / 2;
		var neg_hgt = Math.abs(mid_hgt) * -1;
		jQuery(".single-product .product .images img").css("margin-top", neg_hgt);
		var wdt_prodimg = jQuery('.single-product .product .images img').outerWidth();
		var mid_wdt = wdt_prodimg / 2;
		var neg_wdt = Math.abs(mid_wdt) * -1;
		jQuery(".single-product .product .images img").css("margin-left", neg_wdt);
	}
	heightProductImg();	

	// Turn Cart images into background-image
	jQuery(".woocommerce table.cart img").each(function(i, elem) {
		var img = jQuery(elem);
		var width_i = jQuery(this).closest(".product-thumbnail").outerWidth(); 
		var height_i = jQuery(this).closest(".product-thumbnail").outerHeight(); 
		var div = jQuery("<div />").css({
		background: "url(" + img.attr("src") + ") no-repeat",
		width: width_i,
		height: height_i
		});
		img.replaceWith(div);
	});	
});


jQuery(document).ready(function () {
	// Menu Toggle
	jQuery('#nav-icon').click(function () {
		jQuery(this).toggleClass('open');
		jQuery("#extra-site-navigation").slideToggle('400');
		jQuery("#header-site-navigation").slideToggle('400');
		jQuery("#header-site-nav-int").slideToggle('400');
		jQuery(".site-header").toggleClass('hdopn');
	});

	// Fix bug in Fancy Box on mobile version
	function fancyMobileFix () {
		if (jQuery(window).width() < 991) {
			jQuery(".chapters .chapter-list .chapter").click(function(){
				jQuery('body').removeClass("fancybox-iosfix");
			});	
		}
	}

	if (jQuery(window).width() < 767) {
		// Move Menu extra on mobile to top
		jQuery( ".menu-header-wrapper" ).before( jQuery( ".menu-extra-wraper" ) );
		jQuery( ".cont-menu-header-int" ).before( jQuery( ".cont-extra-social" ) );
		jQuery( ".logo-wrapper" ).after( jQuery( ".social-wrapper" ) );	
	}

	if ( (jQuery(window).width() > 767) && (jQuery(window).width() < 992) ) {
		jQuery( "#nav-icon" ).after( jQuery( ".site-header.internal .cont-extra-social" ) );	
	}


	// Hero title
	if ( jQuery(".hero .cont-title")[0] ) {
		jQuery(".hero").css("padding", "12.1% 6.15% 7% 17.3%");
	}

	// Home buttons scroll to the content
	function scrolltoContent () {
		jQuery("html, body").animate({ scrollTop: jQuery('#single-oc-container').offset().top }, 'slow');
	}

	// Dropdown Gun Law scroll to content
	function scrolltoContentGL () {
		jQuery("html, body").animate({ scrollTop: jQuery('#post-selected-container').offset().top }, 'slow');
	}	

	// Add height to Chapter image
	function heightChapter () {
		var height_chap = jQuery('.chapters .chapter .leftside').outerHeight();
		jQuery('.chapters .chapter .chapter-image').css("height", height_chap);
	}
	heightChapter();
    
	// Add shadow to Certification img
	function certifImg () {
		var heightCont = jQuery(".cont-cert-v1").outerHeight();
		heightCont = (heightCont * 0.85);
		var widthImg = jQuery(".cont-cert-v1 .cont-image img").outerWidth(); 
		widthImg = (widthImg * 0.75);
		jQuery(".shdw").width(widthImg).height(heightCont);
	}
	certifImg();

	// Certifications vertically center image
	function HeightCert () {
		var height_cert = jQuery('.cont-cert-v1 .cont-image').outerHeight();
		var middle_height = height_cert / 2;
		var neg_marg = Math.abs(middle_height) * -1
		jQuery(".cont-cert-v1 .cont-image").css("margin-top", neg_marg);
		var height_cc = jQuery('.cont-cert-v1').outerHeight();
		jQuery(".cont-cert-v1 .gradient").css("height", height_cc);
	}
	HeightCert();	    

	// Margin Bottom CTA Books
	function margintopCtaBooks () {
		if (jQuery(".cont-cta-books .cont-title h3")[0]){
			jQuery('.cont-cta-books').css("padding-top", "5.525%");
		}
	}
	margintopCtaBooks();

	// Hero Parallax
	function simpleParallax() {
	    var scrolled = jQuery(window).scrollTop() + 1;
	    jQuery('.scroll').css('background-position', '0' + -(scrolled * 0.2) + 'px');
	}

	// Remove href tag for 3rd button
	jQuery(".buttons-cta .btn-cta:last-of-type").removeAttr("href").removeClass("oc-link");
	
	// Accordion Home
	jQuery(".menu-header-wrapper #header-menu li.menu-item-has-children > a").click(function(e){
		e.preventDefault();
			jQuery(this).parent().toggleClass('active');
			jQuery(this).parent().siblings().removeClass('active');
			if(false == jQuery(this).next().is(':visible')) {
					jQuery('.menu-header-wrapper #header-menu li > ul').slideUp(300);
			}
			jQuery(this).next().slideToggle(300);
	});

	// Accordion Menu Mobile
	if (jQuery(window).width() < 767) {
		jQuery(".cont-menu-header-int #header-site-nav-int li.menu-item-has-children > a").click(function(e){
			e.preventDefault();
				jQuery(this).parent().toggleClass('active');
				jQuery(this).parent().siblings().removeClass('active');
				if(false == jQuery(this).next().is(':visible')) {
						jQuery('.cont-menu-header-int #header-site-nav-int li > ul').slideUp(300);
				}
				jQuery(this).next().slideToggle(300);
		});
	}

	// Add quotation marks to Testimonials
	function quotationMarks () {
		jQuery( 'h3.quote' ).prepend( '<span>"</span>' );
		jQuery( 'h3.quote' ).append( '<span>"</span>' );
	}
	quotationMarks();

	jQuery(".site-header.home .cont-menus li a").click(function(){
	    var height_menu = jQuery('.menu-header-wrapper').outerHeight();
	});    

	// Accordion Function
	function accordionFunction () {
		jQuery(".cont-accordion .acc-content").show();
		jQuery(".cont-accordion .acc-bloc:first-of-type").find(".label-ac").toggleClass("current").next(".acc-content").slideToggle("fast");
		setTimeout("jQuery('.cont-accordion .acc-content').slideToggle('fast');", 1);
		jQuery(".cont-accordion .label-ac").click(function() {
			jQuery(this).next(".acc-content").slideToggle("fast").siblings(".acc-content:visible").slideUp("fast");
			jQuery(this).toggleClass("current");
			jQuery(this).siblings(".label-ac").removeClass("current");
		});
	};
	accordionFunction();

  // Slider Home
	jQuery('.slide-home').slick({
		infinite: false,
		speed: 1200,
		slidesToShow: 1,
		slidesToScroll: 1,
		fade: true,
		prevArrow: "<div class='arrow left'> <i class='transition fa fa-chevron-left fa-lg' aria-hidden='true'></i> </div>",
		nextArrow: "<div class='arrow right'> <i class='transition fa fa-chevron-right fa-lg' aria-hidden='true'></i> </div>",
		arrows: true,
	});
	
	// Testimonial Home
	function sliderTestimonials () {
		jQuery('.testimonials-list').slick({
			infinite: true,
			speed: 300,
			slidesToShow: 1,
			slidesToScroll: 1,
			prevArrow: "<div class='arrow left'> </div>",
			nextArrow: "<div class='arrow right'> </div>",
			arrows: true,
		});
	}

	// Fancybox
	function fancy_lightbox () {
		if (jQuery('section').hasClass('chapters')) {
			jQuery('[data-fancybox="chapter"]').fancybox({
			  transitionEffect : "zoom-in-out",
	  		  buttons : false,
	  		  infobar : false,
	  		  padding: 0,
			  helpers: {
			    overlay: {
			      locked: false
			    }
			  }
			});
		}
	}
	fancy_lightbox();

	// Get Background Image Size
	jQuery.fn.getBgImage = function(callback) {
		var height = 0;
		var path = jQuery(this).css('background-image').replace('url', '').replace('(', '').replace(')', '').replace('"', '').replace('"', '');
		var tempImg = jQuery('<img />');
		tempImg.hide();
		tempImg.bind('load', callback);
		jQuery('body').append(tempImg); 
		tempImg.attr('src', path);
		jQuery('#tempImg').remove(); 
	};

	function sizeCta () {
		jQuery('.cta-text.image-as-background').each(function(){
			var $this = jQuery(this);
			jQuery(this).getBgImage(function() {
				var backHeight = jQuery(this).height();
				var backWidth = jQuery(this).width();
				var divBackg = backHeight / backWidth;
		        var ratioBackg = (divBackg * 100) + '%';
		        jQuery($this).css('padding-bottom', ratioBackg);
			});
		});
	}

	if ( (!jQuery('body').hasClass("page-id-2")) && (!jQuery('body').hasClass("page-id-575")) ) {
		sizeCta();
	}

	// Change Margin Top in bottom title
	function btmTitle () {
		if (jQuery(".testimonials")[0]){
			if(jQuery('.top-title').length === 0){
				jQuery('.btm-title').css("margin-top", "1.017em");
			}
		}
	}
	btmTitle();

	// Insert Gun Law States after Specific Rights block 
	function insertAfterSR () {
		jQuery('.page-template-template-home #post-selected-container').each(function(){
			jQuery( ".page-template-template-home .specific-rights" ).after( jQuery( this ) );
		});
	}

	// Set state to Pardot Form - State Persistence
	function pardotState (){
		if (Cookies.get('_sp_slug')) {
			var slugPost = Cookies.get('_sp_slug');
			jQuery(".pardot-uslsi > option").each(function() {
				var state_id = jQuery(this).attr("id");
				var state_value = jQuery(this).val();
				if (state_id == slugPost) {
					jQuery(".pardot-uslsi").val(state_value);
				}
			})
		}
		else {
			jQuery('.pardot-uslsi').on('change', function (e) {
			    var optionSelected = jQuery("option", this);
			    var valueSelected = this.value;
			    console.log(valueSelected);
			});			
		}
	}
	pardotState();

	// AJAX
	// Select filter Gun Laws by State
	function changeStates (){
		if (Cookies.get('_sp_slug')) {
			var idPost = Cookies.get('_sp_id');
			var slugPost = Cookies.get('_sp_slug');
			jQuery.ajax({
				url: ajaxurl,
				type: 'post',
				data: 'action=change_post_gunlaw&id=' + idPost,
				success: function(output){
					jQuery('section.choose-state').hide();
					jQuery('section.specific-rights').hide();
					jQuery('#post-selected-container').html(output);
					jQuery('.choose-state').css("padding-bottom", "5%");
					sizeCta();
					sliderTestimonials();
					quotationMarks();
					heightChapter();
					fancy_lightbox();
					accordionFunction();
					certifImg();
					scrolltoContentGL();
					pardotState();
					setTimeout(function () {
			            HeightCert();
			        } , 500);
				}
			});
		}
		else {
			jQuery('#dropdown-states').change(function(){
				jQuery.ajax({
					url: ajaxurl,
					type: 'post',
					data: 'action=change_post_gunlaw&id=' + this.value,
					success: function(output){
						jQuery('section.choose-state').hide();
						jQuery('#post-selected-container').html(output);
						jQuery('.choose-state').css("padding-bottom", "5%");
						sizeCta();
						sliderTestimonials();
						quotationMarks();
						heightChapter();
						fancy_lightbox();
						accordionFunction();
						certifImg();
						scrolltoContentGL();
						pardotState();
						setTimeout(function () {
				            HeightCert();
				        } , 500);
					}
				});
			});
		}
	};	
	changeStates();

	(function($){
		$(".oc-link").click(function(){
			$('#gif').show();
			$('.page-template-template-home footer').css("margin-top", "12em");
			$(".buttons-cta .btn-cta").removeClass("active");
    		$(this).addClass("active");
			$('#single-oc-container').hide();
			var idpage = $(this).attr("rel");
			var idp = "page-" + idpage;
			$.ajax({
				url: ajaxurl,
				type: 'post',
				data: 'action=change_post&id=' + $(this).attr("href"),
				success: function(output) {
					$('#gif').hide();
					$('#single-oc-container').show();
					$('#single-oc-container').html(output);
					$('.page-template-template-home footer').css("margin-top", "0");
					$('#single-oc-container').css("margin-top", "6px");
					$('body').attr('id', idp);
					sizeCta();
					HeightCert();
					sliderTestimonials();
					quotationMarks();
					heightChapter();
					fancy_lightbox();
					hoverButtonsHm();
					accordionFunction();
					changeStates();
					insertAfterSR();
					scrolltoContent();
					btmTitle();
					fancyMobileFix();
					slideTestim();
					certifImg();
					pardotState();
				}
			});
			return false;
		});
	})(jQuery);	

	// Select filter State Coverage 
	jQuery('.states').hide();
	jQuery('#dropdown-states-cov').change(function() {
		jQuery('.states').hide();
		jQuery('#content' + jQuery(this).val()).show();
	});			

	// Show Footer on click button CTA - Home
	jQuery('.home .buttons-cta .oc-link').click(function () {
		jQuery('.page-template-template-home footer').show();
	});

	// Add class 'first-quote' if quote-author is the first element in 'author-info'
	jQuery('.author-info').each(function(){
		if(jQuery(this).children().first().hasClass('quote-author')) {
			jQuery(this).find('.quote-author').addClass('first-quote');
			jQuery(this).next('.author-description').addClass('addpadding');
		}
	});

	// Remove hash marks in nav on hover state
	jQuery( ".cont-menu-header-int #header-site-nav-int ul li" ).hover(
	  function() {
	    jQuery( this ).find("a").parent().siblings().find("a").css( "border-color", "transparent" );
	  }, function() {
	    jQuery( this ).find("a").parent().siblings().find("a").css( "border-color", "#171c32" );
	  }
	);

});
