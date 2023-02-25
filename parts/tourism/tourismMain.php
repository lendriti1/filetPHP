<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&amp;family=Roboto:wght@300&amp;display=swap" rel="stylesheet">

	<style>
		.turizmi-img {
			border: 3px solid blue;
			width: 100%;
			height: 200px;
		}

		.turizmi-img img {

			width: 100%;
			height: 100%;
		}

		.turizmi-title {
			border: 3px solid red;
			width: 100%;
			height: 150px;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.turizmi-title p {
			font-size: 50px;
		}

		.turizmi-main {
			border: 3px solid black;
			width: 100%;
			height: auto;
		}

		.container {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			width: 100%;

		}

		.card {
			width: 400px;
			margin: 10px;
			background-color: white;
			box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.3);
			border-radius: 20px;
		}

		.card:hover .card__caption {
			top: 50%;
			transform: translateY(-50%);
		}

		.card:hover .card__image {
			transform: translateY(-10px);

		}

		.card:hover .card__thumb::after {
			top: 0;
		}

		.card:hover .card__snippet {
			margin: 20px 0;
		}

		.card__thumb {
			position: relative;
			max-height: 700px;
			overflow: hidden;
			border-radius: 20px;
		}

		@media (min-width: 1024px) {
			.card__thumb {
				max-height: 700px;
			}
		}

		.card__thumb::after {
			position: absolute;
			top: 0;
			display: block;
			content: '';
			width: 100%;
			height: 100%;
			background: linear-gradient(0deg, rgba(0, 0, 0, .5) 40%, rgba(255, 255, 255, 0) 100%);
			transition: 0.3s;
		}

		@media (min-width: 1024px) {
			.card__thumb::after {
				top: calc(100% - 140px);
			}
		}

		.card__image {
			transition: 0.5s ease-in-out;

		}

		.card__caption {
			position: absolute;
			top: 50%;
			z-index: 1;
			padding: 0 20px;
			color: white;
			transform: translateY(-50%);
			text-align: center;
			transition: 0.3s;
		}

		.card__caption {
			top: calc(100% - 80px);
			transform: unset;
		}

		.card__title {
			display: -webkit-box;
			max-height: 85px;
			overflow: hidden;
			font-family: 'Playfair Display', serif;
			font-size: 23px;
			line-height: 28px;
			text-shadow: 0px 1px 5px black;
			text-overflow: ellipsis;
			-webkit-line-clamp: 3;
			-webkit-box-orient: vertical;
		}

		.card__snippet {
			display: -webkit-box;
			max-height: 150px;
			margin: 20px 0;
			overflow: hidden;
			font-family: 'Roboto', sans-serif;
			font-size: 16px;
			line-height: 20px;
			text-overflow: ellipsis;
			transition: 0.5s ease-in-out;
			-webkit-line-clamp: 5;
			-webkit-box-orient: vertical;
		}

		@media (min-width: 1024px) {
			.card__snippet {
				margin: 60px 0;
			}
		}

		.card__button {
			display: inline-block;
			padding: 10px 20px;
			color: white;
			border: 1px solid white;
			font-family: 'Roboto', sans-serif;
			font-size: 12px;
			text-transform: uppercase;
			text-decoration: none;
			transition: 0.3s;
		}

		.card__button:hover {
			color: black;
			background-color: white;
		}

		.disclaimer {
			position: fixed;
			bottom: 0;
			left: 50%;
			z-index: 2;
			box-sizing: border-box;
			width: 100%;
			padding: 20px 10px;
			background-color: white;
			transform: translateX(-50%);
			font-family: 'Roboto', sans-serif;
			font-size: 14px;
			text-align: center;
		}

		.disclaimer__link {
			color: #755d87;
			text-decoration: none;
		}
	</style>
</head>

