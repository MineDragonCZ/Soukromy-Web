<?php
/**
 * HEAD PART
 * @author MineDragonCZ_
 */
?>
<!DOCTYPE html>
<html lang="cs">
<head>
	<meta charset="UTF-8">

	<title><?= $title ? $title . $config["title_suffix"] : $config["title_suffix_second"]; ?></title>
	<meta name="viewport" content="width=720, maximum-scale=1.0">

	<!-- Primary Meta Tags -->
	<meta name="description" content="<?= $config["global_description"]; ?>">
	<meta name="author" content="Vojtěch Šín">
	<meta name="keywords" content="<?php for($i = 0; $i < 5; $i++){ echo $config["global_keywords"] . ", "; }?>">

	<!-- Scheme color -->
	<meta name="theme-color" content="#3BB657">
	<meta name="msapplication-navbutton-color" content="#3BB657">
	<meta name="apple-mobile-web-app-status-bar-style" content="#3BB657">
	<meta content="notranslate" name="google">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://vojtechsin.eu/">
	<meta property="og:image" content="https://vojtechsin.eu/tools/src/imgs/loga/logo2.png">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="https://vojtechsin.eu/">
	<meta property="twitter:image" content="https://vojtechsin.eu/tools/src/imgs/loga/logo2.png">

	<!-- Links CSS and JS -->
	<link rel="icon" type="image/x-icon" href="/tools/src/imgs/loga/logo2.png">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
	<link rel="stylesheet" href="/tools/src/css/main-65.css">

	<!-- EXTERNAL -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
	<script src="https://kit.fontawesome.com/0dd034efb8.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

	<!-- INTERNAL -->
	<script src="/tools/src/js/cookies.js"></script>
	<script src="/tools/src/js/main.js?t=<?= time(); ?>"></script>
	<script src="/tools/src/js/millisToCountDown.js?t=41564"></script>
</head>