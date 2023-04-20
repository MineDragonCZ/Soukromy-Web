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
							<a href="#kontakt"><div class="btn btn-primary">Kontaktujte mě</div></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">

	<!-- Reference -->

	<div class="slideshow">
	
	</div>

	<!-- Portfolio -->
</div>
<?php
getFooter();
?>