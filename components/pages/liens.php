<div class="links bob-text">
	<h1>Liens</h1>
	<p>Quelques liens utiles:</p>
	<ul>
		<?php include "services/links.html"; ?>
	</ul>
	<p>Soumettez vos liens !!!</p>
	<form name="form" method="post" action="services/addlink.php">
		<label>lien</label>
		<input type="text" name="lien" <?php echo $valid === 'false' ?
											'value="' . $link . '" style="color: red;" onkeyup="update(this, \'' . $link . '\')"'
											: 'value="http://"';
										?> />
		<label>commentaire du lien</label>
		<input type="text" name="commentaire" <?php echo $valid === 'false' ?
													'value="' . $comment . '"' : '';
												?> />
		<input type="hidden" name="css" value="<?php echo $css; ?>" />
		<input type="submit" name="submit" id="submit" value="soumettre" <?php echo $valid === 'false' ? 'disabled' : ''; ?> />
		<?php echo $valid === 'false' ?
			'<span id="invalidMessage" style="color: red;">Lien non valide</span>' : '';
		?>
	</form>
</div>
<script src="components/pages/liens.js"></script>