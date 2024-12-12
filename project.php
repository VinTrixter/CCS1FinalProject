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
	
	function iconOneEnlarge(x){
		x.style.width= "300px";
		document.getElementById('projectHeading').innerHTML="GLOBAL PROJECTS";
	}

	function iconTwoEnlarge(x){
		x.style.width= "300px";
		document.getElementById('projectHeading').innerHTML="LOCAL PROJECTS";
	}

	function iconThreeEnlarge(x){
		x.style.width= "300px";
		document.getElementById('projectHeading').innerHTML="NATIONAL PROJECTS";
	}	
	
	function iconNormal(x){
		x.style.width= "250px";
		document.getElementById('projectHeading').innerHTML="PROJECTS";
	}
	
	// Projects animation
	document.addEventListener("DOMContentLoaded", () => {
	  const items = document.querySelectorAll(".galleryItem");

	  const observer = new IntersectionObserver((entries) => {
		entries.forEach((entry, index) => {
		  if (entry.isIntersecting) {
			// Add animation with delay
			setTimeout(() => {
			  entry.target.classList.add("animate");
			}, index * 100); // Delay each item by 100ms
		  }
		});
	  });

	  items.forEach((item) => observer.observe(item));
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
		<div class="container">
			<h1 id="projectHeading">PROJECTS</h1>
			<div class="bottomImages">
			<a href="#globalProjects"> <img class="bottomImagesSpecific" onmouseover="iconOneEnlarge(this)" onmouseout="iconNormal(this)" src="https://i.imgur.com/O29UkPc.png"> </a>
			<a href="#nationalProjects"> <img class="bottomImagesSpecific" onmouseover="iconThreeEnlarge(this)" onmouseout="iconNormal(this)" src="https://i.imgur.com/ZoMh8Ny.png"> </a>
			<a href="#localProjects"> <img class="bottomImagesSpecific" onmouseover="iconTwoEnlarge(this)" onmouseout="iconNormal(this)" src="https://i.imgur.com/IEsl2im.png"> </a>
			</div>
		</div>

		<div id="globalProjects" class="projectContainer">
			<h2 style="color:#e11584;">Global Projects</h2>
			<div class="gallery">
				<div class="galleryItem">
					<h3>Missing Migrants Project</h3>
					<a target="_blank" href="https://missingmigrants.iom.int/">
						<img src="https://www.gktoday.in/wp-content/uploads/2024/03/202403085236.png" alt="IOM's Missing Migrant Project">
					</a>
					<div class="desc">The International Organization for Migration (IOM)’s Missing Migrants Project records incidents in which migrants, including refugees and asylum-seekers, have died at state borders or in the process of migrating to an international destination. The Project hosts the only existing open-access database of records of deaths during migration on the global level. Missing Migrants Project counts migrants  who have died at the external borders of states, or in the process of migration towards an international destination, regardless of their legal status. The Project records only those migrants who die during their journey to a country different from their country of residence. The Missing Migrants Project currently gathers information from diverse sources such as official records – including from coast guards and medical examiners – and other sources such as media reports, NGOs, and surveys and interviews of migrants.</div>
				</div>
				
				<div class="galleryItem">
					<h3>Zvandiri Program</h3>
					<a target="_blank" href="https://reachalliance.org/case-study/africaids-zvandiri-peer-support-interventions-for-young-mothers-living-hiv/">
						<img src="https://www.lstmed.ac.uk/sites/default/files/styles/mc-580-16x9-node/public/content/collaboration/images/zvandiri.png?itok=5S29LRNz" alt="Zvandiri Program">
					</a>
					<div class="desc">The Zvandiri Program by Africaid was made in response to the fact that the Sub-Saharan Africa accounts for two-thirds of people living with HIV globally. Youth in the region, particularly young women and girls, are disproportionately vulnerable to the virus because of associated stigmas and limitations in testing and treatment access. The Zvandiri Program offers peer support interventions for young mothers living with HIV. It empowers marginalized young women through education and healthcare support, aiming to reduce health and economic inequalities. This project demonstrates how inclusive healthcare services can address systemic disparities​
					</div>
				</div>	
				
				<div class="galleryItem">
					<h3>The Kolombia Regia Project</h3>
					<a target="_blank" href="https://reachalliance.org/wp-content/uploads/2024/04/Kolombia_Tec_final-2.pdf">
						<img src="https://reachalliance.org/wp-content/uploads/2022/10/ESQUINA-SONIDERA-JUANGUER-20-may2023DSC05473ghcg-scaled.jpg" alt="The Kolombia Regia Project">
					</a>
					<div class="desc">During the 1960s, a countercultural movement was established in the city of Monterrey, Mexico. This subculture called itself Kolombia for its love for Colombia and Cumbia, a traditional Latin-American musical rhythm. These forms of expression have been stigmatized as socially unacceptable, in part because Cumbia has been a musical genre historically enjoyed by marginalized groups. The Kolombia Regia works to improve societal acceptance and provide resources for social integration.</div>
				</div>	
			</div>
		</div>  

		
		<div id="nationalProjects" class="projectContainer">
			<h2 style="color:#e11584;">National Projects</h2>
			<div class="gallery">
				<div class="galleryItem">
					<h3>Supporting Conflict Transformation Toward Effective Peacebuilding in the Bangsamoro Region (STEP-BARMM)</h3>
					<a target="_blank" href="https://philippines.un.org/en/272577-fostering-community-reintegration-and-peace-bangsamoro-autonomous-region-muslim-mindanao">
						<img src="https://philippines.un.org/sites/default/files/styles/large/public/2024-06/2%20stepbarmm_biwab_coop.png?h=dec22bcf&itok=oZjrhHlN" alt="STEP-BARMM">
					</a>
					<div class="desc">The STEP-BARMM program (2020-2022), funded by the UN Peacebuilding Fund with $3 million, strengthened peace efforts in the Bangsamoro Autonomous Region by focusing on women's empowerment. It developed and localized Women, Peace, and Security action plans in 17 municipalities and established Gender and Development focal points in BARMM ministries to secure funding for these initiatives, ensuring long-term women's leadership in peacebuilding.</div>
				</div>
				
				<div class="galleryItem">
					<h3>Pantawid Pamilyang Pilipino Program (4Ps)</h3>
					<a target="_blank" href="https://car.dswd.gov.ph/programs-services/core-programs/pantawid-pamilyang-pilipino-program-4ps/">
						<img src="https://car.dswd.gov.ph/wp-content/uploads/2023/06/Banner-768x443.png" alt="4Ps Pic">
					</a>
					<div class="desc">The Pantawid Pamilyang Pilipino Program (4Ps), launched in 2008 and institutionalized in 2019 by Republic Act No. 11310 or the 4Ps Act, is the national poverty reduction strategy and human capital investment program that provides conditional cash transfer to poor households for a maximum period of seven (7) years, to improve health, nutrition and education.It aims to break the intergenerational cycle of poverty by improving human capital outcomes, targeting vulnerable families, and promoting social inclusion
					</div>
				</div>	
				
				<div class="galleryItem">
					<h3>KALAHI-CIDSS (Kapit-Bisig Laban sa Kahirapan – Comprehensive and Integrated Delivery of Social Services)</h3>
					<a target="_blank" href="https://fo6.dswd.gov.ph/about-us/programs/kalahi-cidss/">
						<img src="https://kalahi.dswd.gov.ph/media/k2/items/cache/be28adfff47893c4519c1307dc6b8866_L.jpg?t=20220901_053655" alt="KALAHI-CIDSS">
					</a>
					<div class="desc">The  Kapit‐Bisig  Laban  sa  Kahirapan  ‐  Comprehensive  and  Integrated  Delivery  of  Social  Services  or  Kalahi‐ CIDSS  program  is  a poverty  alleviation  program  of  the  DSWD  that uses  a  community‐driven  development  (CDD)  approach.  The  program  provides  resources  to  poor  rural  municipalities  for  public  goods  investment  and  promote  people’s  participation in governance.</div>
				</div>	
			</div>	
		</div>  	
			
		<div id="localProjects" class="projectContainer">
			<h2 style="color:#e11584;">Local Projects</h2>
			<div class="gallery">
				<div class="galleryItem">
					<h3>Basic Management and Skills Development (BSMD) and Productivity Training</h3>
					<a target="_blank" href="https://www.facebook.com/share/p/15Fm2161Bu/">
						<img src="https://i.imgur.com/vjlfbQb.jpeg" alt="BSMD Pic">
					</a>
					<div class="desc">Members of the Pag-asa Youth Association of the Philippines (PYAP) Dumaguete Chapter and city scholars, under the supervision of the City Social Welfare and Development Office, underwent Basic Management and Skills Development and Productivity Training on August 26-27, 2023, at Dumaguete City Women's Center. The activity aims to train the participants in the basic principles and techniques of food safety and the scientific method of food processing, especially in siopao, tocino, and chorizo making. </div>
				</div>
				
				<div class="galleryItem">
					<h3>Negros Women for Tomorrow Foundation (NWTF)</h3>
					<a target="_blank" href="https://microfinancecouncil.org/negros-women-for-tomorrow-foundation-inc-nwtf/">
						<img src="https://i0.wp.com/digicastnegros.com/wp-content/uploads/2024/02/image-244.png?resize=1024%2C679&ssl=1" alt="NWTF Pic">
					</a>
					<div class="desc">This organization focuses on empowering women and low-income families through microfinance and livelihood programs. Their flagship initiatives, Project Dungganon and Project Kasanag, provide financial support and developmental services across various regions, including Negros. Beyond financial aid, NWTF offers non-financial support such as skills training, scholarships, and medical missions to improve the quality of life for their clients.
					</div>
				</div>	
				
				<div class="galleryItem">
					<h3>Community Based Training</h3>
					<a target="_blank" href="https://www.facebook.com/share/p/14kpB7bkeK/">
						<img src="https://i.imgur.com/97hM3bx.jpeg" alt="CBT Pic">
					</a>
					<div class="desc">The Negros Oriental Provincial Government took the initiative to train the marginalized men and women of Brgy. San Francisco, Santa Catalina, in the art of siomai making on July 10, 2024. It is an admirable endeavor to assist independent contractors and small-scale business owners in the province. Through the Provincial Public Employment Service Office (Peso), these community-based trainings aim to equip individuals from marginalized communities with the necessary skills and knowledge to start their own businesses and generate additional income.</div>
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
	</footer>
</body>
</html>
