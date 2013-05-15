<?php 
	$page = 'home';
	include_once('includes/header.inc.php'); 
?>
<div> 
	Premier ajout
	<p>	Un autre ajout </p>
</div>
<ul>
	<li> accueil</li>
	<li> encore un lien</li>
</ul>
<div class="main_home">
	<?php
		/*
		include_once('lib/slideshow.cls.php');
		$slideshow = new SlideShow("data/slideshow/xml/slideshow.xml");
		echo $slideshow -> show($lan);
		*/
	?>
	<div class="slideshow">
		<div class="slidesmask">
			<div class="slides"></div>
		</div>
		<div class="control"></div>
	</div>


	<p><?=$_s['home']['intro1']?></p>
	<p><?=$_s['home']['intro2']?></p>
</div>
<?php include_once 'includes/footer.inc.php'; ?>