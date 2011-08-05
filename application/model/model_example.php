<?php
class model_example extends base_api {
	
	private $_db;
	
	function __construct(){
		$this->_db = $this->loadDB();
	}
	
	function doStuff(){
		$this->_db->prepare('Select * from SOME_TABLE');
	}
}


