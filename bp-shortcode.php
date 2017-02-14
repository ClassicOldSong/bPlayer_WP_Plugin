<?php
// Add shortcode
function embed_bp_handler($atts, $content = null) {
	extract(shortcode_atts(array(
		'url' => '',
		'title' => '',
		'artist' => '',
		'cover' => '',
		'color' => '',
		'slim' => '',
		'autoplay' => '',
		'loop' => ''), $atts));
	if (empty($url)) {
		return '<div style="color:red;font-weight:bold;">No audio specified.</div>';
	}

	$element = '<audio src="'.$url;
	if (!empty($cover)) {
		$element .= '" cover="'.$cover;
	}
	if (!empty($title)) {
		$element .= '" title="'.$title;
	}
	if (!empty($artist)) {
		$element .= '" artist="'.$artist;
	}
	if (!empty($color)) {
		$element .= '" color="'.$color;
	}
	if (!empty($slim)) {
		$element .= '" slim="'.$slim;
	}
	if (!empty($autoplay)) {
		$element .= '" autoplay="'.$autoplay;
	}
	if (!empty($loop)) {
		$element .= '" loop="'.$loop;
	};
	$element .= '" controls="bplayer"></audio>';

	return $element;
}

add_shortcode('bplayer', 'embed_bp_handler');
?>