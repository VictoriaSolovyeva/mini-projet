<?php
$lien=$_REQUEST["lien"];
$commentaire=$_REQUEST["commentaire"];
$css=$_REQUEST["css"];
$fich="links.html";
$valid=true;

if (!file_exists($fich)) {
	touch($fich);
}

if ($f = fopen($fich, "a")) {
	$test = @fopen($lien, 'r');
	if ($test) {
		$code='<li><a href="'.$lien.'"><b>'.$commentaire.'</b> : '.$lien.'</a></li>';
		fputs($f, $code);
	} else {
		$valid = false;
	}
	fclose($f);
}

echo '<form name="form" method="post" action="index.php">
	<input name="css" type="hidden" value="'.$css.'">
	<input name="page" type="hidden" value="page1">
	<input name="titre" type="hidden" value="apropos">
	<input name="lien" type="hidden" value="'.$lien.'">
	<input name="commentaire" type="hidden" value="'.$commentaire.'">
	<input name="valid" type="hidden" value="'.$valid.'">
</form>'

echo '<script language="JavaScript" type="text/JavaScript">
	document.form.submit();
</script>'
?>
