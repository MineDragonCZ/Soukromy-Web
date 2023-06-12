<?php

/**
 * NAVIGATION -> used on all sites implements phpPage.php
 * @author MineDragonCZ_
 */
?>

<body onload="loaded();" onbeforeunload="unloaded();" class="<?= $bodyClasses; ?>" style="overflow-x: visible;">
	<div id="bodyLoading" class="col-12">
		<div id="bodyLoadingProgress" class="d-flex align-items-center justify-content-center" style="position: fixed; top: 0; left: 0; right: 0; bottom: 0;">
		</div>
	</div>
	<div id="bodyContent" style="position: relative;"> <!-- BODY V2 -->

		<!-- DESKTOP NAVIGATION -->
		<nav class="navbar navbar-expand d-none d-md-block back-primary pb-0 embed-karta" style="--color: #119C32AA; z-index: 99 !important; position: sticky; top: 0;">
			<div class="container-fluid container-xl">
				<a class="navbar-brand" href="/#">
					<img loading="lazy" src="/tools/src/imgs/loga/logo2.png" alt="" height="60" class="d-inline-block align-text-top">
				</a>
				<ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-center">

					<?php

					foreach ($config["navlinks"]["main"] as $name => $data) {
						if ($data["url"]) {
							echo '
							<li class="nav-item">
								<a class="nav-link no-wrap ' . ($data["disabled"] ? "disabledd" : "") . '" href="' . $data["url"] . '" ' . ($data["disabled"] ? "onclick=\"return false;\"" : "") . ' target="' . $data["target"] . '">' . $name . '</a>
							</li>
						';
						} else if ($data["urls"]) {
							echo '
							<li class="nav-item dropdown">
								<a class="nav-link no-wrap ' . ($uData["disabled"] ? "disabledd" : "") . ' dropdown-button">
									' . $name . ' <i class="fa-solid fa-caret-down"></i>
								</a>
								<ul class="dropdown-content" style="z-index: 99 !important;">
						';
							foreach ($data["urls"] as $uName => $uData) {
								echo '<li class="no-wrap"><a class="dropdown-link no-wrap ' . ($uData["disabled"] ? "disabledd" : "") . '" href="' . $uData["url"] . '" ' . ($data["disabled"] ? "onclick=\"return false;\"" : "") . ' target="' . $uData["target"] . '">' . $uName . '</a></li>';
							}
							echo '
								</ul>
							</li>
						';
						}
					}

					?>
				</ul>
				<ul class="navbar-nav align-items-center">
					<li class="nav-item">
						<a class="nav-link" onclick="switchModes(true);" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Dark/Light mode"><span class="mode-switcher"></span></a>
					</li>
				</ul>
			</div>
		</nav>

		<!-- MOBILE NAVIGATION -->
		<nav class="navbar d-md-none m-0" style="height: 95px; top: calc(100dvh - 80px); position: fixed; left: 0; right: 0; z-index: 99 !important;">
			<div class="col-12 back-primary" style="padding-bottom: 200px;">
				<div class="row justify-content-center align-items-center">
					<div class="col center">
						<div class="row justify-content-center align-items-center">
							<div class="col-auto nav-item dropdown" style="position: relative;">
								<a class="nav-link dropdown-button no-wrap">
									<span class="text-xml"><i class="fa-solid fa-bars-staggered"></i></span>
								</a>
								<ul class="dropdown-content dropdown-content-up back-primary" align="left" style="left: 0px; z-index: 99;">
								<?php

								foreach ($config["navlinks"]["main"] as $name => $data) {
									if ($data["url"]) {
										echo '
										<li class="no-wrap">
											<a class="dropdown-link no-wrap text-xl p-2 ' . ($data["disabled"] ? "disabledd" : "") . '" href="' . $data["url"] . '" ' . ($data["disabled"] ? "onclick=\"return false;\"" : "") . ' target="' . $data["target"] . '">' . $name . '</a>
										</li>
									';
									} else if ($data["urls"]) {
										
										foreach ($data["urls"] as $uName => $uData) {
											echo '<li class="no-wrap"><a class="dropdown-link text-xl no-wrap p-2 ' . ($uData["disabled"] ? "disabledd" : "") . '" href="' . $uData["url"] . '" ' . ($data["disabled"] ? "onclick=\"return false;\"" : "") . ' target="' . $uData["target"] . '">' . $uName . '</a></li>';
										}
									}
								}

								?>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-auto back-primary p-3" style="border-radius: 100px; transform: scale(1.4) translateY(-15px);">
						<a class="navbar-brand p-0 m-0" href="/#">
							<img loading="lazy" src="/tools/src/imgs/loga/logo2.png" alt="" height="50" class="d-inline-block align-text-top">
						</a>
					</div>
					<div class="col center">
						<a class="nav-link" onclick="switchModes(true);">
							<span class="mode-switcher text-xml"></span>
						</a>
					</div>
				</div>
			</div>
		</nav>