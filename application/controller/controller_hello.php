<?php
class controller_hello extends base_api {

	public function index() {

		//Variables to pass to view. They will be extracted and defined in the view
		$data = array(
			'content' => 'Hello World!',
			'more' => '<a href="/' . SITE_ROOT_FOLDER . '/hello/goodbye/">Check out another 
			controller method</a>');

		//Load hello_word view and pass data 
		$this->loadView('hello_world',$data);

	}
	public function goodbye() {

		$data = array(
			'content' => 'Goodbye World!',
			'more' => '<a href="/' . SITE_ROOT_FOLDER . '/hello/">Go back</a>');

		$this->loadView('hello_world',$data);
	}
} 
