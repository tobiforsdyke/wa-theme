<?php

/*

@package wa-theme
  =====================
      ADMIN PAGE
  =====================
*/

function watheme_add_admin_page(){
  //Generate admin page
  // 1-Page title, 2-menu title, 3-capabilities, 4-menu slug, 5-function, 6-icon (dashicons-heart), 7-menu location
  add_menu_page( 'Wac Arts Options', 'Wac Arts', 'manage_options', 'watheme', 'watheme_create_page', get_template_directory_uri() . '/img/wa-small-icon.png', 61 );

  //Generate admin sub pages
  // 1-slug, 2-page title, 3-menu title, 4-capabilities, 5-slug menu, 6-callback function (then add the function to be called below)
  add_submenu_page('watheme', 'Wac Arts Options', 'Settings', 'manage_options', 'watheme', 'watheme_create_page' );

  add_submenu_page('watheme', 'Wac Arts CSS Options', 'Custom CSS', 'manage_options', 'watheme_css', 'watheme_settings_page' );

}

add_action( 'admin_menu', 'watheme_add_admin_page' );

function watheme_create_page() {
  //generation of our admin page
  require_once( get_template_directory() . '/inc/templates/wa-admin.php' );
}

function watheme_settings_page() {
  //generation of our admin settings page
  require_once( get_template_directory() . '/inc/templates/wa-customcss.php' );
}
