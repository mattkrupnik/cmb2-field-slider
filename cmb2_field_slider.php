<?php
/**
 * Plugin Name: CMB2 Field Slider
 * Plugin URI:  https://github.com/mattkrupnik/cmb2-field-slider
 * Description: Slider field type for Custom Metaboxes and Fields for WordPress
 * Version:     1.1.2
 * Author:      Matt Krupnik
 * Author URI:  http://mattkrupnik.com
 * License:     GPLv2+
 */


class OWN_Field_Slider {

	const VERSION = '1.1.2';

	public function hooks() {
		add_filter( 'cmb2_render_own_slider',  array( $this, 'own_slider_field' ), 10, 5 );
	}

	public function own_slider_field( $field, $field_escaped_value, $field_object_id, $field_object_type, $field_type_object ) {

		// Only enqueue scripts if field is used.
		$this->setup_admin_scripts();

		echo '<div class="own-slider-field"></div>';

		echo $field_type_object->input( array(
			'type'       => 'hidden',
			'class'      => 'own-slider-field-value',
			'readonly'   => 'readonly',
			'data-start' => absint( $field_escaped_value ),
			'data-min'   => $field->min(),
			'data-max'   => $field->max(),
			'data-step'  => $field->step(),
			'desc'       => '',
		) );

		echo '<span class="own-slider-field-value-display">'. $field->value_label() .' <span class="own-slider-field-value-text"></span></span>';

		$field_type_object->_desc( true, true );
	}

	public function setup_admin_scripts( ) {

		wp_enqueue_script( 'cmb2_field_slider_js',  plugins_url( 'js/cmb2_field_slider.js', __FILE__ ), array( 'jquery', 'jquery-ui-slider' ), self::VERSION );

		wp_register_style( 'slider_ui', '//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.min.css', array(), '1.0' );
		wp_enqueue_style( 'cmb2_field_slider_css', plugins_url( 'css/cmb2_field_slider.css', __FILE__ ), array( 'slider_ui' ), self::VERSION );

	}
}
$own_field_slider = new OWN_Field_Slider();
$own_field_slider->hooks();
