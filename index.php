<!doctype html>
<html lang="fr">
<?php
	/* Détermination du nom de la page à charger après vérification de sa validité */
	if (!isset($_GET['page']) || ($_GET['page'] == "")) {
		$affiche = "mapage1.php";
	} else if ($_GET['page'] == "test1") {
		$affiche = "mapage1.php";
	} else if ($_GET['page'] == "test2") {
		$affiche = "mapage2.php";
	} else {
		$affiche = "lostinspace.php";
	}
	/* Par convention, il peut exister une page de configuration du même nom mais avec un préfixe "config-" */
	$config = "config-".$affiche;
	include('default-config.php');
	@include($config); // l'arobas permet de ne pas afficher d'erreur si le fichier de configuration de la page n'existe pas (par exemple pour page 2)
?>


<head>
 	<meta charset="utf-8" />
	<meta name="keywords" content="<?php echo $keywords; ?>" />
	<meta name="description" content="<?php echo $description; ?>" />
	<meta name="robots" content="index,follow,all" />
	<title><?php echo $title; ?></title>

	<link rel="shortcut icon" href="skin/favicon.ico" />
	<link rel="icon" href="skin/favicon_anime.gif" />
	<link rel="stylesheet" href="skin/maquette2.css" media="screen" />
	<!--<link rel="stylesheet" href="skin/maquette2.css" media="screen" />-->
	
	<!-- <script src="script.js"></script> -->
</head>

<body>

	<div id="Bandeau">
		<div class="fondDiv"></div>
		<div class="contenuDiv">
			bandeau de mon super site
		</div>
	</div>
		
	<div id="Centre">
		<div id="Menu">
			<div class="fondDiv"></div>
			<div class="contenuDiv">
				<?php include('menu.php'); ?>
			</div>
		</div>
		
		<div id="Contenu">
			<div class="fondDiv"></div>
			<div class="contenuDiv">
				<?php include($affiche); ?>
			</div>
		</div>	
	</div>
	
	<div id="Pied_page">
			<div class="fondDiv"></div>
			<div class="contenuDiv">
				<?php include('pied_page.php'); ?>
			</div>
	</div>

</body>
</html>