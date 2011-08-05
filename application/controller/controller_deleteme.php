<?php

_b(__FILE__); //xxx

class controller_deleteme extends base_api {
	function __construct()
	{

		//$this->loadModel('model_blog');
	}

	function index()
	{
		_b('Index Method');
	
	
	
		//$articles = $this->model_blog->select();
		//$data['articles'] = $articles;
		//$this->loadView('view_blog',$data);
	}

	function add($title="")
	{
		_b('Add Method');
	}
}



