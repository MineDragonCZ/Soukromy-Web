<?php

/**
 * FOOTER -> used on all sites implements phpPage.php or noHeaderPage.php
 * @author MineDragonCZ_
 */

?>
<footer>
	<div class="container-xl" align="left">
		<div class="row justify-content-center">
			<div class="col-xl-3 col-6 mb-4">
				<div class="center">
					<div class="row pb-5">
						<div class="col-3">
							<a href="https://github.com/MineDragonCZ" target="_blank" class="nodecor" data-bs-toggle="tooltip" data-bs-placement="top" title="GitHub">
								<div class="social-circle">
									<img loading="lazy" class="img-100" src="/tools/src/imgs/ikonky/github.png" alt="">
								</div>
							</a>
						</div>
						<div class="col-3">
							<a href="https://instagram.com/vojtech.sin/" target="_blank" class="nodecor" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram">
								<div class="social-circle">
									<img loading="lazy" class="img-100" src="/tools/src/imgs/ikonky/instagram.png" alt="">
								</div>
							</a>
						</div>
						<div class="col-3">
							<a href="#copyDiscord" onclick="copyToClip(`MineDragonCZ_#1234`); return false;" class="nodecor" data-bs-toggle="tooltip" data-bs-placement="top" title="Discord">
								<div class="social-circle">
									<img loading="lazy" class="img-100" src="/tools/src/imgs/ikonky/discord.png" alt="">
								</div>
							</a>
						</div>
						<div class="col-3">
							<a href="https://paypal.me/sinvojtech" target="_blank" class="nodecor" data-bs-toggle="tooltip" data-bs-placement="top" title="PayPal donate">
								<div class="social-circle">
									<img loading="lazy" class="img-100" src="/tools/src/imgs/ikonky/paypal.png" alt="">
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12" align="center">
				<span>🐸 © 2023 - Web slouží jako projekt do INF 2. ročníku SŠ | S ❤️ vytvořil <a class="nodecor" href="https://instagram.com/vojtech.sin/" target="_blank">Vojtěch Šín</a></span>
			</div>
		</div>
	</div>
	<div class="py-md-0 py-5"></div>
	<div class="py-md-0 py-2"></div>
</footer>
</div>
</body>
<?php

if ($footerScript) {
	echo "<script>" . $footerScript . "</script>";
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
	var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
	var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
	return new bootstrap.Tooltip(tooltipTriggerEl)
	})
</script>
</html>