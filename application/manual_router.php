<?php 
//MANUAL ROUTER
//To route the URI manually, add an extra case below

//Overrides controller selection
switch ($uri_segment_array[0]) {
	//case 'farts':
		//$controller_class = 'deleteme';//xxx
		//break;
	case 'home':
		$controller_class = DEFAULT_CONTROLLER_NAME;
		break;

#DEFAULT Routes
	case CSS_URI:  
		$controller_class = 'css';
		break;
	case 'index':
		$controller_class = DEFAULT_CONTROLLER_NAME;
		break;
}
