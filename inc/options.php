<?php

if( function_exists('acf_add_options_page') ) {

  // Options pour les Actualités
  acf_add_options_page(array(
    'page_title' 	=> __( "Lettre d'actu", 'californiefrancaise' ),
    'menu_title'	=> __( "Lettre d'actu", 'californiefrancaise' ),
    'menu_slug' 	=> 'newsletter',
    'capability'	=> 'edit_posts',
    'position'    => 30.3,
    'icon_url'    => 'dashicons-email-alt',
    'redirect'		=> false
	));

}