<?php 

##############################################################################################################################
###################################  ADDING CUSTOM CSS AND JS FILES  #########################################################
##############################################################################################################################
            
if ( ! function_exists( 'fbf_add_styles' ) ) {            
    add_action( 'wp_enqueue_scripts', 'fbf_add_styles' );
    
    function fbf_add_styles() {
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'parent-style' ) );
    }
}




##############################################################################################################################
################################### SETTING DEFAULT EXCERPT LENGTH  ##########################################################
##############################################################################################################################

// Over riding the default excerpt length for posts.
function my_excerpt_length( $length ) {
    
	return 150; // # of words, default is 55.
}
add_filter( 'excerpt_length', 'my_excerpt_length' );
