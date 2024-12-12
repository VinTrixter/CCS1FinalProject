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
    <title>Contact Form</title>
	<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
	<link rel="stylesheet" href="FinalProject.css">
</head>

<div id="top"></div>

<body class="background">
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
	

	<div class="entireIndex">		
		<div class="row">
			<div class="column">
			  <img src="https://sdg.neda.gov.ph/wp-content/uploads/2019/02/E_SDG-goals_icons-individual-rgb-10-1024x1024.png" style="width:90%">
			</div>
			<div class="column">
			  <form id="contactForm" onsubmit="return sendEmail()">
				<label for="name">Name</label>
				<input type="text" id="name" name="name" placeholder="Enter name" required>
				
				<label for="contactNumber">Contact Number</label>
				<input type="text" id="contactNumber" name="contactNumber" placeholder="Enter phone number" required>
				
				<label for="email">Email</label>
				<input type="text" id="email" name="email" placeholder="Enter email" required>
				
				<label for="subject">Message</label>
				<textarea id="subject" name="subject" placeholder="Write something.." style="height:170px" required></textarea>
				
				<input type="submit" value="Submit">
			</form>
			</div>
		</div>	
	<div>	

	<script>
	function sendEmail() {
		const name = document.getElementById('name').value;
		const contactNumber = document.getElementById('contactNumber').value;
		const email = document.getElementById('email').value;
		const subject = document.getElementById('subject').value;
		const gmailLink = `https://mail.google.com/mail/?view=cm&fs=1&to=jaelicapfabian@su.edu.ph&su=Contact%20Form%20Submission&body=Name:%20${name}%0AContact%20Number:%20${contactNumber}%0AEmail:%20${email}%0AMessage:%20${subject}`;
		window.location.href = gmailLink;
		return false; // Prevent actual form submission
	}
	</script>

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
