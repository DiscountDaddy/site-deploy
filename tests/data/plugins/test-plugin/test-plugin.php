<?php
/**
 * Plugin Name: Deploy WordPress to Server - e2e Test
 * Plugin URI: https://github.com/discountdaddy/site-deploy
 * Description: Sample code to test the discountdaddy/site-deploy image.
 * Version: 0.0.1
 */
 
 add_action('init', 'register_my_cpt');

 function register_my_cpt() {
    register_post_type('my-cpt', array(
        'public' => true
    ));
 }