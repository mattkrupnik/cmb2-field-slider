<?php
/**
 * Plugin Name: CMB2 Field Slider
 * Plugin URI:  https://github.com/qmatt/cmb2-field-slider
 * Description: Slider field type for Custom Metaboxes and Fields for WordPress
 * Version:     0.1.0
 * Author:      Mateusz Krupnik
 * License:     GPLv2+
 */
 

class OWN_Field_Slider {

	public function hooks() {
		add_filter( 'cmb2_render_own_slider',  array( $this, 'own_slider_field' ), 10, 5 );
		add_action( 'admin_enqueue_scripts', array( $this, 'setup_admin_scripts' ) );
	}

	public function own_slider_field( $field_args, $field_escaped_value, $field_object_id, $field_object_type, $field_type_object ) {
	
		$value = $field_args->escaped_value() ? $field_args->escaped_value() : $field_args->start_value();

		echo '<input type="hidden" id="start" value="'.$value.'">';
		echo '<input type="hidden" id="min" value="'.$field_args->min().'">';
		echo '<input type="hidden" id="max" value="'.$field_args->max().'">';

		echo '<div id="slider"></div>';
			
		echo '<input type="hidden" id="amount" name="' . $field_args->id() . '" readonly />';
			
		echo '<p class="cmb2-metabox-description">'.$field_args->desc().'<span id="value"></span></p>';	 
	}

	 public function setup_admin_scripts( ) {
	 
	 	wp_enqueue_script( 'jquery-ui-slider');
		wp_enqueue_script( 'cmb2_field_slider_js',  plugins_url( 'js/cmb2_field_slider.js', __FILE__ ), array( 'jquery' ), null );
		
		wp_enqueue_style( 'slider_ui', 'http://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css', array(), '1.0', 'all' );
		wp_enqueue_style( 'cmb2_field_slider_css', plugins_url( 'css/cmb2_field_slider.css', __FILE__ ), array(), '1.0', 'all' );

	} 
}
$own_field_slider = new OWN_Field_Slider();
$own_field_slider->hooks();

