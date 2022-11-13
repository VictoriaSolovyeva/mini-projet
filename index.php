<?php
	if ($_REQUEST) {
		$page=$_REQUEST["page"];
		$css=$_REQUEST["css"];
	} else {
		$page = "home";
		$css="orange";
	}
	$valid="";
	$lien="";
	$commentaire="";
	if ($_POST) {
		$valid = $_POST["valid"];
		$lien = $_POST["lien"];
		$commentaire = $_POST["commentaire"];
	}
?>

<html lang="fr">
<head>
	<meta charset="utf-8"/>
	<title>Titre du site</title>
	<link rel="icon" href="images/fox.png">
	<?php echo '<link href="css/'.$css.'.css"'. ' rel="stylesheet" type="text/css">'; ?>
</head>
<body>
	<div class="header">
		<?php include "components/header.php"; ?>
	</div>
	<div class="content">
		<?php include "components/pages/".$page.".php"; ?>
	</div>
	<div class="footer">
		<?php include "components/footer.php"; ?>
	</div>
	<script src="js/script.js"></script>
</body>
</html>