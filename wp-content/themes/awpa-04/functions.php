<?php
add_filter('the_content', 'bad_word_filter');
add_filter('the_title', 'bad_word_filter');
add_filter('content_edit_pre', 'bad_word_filter');
function bad_word_filter($content) {
	$bad_words = array( 'douchebag', 'wally' );
	$content = str_ireplace($bad_words, '*****', $content);
	return $content;
}

add_filter('the_content', 'good_word_filter');
function good_word_filter($content) {
	$bad_words = array( 'bad', 'worse' );
	$good_words = array( 'good', 'better' );
	$content = str_ireplace($bad_words, $good_words,
			$content);
	return $content;
}

// add_filter( 'the_title', 'copyright_the_title', 10, 2 );
// function copyright_the_title( $title, $id = null ) {
// 	return $title . ' &copy; Larkin Cunningham';
// }

add_action( 'init', 'register_post_types' );
function register_post_types() {
	register_post_type('slides',
		array(
			'labels' => array(
			'name' => 'Slides'
		),
		'public' => true,
		)
	);
}

//[bold]
function bold_func( $atts, $content=null ){
	$a = shortcode_atts( array(
		'colour' => ''
	), $atts );
	return "<strong style='color:".$a['colour']."';>".$content."</strong>";
}
add_shortcode( 'bold', 'bold_func' );

register_nav_menu('main', 'Main menu');
register_nav_menu('slides', 'Slide menu');

 global $wp_version;
 function custom_theme_setup() {
 	if (version_compare($wp_version, '3.4', '>=' )) {
 		add_theme_support('custom-background', array(
	'default-color'          => '#eeeeee'));
 	}
	add_theme_support('post-formats', array('status','link','aside'));
 }
 add_action( 'after_setup_theme', 'custom_theme_setup' );
?>
