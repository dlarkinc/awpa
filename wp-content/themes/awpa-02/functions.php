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

add_filter( 'the_title', 'copyright_the_title', 10, 2 );
function copyright_the_title( $title, $id = null ) {
	return $title . ' &copy; Larkin Cunningham';
}

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


?>
