<?php
/*
	Plugin Name: The Gospel
	Plugin URI: http://wordpress.org/plugins/the-gospel/
	Description: Easyly integrate the Christian gospel message on your WordPress website using the shortcode [gospel] on any page or post. 
	Version: 1.2
	Author: <a href="http://rocapress.com">Mika Kaltoft</a>
	Autor: http://rocapress.com/about
	License: GPL
	License URI: http://www.gnu.org/licenses/licenses.html

	-------- Copyright & License --------

	Copyright 2014 Mika Kaltoft (email : contact@rocapress.com)

	This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation.

	This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

	-------- Copyright & License --------
*/

// Add Shortcode [gospel] name and callback function
add_shortcode( 'gospel', 'rocapress_the_gospel' );
add_shortcode( 'Gospel', 'rocapress_the_gospel' );
add_shortcode( 'the_gospel', 'rocapress_the_gospel' );
add_shortcode( 'The_Gospel', 'rocapress_the_gospel' );
add_shortcode( 'The_gospel', 'rocapress_the_gospel' );
add_shortcode( 'the_Gospel', 'rocapress_the_gospel' );
add_shortcode( 'thegospel', 'rocapress_the_gospel' );

// Callback function used as the second parameter in add_shortcode() above. It returns the gospel messages to the page or post on which the shortcode [gospel] is inserted.

function rocapress_the_gospel( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'lang' => 'en' // set attribute default
		), $atts ) );

	if ( $lang == 'en' ) {

		include('languages/english.php'); // Includes english language file.

	}elseif ( $lang == 'da' ) {
	
		include('languages/danish.php'); // Includes danish language file.

	}elseif ( $lang == 'pt') {

		include('languages/portuguese.php'); // Includes portuguese language file.
	}
}

?>