jQuery(document).ready( function (){
	
	jQuery('.menu a').click( function() {
		jQuery(this).css( 'font-size', '90%');
		var href = this.href;
		jQuery('#primary').css( "visibility", "hidden" );
		location.href = href;
		return false;
	});
} );

window.onload=window.onpageshow= function() {
    jQuery('#primary').css( "visibility", "visible" );
    jQuery('a').removeAttr( 'style' );
};
