<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php print $page ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
	</head>
    <body>
    <header class="dark-blue-bg fullwidth flex flex-between flex-center padding">
        <div class="flex flex-center fade-in">
            <a href="index.php" class="header-logo audiowide small">1up Tuning</a>
        </div>
        <nav class="fade-in">
        <ul class="white flex flex-center no-list-style">
            <li class="hamburger small pointer"><a>&#9776;</a>
            <li class="link"><a href="index.php">Home</a>
            <li class="link"><a href="about.php">About</a>
            <li class="link"><a href="services.php">Services</a>
            <li class="link"><a href="parts.php">Parts</a>
            <li class="link"><a href="builds.php">Builds</a>
            <li class="link"><a href="contact.php">Contact</a>
        </ul>
        </nav>
    </header>
    <div class="fullscreen">
        <div id="mobileMenu" class="white-bg scrollable position-fixed-left fullheight fullwidth">
            <nav class="w-1000 margin-center">
                <div class="dark-blue-outline-bm padding">
                    <h2 class="border-left-turquoise medium flex flex-between fade-bottom">Main Menu <span class="exit-mobile margin-none">&#10006;</span></h2>
                </div>
                <ul class="small fade-right">
                    <li class="dark-blue-outline-bm fade-in"><a href="index.php" class="flex flex-center-left padding"><span class="icon margin-right"><img src="mobile-icons/home-icon.svg" alt="Home Icon"></span>Home</a></li>
                    <li class="dark-blue-outline-bm fade-in"><a href="about.php" class="flex flex-center-left padding"><span class="icon margin-right"><img src="mobile-icons/about-icon.svg" alt="About Icon"></span>About</a></li>
                    <li class="dark-blue-outline-bm fade-in"><a href="services.php" class="flex flex-center-left padding"><span class="icon margin-right"><img src="mobile-icons/wrench-icon.svg" alt="Wrench Icon"></span>Services</a></li>
                    <li class="dark-blue-outline-bm fade-in"><a href="parts.php" class="flex flex-center-left padding"><span class="icon margin-right"><img src="mobile-icons/suspension-icon.svg" alt="Suspension Icon"></span>Parts</a></li>
                    <li class="dark-blue-outline-bm fade-in"><a href="builds.php" class="flex flex-center-left padding"><span class="icon margin-right"><img src="mobile-icons/car-icon.svg" alt="Car Icon"></span>Builds</a></li>
                    <li class="dark-blue-outline-bm fade-in"><a href="contact.php" class="flex flex-center-left padding"><span class="icon margin-right"><img src="mobile-icons/contact-icon.svg" alt="Car Icon"></span>Contact</a></li>
                </ul>
			</nav>
        </div>
    </div>
	