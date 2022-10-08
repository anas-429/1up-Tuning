<?php
	$page = "1up Tuning - About";
	include('includes/header.php');
?>
<main class="w-1500 margin-center padding">
    <div class="row margin-bottom">
    <div class="img-container fade-in">
        <img src="images/bmw-m2.jpg" alt="BMW M2" class="about-regular-img">
        <img src="images/bmw-m2-cropped.jpg" alt="BMW M2" class="about-cropped-img">
    </div>
    <article class="margin-center">
        <h2 class="border-left-turquoise margin-bottom fade-right">About</h2>
        <p class="fade-in">1up Tuning is the premier for automobile performance and handling. We have an extensive history of working with the Japanese Market and European sports cars. Our business provides expert advice and solutions to improve your vehicle.</p>
    </article>
    </div>
    <div class="row">
    <article class="margin-center">
        <h2 class="border-left-turquoise margin-bottom fade-right">Staff</h2>
        <p class="fade-in">Our staff consists of motorsport enthusiasts with a combined 72 years of automotive experience and 500 hours of track time. Our experience has taught us how to become better advisors based on the lessons we have learned while driving our vehicles. </p>
    </article>
    <div class="img-container fade-in">
        <img src="images/mechanic.jpg" alt="Vehicle Mechanic" class="about-regular-img">
        <img src="images/mechanic-cropped.jpg" alt="Vehicle Mechanic" class="about-cropped-img">
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
</body>
</html>