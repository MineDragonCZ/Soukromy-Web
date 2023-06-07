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
							<a href="" class="nodecor">
								<div class="social-circle">
									<img loading="lazy" class="img-100" src="/tools/src/imgs/ikonky/teamspeak3.png" alt="">
								</div>
							</a>
						</div>
						<div class="col-3">
							<a href="" target="_blank" class="nodecor">
								<div class="social-circle">
									<img loading="lazy" class="img-100" src="/tools/src/imgs/ikonky/discord.png" alt="">
								</div>
							</a>
						</div>
						<div class="col-3">
							<a href="https://instagram.com/vojtech.sin/" target="_blank" class="nodecor">
								<div class="social-circle">
									<img loading="lazy" class="img-100" src="/tools/src/imgs/ikonky/instagram.png" alt="">
								</div>
							</a>
						</div>
						<div class="col-3">
							<a href="" target="_blank" class="nodecor">
								<div class="social-circle">
									<img loading="lazy" class="img-100" src="/tools/src/imgs/ikonky/tik-tok.png" alt="">
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12" align="center">
				<span>🐸 © 2023 –⁠ Všechna práva vyhrazena! | S ❤️ vytvořil <a class="nodecor" href="https://instagram.com/vojtech.sin/" target="_blank">Vojtěch Šín</a></span>
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
</html>