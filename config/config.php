<?php
//Define our site URL
define("SITE_URL", "http://localhost");
 
//leave as '/' if it is in the root of the domain.
define ('SITE_ROOT_FOLDER', 'PHP-MVC-Lite');

//Define our basepath: where the framework's root and index.php will reside vis 
//a vis the server
define ('BASE_PATH', str_replace('\\', '/', dirname(__DIR__)) . '/' );

// Folder that will house all php files
define('CSS_FOLDER', 'dynamic_assets/css');

//To route http requests for CSS
define('CSS_URI', 'css'); 

//Name of default controller class
define('DEFAULT_CONTROLLER_NAME', 'default');

//SERVER information
define('DB_TYPE', 'mysql');

define('DB_HOST', '');

define('DB_NAME', '');

define('DB_USER', '');

define('DB_PASS', '');

//DEV settings
define ('DEV_MODE', TRUE);

if (DEV_MODE == TRUE) {
	require BASE_PATH . 'system/library/library_dev_mode.php';
} else {
	//TODO: Create Custom error handling for production mode or something (send 
	//me and email or something)
	error_reporting(0);
}

//Add application global constants here!
define (MY_GLOBAL_VAR, 'SOME DATA');
