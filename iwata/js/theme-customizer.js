/**
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and 
 * then make any necessary changes to the page using jQuery.
 */
( function( $ ) {

	//Update site accent color in real time...
	wp.customize( 'accent_color', function( value ) {
		value.bind( function( newval ) {
			$('body a').css('color', newval );
			$('body a:hover').css('color', newval );
			$('.bg-accent').css('background', newval );
			$('.post-title a:hover').css('color', newval );
			$('.post-content blockquote:before').css('color', newval );
		} );
	} );
	
} )( jQuery );