<?php
$link=$_REQUEST["lien"];
$comment=$_REQUEST["commentaire"];
$css=$_REQUEST["css"];
$valid="true";
$fich="links.html";

if (!file_exists($fich)) {
	touch($fich);
}

if ($f = fopen($fich, "a")) {
	$test = @fopen($link, 'r');
	if ($test) {
		$code='<li><a href="'.$link.'"><b>'.$comment.'</b> : '.$link.'</a></li>';
		fputs($f, $code);
	} else {
		$valid = "false";
	}
	fclose($f);
}
?>

<form name="form" method="post" action="../index.php">
	<input name="css" type="hidden" value="<?php echo $css; ?>">
	<input name="page" type="hidden" value="page1">
	<input name="titre" type="hidden" value="apropos">
	<input name="valid" type="hidden" value="<?php echo $valid; ?>">
	<input name="lien" type="hidden" value="<?php echo $link; ?>">
	<input name="commentaire" type="hidden" value="<?php echo $comment; ?>">
</form>

<script language="JavaScript" type="text/JavaScript">
	document.form.submit();
</script>
