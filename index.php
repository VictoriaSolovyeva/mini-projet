<?php
	if ($_REQUEST) {
		$page=$_REQUEST["page"];
		$css=$_REQUEST["css"];
		$titre=$_REQUEST["titre"];
		$lien=$_REQUEST["lien"];
		$commentaire=$_REQUEST["commentaire"];
		$valid=$_REQUEST["valid"];
	} else {
		$page = "home";
		$titre = "Introduction";
		$css="css0";
	}
?>

<html lang="fr">
<head>
	<title><?php echo "Site dynamique : ".$titre ?></title>
	<meta charset="utf-8"/>
	<?php echo '<link href="css/'.$css.'.css"'. ' rel="stylesheet" type="text/css">'; ?>
</head>
<body>
	<?php
		// inclusion des fichiers
		include "components/header.php";
		echo "\n";
		include "components/nav.php";
		echo "\n";
		include "components/pages/".$page.".php";
		echo "\n";
		include "components/footer.php";
	?>
	<script language="JavaScript" type="text/JavaScript" src="js/script.js">
	</script>
</body>
<?php
	echo "<script type='text/javascript'>
		console.log($lien);
		console.log($commentaire);
		console.log($valid);
	</script>";
?>
</html>