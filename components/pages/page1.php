<?php
	$invalidLinkMessage='<span style="color: red;"> Lien non valide</span>';
	$message=$invalidLinkMessage;
?>
<h2>page1</h2>
<h2> les liens </h2>
<ul>
	<?php include "links.html"; ?>
</ul>
<div>
	<p> Soumettez vos liens !!!</p>
	<?php echo
	'<form name="form" method="post" action="addlink.php">
		<label>lien</label>
		<input type="text" name="lien"
		'.($valid === 'false' ? 'value="'.$lien.'" style="color: red;" onkeyup="update(this)"' : 'value="http://"').' />
		<label>commentaire du lien</label>
		<input type="text" name="commentaire"
		'.($valid === 'false' ? 'value="'.$commentaire.'"' : '').' />
		<input type="hidden" name="css" value="'.$css.'"/>
		<input type="submit" name="submit" value="soumettre"/>
		'.($valid === 'false' ? $message : '').'
	</form>
	
	<script type="text/javascript">
		function update(element) {
			const value = element.value;
			if (value === '.$lien.') {
				element.style.color = "red";
				'.$message=$invalidLinkMessage.';
			} else {
				element.style.color = "black";
				'.($message="").';
			}
		}
	</script>';
	?>
</div>
