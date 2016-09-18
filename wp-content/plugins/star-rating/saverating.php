<?php

/*
File for pure DB purpose
*/

//Function will create a Table on Plugin first Insatllation
function hu_star_rating_table(){
	
	global $wpdb;
	$table_name = $wpdb->prefix . 'starrating';
 
	// create the ECPT metabox database table

	$sql = "CREATE TABLE $table_name (
	id int unsigned NOT NULL AUTO_INCREMENT,
	rating int NOT NULL,
	rating_post int NOT NULL,
	PRIMARY KEY  (id)
	);";
 
	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
	dbDelta($sql);
}


if(isset($_POST['rating']) && isset($_POST['post_id']) && isset($_POST['current_user_id'])){

star_rating_db_check();

}


//Check wether rating is already present
function star_rating_db_check(){

global $wpdb;

$rating = $_POST['rating'];

$post_id = $_POST['post_id'];

$current_user_id = $_POST['current_user_id'];


$check = $wpdb->get_row("SELECT * FROM wp_starrating WHERE post_id=$post_id AND user_id=$current_user_id");

	if(!empty($check)){

		star_rating_db_update($rating,$post_id,$current_user_id);
	}
	else{

		star_rating_db_feed($rating,$post_id,$current_user_id);
	}
}

//if rating is not present then add a new entry
function star_rating_db_feed($rating,$post_id,$current_user_id){
		
	global $wpdb;

	$wpdb->insert('wp_starrating',array('rating'=>$rating,'post_id'=>$post_id,'user_id'=>$current_user_id));		
	
}

//else rating is present then update exsisting entry
function star_rating_db_update($rating,$post_id,$current_user_id){

	global $wpdb;

	$wpdb->update("wp_starrating",array('rating'=>$rating,'post_id'=>$post_id,'user_id'=>$current_user_id),array('post_id'=>$post_id,'user_id'=>$current_user_id));

}


//Check if Rating for current user and post is present or not true:show checked stars according to rating
function current_star_rating($post_id,$current_user_id){

	global $wpdb;

	$results = $wpdb->get_row("SELECT * FROM wp_starrating WHERE post_id=$post_id AND user_id=$current_user_id");

	return $results;

}

?>