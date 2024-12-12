<?php
session_start();

if (!isset($_SESSION['first_name']) || !isset($_SESSION['last_name'])) {
    header("Location: homepageone.php");
    exit();
}
?>

<!DOCTYPE html>


<html>
<head>
    <title>Projects</title>
	<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
	<link rel="stylesheet" href="FinalProject.css">
</head>
<div id="top"></div>
<body class="projectBackground">

	<script>
	
	// Projects animation
	document.addEventListener("DOMContentLoaded", () => {
		const profiles = document.querySelectorAll(".developerProfileOne, .developerProfileTwo");

		const observer = new IntersectionObserver((entries) => {
			entries.forEach((entry) => {
				if (entry.isIntersecting) {
					entry.target.classList.add("animate");
				}
			});
		});

		profiles.forEach((profile) => observer.observe(profile));
	});
	
	
	</script>

	<header>
		<a href="#top">
		  <img id ="sdgLogo" class="sdgLogo" src="https://i.imgur.com/WXfNK44.png" alt="SDG Logo">
		</a>

		<div class="sdgImageContainer">
		<img src="https://i.imgur.com/TFRcYlN.png" class="sdgImageHeader">
		</div>
		
		<div class="logoutIconContainer">
		<a href="index.php" class="logoutIcon"><img src="https://i.imgur.com/57LRIBo.png" class="logoutIcon"></a>
		<p class="iconName"><?php echo $_SESSION['first_name'] . " " . $_SESSION['last_name']; ?></p>
		</div>
	</header>
	
	<nav>
		<ul>
		  <li><a href="homepageone.php" target="_self">Home</a></li>
		  <li><a href="project.php" target="_self"> Projects</a></li>
		  <li><a href="contact.php" target="_self"> Contact</a></li>
		  <li><a href="developer.php" target="_self"> Developers</a></li>
		</ul>
	</nav>	
	
	<div class="entireProject">
		<div class="containerOne">
			<h1 id="developerHeading">DEVELOPERS</h1>
			<div class="developerProfileOne">
						<div class="developerInfo">
							<h2 class="developerInfoOne">Jaelica P. Fabian</h2>
							<p>Email: jaelicapfabian@su.edu.ph</p>
							<p>Contact Number: 09964587521</p>
						</div>
						<div class="developerImageContainer">
							<img src="https://i.imgur.com/qec6N3J.png" alt="Developer Jaelica Image" class="developerImage">
						</div>
					</div>
		</div>
		
		<div class="containerTwo">
			<div class="developerProfileTwo">
				<div class="developerInfo">
					<h2 class="developerInfoTwo">Vin Trixter B. Gunot</h2>
					<p>Email: vinbgunot@su.edu.ph</p>
					<p>Contact Number: 09296745486</p>
				</div>
				<div class="developerImageContainer">
					<img src="https://i.imgur.com/KkY1GQ2.png" alt="Developer Trixter Image" class="developerImage">
				</div>
			</div>
		</div>
	</div>
	
	<footer>
		<div class="footerIndex">
			<p>&copy; 2024 Fabian, Gunot. All rights reserved.</p>
			&nbsp;
			<p>Promoting equality and inclusion for a sustainable future.</p>
			<ul class="footer-links">
				<li><a href="https://sdgs.un.org/goals/goal10#:~:text=Goal%2010%20calls%20for%20reducing,representation%2C%20migration%20and%20development%20assistance.">About SDG 10</a></li>
				<li><a href="https://sdgs.un.org/goals/goal10">Resources</a></li>
				<li><a href="https://globalgoals.org/goals/10-reduced-inequalities/#:~:text=ENSURE%20EQUAL%20OPPORTUNITIES%20AND%20END,and%20action%20in%20this%20regard.">Get Involved</a></li>
				<li><a href="https://www.globalgoals.org/goals/10-reduced-inequalities/#:~:text=THINGS%20TO%20DO&text=Find%20out%20what%20your%20rights,social%20background%20and%20physical%20abilities.">Contact</a></li>
			</ul>
		</div>
	</footer>

</body>
</html>
