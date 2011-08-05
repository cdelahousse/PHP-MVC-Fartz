#PHP-MVC-Fartz

This project is a bare bones PHP implementation of the MVC pattern extracted from my abandoned [Aimelire](http://delahousse.ca/aimelire/) website project.

Your files will be housed in the application folder. Those folder contain example files with instructions in them. 

###Routing
Routes can be configured in the application/manual_router.php file

###Config
Framework configuration happens in config/config.php. PHP-MVC-Fartz defaults to the controller specified within that file. If devmode is enabled, the dev mode library is loaded.

###Cascade
The Base_API's load methods (loadLibrary, loadView, loadModel,etc) use a Kohana inspired cascade system. If a file within the application or system folders have the same paths (ie. {controller or application}/controllers/controller_index.php), the class autoload system cascades through the application folder AND THEN the system folder.

###CSS
The framework was written so that CSS would be served from the siteurl.com/css/  uri. The CSS files in the dynamic_assets/css folder are concatenated and served. I was going to minify and cache them... but never got around to it...

###Why?
I wrote it to gain a deeper understanding of the pattern after using CodeIgniter and Kohana. I also wanted to strengthen my knowledge of Object Oriented PHP. It worked, but I will NEVER reinvent the wheel again...
