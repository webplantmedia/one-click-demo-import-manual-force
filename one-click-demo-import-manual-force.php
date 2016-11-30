<?php
/**
 * @package PR Debug
 * @version 1.0
 */
/*
Plugin Name: One Click Demo Import Manual Force
Plugin URI: http://webplantmedia.com
Description: Force manual upload of import files
Author: Chris Baldelomar
Version: 0.1
Author URI: http://webplantmedia.com
*/

function ocdimf_admin_init() {
	remove_filter( 'pt-ocdi/import_files', 'wpcanvas2_ocdi_import_files' );
	remove_action( 'pt-ocdi/before_widgets_import', 'wpcanvas2_ocdi_before_widgets_import' );
}
add_action( 'plugins_loaded', 'ocdimf_admin_init' );
