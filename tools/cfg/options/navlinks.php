<?php
/**
 * NAVIGATION LINKS
 * @author MineDragonCZ_
 */

 $config["navlinks"] = [

	"main" => [

		
		'<i class="fa-solid fa-address-card"></i> O MNĚ' => [
			"url" => "#about",
		],

		'<i class="fa-solid fa-diagram-project"></i> MÉ PRÁCE' => [
			"url" => "#portfolio",
		],

		'<i class="fa-solid fa-star"></i> REFERENCE' => [
			"url" => "#reference",
		],
	
		'<i class="fa-solid fa-bars-staggered"></i> PRÁCE' => [
			"dropid" => "more",
			"urls" => [
				'Žabák.eu <i class="fa-solid fa-arrow-up-right-from-square"></i>' => [
					"url" => "https://zabak.eu",
					"target" => "_blank",
				],
				'JustSGMod.eu <i class="fa-solid fa-arrow-up-right-from-square"></i>' => [
					"url" => "https://justsgmod.eu",
					"target" => "_blank",
				],
			],
		],

	],

 ];
?>