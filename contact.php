<?php
	$page = "1up Tuning - Contact";
	include('includes/header.php');
?>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		print '<dialog id="formDialog" class="dialog dark-blue-bg-50 position-fixed-left flex flex-center fullwidth fullheight" open>
        <div class="w-500 h-500 white-bg padding fade-scale">
            <h2 class="border-left-turquoise flex flex-between margin-bottom fade-right">Form Submitted!<span class="exit-modal pointer margin-none">&#10006;</span></h2>
            <p class="margin-none">One of our service specialists will get back to you as soon as possible.</p>
        </div>
    	</dialog>';

    }
?>
<main>

    <form method="post" action="contact.php" class="w-1000 fullwidth margin-center margins-light padding">

    <h1 class="border-left-turquoise large margin-bottom fade-right">Contact</h1>

    <div id="formGrid" class="margin-bottom">

    <div class="form-element margin-none fade-in">
        <label for="first-name">First Name</label>
        <input type="text" name="first-name" id="first-name" class="fullwidth margin-none padding" required>
    </div>

    <div class="form-element margin-none fade-in">
        <label for="last-name">Last Name</label>
        <input type="text" name="last-name" id="last-name" class="fullwidth margin-none padding" required>
    </div>

    <div class="form-element margin-none fade-in">
        <label for="email">E-Mail</label>
        <input type="text" name="email" id="email" class="fullwidth margin-none padding" required>
    </div>

    <div class="form-element marggin-none fade-in">
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone" class="fullwidth margin-none padding" required>
    </div>

    <div class="form-element margin-none fade-in">
        <label for="start">Book Appointment:</label>
        <input type="date" id="start" name="trip-start"
        value="<?php print date('Y-m-d'); ?>" min="<?php print date('Y-m-d'); ?>" class="fullwidth margin-none padding" required>
    </div>


    <div class="form-element margin-none fade-in">
        <label for="service">Service</label>
        <select name="service" id="service" class="fullwidth padding">
            <option value="Turbo">-- Select Option --
	        <optgroup label="Performance">
		        <option value="Turbo">Turbo
		        <option value="Exhaust">Exhaust
                <option value="AL">Engine
		        <option value="CA">ECU
	        </optgroup>
            <optgroup label="Handling">
		        <option value="Suspension">Suspension
		        <option value="Tires">Tires
                <option value="Steering">Steering
		        <option value="Brakes">Brakes
	        </optgroup>
            <optgroup label="Cosmetic">
		        <option value="Interior">Interior
		        <option value="Exterior">Exterior
	        </optgroup>
            <optgroup label="Maintenence">
		        <option value="Oil">Oil
		        <option value="Repairs">Maintenence
	        </optgroup>
        </select>
    </div>

    </div>

    <div class="form-element margin-bottom fade-in">
        <label for="message">Message</label>
        <textarea name="message" placeholder="Message" id="message" rows="5" cols="80" class="fullwidth padding fade-in">
        </textarea>
    </div>
        
    <input type="submit" value="Submit"
    class="bold button pointer red-bg fade-in">

</form>
<div id="location" class="platinum-bg">
    <div class="w-1000 margin-center padding">
        <h2 class="border-left-turquoise margin-bottom">Location</h2>
        <p class="margin-bottom"><span class="bold">Phone Number:</span> (403) 555-2368</p>
        <p class="margin-bottom"><span class="bold">Hours of Operation:</span> 9-5 PM</p>
        <p class="margin-bottom"><span class="bold">Days Open:</span> Monday to Friday</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2510.5120257912863!2d-114.0676502!3d51.0066889!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5371705a48be3cd7%3A0xeac53a4596acd66e!2s5330%201a%20St%20SW%2C%20Calgary%2C%20AB%20T2H%201Y5!5e0!3m2!1sen!2sca!4v1664241788856!5m2!1sen!2sca" style="border:0"></iframe>
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
<script src="modal.js"></script>
</body>
</html>