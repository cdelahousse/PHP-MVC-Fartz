<?php 
/* FOOTER SECTION of html document.*/ 
?>
	</div> <!-- END #CONTENT -->
  </div>	<!-- END #header-and-content -->
<footer>
	<div id="footer-content">
Paragraphs are the core building block of typography online. You want to make sure you've got a good line-height and horizontal width—aka measure—for good readability. If you stack your lines too close together, or too far apart, lines become harder to read. Like a staircase where the steps are too shallow or too steep. The standard line-height online is something between 1.5 and 2.0 ems.1 If your lines stretch too far across the page reading can feel like a tedious marathon. The standard single-column width online is about 70-90 characters.

    Headings, subheads, block quotations, footnotes, illustrations, captions and other intrusions into the text create syncopations and variations against the base rhythm of regularly leaded lines. These variations can and should add life to the page, but the main text should also return after each variation precisely on beat and in phase.

Robert Bringhurst
	
	</div>
</footer>

<link rel="stylesheet" type="text/css" href="/<?php echo SITE_ROOT_FOLDER ?>/assets/markitup/skins/markitup/style.css" />
<link rel="stylesheet" type="text/css" href="/<?php echo SITE_ROOT_FOLDER ?>/assets/markitup/sets/html/style.css" />
<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
<script>
!window.jQuery && document.write(
	unescape('%3Cscript src="//code.jquery.com/jquery-1.4.3.min.js"%3E%3C/script%3E'))
<?php #NOTE CHANGED TO jQuery.com CND with Paul Irish protocole method ?>
</script>	
<script type="text/javascript" src="/<?php echo SITE_ROOT_FOLDER ?>/assets/markitup/jquery.markitup.js"></script>
<script type="text/javascript" src="/<?php echo SITE_ROOT_FOLDER ?>/assets/markitup/sets/html/set.js"></script>
<script type="text/javascript" >
   $(document).ready(function() {
      $(".markItUp").markItUp(mySettings);
   });
</script>

<style type="text/css">
.markItUpEditor {color: black;background-image: none;}
#markItUpArea {margin-top: 200px;}
<?php if (!isset($content)): ?>
	.markItUpEditor, #content, .markItUp {width:100%;margin:0;padding:0}
	#sidebar{display: none;}
<?php endif; ?>
</style>
  
</body>
</html>
