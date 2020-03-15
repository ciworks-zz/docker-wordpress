/**
 * Avant Theme Custom Blog Functionality
 */
( function( $ ) {
    
    $( document ).ready( function( $ ) {
    	
        infinite_count = 0;
        
	     // Triggers re-layout on infinite scroll
	     $( document.body ).on( 'post-load', function () {
	     	
			infinite_count = infinite_count + 1;
			
			var $container = $('#main-infinite');
			var $selector = $('#infinite-view-' + infinite_count);
			var $elements = $selector.find('.hentry');
			
			$elements.hide();
			$container.masonry( 'reload' );
			$elements.fadeIn();
			
	     });
        
    });
    
} )( jQuery );