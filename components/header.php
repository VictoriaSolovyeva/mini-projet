<header>
	<h1 class="titre">Exemple d'architecture d'un site dynamique : <? echo $titre; ?> </h1>
</header>
<nav>
	<?php
		echo '<p><a href="index.php?page=home&css='.$css.'">Accueil</a></p>';
		echo '<p><a href="index.php?page=page1&css='.$css.'">À propos</a></p>';
		echo '<p><a href="index.php?page=page2&css='.$css.'">haut de page</a></p>';
		echo '<p><a href="index.php?page=page3&css='.$css.'">navigation</a></p>';
		echo '<p><a href="index.php?page=page4&css='.$css.'">pied de page</a></p>';
	?>
</nav>
