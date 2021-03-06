<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Apartments Horizon</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/gallery.css">
	<link rel="stylesheet" media="screen and (max-width: 360px)" href="css/query360px.css">
	<link rel="stylesheet" media="screen and (max-width: 360px)" href="css/gallery_query360px.css">
	<link rel="stylesheet" media="screen and (max-width: 449px) and (min-width: 361px)" href="css/query449px.css">
	<link rel="stylesheet" media="screen and (max-width: 449px) and (min-width: 361px)" href="css/gallery_query449px.css">
	<link rel="stylesheet" media="screen and (max-width: 768px) and (min-width: 450px)" href="css/query768px.css">
	<link rel="stylesheet" media="screen and (max-width: 768px) and (min-width: 450px)" href="css/gallery_query768px.css">
	<link rel="stylesheet" media="screen and (max-width: 899px) and (min-width: 769px)" href="css/query899px.css">
	<link rel="stylesheet" media="screen and (max-width: 899px) and (min-width: 769px)" href="css/gallery_query899px.css">
	<link rel="stylesheet" media="screen and (max-width: 1225px) and (min-width: 900px)" href="css/query1225px.css">
	<link rel="stylesheet" media="screen and (max-width: 1225px) and (min-width: 900px)" href="css/gallery_query1225px.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Fuzzy+Bubbles:wght@700&family=Roboto:wght@300&display=swap" rel="stylesheet"> 
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
				<h1>GALLERY</h1>
				<div class="row">
					<div class="column">
						<img src="images/s_lucica3.jpg" alt="Lucica bay">
						<img src="images/s_lucica2.jpg" alt="Lucica bay">
						<img src="images/s_lucica.jpg" alt="Lucica beach">
						<img src="images/s_lucica4.jpg" alt="Lucica bay view from boat">
					</div>
					<div class="column">
						<img src="images/s_lucica_terasa.jpg" alt="Apartment terrace">
						<img src="images/s_lucica_terasa2.jpg" alt="Apartment terrace">
						<img src="images/s_lucica_terasa3.jpg" alt="Apartment terrace">
						<img src="images/s_priroda.jpg" alt="Lastovo nature">
						<img src="images/s_pjevor.jpg" alt="Lastovo town center">
					</div>
					
					<div class="column">
						<img src="images/s_lucica5.jpg" alt="Lucica bay fishing in sunset">
						<img src="images/s_lucica6.jpg" alt="Lucica bay houses">
						<img src="images/s_mihajla.jpg" alt="Mihajla bay">
						<img src="images/s_more.jpg" alt="Jurijeva bay">
					</div>
					
					<div class="column">
						<img class="margin" src="images/s_ap1_soba1.jpg" alt="Apartment 1 room 1">
						<img src="images/s_ap1_soba2.jpg" alt="Apartment 1 room 2">
					</div>
					<div class="column">
						<img src="images/s_ap1_kuhinja.jpg" alt="Apartment 1 kitchen">
						<img src="images/s_ap1_kuhinja2.jpg" alt="Apartment 1 dining area">
					</div>
					<div class="column">
						<img class="margin" src="images/s_ap2_soba.jpg" alt="Apartment 2 room">
						<img src="images/s_ap2_prozor.jpg" alt="Apartment 2 bedroom window view">
					</div>
				</div> <!--End of row -->
				
					
				
			</main> <!--End of main -->
		
		</div> <!--End of #flex -->
		
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