jQuery( document ).ready(function($) {
   
    $( "#slider" ).slider({
      range: "min",
	  value: $( "#start" ).val(),
      min: $( "#min" ).val(),
      max:  $( "#max" ).val(),

      slide: function( event, ui ) {
        $( "#amount" ).val( ui.value );
		 $( "span#value" ).text( ui.value );
      }
    });
    $( "#amount" ).val( $( "#slider" ).slider( "value" ) );
	$( "span#value" ).text( $( "#slider" ).slider( "value" ) );
	
});