<?php
/**
 * @package Hello_Death
 * @version 1.0
 */
/*
Plugin Name: Hello Death
Plugin URI: 
Description: The Bhutanese say think about death 5 times a day and you will be happy. Now you can do that while managing your WordPress site.
Author: Matt Mullenweg, Claudiu Lodromanean
Version: 1.0
*/

function hello_death() {
	$chosen = __( 'You are going to die.', 'hello-death' );
	echo "<p id='dolly'>$chosen</p>";
}

add_action( 'admin_notices', 'hello_death' );

// We need some CSS to position the paragraph
function death_css() {
	// This makes sure that the positioning is also good for right-to-left languages
	$x = is_rtl() ? 'left' : 'right';

	echo "
	<style type='text/css'>
	#dolly {
		float: $x;
		padding-$x: 15px;
		padding-top: 5px;		
		margin: 0;
		font-size: 11px;
	}
	</style>
	";
}

add_action( 'admin_head', 'death_css' );

?>