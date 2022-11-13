<?php
if($_REQUEST){
	$page=$_REQUEST["page"];
	$css=$_REQUEST["css"];
	$titre=$_REQUEST["titre"];
}

if (($page=='')||(substr($page,0,7)=='http://'))
{
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
		include "haut.php";//haut de page
		echo "\n";
		include "navig.php"; //menu
		echo "\n";
		include $page.".php"; //page à inclure en fonction de la valeur de $page
		echo "\n";
		include "bas.php"; // bas de page
	?>
	<script language="JavaScript" type="text/JavaScript" src="js/script.js">
	</script>
</body>

</html>