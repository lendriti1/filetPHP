<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="test3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<style>
		.restaurants-thr {

			border: 6px solid black;
			width: 100%;
			height: auto
		}

		.restaurants-thr1 {

			border: 3px solid blue;
			width: 100%;
			height: 350px;
		}

		.res-thr {
			border: 3px solid red;
			width: 100%;
			height: auto;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.res-thr1 {
			border: 3px solid black;
			width: 60%;
			height: 90%;
		}

		.card-center1 {

			display: flex;
			width: 100%;
			height: 50px;
			justify-content: end;
		}

		/*  Kodi i card*/
		.card-r1-txt {
			border: 3px solid black;
			width: 100%;
			height: 50px;
			display: flex;
		}

		.card-icon {
			border: 3px solid red;
			width: 15%;
			height: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.card-icon img {
			width: 50%;
			height: 100%;
		}

		.card-desc {
			border: 3px solid blue;
			width: 85%;
			height: 100%;
			display: flex;
			justify-content: start;
			align-items: center;
		}

		.title {

			margin-bottom: 50px;
			text-transform: uppercase;
		}

		.d-block {
			width: 100%;
		}

		.card-block {
			font-size: 1em;
			position: relative;
			margin: 0;
			padding: 1em;
			border: none;
			border-top: 1px solid rgba(34, 36, 38, .1);
			box-shadow: none;

		}

		.card {
			font-size: 1em;
			overflow: hidden;
			padding: 5;
			border: none;
			border-radius: .28571429rem;
			box-shadow: 0 1px 3px 0 #d4d4d5, 0 0 0 1px #d4d4d5;
			margin-top: 20px;
		}

		.carousel-indicators li {
			border-radius: 12px;
			width: 12px;
			height: 12px;
			background-color: #404040;
		}

		.carousel-indicators li {
			border-radius: 12px;
			width: 12px;
			height: 12px;
			background-color: #404040;
		}

		.carousel-indicators .active {
			background-color: white;
			max-width: 12px;
			margin: 0 3px;
			height: 12px;
		}

		.carousel-control-prev-icon {
			background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E") !important;
		}

		.carousel-control-next-icon {
			background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E") !important;
		}


		.btn {
			margin-top: auto;
		}

		.col-md-5 {
			display: flex;
			align-items: center;
		}
	</style>
</head>

<body>
	<section class="restaurants-thr">
		<div class="restaurants-thr1">
			<div class="restaurants-thr2">
			</div>
		</div>
		<div class="res-thr">
			<div class="container py-3">
				<div class="card">
					<div class="row ">
						<div class="col-md-7 px-3">
							<div class="card-block px-6">
								<h4 class="card-title">RESTARURANT LAMI</h4>
								<div class="card-r1-txt">
									<div class="card-icon">
										<img src="../images/mail-icon.png" alt="">
									</div>
									<div class="card-desc">
										Rruga Skenderbeu, suhareke , kosove
									</div>
								</div>
								<div class="card-r1-txt">
									<div class="card-icon">
									</div>
									<div class="card-desc">
										Rruga aaaa 123
									</div>
								</div>
								<div class="card-r1-txt">
									<div class="card-icon">
									</div>
									<div class="card-desc">
										Rruga aaaa 123
									</div>
								</div>
								<div class="card-r1-txt">
									<div class="card-icon">
									</div>
									<div class="card-desc">
										Rruga aaaa 123
									</div>
								</div>
								<div class="card-center1">
									<a href="#" class="mt-auto btn btn-primary  ">
										Me shume
									</a>
								</div>
							</div>
						</div>

						<!-- Carousel start -->

						<div class="col-md-5">
							<div id="CarouselTest" class="carousel slide" data-ride="carousel">

								<div class="carousel-inner">
									<div class="carousel-item active">
										<img class="d-block" src="https://picsum.photos/450/300?image=1072" alt="">
									</div>
									<div class="carousel-item">
										<img class="d-block" src="https://picsum.photos/450/300?image=855" alt="">
									</div>
									<div class="carousel-item">
										<img class="d-block" src="https://picsum.photos/450/300?image=355" alt="">
									</div>
									<div class="carousel-item">
										<img class="d-block" src="https://picsum.photos/450/300?image=355" alt="">
									</div>
									<a class="carousel-control-prev" href="#CarouselTest" role="button" data-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="carousel-control-next" href="#CarouselTest" role="button" data-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>
							</div>
						</div>

						<!-- End of carousel -->
					</div>
				</div>

				<!-- End of card -->
			</div>
			<br>
			<br>
		</div>
	</section>
</body>

</html>