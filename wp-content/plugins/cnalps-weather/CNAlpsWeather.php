<?php 
/*
Plugin Name: CNAlpsWeather
Plugin URI: http://Pas encore de page de page dédiée
Description: un widget qui affiche la météo
Version: 0.1
Author: diane
Author URI: http://Pas de page d'auteur
License: cnalps-weather
*/

class CNAlpsWeather extends WP_Widget {
 
// constructeur
function __construct() {
    parent::__construct(
        'CNAlpsWeather',
        'Météo',
		array(
			'customize_selective_refresh' => true,
		)
	);
}
 
// Display the widget
public function widget( $args, $instance ) {

	extract( $args );

	// Check the widget options
	$title    = isset( $instance['title'] ) ? apply_filters( 'widget_title', $instance['title'] ) : '';
	$text     = isset( $instance['text'] ) ? $instance['text'] : '';
	$textarea = isset( $instance['textarea'] ) ?$instance['textarea'] : '';
	$select   = isset( $instance['select'] ) ? $instance['select'] : '';
	$checkbox = ! empty( $instance['checkbox'] ) ? $instance['checkbox'] : false;

	// WordPress core before_widget hook (always include )
	echo $before_widget;

   // Display the widget
   echo '<div class="widget-text wp_widget_plugin_box">';

		// Display widget title if defined
		if ( $title ) {
			echo $before_title . $title . $after_title;
		}

		// Display text field
		if ( $text ) {
			echo '<p>' . $text . '</p>';
		}

		// Display textarea field
		if ( $textarea ) {
			echo '<p>' . $textarea . '</p>';
		}

		// Display select field
		if ( $select ) {
			echo '<p>' . $select . '</p>';
		}

		// Display something if checkbox is true
		if ( $checkbox ) {
			echo '<p>Something awesome</p>';
		}

	echo '</div>';

	// WordPress core after_widget hook (always include )
	echo $after_widget;

}
 
// back
public function form( $instance ) {
 // Set widget defaults
 print_r($instance);
}
 
// update
public function update( $new_instance, $old_instance ) {
	$instance = $old_instance;
	$instance['title']    = isset( $new_instance['title'] ) ? wp_strip_all_tags( $new_instance['title'] ) : '';
	$instance['text']     = isset( $new_instance['text'] ) ? wp_strip_all_tags( $new_instance['text'] ) : '';
	$instance['textarea'] = isset( $new_instance['textarea'] ) ? wp_kses_post( $new_instance['textarea'] ) : '';
	$instance['checkbox'] = isset( $new_instance['checkbox'] ) ? 1 : false;
	$instance['select']   = isset( $new_instance['select'] ) ? wp_strip_all_tags( $new_instance['select'] ) : '';
	return $instance;
}
}
function CNAlpsWeather_load_widget() {
    register_widget( 'CNAlpsWeather' );
}
add_action( 'widgets_init', 'CNAlpsWeather_load_widget' );
?>