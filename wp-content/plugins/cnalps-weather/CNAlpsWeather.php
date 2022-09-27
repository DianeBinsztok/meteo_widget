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
 
   // Affichage du widget sur le rendu de la page
public function widget( $args, $instance ) {

	extract( $args );
	

	// Check the widget options
	$title = isset( $instance['title'] ) ? apply_filters( 'widget_title', $instance['title'] ) : '';
	$contry = isset( $instance['country'] ) ? $instance['country'] : '';
	$city = isset( $instance['city'] ) ?$instance['city'] : '';

	// WordPress core before_widget hook (always include )
	echo $before_widget;


   echo '<aside class="widget-text wp_widget_plugin_box">';
		// Display widget title if defined
		if ( $title ) {
			echo '<h4>'. $before_title . $title . $after_title.'</h4></br>';
		}else{
			echo '<h4>Météo</h4></br>';
		}

		// Display text field
		if ( $contry ) {
			echo '<p>' . $contry . '</p>';
		}

		// Display textarea field
		if ( $city ) {
			echo '<p>' . $city . '</p>';
		}

	echo '</aside>';

	// WordPress core after_widget hook (always include )
	echo $after_widget;

}
 
// affichage du widget sur le dashboard
public function form( $instance ) {

		// Set widget defaults
		$defaults = array(
			'title'    => 'Météo',
			'country'     => '',
			'city' => '',
		);
		
		// Parse current settings with defaults
		extract( wp_parse_args( ( array ) $instance, $defaults ) ); 

 //$country = $instance['country'] ?? '';
 //$city = $instance['city'] ?? '';
 ?>

 <div>
 <label for="<?= $this->get_field_id('country') ?>">Pays</label>
 <input type="text" name="<?= $this->get_field_name('country') ?>" id="<?= $this->get_field_id('country') ?>"
value="<?= esc_attr($country) ?>">
 </div>
 <div>
 <label for="<?= $this->get_field_id('city') ?>">Ville</label>
 <input type="text" name="<?= $this->get_field_name('city') ?>" id="<?= $this->get_field_id('city') ?>"
  value="<?= esc_attr($city) ?>">
 </div>

 <?php
}
 


// update
public function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
	$instance['country']     = isset( $new_instance['country'] ) ? wp_kses_post( $new_instance['country'] ) : '';
	$instance['city'] = isset( $new_instance['city'] ) ? wp_kses_post( $new_instance['city'] ) : '';
    echo("instance => ".$instance);
    return $instance;
}
}

function CNAlpsWeather_load_widget() {
    register_widget( 'CNAlpsWeather' );
}
add_action( 'widgets_init', 'CNAlpsWeather_load_widget' );
?>

    