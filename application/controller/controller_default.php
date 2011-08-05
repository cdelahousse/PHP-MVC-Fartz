<?php
class controller_default extends base_api {

	private $header_info;


	public function index() {
		#######
		#Get header info first so that it can be flushed to the user and the rest of the page built.
		######
		$this->loadModel('fetch_pages');

		$page_req = $this->uri_segment_array[0];//xxx SHOULD THIS BE SANITIZED? 
		$header = $this->fetch_pages->getHeader($page_req); 

		$this->header_info = $header;

		//Falsey header values mean the page doesn't exist
		if (!$header){
				# TODO TO DO CREATE 404
				parent::controller_ini('404');
				exit;
		}	

		switch ($page_req) {
			case 'index':
				$this->_loadHomePage();
				break;
			
			//If it isn't a 404 or the index page, then the page must exist.  
			default:
				//Load it.
				$this->_loadStaticPage();
				break;
		}

		
	
		//if ($this->header_info == FALSE) {
			//# TODO TO DO CREATE 404
			//parent::controller_ini('404');
			//exit;
		//}
		


		//Serve the page
		$this->_loadStaticPage();
	}


	#Loads and serves index page
	private function _loadHomePage(){
		$this->_sendPageHeader('Home');


		//Get static front page content
		$this->_sendStaticPageContent();  

		//TODO Combine database call from _SendStaticpagecontent and 
		//Fetch_pages->getPersonList();

		$people_list = $this->fetch_pages->getPersonList();

		$data = array('people' => $people_list);
		$this->loadView('people_list',$data);
		flush();

		$this->_sendPageFooter();
	}


	#Loads and serves page parts
	private function _loadStaticPage(){
		$this->_sendPageHeader($this->header_info['title']);
		$this->_sendStaticPageContent();
		$this->_sendPageFooter();
	}

	#Send the header of the document (stuff between the <head> tags)
	private function _sendPageHeader($header_title = NULL) {

		//Create data var for header
		$data = $this->header_info;

		//Choose header name
		if (!empty($header_title)) $data['header_title'] = $header_title;

		#XXX Should I use parent:: or $this->?
		parent::loadView('header', $data);
		flush();
	}
	private function _sendStaticPageContent(){

		$content = $this->fetch_pages->getStaticPageContent($this->header_info['id']);
		
		$data = array('content' => $content); 

		parent::loadView('body',$data);
		flush();
	}

	private function _sendPageFooter(){
		parent::loadView('footer');
		flush();
	}
}


