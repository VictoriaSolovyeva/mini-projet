<h2>page1</h2>
<h2> les liens </h2>
<ul>
	<?php include "services/links.html"; ?>
</ul>
<div>
	<p> Soumettez vos liens !!!</p>
	<form name="form" method="post" action="services/addlink.php">
		<label>lien</label>
		<input type="text" name="lien"
			<?php echo $valid === 'false' ?
				'value="'.$lien.'" style="color: red;" onkeyup="update(this, \''.$lien.'\')"'
				: 'value="http://"';
			?>
		/>
		<label>commentaire du lien</label>
		<input type="text" name="commentaire"
			<?php echo $valid === 'false' ?
				'value="'.$commentaire.'"' : '';
			?>
		/>
		<input type="hidden" name="css" value="'.$css.'"/>
		<input type="submit" name="submit" id="submit" value="soumettre"
			<?php echo $valid === 'false' ? 'disabled' : ''; ?>
		/>
		<?php echo $valid === 'false' ?
			'<span id="invalidMessage" style="color: red;">Lien non valide</span>' : '';
		?>
	</form>
	<?php echo $css; ?>
</div>
<script src="components/pages/page1/page1.js"></script>
