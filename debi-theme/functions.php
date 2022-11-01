<?php
function add_css() {
   wp_register_style('first', get_template_directory_uri() . '/assets/style.css', false,'1.1','all');
   wp_enqueue_style( 'first');
}
add_action('wp_enqueue_scripts', 'add_css');

function wpdocs_theme_name_wp_title( $title, $sep ) {
	if ( is_feed() ) {
		return $title;
	}
	
	global $page, $paged;

   $old_title = $title;

	// Add the blog name
	$title .= get_bloginfo( 'name', 'display' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title .= " - " ." $sep $site_description";
	}
   else {
      $title = $old_title . " - " . get_bloginfo( 'name', 'display' );
   }

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
		$title .= " $sep " . sprintf( __( 'Page %s', '_s' ), max( $paged, $page ) );
	}
	return $title;
}
add_filter( 'wp_title', 'wpdocs_theme_name_wp_title', 10, 2 );

add_filter( 'get_terms_orderby', function( $orderby, $qv, $taxonomy )
{
    // Only target the category taxonomy
    if( 'category' !== $taxonomy )
        return $orderby;

    // Support orderby term_order
    if( isset( $qv['orderby'] ) && 'term_order' === $qv['orderby'] )
        $orderby = 't.term_order';

    return $orderby;
}, 10, 3 );
?>