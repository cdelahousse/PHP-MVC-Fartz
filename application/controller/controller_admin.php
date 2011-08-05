<?php
class controller_admin extends base_api {

	public function index(){
	}

	public function add() { 


		################################
		$pass = PASS; //xxx
		#############################



		if (isset($_POST['content'], $_POST['submit']) && $_POST['pass'] == $pass){
			$this->loadModel('save_pages');

			//TODO Figure out sanatisation. PDO does it a bit in the Save_pages 
			//model but it should be done here too
			$sanitised = $_POST['content'];

			//TODO SANITISE USER INPUT!

			$this->save_pages->saveStaticPage($sanitised);
		}
		else if (isset($_POST['content'])) {
			#TODO Create preview view instead of current
			$stuff =array('title' => 'Add new person', 'content' => $_POST['content']); 


		}
		else {
		}

		$stuff['title'] = 'Add new person';
	   $stuff['slug'] = 'add-new';	
		$this->loadView('header_private', $stuff);
		$this->loadView('add_new_person', $stuff);
		$this->loadView('footer_private', $stuff);
	}

}
