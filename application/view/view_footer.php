<?php 
/* FOOTER SECTION of html document.*/ 
?>
	</div> <!-- END #CONTENT -->
  </div>	<!-- END #header-and-content -->
<footer>
	<div id="footer-content">
	Copyright &copy; <?php echo date('Y'); ?> <a href="http://delahousse.ca">Christian Delahousse</a>. <span class="message">Site coded in a PHP framework built from scratch over far too many nights. Learn from my mistake, kids. Friends don&#39;t let friends build frameworks.</span> 
	</div>
</footer>

<!-- Javascript at the bottom for fast page loading -->

<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
<script>
!window.jQuery && document.write(
	unescape('%3Cscript src="//code.jquery.com/jquery-1.4.3.min.js"%3E%3C/script%3E'))
<?php #NOTE CHANGED TO jQuery.com CND with Paul Irish protocole method ?>
</script>

<?php
/*TODO FIX THIS! 
<!-- scripts concatenated and minified via ant build script-->
<script src="/<?php echo SITE_ROOT_FOLDER; ?>js/plugins.js"></script>
<script src="/<?php echo SITE_ROOT_FOLDER; ?>js/script.js"></script>
<!-- end concatenated and minified scripts-->
*/
?>

<!--[if lt IE 7 ]>
<script src="js/libs/dd_belatedpng.js"></script>
<script> .fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
<![endif]-->


<!-- asynchronous google analytics: mathiasbynens.be/notes/async-analytics-snippet 
change the UA-XXXXX-X to be your site's ID --><?php #XXX CAN I USE // protocol method on this?>
<script>
var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']];
(function(d, t) {
var g = d.createElement(t),
	s = d.getElementsByTagName(t)[0];
g.async = true;
g.src = ('https:' == location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
s.parentNode.insertBefore(g, s);
})(document, 'script');
</script>
  
</body>
</html>
