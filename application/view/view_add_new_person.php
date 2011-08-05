<?php 
?>

<?php if (isset($content)) echo $content;?>



<form action="add" method="post" id="markItUpArea">

<textarea class="markItUp" name="content">
<?php 
if (isset($content))
	echo $content;
else 
include BASE_PATH . 'assets/dummytext.php';
?>

</textarea>

<input type="text" value="pass" name="pass">
<input type="submit" value="Preview" name="preview">

<?php if (isset($content)): ?>
<input type="submit" value="Submit" name="submit">
<?php endif ?>


</form>


