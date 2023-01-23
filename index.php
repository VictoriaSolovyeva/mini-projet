<?php
if ($_REQUEST) {
	$page = $_REQUEST["page"];
	$css = $_REQUEST["css"];
} else {
	$page = "accueil";
	$css = "bob";
}
$title = "L'univers de Bob l'éponge";
$valid = "";
$link = "";
$comment = "";
if ($_POST) {
	$valid = $_POST["valid"];
	$link = $_POST["lien"];
	$comment = $_POST["commentaire"];
}
?>

<html lang="fr">

<head>
	<meta charset="utf-8" />
	<title><?php echo $title; ?></title>
	<link rel="icon" href="images/bob.png">
	<?php echo '<link href="themes/' . $css . '.css"' . ' rel="stylesheet" type="text/css">'; ?>
</head>

<body>
	<header>
		<?php include "components/header.php"; ?>
	</header>
	<main>
		<article>
			<div id="site-logo"></div>
			<div class="transparent">
				<?php include "components/pages/" . $page . ".php"; ?>
			</div>
			<div class="bubbles">
				<div class="bubble"></div>
				<div class="bubble"></div>
				<div class="bubble"></div>
				<div class="bubble"></div>
				<div class="bubble"></div>
				<div class="bubble"></div>
				<div class="bubble"></div>
				<div class="bubble"></div>
				<div class="bubble"></div>
				<div class="bubble"></div>
			</div>
			<div id="carlos" class="character">
				<div class="normal"></div>
			</div>
			<div id="patrick" class="character">
				<div class="normal"></div>
			</div>
			<div id="bob" class="character">
				<div class="normal"></div>
			</div>
			<script src="scripts/move.js"></script>
			<script src="scripts/dance-control.js"></script>
			<script src="scripts/cube.js"></script>
		</article>
	</main>
	<footer>
		<?php include "components/footer.php"; ?>
	</footer>
</body>

</html>