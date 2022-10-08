<?php
	$page = "1up Tuning - Services";
	include('includes/header.php');
?>

<dialog id="categoryMenu" class="dialog dark-blue-bg-50 position-fixed-left fullwidth fullheight">
	<div class="white-bg w-500 fullwidth padding margin-none fade-scale">
    <h3 class="medium flex flex-between flex-center margin-bottom">Select Category<span class="exit-modal small margin-none">&#10006;</span></h3>
    <ul class="no-list-style margins-light">
        <li><a href="services.php#performance">Performance</a></li>
        <li><a href="services.php#handling">Handling</a></li>
        <li><a href="services.php#cosmetic">Cosmetic</a></li>
        <li><a href="services.php#maintenence">Maintenence</a></li>
        <li class="bold"><a href="contact.php">Book a Service</a></li>
    </ul>
	</div>
</dialog>

<div id="servicesBgCover" class="bg-cover h-500 fullheight flex flex-center">
	<div class="dark-blue-bg-50 fullwidth fullheight">
		<div class="w-1000 h-500 flex fullwidth fullheight flex-column flex-column-center-left margin-center padding">
			<h1 class="border-left-turquoise large white fade-right">Services</h1>
		</div>
	</div>
</div>

<div id="asideGrid" class="w-1000 margin-center none-to-padding fade-in">
    <aside id="aside" class="white-bg fullwidth padding-to-none">
        <div id="asideFixed" class="white-bg fullwidth">
            <h3 class="flex flex-between flex-center">Categories<img src="icons/filter.svg" alt="Filter" class="filter-icon open-modal"></h3>
            <ul class="no-list-style margins-light">
                <li><a href="#performance">Performance</a></li>
                <li><a href="#handling">Handling</a></li>
                <li><a href="#cosmetic">Cosmetic</a></li>
                <li><a href="#maintenence">Maintenence</a></li>
                <li class="bold"><a href="contact.php">Book a Service</a></li>
            </ul>
        </div>
    </aside>
    <main id="services" class="padding-to-none">
    <section id="vehicles" class="margin-bottom">
        <h2 class="border-left-turquoise margin-bottom">Vehicles We Work On</h2>
        <div class="parts-grid">
            <img src="car-brands/toyota.jpg" alt="Toyota Logo">
            <img src="car-brands/nissan.jpg" alt="Nissan Logo">
            <img src="car-brands/mazda.jpg" alt="Mazda Logo">
            <img src="car-brands/subaru.jpg" alt="Subaru Logo">
            <img src="car-brands/mitsubishi.jpg" alt="Mitsubishi Logo">
            <img src="car-brands/bmw.jpg" alt="BMW Logo">
            <img src="car-brands/honda.jpg" alt="Honda Logo">
            <img src="car-brands/volkswagen.jpg" alt="Volkswagen Logo">
        </div>
    </section>
    <section id="performance" class="margin-bottom">
        <h2 class="border-left-turquoise margin-bottom">Performance</h2>
			<div class="card dark-blue-outline margin-bottom fade-in">
                <img src="icons/turbo-icon.svg" alt="Turbo Icon">
				<div class="card-info white-bg margin-center-vertical padding">
                    <h3 class="margin-bottom">Turbo</h3>
                    <p>Use a forced induction device to pump more air into your engine.</p>
                </div>
            </div>
            <div class="card dark-blue-outline margin-bottom fade-in">
                <img src="icons/exhaust-icon.svg" alt="Exhaust Icon">
				<div class="card-info white-bg margin-center-vertical padding">
                    <h3 class="margin-bottom">Exhaust</h3>
                    <p>Improve the airflow traveling through your engine and exhaust system.</p>
                </div>
            </div>
            <div class="card dark-blue-outline margin-bottom fade-in">
                <img src="icons/engine-icon.svg" alt="Turbo Icon">
				<div class="card-info white-bg margin-center-vertical padding">
                    <h3 class="margin-bottom">Engine</h3>
                    <p>Use forged engine parts to prevent your engine from breaking apart. We can also swap your engine.</p>
                </div>
            </div>
            <div class="card dark-blue-outline margin-bottom fade-in">
                <img src="icons/ecu-icon.svg" alt="ECU Icon">
				<div class="card-info white-bg margin-center-vertical padding">
                    <h3 class="margin-bottom">ECU</h3>
                    <p>Modify the ECU chip to increase performance and fuel efficiency.</p>
                </div>
            </div>
    </section>
    <section id="handling" class="margin-bottom">
        <h2 class="border-left-turquoise margin-bottom">Handling</h2>
			<div class="card dark-blue-outline margin-bottom fade-in">
                <img src="icons/suspension-icon.svg" alt="Turbo Icon">
				<div class="card-info white-bg margin-center-vertical padding">
                    <h3 class="margin-bottom">Suspension</h3>
                    <p>Use shocks and springs to balance the car laterally and longitudinally.</p>
                </div>
            </div>
            <div class="card dark-blue-outline margin-bottom fade-in">
                <img src="icons/tire-icon.svg" alt="Tire Icon">
				<div class="card-info white-bg margin-center-vertical padding">
                    <h3 class="margin-bottom">Tires</h3>
                    <p>Improve the traction of the vehicle at high speeds and rough conditions.</p>
                </div>
            </div>
            <div class="card dark-blue-outline margin-bottom fade-in">
                <img src="icons/steering-icon.svg" alt="Steering Icon">
				<div class="card-info white-bg margin-center-vertical padding">
                    <h3 class="margin-bottom">Steering</h3>
                    <p>Modify the steering to have greater control of the car while turning.</p>
                </div>
            </div>
            <div class="card dark-blue-outline margin-bottom fade-in">
                <img src="icons/brakes-icon.svg" alt="Brakes Icon">
				<div class="card-info white-bg margin-center-vertical padding">
                    <h3 class="margin-bottom">Brakes</h3>
                    <p>Improve your vehicle’s ability to slow down or come to a stop.</p>
                </div>
            </div>
    </section>
    <section id="cosmetic" class="margin-bottom">
        <h2 class="border-left-turquoise margin-bottom">Cosmetic</h2>
			<div class="card dark-blue-outline margin-bottom fade-in">
                <img src="icons/seat-icon.svg" alt="Seat Icon">
				<div class="card-info white-bg margin-center-vertical padding">
                    <h3 class="margin-bottom">Interior</h3>
                    <ul class="square-list-style padding-left">
                        <li>Racing Seats</li>
                        <li>Steering Wheel</li>
                        <li>Roll Cage</li>
                    </ul>
                </div>
            </div>
            <div class="card dark-blue-outline margin-bottom fade-in">
                <img src="icons/spoiler-icon.svg" alt="Spoiler Icon">
				<div class="card-info white-bg margin-center-vertical padding">
                    <h3 class="margin-bottom">Exterior</h3>
                    <ul class="square-list-style padding-left">
                        <li>Paint</li>
                        <li>Body Kit</li>
                        <li>Spoiler</li>
                    </ul>
                </div>
            </div>
    </section>
    <section id="maintenence">
        <h2 class="border-left-turquoise margin-bottom fade-in">Maintenence</h2>
			<div class="card dark-blue-outline margin-bottom fade-in">
                <img src="icons/oil-jug-icon.svg" alt="Oil Jug Icon">
				<div class="card-info white-bg margin-center-vertical padding">
                    <h3 class="margin-bottom">Oil Change</h3>
                    <p>Keep the engine life longer by keeping up with your oil maintenance.</p>
                </div>
            </div>
            <div class="card dark-blue-outline margin-bottom fade-in">
                <img src="icons/wrench-icon.svg" alt="Wrench Icon">
				<div class="card-info white-bg margin-center-vertical padding">
                    <h3 class="margin-bottom">Repairs</h3>
                    <p>We focus on repairing the Engine, Suspension, and Electrical components.</p>
                </div>
            </div>
    </section>
    </main>
</div>
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
<script src="modal.js"></script>
</body>
</html>