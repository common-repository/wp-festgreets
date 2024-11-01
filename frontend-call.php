<?php

// Calling functions to frontend
function iq_show_session_result($attributes){
	if(isset($attributes['width']) && $attributes['width'] >0){
	$width=$attributes['width'];	
	}else{
	$width=150;	
	}
	
	if(isset($attributes['height']) && $attributes['height'] >0){
	$height=$attributes['height'];	
	}else{
	$height=150;	
	}
	$size=array($width,$height);
		

// find todays date
//$date_format =  get_option('date_format');  
 $date = date('m/d/Y'); 

$args = array(
  'posts_per_page'    => -1,
  'post_type'         => 'festgreets',
  'post_status'       => 'publish',
  'meta_query'        => array(
    
	'relation' => 'AND',	
    array(
        'key'       => 'to',
        'value'     => $date,
		'compare'   => '>=',
		
		
    ),
    array(
        'key'       => 'from',
        'value'     => $date,
		'compare'   => '<=',
		
		
    ),
  
  ),
);

// WP Query
$the_query = new WP_Query( $args );
?>
<?php
$count=0;
 if( $the_query->have_posts() ): ?>
	<?php while ( $the_query->have_posts() ) : $the_query->the_post();  if($count ==0 ) { ?>
		
			<a title="<?php echo the_title(); ?>">
			<?php the_post_thumbnail($size); ?>
			</a>
	<?php 
	}
	$count++;
	endwhile; ?>
<?php endif; ?>
<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
<?php
}
add_shortcode( 'showSession', 'iq_show_session_result' );

?>
