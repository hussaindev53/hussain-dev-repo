<?php

//Create Plugin Table on first plugin installation
register_activation_hook(__FILE__,'hu_star_rating_table');

//Function for logged in users
add_action('init','for_logged_in_users');

//Registers Plugin's Scripts 
add_action('wp_enqueue_scripts','hu_star_rating_scripts');	

//Show Stars After Every Comment Form
add_action('comment_form','hu_star_rating');
?>