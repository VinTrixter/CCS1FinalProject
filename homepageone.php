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
	<link rel="stylesheet" href="FinalProject.css">
	<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
	<title>HOMEPAGE</title>
</head>

<body class="projectBackground">

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
	
	<div class="homepageContainer">
		<h2 id="projectHeading">HOMEPAGE</h1>
		<p>Welcome, <?php echo $_SESSION['first_name'] . " " . $_SESSION['last_name']; ?>!</p>
		<iframe width="720" height="440" src="https://www.youtube.com/embed/rufPTXYpMQA?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
		</iframe>

	</div>

	<div class="homepageContainerTwo">
			<p class="reasonSDG">Inequality threatens long-term social and economic development, harms poverty reduction and destroys people’s sense of fulfillment and self-worth.
			<br><br>
			The incomes of the poorest 40 per cent of the population had been growing faster than the national average in most countries. But emerging yet inconclusive evidence suggests that COVID-19 may have put a dent in this positive trend of falling within-country inequality.
			<br><br>
			The pandemic has caused the largest rise in between-country inequality in three decades. Reducing both within- and between-country inequality requires equitable resource distribution, investing in education and skills development, implementing social protection measures, combating discrimination, supporting marginalized groups and fostering international cooperation for fair trade and financial systems.
			<br><br>
			Our group chose Sustainable Development Goal 10, Reducing Inequalities, because we believe that addressing inequality is essential for building a fair and equitable society. Inequalities exist in various forms, including economic, social, racial, gender-based, and geographic, and they significantly limit opportunities for individuals and communities. By focusing on this goal, we aim to promote inclusivity and ensure that everyone, regardless of their background or circumstances, has access to opportunities and resources.  
			<br><br>
			We also recognize the importance of raising awareness about these disparities, as many people remain unaware of their extent and impact both locally and globally. By shining a light on these issues, we hope to inspire meaningful action and foster empathy for those who are marginalized. Additionally, addressing inequalities helps create sustainable solutions to global challenges. Economic and social disparities often lead to instability and conflict, hindering progress and development. By working toward a more equitable world, we contribute to a future where everyone can thrive, fostering peace, stability, and shared prosperity.
			</p>
	</div>    
	
	<br><br><br>
	
	<div class="carousel">
		<button class="prev"><</button>
		<div class="carousel-inner">
			<div class="slide" style="background-image: url('https://ocm.iccrom.org/sites/default/files/2021-03/GOAL_10_TARGET_10.B.svg');"></div>
			<div class="slide" style="background-image: url('https://ocm.iccrom.org/sites/default/files/2021-03/GOAL_10_TARGET_10.C.svg');"></div>
			<div class="slide" style="background-image: url('https://ocm.iccrom.org/sites/default/files/2021-03/GOAL_10_TARGET_10.1.svg');"></div>
			<div class="slide" style="background-image: url('https://ocm.iccrom.org/sites/default/files/2021-03/GOAL_10_TARGET_10.2.svg');"></div>
			<div class="slide" style="background-image: url('https://ocm.iccrom.org/sites/default/files/2021-03/GOAL_10_TARGET_10.3.svg');"></div>
			<div class="slide" style="background-image: url('https://ocm.iccrom.org/sites/default/files/2021-03/GOAL_10_TARGET_10.4.svg');"></div>
			<div class="slide" style="background-image: url('https://ocm.iccrom.org/sites/default/files/2021-03/GOAL_10_TARGET_10.5.svg');"></div>
			<div class="slide" style="background-image: url('https://ocm.iccrom.org/sites/default/files/2021-03/GOAL_10_TARGET_10.6.svg');"></div>
			<div class="slide" style="background-image: url('https://ocm.iccrom.org/sites/default/files/2021-03/GOAL_10_TARGET_10.7.svg');"></div>
			<div class="slide" style="background-image: url('https://ocm.iccrom.org/sites/default/files/2021-03/GOAL_10_TARGET_10.A.svg');"></div>
		</div>
		<button class="next">></button>
	</div>
	
	<br><br><br>
	
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
	</footer>

	<script>
		// Select the slides and buttons
		const slides = document.querySelectorAll('.slide');
		const prev = document.querySelector('.prev');
		const next = document.querySelector('.next');
		let currentIndex = 2; // Start with the third image as the main image (index 2)

		// Update the carousel based on the currentIndex
		function updateCarousel() {
			const carouselInner = document.querySelector('.carousel-inner');
			carouselInner.style.transform = `translateX(-${currentIndex * 20}%)`; // Move 20% per image (5 images total)

			slides.forEach((slide, index) => {
				slide.classList.remove('focused');
				if (index === currentIndex) {
					slide.classList.add('focused');
				}
			});
		}

		// Event listeners for the previous and next buttons
		prev.addEventListener('click', () => {
			// Move to the previous image
			currentIndex = (currentIndex === 0) ? slides.length - 1 : currentIndex - 1;
			updateCarousel();
		});

		next.addEventListener('click', () => {
			// Move to the next image
			currentIndex = (currentIndex === slides.length - 1) ? 0 : currentIndex + 1;
			updateCarousel();
		});

		// Initialize the carousel with the centered image (third one)
		updateCarousel();
	</script>
	
</body>
</html>