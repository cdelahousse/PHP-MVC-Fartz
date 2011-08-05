<?php 
/* 
 * The Head section was flushed for performance reasons
 **/
?>
	<dl>


<?php 

foreach ($people as $person){
	echo '<dt><a href="/' . SITE_ROOT_FOLDER . '/' . $person['slug'] . '">' . $person['title'] . '</a></dt>'. "\n";
	echo '<dd>' . $person['description'] . '</dd>'. "\n";
}
?>

	</dl>
