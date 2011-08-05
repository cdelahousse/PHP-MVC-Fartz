<?php


class controller_peeps extends base_api {
	function __construct()
	{
		$this->loadModel('fetch_pages');
	}

	function index()
	{
		//Modify view so that "reads this" can become 'PLURAL read this' TODO
		//TODO CHANGE Title of this page

		$this->loadView('header', array('header_title' => 'People', 'title' => 'People', 'slug' => 'peeps', 'description' => NULL));

		$data = array('people' => $this->fetch_pages->getPersonList());

		$this->loadView('people_list',$data);
		$this->loadView('footer');
	}

}

