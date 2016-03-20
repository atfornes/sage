<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',  // Scripts and stylesheets
  'lib/extras.php',  // Custom functions
  'lib/setup.php',   // Theme setup
  'lib/titles.php',  // Page titles
  'lib/wrapper.php'  // Theme wrapper class
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

// using http://stackoverflow.com/questions/11159860/how-do-i-add-a-simple-jquery-script-to-wordpress/12025482#12025482

add_action( 'wp_enqueue_scripts', 'add_my_script' );
function add_my_script() {
    wp_enqueue_script('smoothScroll', get_template_directory_uri() . '/assets/scripts/smoothScroll.js', array('jquery'));
}