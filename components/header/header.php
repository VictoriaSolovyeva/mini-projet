<div class="row">
	<div class="block1">
		<img src="images/fox.png" alt="logo" class="logo tab">
	</div>
	<div class="block2">
		<h1><?php echo $title; ?></h1>
	</div>
	<div class="block3">
		<nav>
			<span class="tab cliquable">
				<?php echo '<a href="index.php?page=home&css='.$css.'">Accueil</a>'; ?>
			</span>&nbsp;
			<span class="tab cliquable">
				<?php echo '<a href="index.php?page=page1&css='.$css.'">Page 1</a>'; ?>
			</span>&nbsp;
			<span class="tab cliquable">
				<?php echo '<a href="index.php?page=page2&css='.$css.'">Page 2</a>'; ?>
			</span>&nbsp;
			<span class="tab cliquable">
				<?php echo '<a href="index.php?page=page3&css='.$css.'">Page 3</a>'; ?>
			</span>&nbsp;
			<span class="tab cliquable">
				<?php echo '<a href="index.php?page=page4&css='.$css.'">Page 4</a>'; ?>
			</span>&nbsp;
		</nav>
	</div>
</div>
