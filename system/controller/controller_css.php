<?php
class controller_css extends base_api{
	function index(){
		$css = new library_css();

		$css->combineAndServeChunks(); //TODO Change to load cache
		//XXX Also, the css library should not be serving css files, that's the 
		//controller's job. Basically, this controller should be getting the 
		//code per file via the library (maybe I should convert it to a model?)
		//and serving it with a  header. The library should do all the 
		//minification but the controller should be be serving the headers and 
		//flushing stuff...
	} 
}
