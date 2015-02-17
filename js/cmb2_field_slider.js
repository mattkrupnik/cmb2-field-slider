jQuery( document ).ready(function($) {

	// Loop through all cmb-type-slider-field instances and instantiate the slider UI
	$( '.cmb-type-own-slider' ).each(function() {
		var $this       = $( this );
		var $value      = $this.find( '.own-slider-field-value' );
		var $slider     = $this.find( '.own-slider-field' );
		var $text       = $this.find( '.own-slider-field-value-text' );
		var slider_data = $value.data();

		$slider.slider({
			range : 'min',
			value : slider_data.start,
			min   : slider_data.min,
			max   : slider_data.max,
			slide : function( event, ui ) {
				$value.val( ui.value );
				$text.text( ui.value );
			}
		});

		// Initiate the display
		$value.val( $slider.slider( 'value' ) );
		$text.text( $slider.slider( 'value' ) );

	});

});
