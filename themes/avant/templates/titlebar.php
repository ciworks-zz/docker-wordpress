<?php if ( !is_front_page() ) : ?>
    <?php if ( !get_theme_mod( 'avant-page-remove-titlebar' ) ) :
        $page_title_tag = get_theme_mod( 'avant-seo-page-title-tag', customizer_library_get_default( 'avant-seo-page-title-tag' ) ); ?>
    
        <header class="entry-header">
            
            <?php if ( is_home() ) :
                $blog_page_id = get_option( 'page_for_posts' );  ?>
                
                <?php echo '<h'.esc_attr( $page_title_tag ).' class="entry-title">' . esc_html( get_page( $blog_page_id )->post_title ) . '</h'.esc_attr( $page_title_tag ).'>'; ?>
            
            <?php elseif ( is_archive() ) : ?>
                
                <?php
                the_archive_title( '<h'.esc_attr( $page_title_tag ).' class="entry-title">', '</h'.esc_attr( $page_title_tag ).'>' );
                the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
            
            <?php elseif ( is_search() ) : ?>
                
                <h<?php echo esc_attr( $page_title_tag ); ?> class="entry-title"><?php printf( esc_html__( 'Search Results for: %s', 'avant' ), '<span>' . get_search_query() . '</span>' ); ?></h<?php echo esc_attr( $page_title_tag ); ?>>
            
            <?php elseif ( is_singular() ) : ?>
                
                <?php echo '<h'.esc_attr( $page_title_tag ).' class="entry-title">' . get_the_title( get_the_ID() ) . '</h'.esc_attr( $page_title_tag ).'>'; ?>
                
            <?php elseif ( avant_is_woocommerce_activated() ) : ?>
                
                <?php if ( is_shop() ) :
                    $shop_id = get_option( 'woocommerce_shop_page_id' ); ?>
                    
                    <?php echo '<h'.esc_attr( $page_title_tag ).' class="entry-title">' . esc_html( get_page( $shop_id )->post_title ) . '</h'.esc_attr( $page_title_tag ).'>'; ?>
                <?php endif; ?>
            
            <?php else : ?>
                
                <h<?php echo esc_attr( $page_title_tag ); ?> class="entry-title"><?php the_title(); ?></h<?php echo esc_attr( $page_title_tag ); ?>>
                
            <?php endif; ?>
            
            <?php if ( ! is_front_page() ) : ?>
        
    	        <?php if ( function_exists( 'bcn_display' ) ) : ?>
    		        <div class="breadcrumbs">
    		            <?php bcn_display(); ?>
    		        </div>
    	        <?php endif; ?>
    	        
    	    <?php endif; ?>
            
        </header><!-- .entry-header -->
    
    <?php endif; ?>
<?php endif; ?>