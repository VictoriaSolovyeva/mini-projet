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
	<link href="settings.css" rel="stylesheet" type="text/css">
	<link href="index.css" rel="stylesheet" type="text/css">
	<?php echo '<link href="themes/'.$css.'.css"'. ' rel="stylesheet" type="text/css">'; ?>
</head>
<body>
	<div class="header custom-row">
		<?php include "components/header/header.php"; ?>
	</div>
	<div class="body custom-row">
		<div class="side-bar-left">
			side bar left
		</div>
		<div class="content">
			<?php include "components/pages/".$page."/".$page.".php"; ?>
		</div>
		<div class="side-bar-right">
			side bar right
		</div>
	</div>
	<div class="footer custom-row">
		<?php include "components/footer/footer.php"; ?>
	</div>
	<script src="index.js"></script>
</body>
</html>