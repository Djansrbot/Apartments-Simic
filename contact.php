<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Apartments Simic</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/contact.css">
	<link rel="stylesheet" media="screen and (max-width: 360px)" href="css/query360px.css">
	<link rel="stylesheet" media="screen and (max-width: 360px)" href="css/contact_query360px.css">
	<link rel="stylesheet" media="screen and (max-width: 449px) and (min-width: 361px)" href="css/query449px.css">
	<link rel="stylesheet" media="screen and (max-width: 449px) and (min-width: 361px)" href="css/contact_query449px.css">
	<link rel="stylesheet" media="screen and (max-width: 768px) and (min-width: 450px)" href="css/query768px.css">
	<link rel="stylesheet" media="screen and (max-width: 768px) and (min-width: 450px)" href="css/contact_query768px.css">
	<link rel="stylesheet" media="screen and (max-width: 899px) and (min-width: 769px)" href="css/query899px.css">
	<link rel="stylesheet" media="screen and (max-width: 899px) and (min-width: 769px)" href="css/contact_query899px.css">
	<link rel="stylesheet" media="screen and (max-width: 1225px) and (min-width: 900px)" href="css/query1225px.css">
	<link rel="stylesheet" media="screen and (max-width: 1225px) and (min-width: 900px)" href="css/contact_query1225px.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Fuzzy+Bubbles:wght@700&family=Roboto:wght@300&display=swap" rel="stylesheet"> 
	<script src="https://kit.fontawesome.com/283f3edfea.js" crossorigin="anonymous"></script>
	<script>
		function showHidden(){
			document.getElementById("hidden").style.display ="block";
		}
		function hideHidden(){
			document.getElementById("hidden").style.display ="none";
		}
	</script>
	<?php 
		require "require/connect.php";
		require "contactForm.php";
	?>
</head>
<body>
	<div id="wrapper">
		<header>
			<div id="logo">
				<a href="index.php" ><h1>APARTMENTS SIMIC</h1></a>
			</div>
			<nav id="mainNav">
				<a href="index.php">HOME</a>
				<div class="dropdown">
					<button class="button">APARTMENTS</button>
					<div id="navLinks">
						<a href="apartments/apartment_1.php">APARTMENT 1</a>
						<a id="green" href="apartments/apartment_2.php">APARTMENT 2</a>
					</div>
				</div>
				<a href="gallery.php">GALLERY</a>
				<a href="contact.php">CONTACT</a>
				<a href="about_me.php">ABOUT ME</a>
			</nav>
		</header> <!--End of header -->
		
		<div id="flex">
			<main class="main">
				<h1>CONTACT</h1>
				<div id="center">
					<div id="map">
						<div class="map-responsive">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d474.7725573697072!2d16.897319054891245!3d42.77151182327707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa63d29b8e85de20c!2sSimic%20apartments!5e0!3m2!1sen!2srs!4v1640860804833!5m2!1sen!2srs" width="1340px" height="340px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						</div>
					</div>
					<section class="contact">
						<div class="div1">
							<h2> APARTMENT SIMIC</h2>
							<p>Put lucice 21,</p>
							<p>Croatia, Lastovo 20290</p>
							<h2>CALL OR TEXT:</h2>
							<p>Phone: 00985-95-736-5490</p>
						</div>
						<div class="div2">
							<h2>GET IN TOUCH</h2>
							<button onclick="showHidden()">
								CONTACT
							</button>
						</div>
						<div class="div3">
							<h2>OFFICE HOURS:</h2>
							<p>Mon-Sun: 8:30 AM - 11.30 PM</p>
						</div>
					</section>
				</div> <!--End of center -->
				
				<div id="hidden">
					<span id="close" onclick="hideHidden()">&#10060;</span>
					
					<form id="contactForm" action="#" method="post" name="contactForm">
						<div class="head">
							<div class="contactHeader">
							<h1>Contact me</h1>
							</div>
						</div>
						<div class="contactMain">
							<div id="p">
								<p>Please complete the information below, and we will contact you right away!</p>
							</div>
							<div class="formInput">
								<div class="inputBoth">
									<div class="input">
										<label id="firstName">First name</label>
										<br>
										<input onkeypress="return /\p{L}/u.test(event.key)" type="text" name="firstName" required>
									</div>
									<div class="input">
										<label id="lastName">Last name</label> <br>
										<input onkeypress="return /\p{L}/u.test(event.key)" type="text" name="lastName" required>
									</div>
								</div>
								<div class="inputBoth">
									<div class="input">
										<label id="email">Email</label>
										<br>
										<input type="email" name="email" required>
									</div>
									<div class="input">
										<label id="phone">Phone</label>
										<br>
										<input type="text" name="phone" onkeypress="return /\d+/.test(event.key)">
									</div>
								</div>
								<div class="inputText">
									<label id="text">Question</label>
									<br>
									<textarea placeholder="Yes?" name="text" required></textarea>
								</div>
								<div class="inputSubmit">
									<input type="submit" name="submit" value="Send">
								</div>
							</div> <!--End of formInput -->
						</div> <!--End of contactMain -->
					</form>
				</div> <!--End of hidden -->
			</main> <!--End of main -->
			
		</div>	
		<footer id="main_footer">
			<div id="foot_wrap">
				<h3>MAKE YOUR RESERVATION AT:&nbsp;&nbsp; </h3>
					<div id="social">
						<a id="fb" href="https://www.facebook.com/simicapartment/" target="_blank"><img src="images/fb1.png" alt="facebook"> FACEBOOK</a>&nbsp;
						<a id="airbnb" href="https://www.airbnb.com/users/show/129844418"  target="_blank"><img src="images/airbnb.png" alt="airbnb"> AIRBNB</a>
					</div>
			</div>
		</footer> <!--End of footer -->
	</div> <!--End of wrapper -->
</body>
</html>

