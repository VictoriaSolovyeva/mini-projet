<h2>page1</h2>
<h2> les liens </h2>
<ul>
	<?php include "links.html"; ?>
</ul>
<div>
	<p> Soumettez vos liens !!!</p>
	<?php
	echo ($valid === 'false' ? '<p> lien non valide</p>' : '').'
	<form name="form" id="form1" method="post" action="addlink.php">
			<label>lien</label>
			<input type="text" name="lien" '.($valid === 'false' ? 'value="'.$lien.'" style="color: red;"' : 'value="http://"').' />
			<label>commentaire du lien</label>
			<input type="text" name="commentaire" value="'.($valid === 'false' ? $commentaire : '').'" '.($valid === 'false' ? 'style="color: red;"' : '').' />
			<input type="hidden" name="css" value="'.$css.'"/>
			<input type="submit" name="submit" value="soumettre"/>
		</form>';
	?>
</div>
