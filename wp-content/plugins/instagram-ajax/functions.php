<?php
/**
 * Plugin Name: Instagram feeds
 * Description: Customise instagram function. Fast, simple, lean.
 * Author: Calvin
 * Version: 0.1
*/ 

require_once('class/Instagram.php');
use MetzWeb\Instagram\Instagram;

wp_enqueue_script( 'get_instagram', plugins_url('instagram-ajax/js/get_instagram.js'), array(), null, true );

wp_enqueue_script( 'super_simple_slider', plugins_url('instagram-ajax/js/sss/sss.js'), array('jquery'), null, true );
wp_enqueue_style( 'super_simple_slider_css', plugins_url('instagram-ajax/js/sss/sss.css'));


$params = array(
  'ajaxurl' => admin_url('admin-ajax.php'),
  'loading_img' => plugins_url('instagram-ajax/images/ajax_loader.gif'),
  'error_img' => plugins_url('instagram-ajax/images/errorImg.jpg')
);
wp_localize_script( 'get_instagram', 'instagram_ajax', $params );

function retrieve_instagram() {
    //echo 'hello'; //testing ajax
    $user_id = '1676784';
    $client_id = '844863a3cde44828abd6fb9c36171807';

    $instagram = new Instagram($client_id);
    $results = $instagram->getUserMedia($user_id);
    
    wp_send_json($results);
}

add_action('wp_ajax_get_instagram', 'retrieve_instagram');
add_action('wp_ajax_nopriv_get_instagram', 'retrieve_instagram');

?>