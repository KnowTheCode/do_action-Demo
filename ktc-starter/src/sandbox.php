<?php
namespace KnowTheCode;

add_action( 'created_a_title_enhancer_instance', __NAMESPACE__ . '\title_enhancer_created', 10, 1 );
function title_enhancer_created( $instance ) {
//	$instance_memory_id = spl_object_hash( $instance );

//	d( $instance_memory_id );
//	d( $memory_id );

//	echo $memory_id == $instance_memory_id ? 'yes it is' : 'nope';
}

add_action( 'loop_start', function(){

//	$increment_demo = 1;
//
//	d( $increment_demo++ );
//	d( $increment_demo );
//	d( ++$increment_demo );
//	d( $increment_demo );
//	do_action( 'created_a_title_enhancer_instance', '', 'loop_start' );
});