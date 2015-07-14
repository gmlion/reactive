jQuery(document).ready( function (){
	
	jQuery('.menu li:not(.not-reactive) a').click( function(event) {
        if (!
            (event.ctrlKey ||
            event.shiftKey ||
            event.metaKey ||
            (event.button && event.button == 1))) {
            event.preventDefault();
            jQuery(this).css( 'font-size', '90%');
            var href = this.href;
            jQuery('#primary').css( "visibility", "hidden" );
            location.href = href;
        }
		
	});
} );

window.onload=window.onpageshow= function() {
    jQuery('#primary').css( "visibility", "visible" );
    jQuery('a').removeAttr( 'style' );
};
