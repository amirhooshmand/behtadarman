<?php if ( ! defined( 'ABSPATH' ) ) exit( 'No direct script access allowed' );
/**
 * Template "Tnstagram" for 8theme dashboard.
 *
 * @since   6.0.2
 * @version 1.0.1
 */

$redirect_uri = trailingslashit( 'https://www.8theme.com/instagram-api/' );
$api_data     = get_option( 'etheme_instagram_api_data' );
$api_data     = json_decode( $api_data, true );
$api_settings = get_option( 'etheme_instagram_api_settings' );
$api_settings = json_decode( $api_settings, true );
$client_id    = 'e2bfe2e1b9864529bdb53f388d6f5b82';
$no_users_class = ' hidden';
$api_settings_default = array(
	'time' => 2,
	'time_type'=> 'hour'
);

if ( isset($_GET['token']) && $_GET['token'] != 'error' ) {

	$user_url = 'https://api.instagram.com/v1/users/self/?access_token=' . $_GET['token'];

	if ( ! is_array( $api_data ) ) {
		$api_data = array();
	}

	$user_data = wp_remote_get($user_url);
	$user_data = wp_remote_retrieve_body( $user_data );

	if ( ! isset( $api_data[$_GET['token']] ) ) {
		$api_data[$_GET['token']] = $user_data;
	}

	update_option('etheme_instagram_api_data',json_encode($api_data));

	header('Location: '.admin_url( 'admin.php?page=et-panel-social' ) );
}

if ( isset( $_GET['et_reinit_instagram'] ) ) {
	global $wpdb;
	$transients = $wpdb->get_results( "SELECT option_name FROM $wpdb->options WHERE option_name LIKE '_transient_etheme-instagram-data%'", ARRAY_A );
	
	foreach ($transients as $key => $value) {
		$name = str_replace('_transient_', '', $value['option_name']);
		delete_transient($name);
	}
	header('Location: '.admin_url( 'admin.php?page=et-panel-social' ) );
}

if ( ! $api_settings ) {
	$api_settings = $api_settings_default;
	update_option('etheme_instagram_api_settings',json_encode($api_settings));
}

$state   = '&state=' . admin_url('admin.php?et-panel-social');
$instURL = "https://api.instagram.com/oauth/authorize/?client_id=".$client_id."&redirect_uri=". $redirect_uri ."&response_type=code&scope=basic" . $state;
?>

<div class="etheme-div etheme-social">
	<div class="et-col-7 etheme-instagram-connected">
		<h3 class="et-title"><?php esc_html_e( 'Instagram accounts', 'xstore' ) ?></h3>
	
		<p><?php echo sprintf( esc_html__('Instagram widget and Instagram WPBakery element use the special API that requires authentication to show your photos on any theme by 8theme. Authenticated requests need Instagram Access Token. You can get this by clicking the %1s Add account %2s button below.', 'xstore'), '<strong>', '</strong>'); ?></p><p><?php echo sprintf( esc_html__('After clicking, you will be prompted by Instagram to sign in your Instagram account and then you will be asked to authorize %1s 8themeapp %2s to access your Instagram photos.', 'xstore'), '<strong>', '</strong>' ); ?></p>
		<p class="et-message et-info">
			<?php esc_html_e('Generating a token creates a private token for your use only. We will not have access to your feed.', 'xstore'); ?>
		</p>
	
		<a class="etheme-instagram-auto et-button et-button-green no-loader last-button" href="<?php echo esc_url( $instURL ); ?>"><?php esc_html_e( 'Add account', 'xstore' ); ?></a>
		<div class="etheme-instagram-manual-wrapper">
			<a class="etheme-instagram-manual et-button et-button-grey no-loader last-button" href=""><?php esc_html_e( 'Manually add account', 'xstore' ); ?></a>
			<div class="etheme-instagram-manual-form hidden">
				<input id="etheme-manual-token" name="etheme-manual-token" type="text" placeholder="Enter a valid Instagram Access Token">
				<a class="etheme-manual-btn et-button et-button-green no-loader" href=""><?php esc_html_e( 'Connect', 'xstore' ) ?></a>
				<a href="<?php echo esc_url( $redirect_uri ); ?>"><?php esc_html_e( 'Do not have access token ?', 'xstore' ) ?></a>
				<p class="etheme-form-error hidden et-message et-error"><?php esc_html_e( 'Wrong token', 'xstore' ) ?></p>
				<p class="etheme-form-error-holder et-message et-error hidden"></p>
			</div>
		</div>
		<?php if ( is_array($api_data) && count( $api_data ) ) :
			foreach ( $api_data as $key => $value ) : ?>
				<?php $value = json_decode( $value, true ); ?>
					<div class="etheme-user">
						<span class="user-img">
							<img 
								src="<?php echo esc_url( $value['data']['profile_picture'] ); ?>"
								alt="<?php echo esc_html( $value['data']['username'] ); ?>"
								>
						</span>
						<div class="user-info">
							<div class="user-name"><b><?php esc_html_e( 'Username:', 'xstore' ); ?></b> <?php echo esc_html( $value['data']['username'] ); ?></div>
							<div class="user-token" data-token="<?php echo esc_attr( $key ); ?>"><b><?php esc_html_e( 'Access token:', 'xstore' ) ?></b> <?php echo esc_html( $key ); ?></div>
							<span class="user-remove red-color"><?php echo esc_html__('Delete', 'xstore'); ?></span>
						</div>
					</div>

			<?php endforeach; ?>
		<?php else : ?>
			<?php $no_users_class = ''; ?>
		<?php endif; ?>
		 <p class="etheme-no-users et-message et-info<?php echo esc_attr( $no_users_class ); ?>"><?php esc_html_e( 'You have not connected any account yet', 'xstore' ) ?></p>
	</div>

	<div class="et-col-5 etheme-instagram-settings">
		<p>
			<label for="instagram_time"><?php esc_html_e('Check for new posts every', 'xstore'); ?></label>
		</p>
		<p>
			<input id="instagram_time" name="instagram_time" type="text" value="<?php echo esc_attr( $api_settings['time'] ); ?>">
			<select name="instagram_time_type" id="instagram_time_type">
				<option value="min" <?php selected( $api_settings['time_type'], 'min' ); ?>><?php esc_html_e( 'mins', 'xstore' ); ?></option>
				<option value="hour" <?php selected( $api_settings['time_type'], 'hour' ); ?>><?php esc_html_e( 'hours', 'xstore' ); ?></option>
				<option value="day" <?php selected( $api_settings['time_type'], 'day' ); ?>><?php esc_html_e( 'days', 'xstore' ); ?></option>
			</select>
		<input class="etheme-instagram-save et-button no-loader" type="submit" value="save">
		</p>
		<p>
			<span href="" class="etheme-instagram-reinit et-button no-loader et-button-grey">
	            <span class="et-loader">
	            <svg class="loader-circular" viewBox="25 25 50 50"><circle class="loader-path" cx="50" cy="50" r="12" fill="none" stroke-width="2" stroke-miterlimit="10"></circle></svg>
	            </span>
	            <span class="dashicons dashicons-image-rotate"></span>
	            <?php esc_html_e('Reinit instagram', 'xstore'); ?>
	        </span>
		</p>
	</div>
</div>