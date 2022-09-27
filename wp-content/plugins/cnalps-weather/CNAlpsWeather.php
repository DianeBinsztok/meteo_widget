<?php // création du widget météo

class CNAlpsWeather extends WP_Widget {
 
// constructeur
function __construct() {
 
}
 
// affichage
public function widget( $args, $instance ) {
 
}
 
// back
public function form( $instance ) {
 
}
 
// update
public function update( $new_instance, $old_instance ) {
 
}
}
function CNAlpsWeather_load_widget() {
    register_widget( 'CNAlpsWeather_widget' );
}
add_action( 'widgets_init', 'CNAlpsWeather_load_widget' );
?>