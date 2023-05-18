<?php
$pageTitle = "Domů";
$title = "";
$subTitle = "";

include("tools/cfg/phpPage.php");
?>

<!-- About me -->
<div class="back-img" style="--back: linear-gradient(180deg, #1E1E1E, #1E1E1EAA), url('/tools/src/imgs/background/back1.jpg'); --attachment: relative;">
	<div class="h-100 blur" style=" --blur: 2px;">
		<div class="spacer"></div>
		<div class="container-xl">
			<div class="col-xl-8 col-12 py-5 ps-5">
				<div class="row">
					<div class="col-auto">
						<div class="card-title underlined" style="--width: 60px;">O mně</div>
					</div>
					<div class="col-12">
						<div class="card-desc">
							Lorem ipsum dolor sit amet consectetur adipisicing elit.
							Natus, laboriosam molestias praesentium odio rerum adipisci.
							Est doloribus nostrum quasi itaque consectetur temporibus nemo.
							Consequuntur deleniti eum, blanditiis voluptatibus ex neque.
						</div>
						<div class="card-foot">
							<a href="#kontakt">
								<div class="btn btn-primary">Kontaktujte mě</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<!-- Portfolio -->
	<div id="portfolio" class="topic-title underlined" style="--width: 80px;">
		Portfolio
	</div>

	<!-- Reference -->
	<div id="refer" class="topic-title underlined" style="--width: 80px;">
		Reference
	</div>
	<div id="reference" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#reference" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#reference" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#reference" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner pb-5">
			<div class="carousel-item active">
				<div class="row justify-content-center align-items-center">
					<div class="col-xl-1 col-3">
						<img width="100%" style="border-radius: 100%;" src="https://xsgames.co/randomusers/avatar.php?g=male" alt="">
					</div>
					<div class="col-xl-6 col-4">
						<div class="card-desc">
							Lorem ipsum dolor sit amet consectetur adipisicing elit.
							Natus, laboriosam molestias praesentium odio rerum adipisci.
							Est doloribus nostrum quasi itaque consectetur temporibus nemo.
							Consequuntur deleniti eum, blanditiis voluptatibus ex neque.
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<div class="row justify-content-center align-items-center">
					<div class="col-xl-1 col-3">
						<img width="100%" style="border-radius: 100%;" src="https://xsgames.co/randomusers/avatar.php?g=female" alt="">
					</div>
					<div class="col-xl-6 col-4">
						<div class="card-desc">
							Lorem ipsum dolor sit amet consectetur adipisicing elit.
							Natus, laboriosam molestias praesentium odio rerum adipisci.
							Est doloribus nostrum quasi itaque consectetur temporibus nemo.
							Consequuntur deleniti eum, blanditiis voluptatibus ex neque.
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<div class="row justify-content-center align-items-center">
					<div class="col-xl-1 col-3">
						<img width="100%" style="border-radius: 100%;" src="https://xsgames.co/randomusers/avatar.php?g=male" alt="">
					</div>
					<div class="col-xl-6 col-4">
						<div class="card-desc">
							Lorem ipsum dolor sit amet consectetur adipisicing elit.
							Natus, laboriosam molestias praesentium odio rerum adipisci.
							Est doloribus nostrum quasi itaque consectetur temporibus nemo.
							Consequuntur deleniti eum, blanditiis voluptatibus ex neque.
						</div>
					</div>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#reference" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#reference" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>

	<!-- Ceník -->
	<div id="cenik" class="topic-title underlined" style="--width: 80px;">
		Ceník
	</div>
	<div class="row justify-content-center align-items-center">
		<div class="col-xl-4 col-12">
			<div class="karta h-75">
				<div class="card-title">Web podle šablony</div>
			</div>
		</div>
		<div class="col-xl-4 col-12">
			<div class="karta h-100">
				<div class="card-title">Vlastní web</div>

			</div>
		</div>
		<div class="col-xl-4 col-12">
			<div class="karta h-75">
				<div class="card-title">Minecraft plugin</div>

			</div>
		</div>
	</div>
</div>
<div class="spacer"></div>
<div class="spacer"></div>
<div class="spacer"></div>
<?php
getFooter();
?>