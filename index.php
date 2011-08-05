<?php

require 'config/config.php';
require 'system/autoload.php';

//Take the initial PATH.
$uri = $_SERVER['REQUEST_URI'];

//Removes  $path (ie. the site's folder) from $uri. NOTE: Case INSENSTIVE


$uri = str_ireplace(SITE_ROOT_FOLDER.'/',"",$uri);

//Root page requests
//Load 'index' controller when URI has /, \, index.xxx or default.xxx
///*TODO REPLACE strstr with regex '^(index|default)\.(.*?){1,4}$'
$pattern = '#^(index|default)\.[a-z0-9\\/]{1,5}$#i';
if ($uri == '/' OR $uri == '\\' OR preg_match($pattern, $uri)) {

	//This means it's requesting index page
	//Sets the first segment to index which will call the index property
	$uri_segment_array[0] = 'index';
}
#If a request is for the index, we don't need to split up the URI into segments
else {

	//TODO NB:filter, sanitize input. NB: Lowercase the URI

	//TODO Pass 'selected page' information to controller using $uri_array

	//divides URI into controller/method/var arra
	$uri_segment_array = preg_split('[\\/]', $uri, -1, PREG_SPLIT_NO_EMPTY);
}

//We set $controller_class initially to the first URI segment
$controller_class = $uri_segment_array[0];

//Routes $controller_class when asked for specific URIs
require_once BASE_PATH . 'application/manual_router.php';

//Load the base API
require_once BASE_PATH . 'system/base.inc.php';

//Let's gett'er going...
$application = new base_api($uri_segment_array);

//Passes URI (page requested) information
$application->controller_ini($controller_class);

#TODO figure out the following.. Scope resolution and stuff... Devividing up 
#base_api... B/C To load a controller, we don't need to instantiate the 
#$application object. So far, the only reason we do so is to pass the URI in 
#the contructor.
//base_api::controller_ini($controller_class);


