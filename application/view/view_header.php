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
 
  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess --> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
 
  <title><?php echo $title; ?></title> 
  <meta name="description" content="<?php echo $description; ?>"> 
  <meta name="author" content="Christian Delahousse"> <!--  !!!!!  --> 


  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
 
  <link rel="shortcut icon" href="/<?php echo SITE_ROOT_FOLDER; ?>/favicon.ico"> 
  <link rel="apple-touch-icon" href="/<?php echo SITE_ROOT_FOLDER; ?>/apple-touch-icon.png"> 
 
  <link rel="stylesheet" href="/<?php echo SITE_ROOT_FOLDER; ?>/css/?v=2"> <!--  !!!!!  --> <!-- xxx CD - Make sure to add this keep CSS above JS links or else it blocksdownloads in IE. http://www.stevesouders.com/blog/2009/10/13/font-face-and-performance/ --> 
 
  <!-- Uncomment if you are specifically targeting less enabled mobile browsers
  <link rel="stylesheet" media="handheld" href="css/handheld?v=2">  --> 
 
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]--> <!-- xxx CD - I only need HTML5 shiving, not Modernizr capability detection -->

<!-- <script src="//cachedcommons.org/cache/modernizr/1.5.0/javascripts/modernizr-min.js"></script> -->
</head> 
<body id="<?php echo $slug;?>"><?php #Body as container: see http://camendesign.com/code/developpeurs_sans_frontieres ?>
	<div id="header-and-content">
	<header>
	<?php //Header title/page_title area
		if (!isset($header_title)): ?>
		<h2><?php echo $title; ?></h2>
		<h1><a href="/" alt="The Reading List">reads this.</a></h1>
	<?php else: ?>
		<h1 id="header-title"><a href="/" alt="The Reading List"><?php echo $header_title; ?></a></h1>
	<?php endif; ?>
	</header>
	<div id="sidebar">
		<nav>
			<a href="/<?php echo SITE_ROOT_FOLDER; ?>/">Home</a>
			<a href="/<?php echo SITE_ROOT_FOLDER; ?>/peeps/">People</a>
			<a href="/<?php echo SITE_ROOT_FOLDER; ?>/about/">About</a>
		</nav>
		<div id="about-site">
			<h3>A bit about the site...</h3>
			<p>Questions for people of note about what they read. Their favourite books, feeds and other interesting stuff.</p>
		</div>
	</div>
	<div id="content">
