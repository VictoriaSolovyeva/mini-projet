<?php
$lien=$_REQUEST["lien"];
$commentaire=$_REQUEST["commentaire"];
$css=$_REQUEST["css"];
$fich="liens.html";

if (!file_exists($fich)) {touch($fich);} //si le fichier liens.txt n'existe pas il est créé

if ($f = fopen( $fich, "a"))
{
	$test=@fopen($lien,'r');
	if ($test)
	{
		//le lien est valide, on l'insère en fin de fichier
		$code='<li><a href="'.$lien.'"><b>'.$commentaire.'</b> : '.$lien.'</a></li>'; //construction du code à insérer
		fputs ($f,$code); //écriture en fin de fichier
	}else{
		echo 'lien non valide : '.$lien;
	};
	fclose($f);
};

echo '<form name="f" action="index.php" method="post">
<input name="css" type="hidden" value="'.$css.'">
<input name="page" type="hidden" value="liens">
<input name="titre" type="hidden" value="Liens utiles">
</form>';
?>
<script language="JavaScript" type="text/JavaScript">
	document.f.submit();
</script>
