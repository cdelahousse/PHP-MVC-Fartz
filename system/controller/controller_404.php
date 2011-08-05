<?php
class controller_404 extends base_api {

	public function __contruct(){
		header('HTTP/1.1 404 Not Found');
	}

	function index() {
		#TODO: Make better 404 page
		parent::loadView('404');	
	}

}


