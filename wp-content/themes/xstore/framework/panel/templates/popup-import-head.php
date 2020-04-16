<?php
/**
 * Template "Demos" for 8theme dashboard.
 *
 * @since   
 * @version 1.0.0
 */

$versions = require apply_filters('etheme_file_url', ETHEME_THEME . 'versions.php');

$version = $versions[$_POST['version']];
?>

<div class="popup-import-head">
	<img
		class="version-img"
		src="https://xstore.8theme.com/dashboard-images/<?php echo esc_attr( $_POST['version'] ); ?>/screenshot.jpg"
		alt="<?php echo esc_attr( $_POST['version'] ); ?>">
</div>