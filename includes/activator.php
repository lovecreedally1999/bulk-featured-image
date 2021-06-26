<?php
/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 */

if( !class_exists('BFIE_Activator')) {

	class BFIE_Activator{

		public static function activate() {

			$settings = array(
				'general' => array(
					'bfi_per_page' => BFIE_PER_PAGE,
					'bfi_posttyps' => array( 'post', 'page' ),
					'enable_default_image' => array( 'post', 'page' ),
				),
			);
			
			update_option( 'bfi_settings', $settings );

			set_transient( '_bfie_activation_redirect', true, 30 );
		}
	}
}