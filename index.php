<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Model Viewer</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="styles-contact.css">
		<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
		<script type="text/javascript" src="scripts.js"></script>
	</head>
	<body>

		<model-viewer
			class="et-model"
			src="assets/toast_trial_big.glb"
			camera-controls
			ar
			ar-modes="scene-viewer webxr quick-look"
			camera-target="0m 10cm 0m"
			camera-orbit="129deg 77deg 0.36m"
		></model-viewer>

		<p>Get current orbit position in degrees, degrees, meters</p>
		<p><button id="et-get-orbit">Get Orbit</button>&nbsp;<span id="et-orbit-values"></span></p>
	</body>
</html>