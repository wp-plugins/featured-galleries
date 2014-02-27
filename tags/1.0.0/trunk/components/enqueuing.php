<?php

function fg_enqueue_stuff() {

	wp_enqueue_script('fg-admin-script', plugin_dir_url(dirname(__FILE__)).'js/admin.js');

	wp_localize_script( 'fg-admin-script', 'myAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));

	wp_enqueue_style('fg-admin-style', plugin_dir_url(dirname(__FILE__)).'css/admin.css');

}