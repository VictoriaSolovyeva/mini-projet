<?php $activeLink = 'class="active-link"'; ?>

<div class="logo" onclick="window.location.href='index.php?page=accueil&css=<?php echo $css; ?>'"></div>
<nav>
	<a
		href="index.php?page=accueil&css=<?php echo $css; ?>"
		<?php if ($page=="accueil") { echo $activeLink; } ?>
	>
		Accueil
	</a>
	<a
		href="index.php?page=transformations&css=<?php echo $css; ?>"
		<?php if ($page=="transformations") { echo $activeLink; } ?>
	>
		Transformations
	</a>
	<a
		href="index.php?page=animations&css=<?php echo $css; ?>"
		<?php if ($page=="animations") { echo $activeLink; } ?>
	>
		Animations
	</a>
	<a
		href="index.php?page=liens&css=<?php echo $css; ?>"
		<?php if ($page=="liens") { echo $activeLink; } ?>
	>
		Liens
	</a>
	<a
		href="index.php?page=contact&css=<?php echo $css; ?>"
		<?php if ($page=="contact") { echo $activeLink; } ?>
	>
		Contact
	</a>
</nav>
