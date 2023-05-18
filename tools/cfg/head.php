<!DOCTYPE html>
<html lang="cs">
<head>
	<meta charset="UTF-8">

	<title><?= $pageTitle . $config["global"]["title_suffix"]; ?></title>
	<meta name="viewport" content="width=720, maximum-scale=1.0">

	<!-- Primary Meta Tags -->
	<meta name="description" content="<?= $config["global"]["description"]; ?>">
	<meta name="author" content="Vojtěch Šín">
	<meta name="keywords" content="<?= $config["global"]["keywords"]; ?>">

	<!-- Scheme color -->
	<meta name="theme-color" content="#5CBA3A">
	<meta name="msapplication-navbutton-color" content="#5CBA3A">
	<meta name="apple-mobile-web-app-status-bar-style" content="#5CBA3A">
	<meta content="notranslate" name="google">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://vojtechsin.eu/">
	<meta property="og:image" content="https://vojtechsin.eu/tools/src/imgs/loga/icon.png">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="https://vojtechsin.eu/">
	<meta property="twitter:image" content="https://vojtechsin.eu/tools/src/imgs/loga/icon.png">

	<!-- Links CSS and JS -->
	<link rel="icon" type="image/x-icon" href="/tools/src/imgs/loga/icon.png">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css">
	<link rel="stylesheet" href="/tools/src/css/main-47.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" defer></script>
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" defer></script>
	<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
	<script src="https://kit.fontawesome.com/0dd034efb8.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script src="/tools/src/js/main.js?t=<?= time(); ?>"></script>
	<script src="/tools/src/js/defer.js?t=<?= time(); ?>" defer></script>
</head>
<body>