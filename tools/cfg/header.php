<?php
/**
 * HEADER -> used on all sites implements phpPage.php
 * @author MineDragonCZ_
 */

?>
<div class="d-md-block d-none" style="position: relative !important; z-index: 98;">
	<div class="center" style="position: absolute !important; top: min(80vh, 700px); left: 25px; right: 25px;">
		<div style="position: relative !important;">
			<div class="row justify-content-center">
				<div class="col-3">
					<div class="btn btn-secondary text-xxl" style="border: none !important;" onclick="scrollToContent();">
						<i class="fa-solid fa-angles-down"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- FOR DESKTOP -->
<header class="backImg">
	<div class="text-dec text-dec-1"></div>
	<div class="text-dec text-dec-2"></div>
	<div class="text-dec text-dec-3"></div>
	<div class="row">
		<div class="col-xl-7 col-12 justify-content-center">
			<div class="h-title no-wrap">
				<?= $pageTitle; ?>
			</div>
			<div class="h-desc no-wrap">
				<?= $pageDesc; ?>
			</div>
		</div>
	</div>
	<div class="preloader">
		<div class="preloader1">.</div>
		<div class="preloader2">.</div>
		<div class="preloader3">.</div>
		<div class="preloader4">.</div>
	</div>
	<?php include("waves.php"); ?>
</header>
<div id="scroll_box"></div>