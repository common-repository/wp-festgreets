<?php

    // Creating Metaboxes
    function add_festgreet_meta_boxes() {
	add_meta_box("add_contact_details_festgreet", "Session Details", "iq_add_contact_details_festgreet_meta_box", "festgreets", "normal", "high");
    }
    function iq_add_contact_details_festgreet_meta_box(){
	global $post;
	$custom = get_post_custom( $post->ID );
 
	?>
	<style>
		.width {
			width:95%;
			margin-left:10px;
		}
		p.Input-Box{
    		padding-top:10px;
    		padding-bottom:10px;
    		background: #eaeaea;
		}
		p.Input-Box span{
			display:bock;
			width:100%;
    		margin-left:10px;
		}
		p.info{
			color:red;
		}
	</style>
	<p class="Input-Box">
		<span>
		<label>Session Starts on</label><br />
		<input type="text" required name="from" class="width datepicker1" placeholder="Click here to Pick a date when Greetings will start appearing" value="<?php if(!empty($custom["from"][0])){ echo date('F j, Y',strtotime($custom["from"][0])); } ?>">
		</span>
	</p>
	<p class="Input-Box">
		<span>
		<label>Session Ends on</label><br />
		<input type="text" required name="to" class="width datepicker2" placeholder="Click here to Pick a date when Greetings will stop appearing" value="<?php if(!empty($custom["from"][0])){ echo date('F j, Y',strtotime($custom["to"][0])); } ?>" />
		</span>
	</p>
	<br />
	<hr />
	<p class="info"><b>These settings will help you to Greet your Readers on right time!</b></p>
	<?php
    }

// Save custom field data when creating/updating posts
    function iq_save_festgreet_custom_fields(){
        global $post;
 
        if ( $post ){
            update_post_meta($post->ID, "from", @date('m/d/Y',strtotime($_POST["from"])));
            update_post_meta($post->ID, "to", @date('m/d/Y',strtotime($_POST["to"])));
        }
    }
add_action( 'admin_init', 'add_festgreet_meta_boxes' );
add_action( 'save_post', 'iq_save_festgreet_custom_fields' );

?>