<h2>page1</h2>
<h2> les liens </h2>
<ul>
	<?php include "links.html"; ?>
</ul>
<div>
	<p> Soumettez vos liens !!!</p>
	<form name="form" id="form1" method="post" action="addlink.php">
		<label>lien</label>
		<input type="text" name="lien" value="http://" />
		<label>commentaire du lien</label>
		<input type="text" name="commentaire" />
		<input type="hidden" name="css" value="<?php echo $css; ?>"/>
		<input type="submit" name="submit" value="soumettre"/>
	</form>
</div>
