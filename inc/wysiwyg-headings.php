<?php

/**
 * Remove unused formats from tinyMCE
 *
 * @param string $init | Initialize.
 */
function tiny_mce_remove_unused_formats( $init ) {
	// Add block format elements you want to show in dropdown.
	$init['block_formats'] = 'Paragraph=p;Heading 3=h3;Heading 4=h4;Heading 5=h5;';
	return $init;
}

?>