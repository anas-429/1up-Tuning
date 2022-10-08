<?php
	$page = "1up Tuning - Parts";
	include('includes/header.php');
?>
<div id="partsBgCover" class="bg-cover h-500 flex flex-center fullheight-vertical">
	<div class="dark-blue-bg-50 fullwidth fullheight">
		<div class="w-1000 h-500 fullwidth fullheight flex flex-column flex-column-center-left margin-center padding">
			<h1 class="border-left-turquoise white large fade-right">Parts</h1>
		</div>
	</div>
</div>
<main class="w-1000 padding">
    <section id="performance" class="margin-bottom fade-in">
        <h2 class="border-left-turquoise margin-bottom">Performance</h2>
        <div class="parts-grid">
            <a href="https://www.shopgreddy.com/" target="_blank">
                <div class="img-container">
                    <img src="parts/greddy.png" alt="Greddy Logo">
                    <div class="overlay dark-blue-bg-10"></div>
                </div>
            </a>
            <a href="https://www.hksusa.com/" target="_blank">
                <div class="img-container">
                    <img src="parts/hks.png" alt="HKS Logo">
                    <div class="overlay dark-blue-bg-10"></div>
                </div>
            </a>
            <a href="https://blitzperformance.ca/" target="_blank">
                <div class="img-container">
                    <img src="parts/blitz.png" alt="Blitz Logo">
                    <div class="overlay dark-blue-bg-10"></div>
                </div>
            </a>
            <a href="https://www.apexi-usa.com/" target="_blank">
                <div class="img-container">
                    <img src="parts/apexi.png" alt="Apexi Logo">
                    <div class="overlay dark-blue-bg-10"></div>
                </div>
            </a>
        </div>
    </section>
    <section id="wheels" class="margin-bottom fade-in">
        <h2 class="border-left-turquoise margin-bottom">Wheels</h2>
        <div class="parts-grid">
            <a href="https://bbs.com/en/home" target="_blank">
                <div class="img-container">
                    <img src="parts/bbs.png" alt="BBS Logo">
                    <div class="overlay dark-blue-bg-10"></div>
                </div>
            </a>
            <a href="https://enkei.com/" target="_blank">
                <div class="img-container">
                    <img src="parts/enkei.png" alt="Enkei Logo">
                    <div class="overlay dark-blue-bg-10"></div>
                </div>
            </a>
            <a href="https://www.workwheelsusa.com/" target="_blank">
                <div class="img-container">
                    <img src="parts/work.png" alt="Work Logo">
                    <div class="overlay dark-blue-bg-10"></div>
                </div>
            </a>
            <a href="https://www.tsw.com/" target="_blank">
                <div class="img-container">
                    <img src="parts/tsw.png" alt="TSW Logo">
                    <div class="overlay dark-blue-bg-10"></div>
                </div>
            </a>
        </div>
    </section>
    <section id="tires" class="margin-bottom fade-in">
        <h2 class="border-left-turquoise margin-bottom">Tires</h2>
        <div class="parts-grid">
            <a href="https://www.toyotires.ca/" target="_blank">
                <div class="img-container">
                    <img src="parts/toyo.png" alt="Toyo Tires Logo">
                    <div class="overlay dark-blue-bg-10"></div>
                </div>
            </a>
            <a href="https://tire.yokohama.ca/" target="_blank">
                <div class="img-container">
                    <img src="parts/yokohama.png" alt="Yokahama Logo">
                    <div class="overlay dark-blue-bg-10"></div>
                </div>
            </a>
            <a href="https://www.falkentire.com/" target="_blank">
                <div class="img-container">
                    <img src="parts/falken.png" alt="Falken Logo">
                    <div class="overlay dark-blue-bg-10"></div>
                </div>
            </a>
            <a href="https://nexentirecanada.com/" target="_blank">
                <div class="img-container">
                    <img src="parts/nexen.png" alt="Nexen Tires Logo">
                    <div class="overlay dark-blue-bg-10"></div>
                </div>
            </a>
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
</body>
</html>