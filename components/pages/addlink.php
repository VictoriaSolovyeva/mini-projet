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

echo '<form name="f" action="./../../index.php" method="post">
<input name="css" value="'.$css.'">
<input name="page" value="page1">
<input name="titre" value="apropos">
<input name="submit" value="soumettre" type="submit"/>
</form>';
?>