<body>
	<section class="turizimi">
		<div class="turizmi-img">
			<img src="../images/suhareka4.jpg" alt="">
		</div>
		<div class="turizmi-title">
			<p>TURIZMI</p>
		</div>
		<div class="turizmi-main">
			<div class="container">
				<div class="card">
					<figure class="card__thumb">
						<img src="../images/suhareka4.jpg" alt="Picture by Kyle Cottrell" class="card__image" style="height: 500px;width: 100%;">
						<figcaption class="card__caption">
							<h2 class="card__title">NASA Has Found Hundreds Of Potential New Planets</h2>
							<p class="card__snippet">NASA released a list of 219 new “planet candidates” discovered by the Kepler space telescope, 10 of which are similar to Earth’s size and may be habitable by other life forms.</p>
							<a href="../Fshatrat/Vraniqi.html" class="card__button">Read more</a>
						</figcaption>
					</figure>
				</div>
				<div class="card">
					<figure class="card__thumb">
						<img src="../images/suhareka4.jpg" alt="Picture by Nathan Dumlao" class="card__image" style="height: 500px;width: 100%;">
						<figcaption class="card__caption">
							<h2 class="card__title">This Is Your Body And Brain On Coffee</h2>
							<p class="card__snippet">Drinking more caffeine during the coronavirus lockdown? Here's how it can affect you over time and advice on making it better for you.</p>
							<a href="" class="card__button">Read more</a>
						</figcaption>
					</figure>
				</div>
				<div class="card">
					<figure class="card__thumb">
						<img src="../images/suhareka4.jpg" alt="Picture by Daniel Lincoln" class="card__image" style="height: 500px;width: 100%;">
						<figcaption class="card__caption">
							<h2 class="card__title">Why You Should Bring Your Dog To Work</h2>
							<p class="card__snippet">On Friday, offices around the country celebrated the 15th annual Take Your Dog to Work Day. Though the event's primary goal is to raise awareness for pet adoption, the unanticipated impact may be a slightly more relaxing work environment for any office choosing to participate.</p>
							<a href="" class="card__button">Read more</a>
						</figcaption>
					</figure>
				</div>
			</div>
		</div>
		<div class="turizmi-main">
			<div class="container">
				<div class="card">
					<figure class="card__thumb">
						<img src="../images/suhareka4.jpg" alt="Picture by Kyle Cottrell" class="card__image" style="height: 500px;width: 100%;">
						<figcaption class="card__caption">
							<h2 class="card__title">NASA Has Found Hundreds Of Potential New Planets</h2>
							<p class="card__snippet">NASA released a list of 219 new “planet candidates” discovered by the Kepler space telescope, 10 of which are similar to Earth’s size and may be habitable by other life forms.</p>
							<a href="" class="card__button">Read more</a>
						</figcaption>
					</figure>
				</div>
				<div class="card">
					<figure class="card__thumb">
						<img src="../images/suhareka4.jpg" alt="Picture by Nathan Dumlao" class="card__image" style="height: 500px;width: 100%;">
						<figcaption class="card__caption">
							<h2 class="card__title">This Is Your Body And Brain On Coffee</h2>
							<p class="card__snippet">Drinking more caffeine during the coronavirus lockdown? Here's how it can affect you over time and advice on making it better for you.</p>
							<a href="" class="card__button">Read more</a>
						</figcaption>
					</figure>
				</div>
				<div class="card">
					<figure class="card__thumb">
						<img src="../images/suhareka4.jpg" alt="Picture by Daniel Lincoln" class="card__image" style="height: 500px;width: 100%;">
						<figcaption class="card__caption">
							<h2 class="card__title">Why You Should Bring Your Dog To Work</h2>
							<p class="card__snippet">On Friday, offices around the country celebrated the 15th annual Take Your Dog to Work Day. Though the event's primary goal is to raise awareness for pet adoption, the unanticipated impact may be a slightly more relaxing work environment for any office choosing to participate.</p>
							<a href="" class="card__button">Read more</a>
						</figcaption>
					</figure>
				</div>
			</div>
		</div>
		<div class="turizmi-main">
			<div class="container">
				<div class="card">
					<figure class="card__thumb">
						<img src="../images/suhareka4.jpg" alt="Picture by Kyle Cottrell" class="card__image" style="height: 500px;width: 100%;">
						<figcaption class="card__caption">
							<h2 class="card__title">NASA Has Found Hundreds Of Potential New Planets</h2>
							<p class="card__snippet">NASA released a list of 219 new “planet candidates” discovered by the Kepler space telescope, 10 of which are similar to Earth’s size and may be habitable by other life forms.</p>
							<a href="" class="card__button">Read more</a>
						</figcaption>
					</figure>
				</div>
				<div class="card">
					<figure class="card__thumb">
						<img src="../images/suhareka4.jpg" alt="Picture by Nathan Dumlao" class="card__image" style="height: 500px;width: 100%;">
						<figcaption class="card__caption">
							<h2 class="card__title">This Is Your Body And Brain On Coffee</h2>
							<p class="card__snippet">Drinking more caffeine during the coronavirus lockdown? Here's how it can affect you over time and advice on making it better for you.</p>
							<a href="" class="card__button">Read more</a>
						</figcaption>
					</figure>
				</div>
				<div class="card">
					<figure class="card__thumb">
						<img src="../images/suhareka4.jpg" alt="Picture by Daniel Lincoln" class="card__image" style="height: 500px;width: 100%;">
						<figcaption class="card__caption">
							<h2 class="card__title">Why You Should Bring Your Dog To Work</h2>
							<p class="card__snippet">On Friday, offices around the country celebrated the 15th annual Take Your Dog to Work Day. Though the event's primary goal is to raise awareness for pet adoption, the unanticipated impact may be a slightly more relaxing work environment for any office choosing to participate.</p>
							<a href="" class="card__button">Read more</a>
						</figcaption>
					</figure>
				</div>
			</div>
		</div>
	</section>
	<p>H</p>
</body>

</html>