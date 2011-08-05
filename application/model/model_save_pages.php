<?php
class model_save_pages extends base_api {
	
	private $_db;
	
	function __construct(){
		//xxx Is this a good time for a reference????
		$this->_db = &$this->loadDB();	
	}
	
	# NOTE: A Slug is the same as the first part of the URI 
	function saveStaticPage($data){
		if (empty($data)) return FALSE; 

//TODO BUILD Exceptions! 

		$this->_db->prepare("INSERT into static_pages (content) VALUES (:content)")->execute(array(':content' => $data));
	}
}


