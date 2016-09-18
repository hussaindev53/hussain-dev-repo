<?php

//Function for Displaying Stars

function hu_star_rating(){
    
global $wp_query,$current_user;
global $wpdb;
get_currentuserinfo();
$post = $wp_query->post;

$results = current_star_rating($post->ID,$current_user->ID);
?>
<div class="star-whole">
<span>Rate it :-</span>
<?php do_echo_my_name(); ?>
<fieldset class="rating">
    <form action="" method="post" id="starform" name="starratingform"> 
    <input onclick="getrating(5,<?php echo $post->ID; ?>,<?php echo $current_user->ID; ?>)" type="radio" id="star5" name="rating" value="5" <?php if($results->rating == 5){echo "checked='checked'";} ?> /><label class = "full rate" for="star5" title="Awesome - 5 stars"></label>
    <input onclick="getrating(4.5,<?php echo $post->ID; ?>,<?php echo $current_user->ID; ?>)" type="radio" id="star4half" name="rating" value="4 and a half" <?php if($results->rating == 4.5){echo "checked='checked'";} ?> /><label class="half rate" for="star4half" title="Pretty good - 4.5 stars"></label>
    <input onclick="getrating(4,<?php echo $post->ID; ?>,<?php echo $current_user->ID; ?>)" type="radio" id="star4" name="rating" value="4" <?php if($results->rating == 4){echo "checked='checked'";} ?> /><label class = "full rate" for="star4" title="Pretty good - 4 stars"></label>
    <input onclick="getrating(3.5,<?php echo $post->ID; ?>,<?php echo $current_user->ID; ?>)" type="radio" id="star3half" name="rating" value="3 and a half" <?php if($results->rating == 3.5){echo "checked='checked'";} ?> /><label class="half rate" for="star3half" title="Meh - 3.5 stars"></label>
    <input onclick="getrating(3,<?php echo $post->ID; ?>,<?php echo $current_user->ID; ?>)" type="radio" id="star3" name="rating" value="3" <?php if($results->rating == 3){echo "checked='checked'";} ?>/><label class = "full rate" for="star3" title="Meh - 3 stars"></label>
    <input onclick="getrating(2.5,<?php echo $post->ID; ?>,<?php echo $current_user->ID; ?>)" type="radio" id="star2half" name="rating" value="2 and a half" <?php if($results->rating == 2.5){echo "checked='checked'";} ?> /><label class="half rate" for="star2half" title="Kinda bad - 2.5 stars"></label>
    <input onclick="getrating(2,<?php echo $post->ID; ?>,<?php echo $current_user->ID; ?>)" type="radio" id="star2" name="rating" value="2" <?php if($results->rating == 2){echo "checked='checked'";} ?>/><label class = "full rate" for="star2" title="Kinda bad - 2 stars"></label>
    <input onclick="getrating(1.5,<?php echo $post->ID; ?>,<?php echo $current_user->ID; ?>)" type="radio" id="star1half" name="rating" value="1 and a half" <?php if($results->rating == 1.5){echo "checked='checked'";} ?> /><label class="half rate" for="star1half" title="Meh - 1.5 stars"></label>
    <input onclick="getrating(1,<?php echo $post->ID; ?>,<?php echo $current_user->ID; ?>)" type="radio" id="star1" name="rating" value="1" <?php if($results->rating == 1){echo "checked='checked'";} ?> /><label class = "full rate" for="star1" title="Sucks big time - 1 star"></label>
    <input onclick="getrating(0.5,<?php echo $post->ID; ?>,<?php echo $current_user->ID; ?>)" type="radio" id="starhalf" name="rating" value="half" <?php if($results->rating == 0.5){echo "checked='checked'";} ?> /><label class="half rate" for="starhalf" title="Sucks big time - 0.5 stars"></label>
    </form>
</fieldset>
</div>
<p class="echoit"></p>  
<?php   
    }


?>