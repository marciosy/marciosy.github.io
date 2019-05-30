<!doctype html>
<html lang="en">
	<head>
		<title>Marcio Resume</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
		<header>
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-3 order-md-last">
						<img src="img/me.jpg" class="img-fluid" alt="">
					</div>
					<div class="col-12 col-md-9 order-md-first">
						<h1>Marcio Yamashita</h1>
						<p>Front-end Developer</p>
						<ul >
							<li><strong>M - </strong> marcio.shiniti@gmail.com</li>	
							<li><strong>L - </strong> <a href="https://www.linkedin.com/in/marciosy/" target="_blank" rel="noopener noreferrer">https://www.linkedin.com/in/marciosy/</a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<section class="personal-viewpoint">
			<div class="container">
				<div class="row">
					<div class="col">
						<h2>Personal Viewpoint</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-md-4">
						<div class="left-border-item">
							<h3>A Short Intro</h3>
							<p>2019</p>
						</div>
					</div>
					<div class="col-12 col-md-8">
						<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum tempore laudantium ipsa nostrum, voluptatum ea, cupiditate debitis doloribus, modi aliquid eaque adipisci atque. Veritatis, voluptate doloribus cupiditate asperiores obcaecati fugiat! Lorem</p>
					</div>
				</div>
			</div>
		</section>

		<section class="">
			<div class="container">
				<div class="row">
					<div class="col">
						<h2>Personal Viewpoint</h2>
					</div>
				</div>
				<div class="row">
					<?php for ($i=0; $i < 9; $i++) : ?>
						<div class="col-12 col-md-4">
							<div class="left-border-item">
								<h3>Some data</h3>
								<p>Description</p>
							</div>
					</div>
					<?php endfor; ?>
				</div>
			</div>
		</section>

		<section class="hard-skills">
			<div class="container">
				<div class="row">
					<div class="col">
						<h2>Hard Skill</h2>
					</div>
				</div>
				<div class="row">
					<?php for ($i=0; $i < 6; $i++) : ?>
						<div class="col-12 col-md-4">
							<div class="">
								<h3>HTML</h3>
								<div class="progress">
									<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
					</div>
					<?php endfor; ?>
				</div>
			</div>
		</section>

		<section class="">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-4">
						<h2>Soft Skills</h2>
						<?php for ($i=0; $i < 4; $i++) : ?>
							<div class="left-border-item">
								<h3>Teamwork</h3>
								<div class="progress">
									<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						<?php endfor; ?>
					</div>
					<div class="col-12 col-md-8">
						<h2>Work Experiences</h2>
						<?php for ($i=0; $i < 3; $i++) : ?>
							<div class="left-border-item">
								<h3>Company</h3>
								<p class="job-title">Junior Art Director / 2014 - 2016</p>
								<p class="job-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse quam facilis neque alias nobis temporibus libero optio doloremque facere iste consectetur a debitis blanditiis illo dolore soluta minus, possimus excepturi.</p>								
							</div>
						<?php endfor; ?>
					</div>
				</div>
			</div>
		</section>

		<section class="">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-4">
						<h2>Languages</h2>
						<?php for ($i=0; $i < 2; $i++) : ?>
							<div class="left-border-item">
								<h3>Inglês</h3>
								<div class="progress">
									<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						<?php endfor; ?>
					</div>
					<div class="col-12 col-md-8">
						<h2>Hobbies</h2>
						<div class="hobbies">
							<ul>
								<li>Football</li>
								<li>Beer</li>
								<li>Ganes</li>
								<li>Music</li>
								<li>Movies</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>