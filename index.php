<?php
	if ($_REQUEST) {
		$page=$_REQUEST["page"];
		$css=$_REQUEST["css"];
	} else {
		$page = "accueil";
		$css="bob";
	}
	$title="L'univers de Bob l'éponge";
	$valid="";
	$link="";
	$comment="";
	if ($_POST) {
		$valid = $_POST["valid"];
		$link = $_POST["lien"];
		$comment = $_POST["commentaire"];
	}
?>

<html lang="fr">
<head>
	<meta charset="utf-8"/>
	<title><?php echo $title; ?></title>
	<link rel="icon" href="images/bob.png">
	<?php echo '<link href="themes/'.$css.'.css"'. ' rel="stylesheet" type="text/css">'; ?>
</head>
<body>
	<header>
		<?php include "components/header.php"; ?>
	</header>
	<main>
		<aside>
			<?php include "components/left.php"; ?>
		</aside>
		<aside>
			<?php include "components/right.php"; ?>
		</aside>
		<article>
			<?php include "components/pages/".$page.".php"; ?>
		</article>
	</main>
	<footer>
		<?php include "components/footer.php"; ?>
	</footer>
</body>
</html>
