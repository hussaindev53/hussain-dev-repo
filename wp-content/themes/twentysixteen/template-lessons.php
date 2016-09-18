<?php
/*
* Template Name: Lessons Page
*/
get_header();?>
<?php global $wpdb; 

$get_cat = $wpdb->get_results("SELECT * FROM wp_term_taxonomy
			INNER JOIN wp_terms ON wp_term_taxonomy.term_id=wp_terms.term_id
			 WHERE wp_term_taxonomy.taxonomy='category' AND wp_term_taxonomy.parent=0");
?>
<form action='<?php $_SERVER['PHP_SELF'] ?>' method='post'>
<p>
<?php foreach($get_cat as $value){?>
<input type="checkbox" name="posts_cat[]" value="<?php echo $value->term_id ?>"><?php echo $value->name ?> &nbsp;
<?php } ?>
<input type="submit" name="filter" value="Filter"></p>
</form>

<?php if(isset($_POST['posts_cat'])){

	$get_posts = NULL;

foreach($_POST['posts_cat'] as $value){

$get_posts = $wpdb->get_results("SELECT * FROM wp_posts 
							INNER JOIN wp_term_relationships ON wp_posts.ID=wp_term_relationships.object_id	
							WHERE wp_posts.post_status='publish' AND wp_posts.post_type='post' AND wp_term_relationships.term_taxonomy_id=$value");

	}
}
else{

$get_posts = $wpdb->get_results("SELECT * FROM wp_posts WHERE post_type='post' AND post_status='publish'"); 

}
?>

<?php foreach($get_posts as $value){

	?><p>
	<a href="<?php echo get_permalink($value->ID); ?>"><?php echo $value->post_title; ?></a>
	<?php //echo the_content(); ?>
	</p>
	<?php

	} ?>

<?php get_footer(); ?>