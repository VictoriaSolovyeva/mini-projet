<h2> les liens </h2>
<ul>
	<?php include "liens.html"; ?>
</ul>
<div>
	<p> Soumettez vos liens !!!</p>
	<form name="form" id="form1" method="post" action="addlink.php">
		<label>lien</label>
		<input type="text" name="lien" value="http://" />
		<label>commentaire du lien</label>
		<input type="text" name="commentaire" />
		<input type="hidden" name="css" value="<?php echo $css; ?>"/>
		<input name="submit" value="soumettre" type="submit" />
	</form>
</div>
