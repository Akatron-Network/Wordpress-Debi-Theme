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

function my_phpmailer_example( $phpmailer ) {
	$phpmailer->isSMTP();     
	$phpmailer->Host = 'mail.akatron.net';
	$phpmailer->SMTPAuth = true; // Ask it to use authenticate using the Username and Password properties
	$phpmailer->Port = 587;
	$phpmailer->Username = 'debi@akatron.net';
	$phpmailer->Password = 'akatron2022';

	// Additional settings…
	$phpmailer->SMTPSecure = 'tls'; // Choose 'ssl' for SMTPS on port 465, or 'tls' for SMTP+STARTTLS on port 25 or 587
	$phpmailer->From = "debi@akatron.net";
	$phpmailer->FromName = "DEBI";
}
add_action( 'phpmailer_init', 'my_phpmailer_example' );

function wpse27856_set_content_type(){
	return "text/html";
}
add_filter( 'wp_mail_content_type','wpse27856_set_content_type' );
?>