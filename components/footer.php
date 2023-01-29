<?php $activeLink = 'class="active-link"'; ?>

<div>
	<a
		href="index.php?page=<?php echo $page ?>&css=bob"
		<?php if ($css=="bob") { echo $activeLink; } ?>
	>
		Bob
	</a>
	<a
		href="index.php?page=<?php echo $page ?>&css=patrick"
		<?php if ($css=="patrick") { echo $activeLink; } ?>
	>
		Patrick
	</a>
	<a
		href="index.php?page=<?php echo $page ?>&css=print"
		<?php if ($css=="print") { echo $activeLink; } ?>
	>
		CSS print
	</a>
	<a href="index.php?page=<?php echo $page ?>&css=">CSS vide</a>
</div>
