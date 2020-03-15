/**
 * Custom JS Functionality
 *
 */
( function( $ ) {
    
    jQuery( document ).ready( function() {
        
        // Add button to sub-menu item to show nested pages / Only used on mobile
        $( '.main-navigation li.page_item_has_children, .main-navigation li.menu-item-has-children' ).prepend( '<span class="menu-dropdown-btn"><i class="fas fa-angle-down"></i></span>' );
        // Mobile nav button functionality
        $( '.menu-dropdown-btn' ).bind( 'click', function() {
            $(this).parent().toggleClass( 'open-page-item' );
        });
        // The menu button
        $( '.header-menu-button' ).click( function(e){
            $( 'body' ).toggleClass( 'show-main-menu' );
        });
        
        $( '.main-menu-close' ).click( function(e){
            $( '.header-menu-button' ).click();
        });
        
        // Show / Hide Search
        $( '.menu-search' ).toggle( function(){
            $( 'body').addClass( 'show-site-search' );
            $( '.search-block input.search-field' ).focus();
        },function(){
            $( 'body').removeClass( 'show-site-search' );
        });

        // Scroll To Top Button Functionality
        $(".scroll-to-top").bind("click", function() {
            $('html, body').animate( { scrollTop: 0 }, 800 );
        });
        $(window).scroll(function(){
            if ($(this).scrollTop() > 400) {
                $('.scroll-to-top').fadeIn();
            } else {
                $('.scroll-to-top').fadeOut();
            }
        });
		
    });
    
    $(window).resize(function () {
        
        if ( $( window ).width() > 980 ) {
            $( 'body' ).removeClass( 'show-main-menu' );
        }
        
    });
    
    $(window).load(function() {
        $( '.side-aligned-social' ).removeClass( 'hide-side-social' );
    });
    
    // Hide Search if user clicks anywhere else
    $( document ).mouseup( function (e) {
        var container = $( '.search-block' );
        if ( !container.is( e.target ) && container.has( e.target ).length === 0 ) {
            $( 'body' ).removeClass( 'show-site-search' );
        }
    });
    
} )( jQuery );