<?php
#TODO Make cache!
class library_css {
	private $css_folder_path;
	private $css_file_list;
	
	private $code;



	public function __construct() {
		$this->css_folder_path = BASE_PATH . CSS_FOLDER;
		$this->css_file_list = glob($this->css_folder_path . '/*');
	}

	public function combine(){
		foreach ($this->css_file_list as $css_file) {
			$this->code  .= file_get_contents($css_file);
		}
		return $this;			
	}

	public function serve(){
		header("Content-type: text/css");//SHOULD I SET EXPIRES? xxx
		echo $this->code;
		exit;
	}
	public function combineAndServeChunks(){
		ob_implicit_flush();
		header("Content-type: text/css");//SHOULD I SET EXPIRES? xxx
		foreach ($this->css_file_list as $css_file) {
			echo file_get_contents($css_file);
		}
		exit;
	}
}
