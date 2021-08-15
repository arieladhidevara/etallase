jQuery(document).ready(function ($) {

	// Vars.
	const model = document.querySelector( 'model-viewer.et-model' );

	// Helpers.
	function radians_to_degrees( radians ) {
		var pi = Math.PI;
		return radians * (180/pi);
	}

	// Listeners.
	$( '#et-get-orbit' ).on( 'click', function( e ) {

		e.preventDefault();

		const
			orbit  = model.getCameraOrbit(),
			theta  = Math.floor( radians_to_degrees( orbit.theta ) ),
			phi    = Math.floor( radians_to_degrees( orbit.phi ) ),
			radius = ( Math.round(  orbit.radius * 100 ) / 100 ).toFixed( 2 )
		;

		$( '#et-orbit-values' ).text( `Theta: ${theta}deg | Phi: ${phi}deg | Radius: ${radius}m | camera-orbit="${theta}deg ${phi}deg ${radius}m"` );
	} )
});