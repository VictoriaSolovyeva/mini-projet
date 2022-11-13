<header>
	<h1 class="titre">Exemple d'architecture d'un site dynamique</h1>
</header>
<nav>
	<?php
		echo '<p><a href="index.php?page=home&css='.$css.'">Accueil</a></p>';
		echo '<p><a href="index.php?page=page1&css='.$css.'">Page 1</a></p>';
		echo '<p><a href="index.php?page=page2&css='.$css.'">Page 2</a></p>';
		echo '<p><a href="index.php?page=page3&css='.$css.'">Page 3</a></p>';
		echo '<p><a href="index.php?page=page4&css='.$css.'">Page 4</a></p>';
	?>
</nav>
