<?php
	if ($_REQUEST) {
		$page=$_REQUEST["page"];
		$css=$_REQUEST["css"];
	} else {
		$page = "home";
		$css="orange";
	}
	$title="Mini projet";
	$valid="";
	$link="";
	$comment="";
	if ($_POST) {
		$valid = $_POST["valid"];
		$link = $_POST["lien"];
		$comment = $_POST["commentaire"];
	}
?>

<html lang="fr">
<head>
	<meta charset="utf-8"/>
	<title><?php echo $title; ?></title>
	<link rel="icon" href="images/fox.png">
	<link href="settings.css" rel="stylesheet" type="text/css">
	<link href="index.css" rel="stylesheet" type="text/css">
	<link href="components/header/header.css" rel="stylesheet" type="text/css">
	<?php echo '<link href="themes/'.$css.'.css"'. ' rel="stylesheet" type="text/css">'; ?>
</head>
<body>
	<header class="header part">
		<?php include "components/header/header.php"; ?>
	</header>
	<div class="body part">
		<aside aria-label="left" class="side-bar left">
			<div class="page">
				<?php include "components/left/left.html"; ?>
			</div>
		</aside>
		<aside aria-label="right" class="side-bar right">
			<div class="page">
				<?php include "components/right/right.html"; ?>
			</div>
		</aside>
		<article class="content">
			<div class="page">
				<?php include "components/pages/".$page."/".$page.".php"; ?>
			</div>
		</article>
	</div>
	<footer class="footer part">
		<?php include "components/footer/footer.php"; ?>
	</footer>
</body>
</html>