<footer id="colophon" class="site-footer site-footer-social">

	<?php do_action ( 'avant_hook_before_footer' ); ?>
	
	<div class="site-footer-icons">
        <div class="site-container">
            
            <?php
			if( get_theme_mod( 'avant-social-email' ) ) :
			    echo '<a href="' . esc_url( 'mailto:' . antispambot( get_theme_mod( 'avant-social-email' ), 1 ) ) . '" title="' . esc_attr__( 'Send Us an Email', 'avant' ) . '" class="footer-social-icon footer-social-email"><i class="far fa-envelope"></i></a>';
			endif;

			if( get_theme_mod( 'avant-social-skype' ) ) :
			    echo '<a href="skype:' . esc_html( get_theme_mod( 'avant-social-skype' ) ) . '?userinfo" title="' . esc_attr__( 'Contact Us on Skype', 'avant' ) . '" class="footer-social-icon footer-social-skype"><i class="fab fa-skype"></i></a>';
			endif;

			if( get_theme_mod( 'avant-social-facebook' ) ) :
			    echo '<a href="' . esc_url( get_theme_mod( 'avant-social-facebook' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on Facebook', 'avant' ) . '" class="footer-social-icon footer-social-facebook"><i class="fab fa-facebook"></i></a>';
			endif;

			if( get_theme_mod( 'avant-social-twitter' ) ) :
			    echo '<a href="' . esc_url( get_theme_mod( 'avant-social-twitter' ) ) . '" target="_blank" title="' . esc_attr__( 'Follow Us on Twitter', 'avant' ) . '" class="footer-social-icon footer-social-twitter"><i class="fab fa-twitter"></i></a>';
			endif;
			
			if( get_theme_mod( 'avant-social-pinterest' ) ) :
			    echo '<a href="' . esc_url( get_theme_mod( 'avant-social-pinterest' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on Pinterest', 'avant' ) . '" class="footer-social-icon footer-social-pinterest"><i class="fab fa-pinterest"></i></a>';
			endif;
			
			if( get_theme_mod( 'avant-social-linkedin' ) ) :
			    echo '<a href="' . esc_url( get_theme_mod( 'avant-social-linkedin' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on LinkedIn', 'avant' ) . '" class="footer-social-icon footer-social-linkedin"><i class="fab fa-linkedin"></i></a>';
			endif;

			if( get_theme_mod( 'avant-social-tumblr' ) ) :
			    echo '<a href="' . esc_url( get_theme_mod( 'avant-social-tumblr' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on Tumblr', 'avant' ) . '" class="footer-social-icon footer-social-tumblr"><i class="fab fa-tumblr"></i></a>';
			endif;

			if( get_theme_mod( 'avant-social-flickr' ) ) :
			    echo '<a href="' . esc_url( get_theme_mod( 'avant-social-flickr' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on Flickr', 'avant' ) . '" class="footer-social-icon footer-social-flickr"><i class="fab fa-flickr"></i></a>';
			endif;
			
			if( get_theme_mod( 'avant-social-vk' ) ) :
			    echo '<a href="' . esc_url( get_theme_mod( 'avant-social-vk' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on VK', 'avant' ) . '" class="footer-social-icon social-vk"><i class="fab fa-vk"></i></a>';
			endif;
			
			if( get_theme_mod( 'avant-social-github' ) ) :
			    echo '<a href="' . esc_url( get_theme_mod( 'avant-social-github' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on GitHub', 'avant' ) . '" class="footer-social-icon footer-social-github"><i class="fab fa-github"></i></a>';
			endif; ?>
			
		<?php printf( __( '<div class="site-footer-social-copy">Theme: %1$s by %2$s', 'avant' ), 'Avant', '<a href="https://kairaweb.com/">Kaira</a></div><div class="clearboth"></div></div>' ); ?>
</div><?php do_action ( 'avant_hook_after_footer' ); ?></footer><div class="site-social-bottom-bar site-footer-bottom-bar">
	<div class="site-container">
		<?php if ( get_theme_mod( 'avant-footer-privacy-link' ) ) : ?>
    		<?php if ( function_exists( 'the_privacy_policy_link' ) ) { the_privacy_policy_link(); } ?>
    	<?php endif; ?>
        <?php wp_nav_menu( array( 'theme_location' => 'footer-bar', 'container' => false, 'depth'  => 1 ) ); ?>
    </div><div class="clearboth"></div>
</div>