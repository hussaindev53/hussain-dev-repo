<?php

//function for logged in users
function for_logged_in_users(){
	if(!is_user_logged_in()){
	?>
		<style>
			.rate{

				cursor: not-allowed;
			}
		</style>
	<?php
	}
}

//Function for Plugin Scripts
function hu_star_rating_scripts(){
	wp_enqueue_style('style',plugins_url(null,__FILE__).'/style.css',array());	
	?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <?php if(is_user_logged_in()){ ?>
    <script type="text/javascript">
		function getrating(rate,post_id,current_user_id){	
			$.ajax({
				url: "<?php $_SERVER['PHP_SELF']; ?>",
				type:"POST",
				data: "rating=" + rate + "&post_id=" + post_id + "&current_user_id=" + current_user_id,
				success: function(result){
					alert("Thank You.......!!! for your valuable feedback");
					}
				});
			}
	</script>
    <?php
	}
	else{

		?>
		<script type="text/javascript">
		
		function getrating(rate,post_id,current_user_id){
			alert("Sorry you are not logged-in");
			return false;
		}

		</script>
		<?php
	}
}

?>