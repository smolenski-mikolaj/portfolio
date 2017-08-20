<!DOCTYPE html>
<html lang="pl-PL">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="theme-color" content="#33363B">
		<title>Portfolio</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<header>
			<div class="container">
				<nav>
					<div class="logo">portfolio</div>
					<div class="links">
						<ul>
							<li><a href="#">Umiejętności</a></li>
							<li><a href="#">Realizacje</a></li>
							<li><a href="#">Wykształcenie</a></li>
							<li><a href="#">Kontakt</a></li>
						</ul>
					</div>
				</nav>
				<div class="slogan">
					Witam, nazywam się <b>Mikołaj Smoleński</b>
				</div>
			</div>
		</header>
		<section class="skills">
			<div class="skills-shadow"></div>
			<div class="container">			
				<h1>Podstawowe umiejętności</h1>
				<div class="row">
					<div class="col-3"><img src="images/html5.png" alt="html5"><p>HTML5</p></div>
					<div class="col-3"><img src="images/css3.png" alt="css3"><p>CSS3</p></div>
					<div class="col-3"><img src="images/rwd.png" alt="rwd"><p>RWD</p></div>
					<div class="col-3"><img src="images/sass.png" alt="sass"><p>SASS</p></div>
				</div>
				<div class="row">
					<div class="col-3"><img src="images/javascript.png" alt="javascript"><p>JavaScript</p></div>
					<div class="col-3"><img src="images/jQuery.png" alt="jQuery"><p>jQuery</p></div>
					<div class="col-3"><img src="images/php.png" alt="php"><p>PHP</p></div>
					<div class="col-3"><img src="images/MySQL.png" alt="MySQL"><p>MySQL</p></div>
				</div>
				<div class="skills-face">
					<img src="images/face.png" alt="zdjęcie">
				</div>
			</div>						
		</section>
		<section class="projects">
			<div class="container">			
				<h1>Zrealizowane projekty</h1>
				<div class="row">
					<div class="col-4">
						<div class="photo">
							<a href="http://erowelove.pl" target="blank">
								<img src="images/erowelove.jpg" alt="strona www">
								<div class="photo-shadow"></div>
								<div class="photo-title">erowelove</div>
							</a>						
						</div>	
						<p>Serwis internetowy poświęcony tematyce rowerowej</p>
					</div>
					<div class="col-4">
						<div class="photo">
							<a href="http://test1.com.pl" target="blank">
								<img src="images/fundacja.jpg" alt="strona www">
								<div class="photo-shadow"></div>
								<div class="photo-title">fundacja</div>
							</a>
						</div>
						<p>Projekt witryny internetowej dla fundacji "Samodzielność od kuchni"</p>
					</div>	
					<div class="col-4">
						<div class="photo">
							<a href="http://interlux.epizy.com" target="blank">
								<img src="images/intelux.jpg" alt="strona www">
								<div class="photo-shadow"></div>
								<div class="photo-title">interlux</div>
							</a>
						</div>
						<p>Praca konkursowa - projekt strony internetowej dla firmy Interlux</p>
					</div>
				</div>
			</div>
		</section>
	</body>
	<script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous" async></script>
</html>