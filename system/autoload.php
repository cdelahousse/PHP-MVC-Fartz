<?php
#Creates class autoloading functionality
function __autoload($class) {
	list($type, $name) = explode('_', $class);

	if (file_exists($file = BASE_PATH . 'application/' . $type . '/'. $class . '.php'))
		require_once $file;
	elseif (file_exists($file = BASE_PATH . 'system/' . $type . '/'. $class . '.php'))
		require_once $file;
	elseif (file_exists($file = BASE_PATH . 'application/'. $class . '.php'))
		require_once $file;
	elseif (file_exists($file = BASE_PATH . 'system/'. $class . '.php'))
		require_once $file;
	else die ('File doesn\'t exist so cannot be loaded'); #TODO Custom Error Reporting!!!
}

