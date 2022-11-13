<?php
$lien=$_REQUEST["lien"];
$commentaire=$_REQUEST["commentaire"];
$css=$_REQUEST["css"];
$fich="links.html";

if (!file_exists($fich)) {
	touch($fich);
}

if ($f = fopen($fich, "a")) {
	$test = @fopen($lien, 'r');
	if ($test) {
		//le lien est valide, on l'insère en fin de fichier
		$code='<li><a href="'.$lien.'"><b>'.$commentaire.'</b> : '.$lien.'</a></li>'; //construction du code à insérer
		fputs($f, $code); //écriture en fin de fichier
	} else {
		echo 'lien non valide : '.$lien;
	}
	fclose($f);
}
?>

<form name="form" method="post" action="/index.php">
	<input name="css" type="hidden" value="<?php echo $css; ?>">
	<input name="page" type="hidden" value="page1">
	<input name="titre" type="hidden" value="apropos">
	<input id="submit" type="submit"/>
</form>

<script language="JavaScript" type="text/JavaScript">
	document.getElementById('submit').click();
</script>
