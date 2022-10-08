<?php
	$page = "1up Tuning - Builds";
	include('includes/header.php');
?>
<dialog id="specs" class="dialog dark-blue-bg-50 position-fixed-left fullwidth fullheight">
	<div class="white-bg w-500 fullwidth margin-none padding fade-scale">
		<h3 class="flex flex-between margin-bottom"><span id="buildTitle"></span><span class="exit-modal pointer margin-none">&#10006;</span></h3>
		<ul id="specsList" class="no-list-style"></ul>
	</div>
</dialog>
<main class="w-1000 padding"> 
	<h2 class="border-left-turquoise large margin-bottom fade-right">Builds</h2>
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
		<figure class="img-container open-modal pointer margin-bottom-light">
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
	<div class="column">
		<figure class="img-container open-modal pointer margin-bottom-light">
			<img src="build-images/bmw-m2.jpg" alt="BMW M2" class="fade-in" data-id="5">
			<figcaption class="overlay dark-blue-bg-50 fullwidth fullheight flex flex-center">
				<p class="white medium bold">BMW M2</p>
			</figcaption>
		</figure>
		<figure class="img-container open-modal pointer">
			<img src="build-images/civic-ek9.jpg" alt="Honda Civic EK9" class="fade-in" data-id="6">
			<figcaption class="overlay dark-blue-bg-50 fullwidth fullheight flex flex-center">
				<p class="white medium bold">Honda Civic EK9</p>
			</figcaption>
		</figure>
	</div>
    <div class="column">
		<figure class="img-container open-modal pointer margin-bottom-light">
			<img src="build-images/s15.jpg" alt="Nissan Silvia S15" class="fade-in" data-id="7">
			<figcaption class="overlay dark-blue-bg-50 fullwidth fullheight flex flex-center">
				<p class="white medium bold">Nissan Silvia S15</p>
			</figcaption>
		</figure>
		<figure class="img-container open-modal pointer">
			<img src="build-images/r34-gtr.jpg" alt="Nissan Skyline R34" class="fade-in" data-id="8">
			<figcaption class="overlay dark-blue-bg-50 fullwidth fullheight flex flex-center">
				<p class="white medium bold">Nissan Skyline GT-R R34</p>
			</figcaption>
		</figure>
	</div>
	</div>
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