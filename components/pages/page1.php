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
		<input type="submit" name="submit" id="submit" value="soumettre"
		'.($valid === 'false' ? 'disabled' : '').'
		/>
		'.($valid === 'false' ? '<span id="invalidMessage" style="color: red;"> Lien non valide</span>' : '').'
	</form>';
	?>
</div>
<script type='text/javascript'>
	function update(element) {
		const value = element.value;
		const invalidMessage = document.getElementById('invalidMessage');
		const submit = document.getElementById('submit');
		const hasError = (value === "<?php echo $lien; ?>");
		submit.setAttribute('disabled', hasError);
		element.style.color = hasError ? 'red' : 'black';
		invalidMessage.style.visibility = hasError ? 'visible' : 'hidden';
	}
</script>