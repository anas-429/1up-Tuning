<?php
	$page = "1up Tuning - Home";
	include('includes/header.php');
?>
	<dialog id="specs" class="dialog dark-blue-bg-50 fullwidth fullheight position-fixed-left">
	<div class="white-bg w-500 fullwidth margin-none padding fade-scale">
		<h3 class="flex flex-between margin-bottom"><span id="buildTitle"></span><span class="exit-modal pointer margin-none">&#10006;</span></h3>
		<ul id="specsList" class="no-list-style"></ul>
	</div>
	</dialog>
	<div id="homeBgCover" class="bg-cover h-500 flex flex-center fullheight-vertical">
		<div class="dark-blue-bg-50 fullwidth fullheight">
		<div class="w-1000 h-500 fullwidth fullheight flex flex-column flex-column-center-left margin-center padding">
			<h1 class="audiowide white margin-bottom fade-right">Home of Import Tuning</h1>
			<p class="white fade-right">Performance | Durability | Usability</p>
		</div>
		</div>
    </div>
	<main>
		<div class="platinum-bg">
		<section id="featureServices" class="w-1000 margin-center padding">
			<h2 class="border-left-turquoise margin-bottom fade-in">Services</h2>
			<div id="featuredServicesGrid">
				<a href="services.php#performance">
				<div class="card fade-in">
					<div class="img-container">
						<img src="category-icons/turbo-icon-grey.svg" alt="Turbo Icon">
						<div class="overlay dark-blue-bg-50"></div>
					</div>
					<div class="bold white-bg flex flex-center padding-light">
						<p>Performance</p>
					</div>
				</div>
				</a>
				<a href="services.php#handling">
				<div class="card fade-in">
					<div class="img-container">
						<img src="category-icons/steering-icon-grey.svg" alt="Steering Icon">
						<div class="overlay dark-blue-bg-50"></div>
					</div>
					<div class="bold white-bg flex flex-center padding-light">
						<p>Handling</p>
					</div>
				</div>
				</a>
				<a href="services.php#cosmetic">
				<div class="card fade-in">
					<div class="img-container">
						<img src="category-icons/spoiler-icon-grey.svg" alt="Spoiler Icon">
						<div class="overlay dark-blue-bg-50"></div>
					</div>
					<div class="bold white-bg flex flex-center padding-light">
						<p>Cosmetic</p>
					</div>
				</div>
				</a>
				<a href="services.php#maintenence">
				<div class="card fade-in">
					<div class="img-container">
						<img src="category-icons/oil-jug-icon-grey.svg" alt="Oil Jug">
						<div class="overlay dark-blue-bg-50"></div>
					</div>
					<div class="bold white-bg flex flex-center padding-light">
						<p>Maintenence</p>
					</div>
				</div>
				</a>
			</div>
		</section>
		</div>
		<section id="featureBuilds" class="w-1000 margin-center padding">
			<h2 class="border-left-turquoise margin-bottom">Builds</h2>
			<div id="buildGrid">
			<div class="column">
				<figure class="img-container open-modal pointer margin-bottom-light">
					<img src="build-images/mr2.jpg" alt="Toyota MR2" class="fade-in" data-id="1">
					<figcaption class="overlay dark-blue-bg-50 fullwidth fullheight flex flex-center">
						<p class="white medium bold">Toyota MR2</p>
					</figcaption>
				</figure>
				<figure class="img-container open-modal pointer">
					<img src="build-images/supra.jpg" alt="Toyota Supra" class="fade-in" data-id="2">
					<figcaption class="overlay dark-blue-bg-50 fullwidth fullheight flex flex-center">
						<p class="white medium bold">Toyota Supra</p>
					</figcaption>
				</figure>
			</div>
			<div class="column">
				<figure class="img-container open-modal margin-bottom-light pointer">
					<img src="build-images/evo-5.jpg" alt="Mitsubishi Lancer Evo V" class="fade-in" data-id="3">
					<figcaption class="overlay dark-blue-bg-50 fullwidth fullheight flex flex-center">
						<p class="white medium bold">Mitsubishi Lancer Evo V</p>
					</figcaption>
				</figure>
				<figure class="img-container open-modal pointer">
					<img src="build-images/golf-gti.jpg" alt="Volkswagen Golf GTI" class="fade-in" data-id="4">
					<figcaption class="overlay dark-blue-bg-50 fullwidth fullheight flex flex-center">
						<p class="white medium bold">Volkswagen Golf GTI</p>
					</figcaption>
				</figure>
			</div>
			</div>
		</section>
	</main>
	<footer class="dark-blue-bg padding">
		<nav>
        <ul class="white no-list-style margin-bottom margins-light">
            <li><a href="index.php">Home</a>
            <li><a href="about.php">About</a>
            <li><a href="services.php">Services</a>
            <li><a href="parts.php">Parts</a>
            <li><a href="builds.php">Builds</a>
            <li class="margin-none"><a href="contact.php">Contact</a>
        </ul>
		</nav>
		<p>© Copyright <?php print date('Y'); ?>. All Rights Reserved.</p>
    </footer>
	<script src="mobilemenu.js"></script>
	<script src="specifications.js"></script>
</body>
</html>