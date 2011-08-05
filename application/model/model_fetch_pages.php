<?php
class model_fetch_pages extends base_api {
	
	private $_db;
	
	function __construct(){
		//xxx Is this a good time for a reference????
		$this->_db = &$this->loadDB();	
	}
	
	# NOTE: A Slug is the same as the first part of the URI 
	function getHeader($page_slug){
		return $this->_db
					->prepare("SELECT * FROM page_index WHERE slug = ?")
					->execute(array($page_slug))
					->fetch('row_array');
					
	}
	public function getStaticPageContent($page_id){
		$result = $this->_db
					->prepare("SELECT content FROM static_pages WHERE page_id = ?")
					->execute(array($page_id))
					->fetch('row_array');

		$content = $result ['content'];

		$content = stripslashes($content);

		return $content;
	}

	public function getPersonList($amount = 15, $offset = 0){
		//TODO MAKE THIS WORK
		return $this->_db
					->prepare("SELECT slug,title,description FROM page_index WHERE type = 2") //Select entries of type INTERVIEW/PEOPLE
					->execute(/*array($offset,$amount)*/)//xxx
					->fetch();
	}

					//->prepare("SELECT slug,title,description FROM page_index 
	//WHERE type = 3 LIMIT ?, ? ") // TODO FIX ABOVE SQL STATEMEENT. FIX OFFSET
}


