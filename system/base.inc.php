<?php
class base_api {
	protected $uri_segment_array;
	private $class;
	
	public	function __construct($uri_segment_array) {
		//xxx Good place for reference?
		$this->uri_segment_array =& $uri_segment_array;
	}

	 

	function controllerLoader ($controller){

		return $this;

		//$file = BASE_PATH . 'application/controller/'. $this->class .'.php';		

		//Load default controller if there is no matching controller file or an 
		//index ('/', '\', index.html, index.php, etc, is requested)
		//if($this->uri_segment_array[0] == 'index') {

			//require_once BASE_PATH . 'application/controller/controller_' . DEFAULT_CONTROLLER_NAME . '.php';

			//$this->class = 'controller_'. DEFAULT_CONTROLLER_NAME;

		//}
		//If a controller file does not exist and there is not an URI overide 
		//via the manual router, load the default controller
		//if (!file_exists($file) && $this->uri_segment_array[0] = $class){
			//TODO Set up 404page. ??? Where should it go? In the controller 
			//or in the controller loader?
			//ANSWER: I have a feeling it should be in the default controller index 
			//because all requests for controllers that don't exist go there.
			//NOTE: I think development needs to continue the way it,s going, but 
			//eventually, we'll need to move some of this extra that that will 
			//handle extra functionality out of controller_default.php and into 
			//another file so that the former can stay clean and mirror the other 
			//controllers.

			
			//$this->class = 'controller_'. DEFAULT_CONTROLLER_NAME;
				
		//}
	}
	

	
	//Initialise controller
	 function controller_ini($controller){
		$this->class = 'controller_' . $controller;

		if (	(!file_exists(BASE_PATH . 'application/controller/'. $this->class .'.php') && 
				 !file_exists(BASE_PATH . 'system/controller/'. $this->class .'.php')	) 
				&&  $this->uri_segment_array[0] == $controller ){

					$this->class = 'controller_'. DEFAULT_CONTROLLER_NAME;
			}


		$controller = new $this->class($this->uri_segment_array);

		//if (class_exists($this->class)) {

			////Loads instance of controller class named {$class} define in				
			////$file and pass the URI
			//$controller = new $this->class($this->uri_segment_array);

		//} else {

			//die(" $this->class (class) does not exist"); #custom error reporting TODO
		//}

		//If second segment of URI exists and is a method within the 
		//controller, load that method and pass the URI
		if(array_key_exists(1, $this->uri_segment_array) &&
		   method_exists($controller, $this->uri_segment_array[1])){

			$controller->{$this->uri_segment_array[1]}();
		//If not, load the index method and pass the URI
		} else {
			$controller->index();
		}
	}


	function loadView($view_name,$vars="") {
		$view = 'view_' . $view_name;
		if(is_array($vars) && count($vars) > 0)
			extract($vars, EXTR_PREFIX_SAME, "wddx");

		//Try including the view in the application folder, if not, include the 
		//one in the system folder.
		if (!file_exists($file = BASE_PATH . 'application/view/'. $view. '.php'))
			$file = BASE_PATH . 'system/view/'. $view. '.php';

		require_once $file;	
	}

	function loadModel($model_name)
	{
		$model = 'model_' . $model_name;
		$this->$model_name = new $model;
	}

	function loadLibary($library_name)
	{
		$libary = 'libary_' . $library_name;
		$this->$model_name = new $libary;
	}
	
	function &loadDB(){//xxx Do I need this reference for aggregation?
		//TODO Fix this this so that it loads other drivers and what not. This 
		//is hideous... Fix the entire DB class and driver situation. It's 
		//HORRIBLE guy...

		require_once BASE_PATH . 'system/library/driver/driver_pdo.php';
		$db = new driver_pdo();
		
		//Will return by reference...	xxx Will it?
		return $db;

	}
	public function supaFlush(){
		if (ob_get_level() == 0) {

			#Taken from http://php.net/manual/en/function.ob-gzhandler.php
			if(!ob_start("ob_gzhandler")) ob_start();
		}

		else {
			ob_flush();
			flush();
		}
	}

}

