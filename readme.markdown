#PHP-MVC-Fartz

This project is a bare bones PHP implementation of the MVC pattern extracted from my abandoned Aimelire website project.

Your files will be housed in the application folder. Those folder contain example files with instructions in them. 

Framework configuration happens in config/config.php. PHP-MVC-Fartz defaults to the controller specified within that file. 

The Base_API's load methods (loadLibrary, loadView, loadModel,etc) use a Kohana inspired cascade system. If a file within the application or system folders have the same paths (ie. {controller or application}/controllers/controller_index.php), the class autoload system cascades through the application folder AND THEN the system folder.

I wrote it to gain a deeper understanding of the pattern after using CodeIgniter and Kohana. I also wanted to strengthen my knowledge of Object Oriented PHP. It worked, but I will NEVER reinvent the wheel again...
