<?php 
function custom_post(){
	register_post_type('options',array(
	'public'		=>true,
	'labels'		=>array(
		'name'		=>'Options',
		'singular_name'=>'Options',
	),
	'supports'	=>array(' ',' ',' ',' ',' ')
));
}
add_action('init','custom_post');
