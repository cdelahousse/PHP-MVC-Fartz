<?php 
/* HEAD SECTION of html document.*/
?>


<!doctype html>  
 
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/  | xxx -CD REMOVED no-js class --> 
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]--> 
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]--> 
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]--> 
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]--> 
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]--> 
<head> 
  <meta charset="utf-8"> 
 



<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">




  <title><?php echo $title; ?></title> 
  <link rel="stylesheet" href="/<?php echo SITE_ROOT_FOLDER; ?>/css/?v=2"> <!--  !!!!!  --> <!-- xxx CD - Make sure to add this keep CSS above JS links or else it blocksdownloads in IE. http://www.stevesouders.com/blog/2009/10/13/font-face-and-performance/ --> 
</head> 
<body>
  <div id="header-and-content">
    <header>
		<h2><?php echo $title; ?></h2>
		<h1><a href="/" alt="The Reading List">reads this.</a></h1>
    </header>
	<div id="sidebar">
		<nav>
			<a href="/<?php echo SITE_ROOT_FOLDER; ?>">Home</a>
			<a href="/<?php echo SITE_ROOT_FOLDER; ?>/peeps/">People</a>
			<a href="/<?php echo SITE_ROOT_FOLDER; ?>/about/">About</a>
		</nav>
		<div id="about-site">
			<h3>A bit about the site...</h3>
			<p>Questions for people of note about what they read. Their favourite books, feeds and other interesting stuff.</p>
		</div>
	</div>
	<div id="content">
