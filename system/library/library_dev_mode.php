<?php
error_reporting(E_ALL | E_STRICT); 
ini_set('display_errors',1);

//Includes the scratch pad, a place to test code before the rest of the 
//application loads
if (file_exists($scratch_pad = BASE_PATH . '/application/scratch_pad.php')) include_once $scratch_pad;

//Insert Break after value. Saves a bit of typing
function _b($value){
	if (is_scalar($value)) {
		$msg = $value . "\n";
		$msg = nl2br($msg);
	} else {
		$msg = 	"\n" . '<br />' . "\n" . '<pre>';
		$msg .= "\n" . var_export($value,TRUE) ;
		$msg .= '</pre>' . "\n";
	}
	echo $msg;
} 

