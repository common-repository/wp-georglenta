<?php
/*
Plugin Name: wp-GeorgLenta
Plugin URI: http://sablinov.ru/projects/plagin-georgievskaya-lentochka-dlya-wordpress/
Description: This plugin automatically shows <a href="http://en.wikipedia.org/wiki/Ribbon_of_Saint_George">"Ribbon of Saint George"</a> in the right top corner of yours blog from April, 24th till May, 12th, during carrying out of the "Georgievskaya Lenta Action"
Author: Sablinov
Author URI: http://sablinov.ru/
Version: 0.2
*/

function georglenta() {
	if (date(n)==5 && date(j)>=3 && date(j)<=12) {

		$path_to_image = get_bloginfo('siteurl') . '/wp-content/plugins/wp-georglenta/';
		echo ('
			<nolayer>
				<div id="georglenta" style="position:absolute; top:0; right:0;">
			</nolayer>

			<noindex><a rel="external nofollow" href="http://www.9may.ru"><img border="0" src="' . $path_to_image . 'georglenta.gif" align="left" alt="" /></a></noindex>
			<nolayer>
				</div>
			</nolayer>'
		);
	};
} 

add_filter('wp_head', 'georglenta');

?>